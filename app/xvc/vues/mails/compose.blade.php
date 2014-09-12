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
                <a>
                    <i class="entypo-mail"></i>
                    {{Lang::get('ui.menu_items.compose_mail')}}
                </a>
            </li>
        </ol>
    </div>
</div>

{{--Mail --Start--}}
<div class="mail-env">
    <h2 class="farsi-content farsi-content"> {{Lang::get('words.compose_mail')}} </h2>
    <hr/>
    <!-- compose new email button -->
    <div class="mail-sidebar-row visible-xs ">
        <a href="{{URL::route('mail.compose')}}" class="btn btn-success btn-icon btn-block farsi-content">
            {{Lang::get('words.compose_mail')}}
            <i class="entypo-pencil"></i>
        </a>
    </div>


    <!-- Mail Body -->
    <div class="mail-body">
        {{Form::open(['route'=>'mail.compose','id' => 'compose_mail_form'])}}
        {{Form::hidden('uniqid',uniqid(),['id'=>'uniqid'])}}
        {{Form::hidden('priority',1,['id'=>'priority'])}}

        <div class="mail-header">
            <!-- title -->
            <div class="mail-title farsi-content">
                {{Lang::get('words.compose_mail')}} <i class="entypo-pencil"></i>
            </div>


            <!-- links -->

            <div class="mail-links">

                <button type="submit" class="btn btn-success btn-icon btn-block send-mail-button farsi">
                    {{Lang::get('ui.buttons.send_mail')}}
                    <i class="entypo-mail"></i>
                </button>

            </div>
        </div>

        <div class="mail-compose">

            <label class="farsi" for="to">{{Lang::get('words.to')}} :</label>

            <div class="form-group farsi">
                <select name="recipients[]" class="select2 ltr farsi" multiple>
                    <option value="1">سروش کشتکاران</option>
                    <option value="2">محمدرضا سلطانی</option>
                    <option value="3">رضا کاویانی</option>
                    <option value="4">مصطفی بهمنی</option>
                    <option value="5">محسن رضایی</option>
                    <option value="6">سلیم سبکپا</option>
                    <option value="7">نیما شمس</option>
                    <option value="8">کاوه یغمایی</option>

                </select>

            </div>


            <div class="form-group">

                <div class="row">
                    <div class="col-md-9">
                        <label class="farsi" for="subject">{{Lang::get('words.subject')}}:</label>

                        <input type="text" name="subject" class="form-control" id="subject" tabindex="1"/>
                    </div>
                    <div class="col-md-3">
                        <label class="farsi" for="subject">{{Lang::get('words.priority')}}:</label>
                        <br/>

                        <div class="btn-group farsi button-group-radio" data-toggle="buttons">
                            <button type="button" class="btn btn-default btn-sm" data-priority="3">
                                {{Lang::get('words.priorities.3')}}
                            </button>
                            <button type="button" class="btn btn-default btn-sm" data-priority="2">
                                {{Lang::get('words.priorities.2')}}
                            </button>
                            <button type="button" class="btn btn-default btn-sm active" data-priority="1">
                                {{Lang::get('words.priorities.1')}}
                            </button>
                        </div>
                    </div>
                </div>
            </div>


            <div class="compose-message-editor">
                <textarea class="form-control wysihtml5 " name="body" id="body"></textarea>
            </div>



        </div>
        {{Form::close()}}
    </div>

    <!-- Sidebar -->
    @include('mails.partiels._mailSideBar')

</div>
{{--Mail --End--}}

@stop

@section('pageScripts')
<script type="text/javascript">
    composeMailMessage();
</script>
@stop