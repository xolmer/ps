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

    }
}
