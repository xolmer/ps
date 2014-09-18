	<div class="mail-sidebar farsi" style="height: 1359px;">

		@if(!Route::is('mail.compose'))
		<!-- compose new email button -->
		<div class="mail-sidebar-row hidden-xs">
			<a href="{{URL::route('mail.compose')}}" class=" btn btn-success btn-icon btn-block farsi">
				{{Lang::get('ui.buttons.compose_mail')}}
				<i class="entypo-pencil"></i>
			</a>
		</div>
		@endif

		<!-- menu -->
		<ul class="mail-menu">
			<li class="{{Route::is('mail.inbox') ? 'active' : ''}}">
				<a href="{{URL::route('mail.inbox')}}">
					<span class="badge badge-danger pull-right">
					 {{UserMail::where('receiver_id',Auth::user()->id)->where('is_read',false)->get()->count()}}
					</span>
					{{Lang::get('words.inbox')}}
				</a>
			</li>

			<li class="{{Route::is('mail.sentbox') ? 'active' : ''}}">
				<a href="{{URL::route('mail.sentbox')}}">
					    <span class="badge badge-gray pull-right">
					        {{MailMessage::where('sender_id',Auth::user()->id)->get()->count()}}
					    </span>
					{{Lang::get('words.sentbox')}}
				</a>
			</li>

			<li class="{{Route::is('mail.trash') ? 'active' : ''}}">
				<a href="{{URL::route('mail.trash')}}">
					{{Lang::get('words.trash')}}
				</a>
			</li>
		</ul>

		<div class="mail-distancer"></div>

	</div>