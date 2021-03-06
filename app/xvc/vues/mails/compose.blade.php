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
                    {{Lang::get('words.compose_mail')}}
                </a>
            </li>
        </ol>
    </div>
</div>

{{--Mail --Start--}}
<div class="mail-env">
<h2 class="farsi-content"> {{Lang::get('words.compose_mail')}} </h2>
        <hr/>
	<!-- compose new email button -->
	<div class="mail-sidebar-row visible-xs">
		<a href="mailbox-compose.html" class="btn btn-success btn-icon btn-block">
			{{Lang::get('words.compose_mail')}}
			<i class="entypo-pencil"></i>
		</a>
	</div>


	<!-- Mail Body -->
	<div class="mail-body">

    		<div class="mail-header">
    			<!-- title -->
    			<div class="mail-title">
    				{{Lang::get('words.compose_mail')}} <i class="entypo-pencil"></i>
    			</div>
    			<!-- links -->
    			<div class="mail-links">

    				<a class="btn btn-success btn-icon">
    					{{Lang::get('ui.buttons.send_mail')}}
    					<i class="entypo-mail"></i>
    				</a>

    			</div>
    		</div>

    		<div class="mail-compose">

    			<form method="post" role="form">
                    <label for="to">To :</label>
                    <div class="form-group">
                            <select name="test" class="select2" multiple>
                                <option value="3" >Soroosh</option>
                                <option value="2" >Kaveh</option>
                                <option value="5" >Peiman</option>
                                <option value="1" >Mostafa</option>
                                <option value="4" >khahareh tt khanom</option>
                                <option value="12" >Sina</option>
                                <option value="11" >Pejman</option>
                                <option value="13" >tt khanom</option>
                            </select>

                    </div>

                    {{--<div class="form-group">--}}

                        {{--<input type="text" value="" id="to" tabindex="1" class=" tagsinput" />--}}
                    {{--</div>--}}



    				<div class="form-group hidden">
    					<label for="cc">CC:</label>
    					<input type="text" class="form-control" id="cc" tabindex="2" />
    				</div>

    				<div class="form-group hidden">
    					<label for="bcc">BCC:</label>
    					<input type="text" class="form-control" id="bcc" tabindex="2" />
    				</div>

    				<div class="form-group">
    					<label for="subject">Subject:</label>
    					<input type="text" class="form-control" id="subject" tabindex="1" />
    				</div>


    				<div class="compose-message-editor">
    					<textarea class="form-control wysihtml5" data-stylesheet-url="assets/css/wysihtml5-color.css" name="sample_wysiwyg" id="sample_wysiwyg"></textarea>
    				</div>

    			</form>

    		</div>

    	</div>

	<!-- Sidebar -->
    @include('mails.partiels._mailSideBar')

</div>
{{--Mail --End--}}

@stop
