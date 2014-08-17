<div class="row">
    <div class="col-md-4">
        <p class="farsi">
            {{Lang::get('phrases.associateContactDetailsToCustomerText',array('button' =>
            Lang::get('ui.buttons.addCustomerContactDetails')))}}
            <div class="help-block farsi">
                <ul>
                    <li>{{Lang::get('phrases.help-block.user.phone_number.1')}}</li>
                    <li>{{Lang::get('phrases.help-block.user.phone_number.2')}}</li>
                    <li>{{Lang::get('phrases.help-block.user.phone_number.3')}}</li>
                </ul>
            </div>
        </p>

        <button class="btn btn-primary farsi btn-icon" data-bind="event: { click: addNewContact}">
            <i class="entypo-list-add" style="font-size: 14px;"></i>
            {{Lang::get('ui.buttons.addCustomerContactDetails')}}
        </button>
    </div>
    <div class="col-md-8">


        <div data-bind="foreach: contacts">

            <div class="panel panel-primary" data-bind="attr: {id : id}">
                <div class="panel-heading">
                    <div class="panel-title ltr" style="float: left"><span data-bind="text: label"></span></div>
                    <div class="panel-options" style="float: right">
                        <a href="#" data-bind="event : {click : $parent.removeContact}" ><i class="entypo-cancel"></i></a>

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
                        {{Form::label(null, Lang::get('words.mobile_number'), array('class' => 'col-sm-3
                        control-label'))}}
                        <div class="col-sm-8">
                            {{Form::text(null, null, array('class' => ' required form-control ltr latin', 'data-bind' =>
                            'value:mobile_number, valueUpdate: "afterkeydown",
                            attr: { \'name\': \'mobile_number[\' + id +  \']\'}',
                            'data-msg-required' => Lang::get('phrases.validation.mobile_number_required'),
                            'placeholder'=>   Lang::get('words.mobile_number')))}}
                            <div class="help-block">
                            </div>
                        </div>
                    </div>


                    <div
                        class="form-group form-groups-compact farsi {{Form::groupIsInvalid('account_holder_name')}} ">
                        {{Form::label('phone_number', Lang::get('words.phone_number'), array('class'
                        =>
                        'col-sm-3
                        control-label'))}}
                        <div class="col-sm-8">
                            {{Form::text('phone_number', null, array('class' => 'form-control ltr  farsi',
                            'id'  =>'phone_number',
                            'data-bind' => "value:phone_number,  attr: { \'name\': \'phone_number[\' + id +  \']\'}'" ,
                            'placeholder'=>  Lang::get('words.phone_number')))}}
                            <div class="help-block">
                            </div>
                        </div>
                    </div>

                    <div class="form-group form-groups-compact farsi {{Form::groupIsInvalid('account_number')}} ">
                        {{Form::label('fax_number', Lang::get('words.fax_number'), array('class' =>
                        'col-sm-3
                        control-label'))}}
                        <div class="col-sm-8">
                            {{Form::text('fax_number', null, array('class' => 'form-control  ltr latin',
                            'id' =>  'fax_number',
                            'data-bind' => "value:fax_number,attr: { \'name\': \'fax_number[\' + id +  \']\'}'" ,
                            'placeholder'=> Lang::get('words.fax_number')))}}
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

