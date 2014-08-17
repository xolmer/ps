<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Neon Admin Panel" />
    <meta name="author" content="" />
    <title>
        خدمات ارزی پارسیان
    </title>
    <link rel="stylesheet" href="assets/css/font-icons/entypo/css/entypo.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/neon-forms.css">
    <link rel="stylesheet" href="parsian/css/parsian.css">
    <link rel="stylesheet" href="/assets/css/skins/default.css">
    <script src="assets/js/jquery-1.11.0.min.js"></script>
</head>
<body class="page-body login-page login-form-fall boxed-layout" data-url="http://neon.dev">

<div class="login-container">
    <div class="login-header login-caret">
        <div class="login-content">
                <img src="assets/images/logo@2x.png" width="200" alt="" />
        </div>
    </div>

    <div class="login-form">
        <div class="login-content">

            @if(Session::has('loginError'))
            <div class="form-login-error farsi" style="display: block;">
                <h3 style="font-size: 18px">
                    خطای ورود به سایت
                </h3>
                <p style="font-size: 15px; direction: rtl;">
                    {{Session::get('loginError')}}
                </p>
            </div>
            @endif

            <div class="today-dates">
                <span class="gregorian">{{date('l jS \of F Y')}}</span>
                <span class="shamsi farsi"> {{toJalali(null,'l j F Y')}}</span>
            </div>
            <form method="post" role="form" action="{{URL::route('signin')}}" id="vorood-form">

                <div class="form-group">
                    <div class="input-group">
                        <input type="text" class="form-control farsi" value="{{Input::old('username')}}" name="username" id="username" placeholder="نام کاربری ..." autocomplete="off" />
                        <div class="input-group-addon">
                            <i class="entypo-user"></i>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="input-group">
                        <input type="password" class="form-control farsi" name="password" id="password" placeholder="کلمه عبور ..."  autocomplete="off" />
                        <div class="input-group-addon">
                            <i class="entypo-key"></i>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <button type="submit" class="farsi btn btn-primary btn-block btn-login" style="text-align: center;font-size:18px;">
                        <i class="entypo-login"></i>
                        ورود
                    </button>
                </div>

            </form>

        </div>
    </div>
</div>


<!-- Bottom Scripts -->

<script src="assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
<script src="assets/js/bootstrap.js"></script>
<script src="assets/js/jquery.validate.min.js"></script>
<script src="assets/js/neon-login.js"></script>
</body>
</html>