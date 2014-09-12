/**
 * Created by saarang on 9/12/14.
 */

module.exports = function () {
    $(document).ready()
    {

        $('.button-group-radio button').click(function () {
            $(this).siblings().removeClass("active");
            $('input#priority').val($(this).data('priority'));
        });


        $('#compose_mail_form').validate({
            errorElement: 'div',
            wrapper: 'div',
            errorClass: 'form-error farsi',
            highlight: function (element) {
                $(element).parents('.form-group').addClass('has-error');
            },
            unhighlight: function (element) {
                $(element).parents('.form-group').removeClass('has-error');
            },
            rules: {
                subject: 'required',
                'recipients[]': 'required',

            },
            messages: {
                required : 'این فیلد اجباری است',
                'recipients[]' : {
                    required : 'حداقل یک گیرنده برای نامه مشخص کنید'
                },
                subject: {
                    required: 'لطفا عنوان نامه را مشخص کنید'
                },
               
            }
        });

    }
}
