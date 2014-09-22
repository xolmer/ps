@extends('disposition.principal')
@section('content')
<div class="row">

    <div class="col-sm-12">
        <div class="tile-progress tile-{{Auth::user()->theme_color}} farsi">

            <div class="tile-header" style="padding-bottom: 5px;">
                <h3 style="font-size: 37px;font-family:Nassim">
                    خوش آمدید
                </h3>
                <h4></h4>

                <h3 style="font-size: 18px;font-family:Nassim">
                    محمد رضا سلطانی

                </h3>
                <span style="font-size: 16px;">
                    {{date('l F j, Y')}} <br/>
                    ۸ فروردین ۱۳۹۳
                </span>

            </div>

            <div class="tile-progressbar">
                <span data-fill="13.5%" style="width: 13.5%;"></span>
            </div>

            <div class="tile-footer">
                <span>

                    آخرین ورود به سایت : ۱۲ جولای ۲۰۱۴ ساعت ۸ صبح

                </span>

            </div>
        </div>
    </div>
</div>
<hr/>
<div class="row farsi">

@include('partiels._todos')

<div class="col-sm-6">
    <div class="mail-env">
    <div class="mail-body" style="width:100%">
    <table class="table mail-table">
    <!-- mail table header -->
    <thead>
    <tr>
        <th width="5%">
            <div class="checkbox checkbox-replace neon-cb-replacement">
                <label class="cb-wrapper"><input type="checkbox">

                    <div class="checked"></div>
                </label>
            </div>
        </th>
        <th colspan="4">

            <div class="mail-select-options">عنوان ایمیل</div>

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
                <label class="cb-wrapper"><input type="checkbox">

                    <div class="checked"></div>
                </label>
            </div>
        </td>
        <td class="col-name">
            <a href="#" class="star stared">
                <i class="entypo-star"></i>
            </a>
            <a href="mailbox-message.html" class="col-name"> رسید حواله به ایران</a>
        </td>
        <td class="col-subject">
            <a href="mailbox-message.html">
                سلام. یکی از رسید ها به این ایمیل ضمیمه  ...

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
                <label class="cb-wrapper"><input type="checkbox">

                    <div class="checked"></div>
                </label>
            </div>
        </td>
        <td class="col-name">
            <a href="#" class="star">
                <i class="entypo-star"></i>
            </a>
            <a href="mailbox-message.html" class="col-name">تی تی آقای حسینی</a>
        </td>
        <td class="col-subject">
            <a href="mailbox-message.html">
                سلام.  لطفا حواله ی تی تی آقای حسینی ...
            </a>
        </td>
        <td class="col-options"></td>
        <td class="col-time">09:27</td>
    </tr>


    <tr>
        <td>
            <div class="checkbox checkbox-replace neon-cb-replacement">
                <label class="cb-wrapper"><input type="checkbox">

                    <div class="checked"></div>
                </label>
            </div>
        </td>
        <td class="col-name">
            <a href="#" class="star">
                <i class="entypo-star"></i>
            </a>
            <a href="mailbox-message.html" class="col-name">رسید حواله به ایران</a>
        </td>
        <td class="col-subject">
            <a href="mailbox-message.html">
               فایل رسید حواله آقای مالکی به پیوست می باشد . با تشکر
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
                <label class="cb-wrapper"><input type="checkbox">

                    <div class="checked"></div>
                </label>
            </div>
        </td>
        <td class="col-name">
            <a href="#" class="star">
                <i class="entypo-star"></i>
            </a>
            <a href="mailbox-message.html" class="col-name"> رسید بانک تجارت</a>
        </td>
        <td class="col-subject">
            <a href="mailbox-message.html">
                <span class="label label-info">مهم</span>
                سلام. رسید بانک تجارت هنوز پیدا نشده. لطفا...
            </a>
        </td>
        <td class="col-options"></td>
        <td class="col-time">18 Oct</td>
    </tr>

    <tr>
        <td>
            <div class="checkbox checkbox-replace neon-cb-replacement">
                <label class="cb-wrapper"><input type="checkbox">

                    <div class="checked"></div>
                </label>
            </div>
        </td>
        <td class="col-name">
            <a href="#" class="star">
                <i class="entypo-star"></i>
            </a>
            <a href="mailbox-message.html" class="col-name">حواله سویفت ماه  جولای</a>
        </td>
        <td class="col-subject">
            <a href="mailbox-message.html">
                سلام. حواله سویفت آقای رضایی هنوز ارسال نشده
            </a>
        </td>
        <td class="col-options"></td>
        <td class="col-time">01 Sep</td>
    </tr>

    <tr class="unread"><!-- new email class: unread -->
        <td>
            <div class="checkbox checkbox-replace neon-cb-replacement">
                <label class="cb-wrapper"><input type="checkbox">

                    <div class="checked"></div>
                </label>
            </div>
        </td>
        <td class="col-name">
            <a href="#" class="star stared">
                <i class="entypo-star"></i>
            </a>
            <a href="mailbox-message.html" class="col-name">نمونه مهر دفتر ایران</a>
        </td>
        <td class="col-subject">
            <a href="mailbox-message.html">
                سلام. تصویر نمونه مهری که گرفتیم به پیوست می باشد. لطفا تایید...
            </a>
        </td>
        <td class="col-options">
            <a href="mailbox-message.html"><i class="entypo-attach"></i></a>
        </td>
        <td class="col-time">13:52</td>
    </tr>

    <tr class="unread">
        <td>
            <div class="checkbox checkbox-replace neon-cb-replacement">
                <label class="cb-wrapper"><input type="checkbox">

                    <div class="checked"></div>
                </label>
            </div>
        </td>
        <td class="col-name">
            <a href="#" class="star">
                <i class="entypo-star"></i>
            </a>
            <a href="mailbox-message.html" class="col-name">کارمند جدید</a>
        </td>
        <td class="col-subject">
            <a href="mailbox-message.html">
                سلام. از امروز خط دو دفتر ایران رو خانم حسن زاده ...
            </a>
        </td>
        <td class="col-options"></td>
        <td class="col-time">4 Dec</td>
    </tr>

    <tr>
        <td>
            <div class="checkbox checkbox-replace neon-cb-replacement">
                <label class="cb-wrapper"><input type="checkbox">

                    <div class="checked"></div>
                </label>
            </div>
        </td>
        <td class="col-name">
            <a href="#" class="star stared">
                <i class="entypo-star"></i>
            </a>
            <a href="mailbox-message.html" class="col-name">تی تی خانم جهانبخش</a>
        </td>
        <td class="col-subject">
            <a href="mailbox-message.html">
                <span class="label label-warning">تی تی</span>
                سلام. لطفا مجددا رسید تی تی رو ارسال کنید
            </a>
        </td>
        <td class="col-options"></td>
        <td class="col-time">28 Nov</td>
    </tr>


    <tr>
        <td>
            <div class="checkbox checkbox-replace neon-cb-replacement">
                <label class="cb-wrapper"><input type="checkbox">

                    <div class="checked"></div>
                </label>
            </div>
        </td>
        <td class="col-name">
            <a href="#" class="star">
                <i class="entypo-star"></i>
            </a>
            <a href="mailbox-message.html" class="col-name">صورت حساب بانک ملی</a>
        </td>
        <td class="col-subject">
            <a href="mailbox-message.html">
                سلام. لیست تمام ورودی های بانک ملی دیروز  شامل ...
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
                <label class="cb-wrapper"><input type="checkbox">

                    <div class="checked"></div>
                </label>
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
    </div>
