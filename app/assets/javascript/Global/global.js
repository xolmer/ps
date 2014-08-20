$('.has-error input').one('keypress',function(){
    //we will hide server side validation errors as soon as user starts changing input value
    $(this).parents('.form-group').removeClass('has-error').find('.form-errors').remove();
});