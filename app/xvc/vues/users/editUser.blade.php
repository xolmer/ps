@extends('disposition.principal')

@section('content')
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
                    {{Lang::get('ui.menu_items.edit_user')}}
                </a>
            </li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <h2 class="farsi-content"> {{Lang::get('ui.menu_items.edit_user')}} </h2>


        <div class="panel panel-primary" data-collapsed="0">

            <div class="panel-heading">
                <div class="panel-title farsi">
                    {{Lang::get('phrases.change_user_data_to_update')}}
                </div>
            </div>

            <div class="panel-body">

                {{Form::model($user, array('route' => array('user.update', $user->id) , 'class' => "form-horizontal form-groups-bordered")) }}

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
                        {{Form::label('last_name', Lang::get('words.last_name'), array('class' => 'col-sm-3
                        control-label'))}}
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
                        {{Form::label('username', Lang::get('words.username'), array('class' => 'col-sm-3
                        control-label'))}}
                        <div class="col-sm-5">
                            {{Form::text('username', null, array('class' => 'form-control ltr','id' =>
                            'username','placeholder'=> Lang::get('words.username') , 'disabled' ))}}
                            <div class="help-block">
                                {{Form::error('username')}}
                                <ul>
                                    <li>{{Lang::get('phrases.help-block.user.username.1')}}</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="form-group farsi {{Form::groupIsInvalid('password')}}">
                        {{Form::label('password', Lang::get('words.new_password'), array('class' => 'col-sm-3
                        control-label'))}}
                        <div class="col-sm-5">
                            {{Form::password('password', array('class' => 'form-control ltr','id' =>
                            'password','placeholder'=>Lang::get('words.new_password')))}}
                            <div class="help-block">
                                {{Form::error('password')}}
                                <ul>
                                    <li>{{Lang::get('phrases.help-block.user.new_password.1')}}</li>
                                    <li>{{Lang::get('phrases.help-block.user.password.1')}}</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="form-group farsi">
                        {{Form::label('password_confirmation', Lang::get('words.confirm_password'), array('class' =>
                        'col-sm-3
                        control-label'))}}
                        <div class="col-sm-5">
                            {{Form::password('password_confirmation', array('class' => 'form-control ltr','id' =>
                            'password','placeholder'=>Lang::get('words.confirm_password')))}}
                            <div class="help-block">
                                <ul>
                                    <li>{{Lang::get('phrases.help-block.user.new_password.1')}}</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="form-group farsi {{Form::groupIsInvalid('email_address')}}">
                        {{Form::label('email_address',Lang::get('words.email_address'), array('class' => 'col-sm-3
                        control-label'))}}
                        <div class="col-sm-5">
                            {{Form::text('email_address', null, array('class' => 'form-control ltr','id' =>
                            'email_address','placeholder'=>Lang::get('words.email_address')))}}
                            <div class="help-block">
                                {{Form::error('email_address')}}
                            </div>
                        </div>
                    </div>

                    <div class="form-group farsi {{Form::groupIsInvalid('mobile_number')}}">
                        {{Form::label('mobile_number', Lang::get('words.mobile_number'), array('class' => 'col-sm-3
                        control-label'))}}
                        <div class="col-sm-5">
                            {{Form::text('mobile_number', null, array('class' => 'form-control ltr','id' =>
                            'mobile_number','placeholder'=>Lang::get('words.mobile_number')))}}
                            <div class="help-block">
                                {{Form::error('mobile_number')}}
                                <ul>
                                    <li>{{Lang::get('phrases.help-block.user.mobile_number.1')}}</li>
                                    <li>{{Lang::get('phrases.help-block.user.mobile_number.2')}}</li>
                                    <li>{{Lang::get('phrases.help-block.user.mobile_number.3')}}</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="form-group {{Form::groupIsInvalid('country_of_residence')}}">
                        {{Form::label('country_of_residence', Lang::get('words.country_of_residence'), array('class' =>
                        'col-sm-3 control-label
                        farsi'))}}
                        <div class="col-sm-5">
                            {{Form::select('country_of_residence',
                            DB::table('countries')->lists('country_name','id'),null, array('class' => 'form-control
                            ltr','id' =>
                            'country','placeholder'=>Lang::get('words.country_of_residence')))}}
                            <div class="help-block">
                                {{Form::error('country_of_residence')}}
                            </div>
                        </div>
                    </div>


                    <div class="form-group">
                        {{Form::label('is_active', Lang::get('words.account_state'), array('class' => 'col-sm-3
                        control-label farsi'))}}
                        <div class="col-sm-5 farsi">
                            <div id="label-switch" class="make-switch" data-on-label="فعال" data-off-label="غیر فعال">
                                {{Form::checkbox('is_active','is_active',true)}}
                            </div>
                        </div>
                    </div>


                    <div class="form-group">
                        {{Form::label('timezone', Lang::get('words.timezone'), array('class' => 'col-sm-3 control-label
                        farsi'))}}
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
                            <button type="submit" class="btn btn-default farsi">
                                {{Lang::get('ui.buttons.update_user')}}
                            </button>
                        </div>
                    </div>
                </form>

            </div>

        </div>
    </div>
</div>
@stop

@section('pageScripts')
<script src="/assets/js/bootstrap-switch.min.js"></script>
@stop
@stop