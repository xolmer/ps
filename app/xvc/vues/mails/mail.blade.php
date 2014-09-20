@extends('disposition.principal')
@section('content')
<div class="row">
    <div class="col-md-12">
        <ol class="breadcrumb bc-2 farsi">
            <li>
                <a href="{{Lang::get('words.inbox')}}">
                    <i class="entypo-home"></i>
                    {{Lang::get('ui.menu_items.home')}}
                </a>
            </li>

        </ol>
    </div>
</div>

{{--Mail --Start--}}
<div class="mail-env">
 @include('partiels._flash')

	<!-- compose new email button -->
	<div class="mail-sidebar-row visible-xs">
		<a href="mailbox-compose.html" class="btn btn-success btn-icon btn-block">
			Compose Mail
			<i class="entypo-pencil"></i>
		</a>
	</div>


	<!-- Mail Body -->
<div class="mail-body">

		<div class="mail-header">
			<!-- title -->
			<div class="mail-title">
				{{Lang::get('ui.menu_items.subject')}}:
				{{$mail->subject}}
			</div>

			<!-- links -->
			<div class="mail-links">

				<a href="#" class="btn btn-default">
					<i class="entypo-print"></i>
				</a>

				<a href="#" class="btn btn-default">
					<i class="entypo-trash"></i>
				</a>

				<a class="btn btn-primary btn-icon farsi">
					{{Lang::get('ui.buttons.reply')}}
					<i class="entypo-reply"></i>
				</a>

			</div>
		</div>

		<div class="mail-info">

			<div class="mail-sender dropdown">

				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
				    <span class="farsi">{{Lang::get('words.from')}} :</span>
					@if($sender->has_avatar)<img src="assets/images/thumb-1.png" class="img-circle" width="30">@endif
					<b>{{$sender->first_name.' '.$sender->last_name}}</b>
				</a>

				<ul class="dropdown-menu dropdown-red">
					<li>
						<a href="#">
							<i class="entypo-menu"></i>
							Show other messages
						</a>
					</li>
					<li class="divider"></li>
					<li>
						<a href="#">
							<i class="entypo-star"></i>
							Star this message
						</a>
					</li>
					<li>
						<a href="#">
							<i class="entypo-reply"></i>
							Reply
						</a>
					</li>
					<li>
						<a href="#">
							<i class="entypo-right"></i>
							Forward
						</a>
					</li>
				</ul>

			</div>

			<div class="mail-date">
				{{ date('D M Y  H:i a',strtotime($mail->created_at)) }}
			</div>

		</div>

		<div class="mail-text">
              <p>{{$mail->body}}</p>
		</div>

		<div class="mail-attachments">

			<h4>
				<i class="entypo-attach"></i> {{Lang::get('words.attachments')}} <span>{{$attachments->count()}}</span>
			</h4>

			<ul>
            {{View::make('mails.partiels._mailAttachments')->with('attachments',$attachments)}}
			</ul>

		</div>



	</div>

	<!-- Sidebar -->
@include('mails.partiels._mailSideBar')

</div>
{{--Mail --End--}}
@stop
