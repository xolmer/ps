<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="وب سایت رسمی شرکت خدمات ارزی پارسیان" />
    <meta name="author" content="Saarang Soltani" />
    <noscript>
        <meta http-equiv="Refresh" content="0; URL=/helpers/noscript" />
    </noscript>
    <title>
        خدمات ارزی پارسیان
    </title>

    @include('disposition.partiels.feuilleDeStyles')

</head>

<body class="page-body">

<div class="page-container right-sidebar"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->

    @include('disposition.partiels.sidebar')

    @include('disposition.partiels.topbar')
    <hr />

   @yield('content')

    <!-- Footer -->
    <footer class="main">

        <div style="direction: ltr;text-align: left;">
            &copy; {{date('Y')}} <strong>Parsian Worldwide</strong>
        </div>

    </footer>
</div>


<div id="chat" class="fixed" data-current-user="Art Ramadani" data-order-by-status="1" data-max-chat-history="25">

    <div class="chat-inner">


        <h2 class="chat-header">
            <a href="#" class="chat-close" data-animate="1"><i class="entypo-cancel"></i></a>

            <i class="entypo-users"></i>
            Chat
            <span class="badge badge-success is-hidden">0</span>
        </h2>


        <div class="chat-group farsi" id="group-1">
            <strong>کاربران آنلاین</strong>

            <a href="#" id="sample-user-123" data-conversation-history="#sample_history"><span class="user-status is-online"></span> <em>سروش کشتکاران</em></a>
            <a href="#"><span class="user-status is-online"></span> <em>محمدرضا سلطانی</em></a>
            <a href="#"><span class="user-status is-busy"></span> <em>مصطفی بهمنی</em></a>

            <a href="#"><span class="user-status is-idle"></span> <em>کاوه یغمایی</em></a>

            <a href="#"><span class="user-status is-busy"></span> <em>نیما شجاعی</em></a>
            <a href="#"><span class="user-status is-busy"></span> <em>نوید صادقی</em></a>


        </div>

        <div class="chat-group farsi" id="group-1">
            <strong>کاربران آفلاین</strong>
            <a href="#" data-conversation-history="#sample_history_2"><span class="user-status is-offline"></span> <em>آرزو توللی</em></a>
            <a href="#"><span class="user-status is-offline"></span> <em>دانیال خادم صادق</em></a>
            <a href="#"><span class="user-status is-offline"></span> <em>سارا رعیسی</em></a>
            <a href="#"><span class="user-status is-offline"></span> <em>سلیم سبکپا</em></a>
        </div>

    </div>

    <!-- conversation template -->
    <div class="chat-conversation">

        <div class="conversation-header">
            <a href="#" class="conversation-close"><i class="entypo-cancel"></i></a>

            <span class="user-status"></span>
            <span class="display-name"></span>
            <small></small>
        </div>

        <ul class="conversation-body">
        </ul>

        <div class="chat-textarea">
            <textarea class="form-control autogrow" placeholder="Type your message"></textarea>
        </div>

    </div>

</div>


<!-- Chat Histories -->
<ul class="chat-history" id="sample_history">

    <li>
        <span class="user">سروش کشتکاران</span>
        <p style=" color : white; font-family : Nassim;">هستی ؟</p>
        <span class="time">09:00</span>
    </li>

    <li class="opponent">
        <span class="user">محمدرضا سلطانی</span>
        <p style=" color : white; font-family : Nassim;">آره</p>
        <span class="time">09:25</span>
    </li>

    <li class="opponent">
        <span class="user">سروش کشتکاران</span>
        <p style=" color : white; font-family : Nassim;">پرینت جدید حاضره</p>
        <span class="time">09:26</span>
    </li>

</ul>




<!-- Chat Histories -->
<ul class="chat-history" id="sample_history_2">
    <li class="opponent unread">
        <span class="user">مصطفی بهمنی </span>
        <p> اگه آقای حسینی تماس گرفت بگین بعد از ظهر واریز می شه</p>
        <span class="time">08:21</span>
    </li>

    <li class="opponent unread">
        <span class="user">آرزو توللی</span>
        <p>باشه. یک بار هم صبح تماس گرفت البته</p>
        <span class="time">08:27</span>
    </li>
</ul>
</div>




<!-- Bottom Scripts -->
@include('disposition.partiels.scripts')
@section('inlineJS')
@show
</body>
</html>