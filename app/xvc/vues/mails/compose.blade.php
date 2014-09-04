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
    		<div class="mail-header">
    			<!-- title -->
    			<div class="mail-title farsi-content">
    				{{Lang::get('words.compose_mail')}} <i class="entypo-pencil"></i>
    			</div>
    			{{Form::open(['route'=>'mail.compose'])}}
    			<!-- links -->
    			<div class="mail-links">
    				<button type="submit" class="btn btn-success btn-icon">
    					{{Lang::get('ui.buttons.send_mail')}}
    					<i class="entypo-mail"></i>
    				</button>
    			</div>
    		</div>

    		<div class="mail-compose">

                    <label for="to">To :</label>
                    <div class="form-group">
                            <select name="recipients[]" class="select2" multiple>
                                <option value="Soroosh" >Soroosh</option>
                                <option value="Kaveh" >Kaveh</option>
                                <option value="Peiman" >Peiman</option>
                                <option value="Mostafa" >Mostafa</option>
                                <option value="khahareh tt khanom" >khahareh tt khanom</option>
                                <option value="Sina" >Sina</option>
                                <option value="Pejman" >Pejman</option>
                                <option value="tt khanom" >tt khanom</option>
                            </select>

                    </div>

                    {{--<div class="form-group">--}}

                        {{--<input type="text" value="" id="to" tabindex="1" class=" tagsinput" />--}}
                    {{--</div>--}}

    				<div class="form-group">
    					<label for="subject">Subject:</label>
    					<input type="text" name="subject" class="form-control" id="subject" tabindex="1" />
    				</div>

    				<div class="compose-message-editor">
    					<textarea class="form-control wysihtml5 "  name="body" id="body"></textarea>
    				</div>
    			{{Form::close()}}

    		</div>

    	</div>

	<!-- Sidebar -->
    @include('mails.partiels._mailSideBar')

</div>
{{--Mail --End--}}

@stop
