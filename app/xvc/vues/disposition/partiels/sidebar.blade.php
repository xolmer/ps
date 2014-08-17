<div class="sidebar-menu">


<header class="logo-env">

    <!-- logo -->
    <div class="logo">
        <a href="{{URL::route('index')}}">
            <img src="/assets/images/logo@2x.png" width="120" alt=""/>
        </a>
    </div>

    <!-- logo collapse icon -->

    <div class="sidebar-collapse">
        <a href="#" class="sidebar-collapse-icon with-animation">
            <!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
            <i class="entypo-menu"></i>
        </a>
    </div>


    <!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
    <div class="sidebar-mobile-menu visible-xs">
        <a href="#" class="with-animation"><!-- add class "with-animation" to support animation -->
            <i class="entypo-menu"></i>
        </a>
    </div>

</header>


<ul id="main-menu" class="">
    <!-- add class "multiple-expanded" to allow multiple submenus to open -->
    <!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
    <!-- Search Bar -->
    <li id="search">
        <form method="get" action="">
            <input type="text" name="q" class="search-input farsi" placeholder="جستجو..."/>
            <button type="submit">
                <i class="entypo-search"></i>
            </button>
        </form>
    </li>
    <li class="opened active">
        <a href="index.html">
            <i class="entypo-gauge"></i>
        <span>
            مشتریان
        </span>
        </a>
        <ul>
            <li>
                <a href="{{URL::route('customer.create')}}">
                <span>
                    ثبت مشتری جدید
                </span>
                </a>
            </li>
            <li>
                <a href="dashboard-2.html">
                <span>
                    جستجوی مشتریان
                </span>
                </a>
            </li>


        </ul>
    </li>
    <li>
        <a href="layout-api.html">
            <i class="glyphicon glyphicon-pencil"></i>
        <span>
            ثبت حواله
        </span>
        </a>
        <ul>
            <li>
                <a href="layout-api.html">
                <span>
                    ثبت حواله ایران به مالزی
                </span>
                </a>
            </li>
            <li>
                <a href="layout-collapsed-sidebar.html">
                <span>
                    ثبت حواله مالزی به ایران
                </span>
                </a>
            </li>
            <li>
                <a href="layout-fixed-sidebar.html">
                <span>
                    ثبت حواله ایران به امارات
                </span>
                </a>
            </li>
            <li>
                <a href="layout-chat-open.html">
                <span>
               ثبت حواله سویفت
                </span>
                </a>
            </li>

        </ul>
    </li>
    <li>
        <a href="layout-api.html">
            <i class="entypo-docs"></i>
        <span>
حواله های محاسبه نشده
        </span>
        </a>
        <ul>
            <li>
                <a href="layout-api.html">
                <span>
                     حواله های ایران به مالزی
                </span>
                </a>
            </li>
            <li>
                <a href="layout-collapsed-sidebar.html">
                <span>
                                          حواله های  ایران به امارات
                </span>
                </a>
            </li>
            <li>
                <a href="layout-fixed-sidebar.html">
                <span>
                    ثبت حواله ایران به امارات
                </span>
                </a>
            </li>
            <li>
                <a href="layout-chat-open.html">
                <span>
               حواله های سویفت
                </span>
                </a>
            </li>

        </ul>
    </li>
    <li>
        <a href="layout-api.html">
            <i class="entypo-newspaper"></i>
        <span>
محاسبه حواله ها
        </span>
        </a>
        <ul>
            <li>
                <a href="layout-api.html">
                <span>
                     حواله های ایران به مالزی
                </span>
                </a>
            </li>
            <li>
                <a href="layout-collapsed-sidebar.html">
                <span>
                                          حواله های  ایران به امارات
                </span>
                </a>
            </li>
            <li>
                <a href="layout-fixed-sidebar.html">
                <span>
                    ثبت حواله ایران به امارات
                </span>
                </a>
            </li>
            <li>
                <a href="layout-chat-open.html">
                <span>
               حواله های سویفت
                </span>
                </a>
            </li>

        </ul>
    </li>
    <li>
        <a href="layout-api.html">
            <i class= "glyphicon glyphicon-send"></i>
        <span>
پرداخت حواله ها
        </span>
        </a>
        <ul>
            <li>
                <a href="layout-api.html">
                <span>
                    پرداخت های بانکی
                </span>
                </a>
            </li>
            <li>
                <a href="layout-collapsed-sidebar.html">
                <span>
                    پرداخت های حضوری
                </span>
                </a>
            </li>
            <li>
                <a href="layout-fixed-sidebar.html">
                <span>
                    پرداخت های در جریان
                </span>
                </a>
            </li>
            <li>
                <a href="layout-chat-open.html">
                <span>
پرداخت های سویف
                </span>
                </a>
            </li>

        </ul>
    </li>
    <li>
        <a href="layout-api.html">
            <i class="entypo-retweet"></i>
        <span>
            بروز رسانی
        </span>
        </a>
        <ul>
            <li>
                <a href="layout-api.html">
                <span>
                    نرخ های سیستم
                </span>
                </a>
            </li>
            <li>
                <a href="layout-collapsed-sidebar.html">
                <span>
                    نرخ های وب سایت
                </span>
                </a>
            </li>
            <li>
                <a href="layout-fixed-sidebar.html">
                <span>
                نرخ های اعضا
                </span>
                </a>
            </li>
            <li>
                <a href="layout-chat-open.html">
                <span>
                    نرخ های حواله در ایران
                </span>
                </a>
            </li>
            <li>
                <a href="layout-chat-open.html">
                <span>
                    بخش اخبار وب سایت
                </span>
                </a>
            </li>

        </ul>
    </li>
    <li>
        <a href="layout-api.html">
            <i class="fa fa-cogs"></i>
        <span>
            تنظیمات
        </span>
        </a>
        <ul>

            <li>
                <a href="layout-collapsed-sidebar.html">
                <span>
                    محتوی ایمیل های سایت
                </span>
                </a>
            </li>
            <li>
                <a href="layout-fixed-sidebar.html">
                <span>
                    محتوای پیامک ها
                </span>
                </a>
            </li>


        </ul>
    </li>
    <li>
        <a href="layout-api.html">
            <i class="fa fa-suitcase"></i>
        <span>
            مدیریت
        </span>
        </a>
        <ul>
            <li>
                <a href="{{URL::route('users.index')}}">
                <span>
                    کاربران سیستم
                </span>
                </a>
            </li>
            <li>
                <a href="layout-collapsed-sidebar.html">
                <span>
                    گزارش ها
                </span>
                </a>
            </li>
            <li>
                <a href="layout-fixed-sidebar.html">
                <span>
                    صندوق ها
                </span>
                </a>
            </li>
            <li>
                <a href="layout-chat-open.html">
                <span>
                    ارز ها
                </span>
                </a>
            </li>

        </ul>
    </li>
</ul>

</div>
<div class="main-content">
