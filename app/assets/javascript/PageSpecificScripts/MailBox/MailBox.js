module.exports = function () {

    $(document).ready(function () {


        $('.mail-table .selectAll.checkbox').on('click',selectAllMails);

        $('.mail-table .delete-mail-button').on('click',deleteSelectedMails);


        function deleteSelectedMails(){
            var mails = $('.mail-row');
            var selectedMails = [];
            mails.each(function(index,mail_row){
                if($(mail_row).find('.checkbox').hasClass('checked')){
                    selectedMails.push($(mail_row).data('remoteid'));
                    $(mail_row).fadeOut();
                }
            });
            $.post('/mails/delete',{mails : selectedMails});
        }


        function selectAllMails() {

            var shouldCheck = $('.mail-table div.checkbox').hasClass('checked');
            if (shouldCheck) {
                $('.mail-table div.checkbox').addClass('checked');
                return;
            }

            $('.mail-table div.checkbox').removeClass('checked');
        }


    });

}
