<?php
/**
 * phrases.php
 *
 * LICENSE: This source file is part of PARSIAN Web Application and is subject to
 * copyright regulations. Unauthorized use or publication of this file
 * in any format is subject to legal persecution.
 * @author     Saarang Soltani <saarangmrs@gmail.com>
 * Created at : 7/28/14 8:03 PM
 */

return array(
    'enter_user_information'                => 'اطلاعات کاربر جدید را وارد کنید',
    'change_user_data_to_update'            => 'اطلاعات کاربر را ویرایش کنید',
    'associateBankAccountsToCustomerText'   => 'برای هر مشتری می توان به تعداد نامحدودی حساب بانکی معرفی کرد. برای اضافه کردن حساب بانکی جدید بر روی دکمه <strong>":button" </strong> کلیک کنید. <br>	 در زمان معرفی حساب بانکی حتما کشوری که حساب بانکی در آن باز شده است را انتخاب کنید. توجه کنید که در آینده هر زمان که حواله ای برای مشتری ثبت شود، نسبت به کشور مقصد حواله، لیست حساب های های بانکی مشتری نمایش داده می شود.',
    'associateContactDetailsToCustomerText' => 'برای هر مشتری می توان به تعداد نامحدودی اطلاعات تماس معرفی کرد. برای اضافه کردن اطلاعات تماس جدید بر روی دکمه <strong>":button" </strong> کلیک کنید. <br> در زمان ثبت اطلاعات تماس مشتری حتما کشور مربوطه را انتخاب کنید. ,',
    'associateAddressDetailsToCustomerText' => 'برای هر مشتری می توان به تعداد نامحدودی آدرس معرفی کرد. برای اضافه کردن آدرس  جدید بر روی دکمه <strong>":button" </strong> کلیک کنید. <br> در زمان ثبت آدرس  مشتری حتما کشور مربوطه را انتخاب کنید. ',
    'pleaseWait' => 'لطفا منتظر بمانید',
    'help-block'                            => array(

        'user'     => array(
            'first_name'   => array(
                1 => 'نام ترجیحا به فارسی نوشته شود'
            ),
            'last_name'    => array(
                1 => 'نام خانوادگی ترجیحا به فارسی نوشته شود'
            ),
            'username'     => array(
                1 => 'نام کاربری حتما به انگلیسی نوشته شود'
            ),
            'password'     => array(
                1 => 'کلمه عبور حداقل باید از ۶ حرف تشکیل شده باشد',
            ),
            'mobile_number' => array(
                1 => 'شماره تلفن حتما با کد کشور شروع شود به عنوان مثال 0060142239204',
                2 => 'صفر های ابتدایی کد کشور حتما نوشته شود',
                3 => 'بین ارقام فاصله نباشد و تمامی ارقام به انگلیسی نوشته شود'
            ),
            'new_password' => array(
                1 => 'چنانچه قصد تغییر کلمه عبور را ندارید این فیلد را خالی بگذارید'
            )
        ),

        'customer' => array(
            'first_name'   => array(
                1 => 'نام مشتریان فارسی زبان حتما به فارسی نوشته شود',
                2 => 'در نوشتن نام های چند بخشی حتما بین هر بخش فاصله گذاشته شود: به عنوان مثال : محمد حسین',
                3 => 'مشتریانی که کلمه الله در نام  خود دارند، کلمه الله به صورت کامل و با فاصله ذکر شود. مانند: نعمت الله'

            ),
            'last_name'    => array(
                1 => 'نام خانوادگی مشتریان فارسی زبان حتما به فارسی نوشته شود',
                2 => 'در نوشتن نام خانوادگی همزه استفاده نشود.  به عنوان مثال : کتیرایی ',
                3 => 'در نوشتن نام های خانوادگی چند بخشی حتما بین هر بخش فاصله گذاشته شود:  به عنوان مثال : اسلام نژاد',
                4 => 'مشتریانی که از طریق صرافی های داخل ایران معرفی می شوند، حتما نام صرافی بعد از نام خانوادگی نوشته شود. به عنوان مثال:  بهمنی - صرافی پارسیان '
            ),
            'fathers_name' => array(
                1 => 'نام پدر مشتریان فارسی زبان حتما به فارسی نوشته شود'
            )
        )
    ),


    'validation'                            => array(
        'bank_name_required'           => 'نام بانک مشتری را وارد کنید',
        'account_number_required'      => 'شماره حساب مشتری را وارد کنید',
        'account_holder_name_required' => 'نام کامل صاحب حساب را وارد کنید',
        'mobile_number_required'       => 'شماره تلفن همراه مشتری را وارد کنید',
        'address_required' => 'آدرس مشتری را وارد کنید'
    )

);