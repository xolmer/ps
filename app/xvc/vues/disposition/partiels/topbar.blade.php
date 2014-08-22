<div class="row">

<!-- Profile Info and Notifications -->
<div class="col-md-6 col-sm-8 clearfix">

<ul class="user-info pull-left pull-none-xsm">

    <!-- Profile Info -->
    <li class="profile-info dropdown"><!-- add class "pull-right" if you want to place this from right -->

        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <img src="/assets/images/thumb-1@2x.png" alt="" class="img-circle" width="44" />
        </a>

        <ul class="dropdown-menu">

            <!-- Reverse Caret -->
            <li class="caret"></li>

            <!-- Profile sub-links -->
            <li>
                <a href="{{URL::route('profile')}}">
                    <i class="entypo-user"></i>
                    پروفایل کاربری
                </a>
            </li>

            <li>
                <a href="mailbox.html">
                    <i class="entypo-mail"></i>
                    صندوق پستی
                </a>
            </li>

            <li>
                <a href="extra-calendar.html">
                    <i class="entypo-calendar"></i>
                    تقویم
                </a>
            </li>

            <li>
                <a href="#">
                    <i class="entypo-clipboard"></i>
                    یادآوری ها
                </a>
            </li>
        </ul>
    </li>

</ul>

<ul class="user-info pull-left pull-right-xs pull-none-xsm" style="display:none;"> 

<!-- Raw Notifications -->
<li class="notifications dropdown">

    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
        <i class="entypo-attention"></i>
        <span class="badge badge-info">6</span>
    </a>

    <ul class="dropdown-menu">
        <li class="top">
            <p class="small">
                <a href="#" class="pull-right">Mark all Read</a>
                You have <strong>3</strong> new notifications.
            </p>
        </li>

        <li>
            <ul class="dropdown-menu-list scroller">
                <li class="unread notification-success">
                    <a href="#">
                        <i class="entypo-user-add pull-right"></i>

				<span class="line">
					<strong>New user registered</strong>
				</span>

				<span class="line small">
					30 seconds ago
				</span>
                    </a>
                </li>

                <li class="unread notification-secondary">
                    <a href="#">
                        <i class="entypo-heart pull-right"></i>

				<span class="line">
					<strong>Someone special liked this</strong>
				</span>

				<span class="line small">
					2 minutes ago
				</span>
                    </a>
                </li>

                <li class="notification-primary">
                    <a href="#">
                        <i class="entypo-user pull-right"></i>

				<span class="line">
					<strong>Privacy settings have been changed</strong>
				</span>

				<span class="line small">
					3 hours ago
				</span>
                    </a>
                </li>

                <li class="notification-danger">
                    <a href="#">
                        <i class="entypo-cancel-circled pull-right"></i>

				<span class="line">
					John cancelled the event
				</span>

				<span class="line small">
					9 hours ago
				</span>
                    </a>
                </li>

                <li class="notification-info">
                    <a href="#">
                        <i class="entypo-info pull-right"></i>

				<span class="line">
					The server is status is stable
				</span>

				<span class="line small">
					yesterday at 10:30am
				</span>
                    </a>
                </li>

                <li class="notification-warning">
                    <a href="#">
                        <i class="entypo-rss pull-right"></i>

				<span class="line">
					New comments waiting approval
				</span>

				<span class="line small">
					last week
				</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="external">
            <a href="#">View all notifications</a>
        </li>				</ul>

</li>

<!-- Message Notifications -->
<li class="notifications dropdown">

    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
        <i class="entypo-mail"></i>
        <span class="badge badge-secondary">10</span>
    </a>

    <ul class="dropdown-menu">
        <li>
            <ul class="dropdown-menu-list scroller">
                <li class="active">
                    <a href="#">
				<span class="image pull-right">
					<img src="/assets/images/thumb-1.png" alt="" class="img-circle" />
				</span>

				<span class="line">
					<strong>Luc Chartier</strong>
					- yesterday
				</span>

				<span class="line desc small">
					This ain’t our first item, it is the best of the rest.
				</span>
                    </a>
                </li>

                <li class="active">
                    <a href="#">
				<span class="image pull-right">
					<img src="/assets/images/thumb-2.png" alt="" class="img-circle" />
				</span>

				<span class="line">
					<strong>Salma Nyberg</strong>
					- 2 days ago
				</span>

				<span class="line desc small">
					Oh he decisively impression attachment friendship so if everything.
				</span>
                    </a>
                </li>

                <li>
                    <a href="#">
				<span class="image pull-right">
					<img src="/assets/images/thumb-3.png" alt="" class="img-circle" />
				</span>

				<span class="line">
					Hayden Cartwright
					- a week ago
				</span>

				<span class="line desc small">
					Whose her enjoy chief new young. Felicity if ye required likewise so doubtful.
				</span>
                    </a>
                </li>

                <li>
                    <a href="#">
				<span class="image pull-right">
					<img src="/assets/images/thumb-4.png" alt="" class="img-circle" />
				</span>

				<span class="line">
					Sandra Eberhardt
					- 16 days ago
				</span>

				<span class="line desc small">
					On so attention necessary at by provision otherwise existence direction.
				</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="external">
            <a href="mailbox.html">All Messages</a>
        </li>				</ul>

</li>



</ul>

</div>


<!-- Raw Links -->
<div class="col-md-6 col-sm-4 clearfix hidden-xs">

    <ul class="list-inline links-list pull-right">


        <li class="sep"></li>


        <li>
            <a href="#" data-toggle="chat" data-animate="1" data-collapse-sidebar="1">
                <i class="entypo-chat"></i>
                Chat

                <span class="badge badge-success chat-notifications-badge is-hidden">0</span>
            </a>
        </li>

        <li class="sep"></li>

        <li class="farsi">
            <a href="{{URL::route('logout')}}">
                خروج
                <i class="entypo-logout right"></i>
            </a>
        </li>
    </ul>

</div>

</div>