</div>
<div class="col-sm-3">
    <div class="tile-progress tile-green">
        <div class="tile-header">
            <h3 class="farsi">حواله های انجام نشده</h3>
            <h3 class="farsi">19 حواله</h3>
        </div>

        <div class="tile-progressbar">
            <span data-fill="21.2%" style="width: 21.2%;"></span>
        </div>

        <div class="tile-footer">
            <h4>
                <span class="pct-counter">51.2</span>%
            </h4>

            <span>نسبت به کل حواله های امروز</span>
        </div>
    </div>
    <div class="tile-progress tile-red">
        <div class="tile-header">
            <h3 class="farsi">حواله های تکمیل نشده</h3>

            <h3 class="farsi">27 حواله</h3>
        </div>
        <div class="tile-progressbar">
            <span data-fill="35.5%" style="width: 35.5%;"></span>
        </div>
        <div class="tile-footer">
            <h4>
                <span class="pct-counter">35.5</span>%
            </h4>
            <span>نسبت به کل حواله های امروز</span>
        </div>
    </div>
    <div class="tile-progress tile-aqua ">
        <div class="tile-header ">
            <h3 class="farsi">حواله های بررسی نشده</h3>

            <h3 class="farsi">48 حواله</h3>
        </div>

        <div class="tile-progressbar">
            <span data-fill="69.9%" style="width: 69.9%;"></span>
        </div>

        <div class="tile-footer">
            <h4>
                <span class="pct-counter">69.9</span>%
            </h4>

            <span>نسبت به کل حواله های امروز</span>
        </div>
    </div>
</div>


</div>
</div>
@stop

@section('pageScripts')
<script>
    todos();
</script>
@stop