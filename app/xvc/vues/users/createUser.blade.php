@extends('disposition.principal')

@section('content')
<div class="row">
    <div class="col-md-12">
        <ol class="breadcrumb bc-2 farsi">
            <li>
                <a href="{{URL::route('index')}}">
                    <i class="entypo-home"></i>
                    {{Lang::get('ui.menu_items.home')}}
                </a>
            </li>
            <li class="active">

                <a href="{{URL::route('users.index')}}">
                    <i class="entypo-users"></i>
                    {{Lang::get('ui.menu_items.site_users')}}
                </a>
            </li>

            <li class="active">
                <a>
                    <i class="entypo-user-add"></i>
                    {{Lang::get('ui.menu_items.create_user')}}
                </a>
            </li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <h2 class="farsi-content"> {{Lang::get('ui.menu_items.create_user')}} </h2>


        <div class="panel panel-primary" data-collapsed="0">

            <div class="panel-heading">
                <div class="panel-title farsi">
                    {{Lang::get('phrases.enter_user_information')}}
                </div>
            </div>

            <div class="panel-body">


                {{Form::open(array('class' => 'form-horizontal form-groups-bordered' ,'id' => 'create-user-form'))}}
                    <div class="form-group farsi {{Form::groupIsInvalid('first_name')}}">
                        {{Form::label('first_name', Lang::get('words.first_name'), array('class' => 'col-sm-3
                        control-label'))}}
                        <div class="col-sm-5">
                            {{Form::text('first_name', null, array('class' => 'form-control','id' =>
                            'first_name','placeholder'=> Lang::get('words.first_name')))}}
                            <div class="help-block">
                                {{Form::error('first_name')}}
                                <ul>
                                    <li>{{Lang::get('phrases.help-block.user.first_name.1')}}</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="form-group farsi {{Form::groupIsInvalid('last_name')}}">
                        {{Form::label('last_name', Lang::get('words.last_name'), array('class' => 'col-sm-3 control-label'))}}
                        <div class="col-sm-5">
                            {{Form::text('last_name', null, array('class' => 'form-control','id' =>
                            'last_name','placeholder'=> Lang::get('words.last_name')))}}
                            <div class="help-block">
                                {{Form::error('last_name')}}
                                <ul>
                                    <li>{{Lang::get('phrases.help-block.user.last_name.1')}}</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="form-group farsi {{Form::groupIsInvalid('username')}}">
                        {{Form::label('username', Lang::get('words.username'), array('class' => 'col-sm-3 control-label'))}}
                        <div class="col-sm-5">
                            {{Form::text('username', null, array('class' => 'form-control ltr','id' =>
                            'username','placeholder'=> Lang::get('words.username')))}}
                            <div class="help-block">
                                {{Form::error('username')}}
                                <ul>
                                    <li>{{Lang::get('phrases.help-block.user.username.1')}}</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="form-group farsi {{Form::groupIsInvalid('password')}}">
                        {{Form::label('password', Lang::get('words.password'), array('class' => 'col-sm-3 control-label'))}}
                        <div class="col-sm-5">
                            {{Form::password('password', array('class' => 'form-control ltr','id' =>
                            'password','placeholder'=>Lang::get('words.password')))}}
                            <div class="help-block">
                                {{Form::error('password')}}
                                <ul>
                                    <li>{{Lang::get('phrases.help-block.user.password.1')}}</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="form-group farsi">
                        {{Form::label('password_confirmation', Lang::get('words.confirm_password'), array('class' => 'col-sm-3
                        control-label'))}}
                        <div class="col-sm-5">
                            {{Form::password('password_confirmation', array('class' => 'form-control ltr','id' =>
                            'password','placeholder'=>Lang::get('words.confirm_password')))}}
                        </div>
                    </div>

                    <div class="form-group farsi {{Form::groupIsInvalid('email_address')}}">
                        {{Form::label('email_address',Lang::get('words.email_address'), array('class' => 'col-sm-3 control-label'))}}
                        <div class="col-sm-5">
                            {{Form::text('email_address', null, array('class' => 'form-control ltr','id' =>
                            'email_address','placeholder'=>Lang::get('words.email_address')))}}
                            <div class="help-block">
                                {{Form::error('email_address')}}
                            </div>
                        </div>
                    </div>

                    <div class="form-group farsi {{Form::groupIsInvalid('phone_number')}}">
                        {{Form::label('phone_number', Lang::get('words.phone_number'), array('class' => 'col-sm-3 control-label'))}}
                        <div class="col-sm-5">
                            {{Form::text('phone_number', null, array('class' => 'form-control ltr','id' =>
                            'phone_number','placeholder'=>Lang::get('words.phone_number')))}}
                            <div class="help-block">
                                {{Form::error('phone_number')}}
                                <ul>
                                    <li>{{Lang::get('phrases.help-block.user.phone_number.1')}}</li>
                                    <li>{{Lang::get('phrases.help-block.user.phone_number.2')}}</li>
                                    <li>{{Lang::get('phrases.help-block.user.phone_number.3')}}</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="form-group {{Form::groupIsInvalid('country_of_residence')}}">
                        {{Form::label('country_of_residence', Lang::get('words.country_of_residence'), array('class' => 'col-sm-3 control-label
                        farsi'))}}
                        <div class="col-sm-5">
                            {{Form::select('country_of_residence',
                            DB::table('countries')->lists('country_name','id'),'158', array('class' => 'form-control
                            ltr','id' =>
                            'country','placeholder'=>Lang::get('words.country_of_residence')))}}
                            <div class="help-block">
                                {{Form::error('country_of_residence')}}
                            </div>
                        </div>
                    </div>


                    <div class="form-group">
                        {{Form::label('is_active', Lang::get('words.account_state'), array('class' => 'col-sm-3 control-label farsi'))}}
                        <div class="col-sm-5 farsi">
                            <div id="label-switch" class="make-switch" data-on-label="فعال" data-off-label="غیر فعال">
                                {{Form::checkbox('is_active','is_active',true)}}
                            </div>
                        </div>
                    </div>


                    <div class="form-group">
                        {{Form::label('timezone',  Lang::get('words.timezone'), array('class' => 'col-sm-3 control-label farsi'))}}
                        <div class="col-sm-5">
                            {{Form::select('timezone', DB::table('timezones')->lists('name','name'),
                            'Asia/Kuala_Lumpur', array('class' => 'form-control ltr','id' =>
                            'timezone','placeholder'=> Lang::get('words.timezone')))}}
                            <div class="help-block">
                                {{Form::error('timezone')}}
                            </div>
                        </div>

                    </div>


                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-5">
                                {{Form::submit(Lang::get('ui.buttons.create_user'),array('class' => 'btn btn-default farsi'))}}
                        </div>
                    </div>
                {{Form::close()}}

            </div>

        </div>
    </div>
</div>
@stop

@section('pageScripts')
<script src="/assets/js/bootstrap-switch.min.js"></script>
@stop