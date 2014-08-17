<div class="row">
    <div class="col-md-4">
        <p class="farsi">
            {{Lang::get('phrases.associateAddressDetailsToCustomerText',array('button' =>
            Lang::get('ui.buttons.addCustomerAddressDetails')))}}
        </p>

        <button class="btn btn-primary farsi btn-icon" data-bind="event: { click: addNewAddress}">
            <i class="entypo-list-add" style="font-size: 14px;"></i>
            {{Lang::get('ui.buttons.addCustomerAddressDetails')}}
        </button>
    </div>
    <div class="col-md-8">


        <div data-bind="foreach: addresses">

            <div class="panel panel-primary" data-bind="attr: {id : id}">
                <div class="panel-heading">
                    <div class="panel-title ltr" style="float: left"><span data-bind="text: label"></span></div>
                    <div class="panel-options" style="float: right">
                        <a href="#" data-bind="event : {click : $parent.removeAddress}" ><i class="entypo-cancel"></i></a>

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
                        {{Form::label(null, Lang::get('words.address'), array('class' => 'col-sm-3
                        control-label'))}}
                        <div class="col-sm-8">
                            {{Form::text(null, null, array('class' => ' required form-control ltr latin', 'data-bind' =>
                            'value:address, valueUpdate: "afterkeydown",
                            attr: { \'name\': \'address[\' + id +  \']\'}',
                            'data-msg-required' => Lang::get('phrases.validation.address_required'),
                            'placeholder'=>   Lang::get('words.address')))}}
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

