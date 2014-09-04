
//When creating a new customer certain fields are not known in advance and therefore
//they can not be assigned validation rules by jquery.validate. To get around this
//validation rules are added to the markup for example, to make the bank_name required
//a css class of 'required' is added to the input field. These input fields are defined in
//createCustomer.blade.php . The respective error message of each input is defined in 'phrases',
//language file.
//Create customer page consists of 3 wizard steps and validation rules specified here pertain tot he
//first step of the wizard only.

module.exports = function() {
$("#create-customer-form").validate({
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
        first_name: 'required',
        last_name: 'required',
        fathers_name: 'required',
        country_of_residence: 'required'
    },
    messages: {
        required : 'این فیلد اجباری است',
        first_name: {
            required: 'لطفا نام مشتری را وارد کنید'
        },
        last_name: {
            'required': 'لطفا نام خانوادگی مشتری را وارد کنید'
        },
        fathers_name: {
            'required': 'نام پدر مشتری  اجباری است'
        },
        country_of_residence: {
            'required': 'کشور محل سکونت مشتری را انتخاب کنید'
        },
        ".bank_name": {
            required: 'لطفا نام بانک مشتری را وارد کنید'
        }
    }

});
}