<div class="row">
    <div class="col-md-4">
        <p class="farsi">
            {{Lang::get('phrases.associateBankAccountsToCustomerText',array('button' =>
            Lang::get('ui.buttons.addCustomerAccount')))}}
        </p>

        <button class="btn btn-primary farsi btn-icon" data-bind="event: { click: addNewAccount}">
            <i class="entypo-list-add" style="font-size: 14px;"></i>
            {{Lang::get('ui.buttons.addCustomerAccount')}}
        </button>
    </div>
    <div class="col-md-8">


        <div data-bind="foreach: accounts">

            <div class="panel panel-primary" data-bind="attr: {id : id}">
                <div class="panel-heading">
                    <div class="panel-title ltr" style="float: left"><span data-bind="text: label"></span></div>
                    <div class="panel-options" style="float: right">
                        <a href="#" data-bind="event : {click : $parent.removeAccount}" ><i class="entypo-cancel"></i></a>

                    </div>
                </div>
                <div class="panel-body">

                    <div class="form-group form-groups-compact {{Form::groupIsInvalid('country_of_residence')}}">
                        {{Form::label('country', Lang::get('words.country'), array('class' =>
                        'col-sm-3
                        control-label
                        farsi'))}}
                        <div class="col-sm-8">
                            {{Form::select('country',
                            DB::table('countries')->lists('country_name','id'),'158', array('class' => 'form-control
                            ltr latin','id' => 'country',
                            'data-bind' => "value:country_id",
                            'placeholder'=>Lang::get('words.country')))}}
                            <div class="help-block">
                                {{Form::error('country')}}
                            </div>
                        </div>
                    </div>

                    <div class="form-group form-groups-compact farsi {{Form::groupIsInvalid('bank_name')}} ">
                        {{Form::label(null, Lang::get('words.bank_name'), array('class' => 'col-sm-3
                        control-label'))}}
                        <div class="col-sm-8">
                            {{Form::text(null, null, array('class' => 'bank_name required form-control ltr latin', 'data-bind' =>
                            'value:bank_name, valueUpdate: "afterkeydown",
                            attr: { \'name\': \'bank_name[\' + id +  \']\'}',
                            'data-msg-required' => Lang::get('phrases.validation.bank_name_required'),
                            'placeholder'=>   Lang::get('words.bank_name')))}}
                            <div class="help-block">
                            </div>
                        </div>
                    </div>


                    <div
                        class="form-group form-groups-compact farsi {{Form::groupIsInvalid('account_holder_name')}} ">
                        {{Form::label('account_holder_name', Lang::get('words.account_holder_name'), array('class'
                        =>
                        'col-sm-3
                        control-label'))}}
                        <div class="col-sm-8">
                            {{Form::text('account_holder_name', null, array('class' => 'form-control ltr required farsi',
                            'id'  =>'account_holder_name',
                            'data-msg-required' => Lang::get('phrases.validation.account_holder_name_required'),
                            'data-bind' => "value:account_holder_name,  attr: { \'name\': \'account_holder_name[\' + id +  \']\'}'" ,
                            'placeholder'=>  Lang::get('words.account_holder_name')))}}
                            <div class="help-block">
                            </div>
                        </div>
                    </div>

                    <div class="form-group form-groups-compact farsi {{Form::groupIsInvalid('account_number')}} ">
                        {{Form::label('account_number', Lang::get('words.account_number'), array('class' =>
                        'col-sm-3
                        control-label'))}}
                        <div class="col-sm-8">
                            {{Form::text('account_number', null, array('class' => 'form-control required ltr latin',
                            'id' =>  'account_number',
                            'data-msg-required' => Lang::get('phrases.validation.account_number_required'),
                            'data-bind' => "value:account_number,attr: { \'name\': \'account_number[\' + id +  \']\'}'" ,
                            'placeholder'=> Lang::get('words.account_number')))}}
                            <div class="help-block">
                            </div>
                        </div>
                    </div>

                    <div class="form-group form-groups-compact farsi {{Form::groupIsInvalid('remarks')}} ">
                        {{Form::label('remarks', Lang::get('words.remarks'), array('class' => 'col-sm-3
                        control-label'))}}
                        <div class="col-sm-8">
                            {{Form::textarea('remarks', null, array('class' => 'form-control  farsi','id' =>
                            'remarks', 'data-bind' => "value:remarks" ,'rows' => 3,
                            'placeholder'=> Lang::get('words.remarks')))}}
                            <div class="help-block">
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
<br/>

