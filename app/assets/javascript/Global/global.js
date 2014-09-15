module.exports = function () {

    $('.has-error input').one('keypress', function () {
        //we will hide server side validation errors as soon as user starts changing input value
        $(this).parents('.form-group').removeClass('has-error').find('.form-errors').remove();
    });


    $('.mail-row a.star').on('click',function(){
        var mail_id = $(this).parents('tr.mail-row').data('remoteid');
        $.post('/mails/togglestar',{stared : !$(this).hasClass('stared'),id : mail_id});
        $(this).toggleClass('stared');
    });



}