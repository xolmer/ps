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
                    <i class="entypo-paper-plane"></i>
                    {{Lang::get('words.sentbox')}}
                </a>
            </li>
        </ol>
    </div>
</div>

{{--Mail --Start--}}
<div class="mail-env">
<h2 class="farsi-content"> {{Lang::get('words.sentbox')}} </h2>
        <hr/>
	<!-- compose new email button -->
	<div class="mail-sidebar-row visible-xs">
		<a href="mailbox-compose.html" class="btn btn-success btn-icon btn-block">
			Compose Mail
			<i class="entypo-pencil"></i>
		</a>
	</div>


	<!-- Mail Body -->
	<div class="mail-body">
		<!-- mail table -->
		<table class="table mail-table">
			<!-- mail table header -->
			<thead>
				<tr>
					<th width="5%">
						<div class="checkbox checkbox-replace neon-cb-replacement">
							<label class="cb-wrapper"><input type="checkbox"><div class="checked"></div></label>
						</div>
					</th>
					<th colspan="4">

						<div class="mail-select-options">Mark as Read</div>

						<div class="mail-pagination" colspan="2">
							<strong>1-30</strong> <span>of 789</span>

							<div class="btn-group">
								<a href="#" class="btn btn-sm btn-white"><i class="entypo-left-open"></i></a>
								<a href="#" class="btn btn-sm btn-white"><i class="entypo-right-open"></i></a>
							</div>
						</div>
					</th>
				</tr>
			</thead>

			<!-- email list -->
			<tbody>
				<tr class="unread"><!-- new email class: unread -->
					<td>
						<div class="checkbox checkbox-replace neon-cb-replacement">
							<label class="cb-wrapper"><input type="checkbox"><div class="checked"></div></label>
						</div>
					</td>
					<td class="col-name">
						<a href="#" class="star stared">
							<i class="entypo-star"></i>
						</a>
						<a href="mailbox-message.html" class="col-name">Facebook</a>
					</td>
					<td class="col-subject">
						<a href="mailbox-message.html">
							Reset your account password
						</a>
					</td>
					<td class="col-options">
						<a href="mailbox-message.html"><i class="entypo-attach"></i></a>
					</td>
					<td class="col-time">13:52</td>
				</tr>

				<tr>
					<td>
						<div class="checkbox checkbox-replace neon-cb-replacement">
							<label class="cb-wrapper"><input type="checkbox"><div class="checked"></div></label>
						</div>
					</td>
					<td class="col-name">
						<a href="#" class="star">
							<i class="entypo-star"></i>
						</a>
						<a href="mailbox-message.html" class="col-name">Google AdWords</a>
					</td>
					<td class="col-subject">
						<a href="mailbox-message.html">
							Google AdWords: Ads not serving
						</a>
					</td>
					<td class="col-options"></td>
					<td class="col-time">09:27</td>
				</tr>

				<tr>
					<td>
						<div class="checkbox checkbox-replace neon-cb-replacement">
							<label class="cb-wrapper"><input type="checkbox"><div class="checked"></div></label>
						</div>
					</td>
					<td class="col-name">
						<a href="#" class="star">
							<i class="entypo-star"></i>
						</a>
						<a href="mailbox-message.html" class="col-name">Apple.com</a>
					</td>
					<td class="col-subject">
						<a href="mailbox-message.html">
							<span class="label label-danger">Business</span>
							Your apple account ID has been accessed from un-familiar location.
						</a>
					</td>
					<td class="col-options"></td>
					<td class="col-time">Today</td>
				</tr>

				<tr>
					<td>
						<div class="checkbox checkbox-replace neon-cb-replacement">
							<label class="cb-wrapper"><input type="checkbox"><div class="checked"></div></label>
						</div>
					</td>
					<td class="col-name">
						<a href="#" class="star">
							<i class="entypo-star"></i>
						</a>
						<a href="mailbox-message.html" class="col-name">World Weather Online</a>
					</td>
					<td class="col-subject">
						<a href="mailbox-message.html">
							Over Throttle Alert
						</a>
					</td>
					<td class="col-options">
						<a href="mailbox-message.html"><i class="entypo-attach"></i></a>
					</td>
					<td class="col-time">Yesterday</td>
				</tr>

				<tr class="unread">
					<td>
						<div class="checkbox checkbox-replace neon-cb-replacement">
							<label class="cb-wrapper"><input type="checkbox"><div class="checked"></div></label>
						</div>
					</td>
					<td class="col-name">
						<a href="#" class="star">
							<i class="entypo-star"></i>
						</a>
						<a href="mailbox-message.html" class="col-name">Dropbox</a>
					</td>
					<td class="col-subject">
						<a href="mailbox-message.html">
							Complete your Dropbox setup!
						</a>
					</td>
					<td class="col-options"></td>
					<td class="col-time">4 Dec</td>
				</tr>

				<tr>
					<td>
						<div class="checkbox checkbox-replace neon-cb-replacement">
							<label class="cb-wrapper"><input type="checkbox"><div class="checked"></div></label>
						</div>
					</td>
					<td class="col-name">
						<a href="#" class="star stared">
							<i class="entypo-star"></i>
						</a>
						<a href="mailbox-message.html" class="col-name">Arlind Nushi</a>
					</td>
					<td class="col-subject">
						<a href="mailbox-message.html">
							<span class="label label-warning">Friends</span>
							Work progress for Neon Project
						</a>
					</td>
					<td class="col-options"></td>
					<td class="col-time">28 Nov</td>
				</tr>

				<tr class="unread"><!-- new email class: unread -->
					<td>
						<div class="checkbox checkbox-replace neon-cb-replacement">
							<label class="cb-wrapper"><input type="checkbox"><div class="checked"></div></label>
						</div>
					</td>
					<td class="col-name">
						<a href="#" class="star stared">
							<i class="entypo-star"></i>
						</a>
						<a href="mailbox-message.html" class="col-name">Jose D. Gardner</a>
					</td>
					<td class="col-subject">
						<a href="mailbox-message.html">
							Regarding to your website issues.
						</a>
					</td>
					<td class="col-options">
						<a href="mailbox-message.html"><i class="entypo-attach"></i></a>
					</td>
					<td class="col-time">22 Nov</td>
				</tr>

				<tr>
					<td>
						<div class="checkbox checkbox-replace neon-cb-replacement">
							<label class="cb-wrapper"><input type="checkbox"><div class="checked"></div></label>
						</div>
					</td>
					<td class="col-name">
						<a href="#" class="star">
							<i class="entypo-star"></i>
						</a>
						<a href="mailbox-message.html" class="col-name">Aurelio D. Cummins</a>
					</td>
					<td class="col-subject">
						<a href="mailbox-message.html">
							Steadicam operator
						</a>
					</td>
					<td class="col-options"></td>
					<td class="col-time">15 Nov</td>
				</tr>

				<tr>
					<td>
						<div class="checkbox checkbox-replace neon-cb-replacement">
							<label class="cb-wrapper"><input type="checkbox"><div class="checked"></div></label>
						</div>
					</td>
					<td class="col-name">
						<a href="#" class="star">
							<i class="entypo-star"></i>
						</a>
						<a href="mailbox-message.html" class="col-name">Filan Fisteku</a>
					</td>
					<td class="col-subject">
						<a href="mailbox-message.html">
							You are loosing clients because your website is not responsive.
						</a>
					</td>
					<td class="col-options"></td>
					<td class="col-time">02 Nov</td>
				</tr>

				<tr>
					<td>
						<div class="checkbox checkbox-replace neon-cb-replacement">
							<label class="cb-wrapper"><input type="checkbox"><div class="checked"></div></label>
						</div>
					</td>
					<td class="col-name">
						<a href="#" class="star">
							<i class="entypo-star"></i>
						</a>
						<a href="mailbox-message.html" class="col-name">Instagram</a>
					</td>
					<td class="col-subject">
						<a href="mailbox-message.html">
							Instagram announces the new video uploadin feature.
						</a>
					</td>
					<td class="col-options">
						<a href="mailbox-message.html"><i class="entypo-attach"></i></a>
					</td>
					<td class="col-time">26 Oct</td>
				</tr>

				<tr class="unread">
					<td>
						<div class="checkbox checkbox-replace neon-cb-replacement">
							<label class="cb-wrapper"><input type="checkbox"><div class="checked"></div></label>
						</div>
					</td>
					<td class="col-name">
						<a href="#" class="star">
							<i class="entypo-star"></i>
						</a>
						<a href="mailbox-message.html" class="col-name">James Blue</a>
					</td>
					<td class="col-subject">
						<a href="mailbox-message.html">
							<span class="label label-info">Sports</span>
							There are 20 notifications
						</a>
					</td>
					<td class="col-options"></td>
					<td class="col-time">18 Oct</td>
				</tr>

				<tr>
					<td>
						<div class="checkbox checkbox-replace neon-cb-replacement">
							<label class="cb-wrapper"><input type="checkbox"><div class="checked"></div></label>
						</div>
					</td>
					<td class="col-name">
						<a href="#" class="star">
							<i class="entypo-star"></i>
						</a>
						<a href="mailbox-message.html" class="col-name">SomeHost</a>
					</td>
					<td class="col-subject">
						<a href="mailbox-message.html">
							Bugs in your system.
						</a>
					</td>
					<td class="col-options"></td>
					<td class="col-time">01 Sep</td>
				</tr>

				<tr class="unread"><!-- new email class: unread -->
					<td>
						<div class="checkbox checkbox-replace neon-cb-replacement">
							<label class="cb-wrapper"><input type="checkbox"><div class="checked"></div></label>
						</div>
					</td>
					<td class="col-name">
						<a href="#" class="star stared">
							<i class="entypo-star"></i>
						</a>
						<a href="mailbox-message.html" class="col-name">Facebook</a>
					</td>
					<td class="col-subject">
						<a href="mailbox-message.html">
							Reset your account password
						</a>
					</td>
					<td class="col-options">
						<a href="mailbox-message.html"><i class="entypo-attach"></i></a>
					</td>
					<td class="col-time">13:52</td>
				</tr>

				<tr>
					<td>
						<div class="checkbox checkbox-replace neon-cb-replacement">
							<label class="cb-wrapper"><input type="checkbox"><div class="checked"></div></label>
						</div>
					</td>
					<td class="col-name">
						<a href="#" class="star">
							<i class="entypo-star"></i>
						</a>
						<a href="mailbox-message.html" class="col-name">Google AdWords</a>
					</td>
					<td class="col-subject">
						<a href="mailbox-message.html">
							Google AdWords: Ads not serving
						</a>
					</td>
					<td class="col-options"></td>
					<td class="col-time">09:27</td>
				</tr>

				<tr>
					<td>
						<div class="checkbox checkbox-replace neon-cb-replacement">
							<label class="cb-wrapper"><input type="checkbox"><div class="checked"></div></label>
						</div>
					</td>
					<td class="col-name">
						<a href="#" class="star">
							<i class="entypo-star"></i>
						</a>
						<a href="mailbox-message.html" class="col-name">Apple.com</a>
					</td>
					<td class="col-subject">
						<a href="mailbox-message.html">
							<span class="label label-danger">Business</span>
							Your apple account ID has been accessed from un-familiar location.
						</a>
					</td>
					<td class="col-options"></td>
					<td class="col-time">Today</td>
				</tr>

				<tr>
					<td>
						<div class="checkbox checkbox-replace neon-cb-replacement">
							<label class="cb-wrapper"><input type="checkbox"><div class="checked"></div></label>
						</div>
					</td>
					<td class="col-name">
						<a href="#" class="star">
							<i class="entypo-star"></i>
						</a>
						<a href="mailbox-message.html" class="col-name">World Weather Online</a>
					</td>
					<td class="col-subject">
						<a href="mailbox-message.html">
							Over Throttle Alert
						</a>
					</td>
					<td class="col-options">
						<a href="mailbox-message.html"><i class="entypo-attach"></i></a>
					</td>
					<td class="col-time">Yesterday</td>
				</tr>

				<tr class="unread">
					<td>
						<div class="checkbox checkbox-replace neon-cb-replacement">
							<label class="cb-wrapper"><input type="checkbox"><div class="checked"></div></label>
						</div>
					</td>
					<td class="col-name">
						<a href="#" class="star">
							<i class="entypo-star"></i>
						</a>
						<a href="mailbox-message.html" class="col-name">Dropbox</a>
					</td>
					<td class="col-subject">
						<a href="mailbox-message.html">
							Complete your Dropbox setup!
						</a>
					</td>
					<td class="col-options"></td>
					<td class="col-time">4 Dec</td>
				</tr>

				<tr>
					<td>
						<div class="checkbox checkbox-replace neon-cb-replacement">
							<label class="cb-wrapper"><input type="checkbox"><div class="checked"></div></label>
						</div>
					</td>
					<td class="col-name">
						<a href="#" class="star stared">
							<i class="entypo-star"></i>
						</a>
						<a href="mailbox-message.html" class="col-name">Arlind Nushi</a>
					</td>
					<td class="col-subject">
						<a href="mailbox-message.html">
							<span class="label label-warning">Friends</span>
							Work progress for Neon Project
						</a>
					</td>
					<td class="col-options"></td>
					<td class="col-time">28 Nov</td>
				</tr>

				<tr class="unread"><!-- new email class: unread -->
					<td>
						<div class="checkbox checkbox-replace neon-cb-replacement">
							<label class="cb-wrapper"><input type="checkbox"><div class="checked"></div></label>
						</div>
					</td>
					<td class="col-name">
						<a href="#" class="star stared">
							<i class="entypo-star"></i>
						</a>
						<a href="mailbox-message.html" class="col-name">Jose D. Gardner</a>
					</td>
					<td class="col-subject">
						<a href="mailbox-message.html">
							Regarding to your website issues.
						</a>
					</td>
					<td class="col-options">
						<a href="mailbox-message.html"><i class="entypo-attach"></i></a>
					</td>
					<td class="col-time">22 Nov</td>
				</tr>

				<tr>
					<td>
						<div class="checkbox checkbox-replace neon-cb-replacement">
							<label class="cb-wrapper"><input type="checkbox"><div class="checked"></div></label>
						</div>
					</td>
					<td class="col-name">
						<a href="#" class="star">
							<i class="entypo-star"></i>
						</a>
						<a href="mailbox-message.html" class="col-name">Aurelio D. Cummins</a>
					</td>
					<td class="col-subject">
						<a href="mailbox-message.html">
							Steadicam operator
						</a>
					</td>
					<td class="col-options"></td>
					<td class="col-time">15 Nov</td>
				</tr>

				<tr>
					<td>
						<div class="checkbox checkbox-replace neon-cb-replacement">
							<label class="cb-wrapper"><input type="checkbox"><div class="checked"></div></label>
						</div>
					</td>
					<td class="col-name">
						<a href="#" class="star">
							<i class="entypo-star"></i>
						</a>
						<a href="mailbox-message.html" class="col-name">Filan Fisteku</a>
					</td>
					<td class="col-subject">
						<a href="mailbox-message.html">
							You are loosing clients because your website is not responsive.
						</a>
					</td>
					<td class="col-options"></td>
					<td class="col-time">02 Nov</td>
				</tr>

				<tr>
					<td>
						<div class="checkbox checkbox-replace neon-cb-replacement">
							<label class="cb-wrapper"><input type="checkbox"><div class="checked"></div></label>
						</div>
					</td>
					<td class="col-name">
						<a href="#" class="star">
							<i class="entypo-star"></i>
						</a>
						<a href="mailbox-message.html" class="col-name">Instagram</a>
					</td>
					<td class="col-subject">
						<a href="mailbox-message.html">
							Instagram announces the new video uploadin feature.
						</a>
					</td>
					<td class="col-options">
						<a href="mailbox-message.html"><i class="entypo-attach"></i></a>
					</td>
					<td class="col-time">26 Oct</td>
				</tr>

				<tr class="unread">
					<td>
						<div class="checkbox checkbox-replace neon-cb-replacement">
							<label class="cb-wrapper"><input type="checkbox"><div class="checked"></div></label>
						</div>
					</td>
					<td class="col-name">
						<a href="#" class="star">
							<i class="entypo-star"></i>
						</a>
						<a href="mailbox-message.html" class="col-name">James Blue</a>
					</td>
					<td class="col-subject">
						<a href="mailbox-message.html">
							<span class="label label-info">Sports</span>
							There are 20 notifications
						</a>
					</td>
					<td class="col-options"></td>
					<td class="col-time">18 Oct</td>
				</tr>

				<tr>
					<td>
						<div class="checkbox checkbox-replace neon-cb-replacement">
							<label class="cb-wrapper"><input type="checkbox"><div class="checked"></div></label>
						</div>
					</td>
					<td class="col-name">
						<a href="#" class="star">
							<i class="entypo-star"></i>
						</a>
						<a href="mailbox-message.html" class="col-name">SomeHost</a>
					</td>
					<td class="col-subject">
						<a href="mailbox-message.html">
							Bugs in your system.
						</a>
					</td>
					<td class="col-options"></td>
					<td class="col-time">01 Sep</td>
				</tr>
			</tbody>

			<!-- mail table footer -->
			<tfoot>
				<tr>
					<th width="5%">
						<div class="checkbox checkbox-replace neon-cb-replacement">
							<label class="cb-wrapper"><input type="checkbox"><div class="checked"></div></label>
						</div>
					</th>
					<th colspan="4">

						<div class="mail-pagination" colspan="2">
							<strong>1-30</strong> <span>of 789</span>

							<div class="btn-group">
								<a href="#" class="btn btn-sm btn-white"><i class="entypo-left-open"></i></a>
								<a href="#" class="btn btn-sm btn-white"><i class="entypo-right-open"></i></a>
							</div>
						</div>
					</th>
				</tr>
			</tfoot>
		</table>
	</div>

	<!-- Sidebar -->
	<div class="mail-sidebar" style="height: 1359px;">

		<!-- compose new email button -->
		<div class="mail-sidebar-row hidden-xs">
			<a href="mailbox-compose.html" class="btn btn-success btn-icon btn-block">
				Compose Mail
				<i class="entypo-pencil"></i>
			</a>
		</div>

		<!-- menu -->
		<ul class="mail-menu">
			<li class="active">
				<a href="#">
					<span class="badge badge-danger pull-right">6</span>
					Inbox
				</a>
			</li>

			<li>
				<a href="#">
					<span class="badge badge-gray pull-right">1</span>
					Sent
				</a>
			</li>

			<li>
				<a href="#">
					Drafts
				</a>
			</li>

			<li>
				<a href="#">
					<span class="badge badge-gray pull-right">1</span>
					Spam
				</a>
			</li>

			<li>
				<a href="#">
					Trash
				</a>
			</li>
		</ul>

		<div class="mail-distancer"></div>

		<h4>Tags</h4>

		<!-- menu -->
		<ul class="mail-menu">
			<li>
				<a href="#">
					<span class="badge badge-danger badge-roundless pull-right"></span>
					Business
				</a>
			</li>

			<li>
				<a href="#">
					<span class="badge badge-info badge-roundless pull-right"></span>
					Sports
				</a>
			</li>

			<li>
				<a href="#">
					<span class="badge badge-warning badge-roundless pull-right"></span>
					Friends
				</a>
			</li>
		</ul>

	</div>

</div>
{{--Mail --End--}}

@stop
