<div class="row">
    <div class="col-md-4">
        <p class="farsi">
            {{Lang::get('phrases.associateSenderCustomerText',array('button' =>
            Lang::get('ui.buttons.addCustomerSender')))}}
        </p>

        <button class="btn btn-primary farsi btn-icon" data-bind="event: { click: addNewSender}">
            <i class="entypo-list-add" style="font-size: 14px;"></i>
            {{Lang::get('ui.buttons.addCustomerSender')}}
        </button>
    </div>
    <div class="col-md-8">


        <div data-bind="foreach: senders">

            <div class="panel panel-primary" data-bind="attr: {id : id}">
                <div class="panel-heading">
                    <div class="panel-title ltr" style="float: left"><span data-bind="text: label"></span></div>
                    <div class="panel-options" style="float: right">
                        <a href="#" data-bind="event : {click : $parent.removeSender}" ><i class="entypo-cancel"></i></a>

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


                    {{--First Name--}}
                    <div class="form-group form-groups-compact farsi ">
                        {{Form::label(null, Lang::get('words.first_name'), array('class' => 'col-sm-3
                        control-label'))}}
                        <div class="col-sm-8">
                            {{Form::text(null, null, array('class' => 'first_name required form-control ltr latin', 'data-bind' =>
                            'value:first_name, valueUpdate: "afterkeydown",
                            attr: { \'name\': \'first_name[\' + id +  \']\'}',
                            'data-msg-required' => Lang::get('phrases.validation.first_name_required'),
                            'placeholder'=>   Lang::get('words.first_name')))}}
                            <div class="help-block">
                            </div>
                        </div>
                    </div>

                    {{--Last Name--}}
                    <div class="form-group form-groups-compact farsi ">
                        {{Form::label(null, Lang::get('words.last_name'), array('class' => 'col-sm-3
                        control-label'))}}
                        <div class="col-sm-8">
                            {{Form::text(null, null, array('class' => 'last_name required form-control ltr latin', 'data-bind' =>
                            'value:last_name, valueUpdate: "afterkeydown",
                            attr: { \'name\': \'last_name[\' + id +  \']\'}',
                            'data-msg-required' => Lang::get('phrases.validation.last_name_required'),
                            'placeholder'=>   Lang::get('words.last_name')))}}
                            <div class="help-block">
                            </div>
                        </div>
                    </div>

                    {{--Fathers Name--}}
                    <div class="form-group form-groups-compact farsi ">
                        {{Form::label(null, Lang::get('words.fathers_name'), array('class' => 'col-sm-3
                        control-label'))}}
                        <div class="col-sm-8">
                            {{Form::text(null, null, array('class' => 'fathers_name required form-control ltr latin', 'data-bind' =>
                            'value:fathers_name, valueUpdate: "afterkeydown",
                            attr: { \'name\': \'fathers_name[\' + id +  \']\'}',
                            'data-msg-required' => Lang::get('phrases.validation.fathers_name_required'),
                            'placeholder'=>   Lang::get('words.fathers_name')))}}
                            <div class="help-block">
                            </div>
                        </div>
                    </div>

                    {{--National id--}}
                    <div class="form-group form-groups-compact farsi ">
                        {{Form::label(null, Lang::get('words.national_id'), array('class' => 'col-sm-3
                        control-label'))}}
                        <div class="col-sm-8">
                            {{Form::text(null, null, array('class' => 'national_id required form-control ltr latin', 'data-bind' =>
                            'value:national_id, valueUpdate: "afterkeydown",
                            attr: { \'name\': \'national_id[\' + id +  \']\'}',
                            'data-msg-required' => Lang::get('phrases.validation.national_id_required'),
                            'placeholder'=>   Lang::get('words.national_id')))}}
                            <div class="help-block">
                            </div>
                        </div>
                    </div>


                    {{--passport number--}}
                    <div class="form-group form-groups-compact farsi ">
                        {{Form::label(null, Lang::get('words.passport_number'), array('class' => 'col-sm-3
                        control-label'))}}
                        <div class="col-sm-8">
                            {{Form::text(null, null, array('class' => 'passport_number  form-control ltr latin', 'data-bind' =>
                            'value:passport_number, valueUpdate: "afterkeydown",
                            attr: { \'name\': \'national_id[\' + id +  \']\'}',
                            'placeholder'=>   Lang::get('words.passport_number')))}}
                            <div class="help-block">
                            </div>
                        </div>
                    </div>


                    {{--phone number--}}
                    <div class="form-group form-groups-compact farsi ">
                        {{Form::label(null, Lang::get('words.phone_number'), array('class' => 'col-sm-3
                        control-label'))}}
                        <div class="col-sm-8">
                            {{Form::text(null, null, array('class' => 'phone_number required form-control ltr latin', 'data-bind' =>
                            'value:phone_number, valueUpdate: "afterkeydown",
                            attr: { \'name\': \'phone_number[\' + id +  \']\'}',
                            'data-msg-required' => Lang::get('phrases.validation.phone_number_required'),
                            'placeholder'=>   Lang::get('words.phone_number')))}}
                            <div class="help-block">
                            </div>
                        </div>
                    </div>



                    {{--mobile number--}}
                    <div class="form-group form-groups-compact farsi ">
                        {{Form::label(null, Lang::get('words.mobile_number'), array('class' => 'col-sm-3
                        control-label'))}}
                        <div class="col-sm-8">
                            {{Form::text(null, null, array('class' => 'mobile_number required form-control ltr latin', 'data-bind' =>
                            'value:mobile_number, valueUpdate: "afterkeydown",
                            attr: { \'name\': \'mobile_number[\' + id +  \']\'}',
                            'data-msg-required' => Lang::get('phrases.validation.mobile_number_required'),
                            'placeholder'=>   Lang::get('words.mobile_number')))}}
                            <div class="help-block">
                            </div>
                        </div>
                    </div>


                    {{--Email address--}}
                    <div class="form-group form-groups-compact farsi ">
                        {{Form::label(null, Lang::get('words.email_address'), array('class' => 'col-sm-3
                        control-label'))}}
                        <div class="col-sm-8">
                            {{Form::text(null, null, array('class' => 'email_address required form-control ltr latin', 'data-bind' =>
                            'value:email_address, valueUpdate: "afterkeydown",
                            attr: { \'name\': \'email_address[\' + id +  \']\'}',
                            'data-msg-required' => Lang::get('phrases.validation.email_address_required'),
                            'placeholder'=>   Lang::get('words.email_address')))}}
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

