	<div class="mail-sidebar" style="height: 1359px;">

		<!-- compose new email button -->
		<div class="mail-sidebar-row hidden-xs">
			<a href="mailbox-compose.html" class="btn btn-success btn-icon btn-block">
				{{Lang::get('mails.compose')}}
				<i class="entypo-pencil"></i>
			</a>
		</div>

		<!-- menu -->
		<ul class="mail-menu">
			<li >
				<a href="#">
					<span class="badge badge-danger pull-right">6</span>
					{{Lang::get('mails.inbox')}}
				</a>
			</li>

			<li>
				<a href="#">
					<span class="badge badge-gray pull-right">1</span>
					{{Lang::get('mails.sentbox')}}
				</a>
			</li>

			<li>
				<a href="#">
					{{Lang::get('mails.trash')}}
				</a>
			</li>
		</ul>

		<div class="mail-distancer"></div>

	</div>