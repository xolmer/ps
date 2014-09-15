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

               {{Form::select('recipients[]',User::where('id','<>',Auth::user()->id)->get()->lists('full_name','id'),null,['class' => 'select2 ltr farsi','multiple'])}}
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

            <div class="mail-attachment-box">
            <div class="row">
               <div class="col-sm-5">
                   <input  type="file" id="fileupload" name="files[]" multiple class="form-control $classes file2 inline btn btn-primary farsi"
                   data-label="<i class='glyphicon glyphicon-file'></i> {{Lang::get('words.attach-file')}}"  />
                </div>
                <div class="col-md-7">
                <div id="files"></div>
                </div>
            </div>
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
<script src="/assets/js/libs/jquery.fileupload.js"></script>
<script src="/assets/js/libs/jquery.iframe-transport.js"></script>
<script type="text/javascript">
    composeMailMessage();

    $(function () {
        'use strict';
        // Change this to the location of your server-side upload handler:
        var url = '/mails/uploadattachment';
        $('#fileupload').fileupload({
            url: url,
            dataType: 'json',
            done: function (e, data) {
                $.each(data.result.files, function (index, file) {
                    $('<div/>').text(file.name).appendTo('#files').addClass('alert alert-success');
                });
            },
            progressall: function (e, data) {
                var progress = parseInt(data.loaded / data.total * 100, 10);
                $('#progress .progress-bar').css(
                    'width',
                    progress + '%'
                );
            }
        }).prop('disabled', !$.support.fileInput)
            .parent().addClass($.support.fileInput ? undefined : 'disabled');
    });

</script>
@stop