	<div class="mail-sidebar farsi" style="height: 1359px;">

		<!-- compose new email button -->
		<div class="mail-sidebar-row hidden-xs">
			<a href="{{URL::route('mail.compose')}}" class=" btn btn-success btn-icon btn-block farsi">
				{{Lang::get('ui.buttons.compose_mail')}}
				<i class="entypo-pencil"></i>
			</a>
		</div>

		<!-- menu -->
		<ul class="mail-menu">
			<li >
				<a href="{{URL::route('mail.inbox')}}">
					<span class="badge badge-danger pull-right">6</span>
					{{Lang::get('words.inbox')}}
				</a>
			</li>

			<li>
				<a href="{{URL::route('mail.sentbox')}}">
					<span class="badge badge-gray pull-right">1</span>
					{{Lang::get('words.sentbox')}}
				</a>
			</li>

			<li>
				<a href="{{URL::route('mail.trash')}}">
					{{Lang::get('words.trash')}}
				</a>
			</li>
		</ul>

		<div class="mail-distancer"></div>

	</div>