$("form#todoForm").submit(function(event){
    $.ajax({
        url: '/user/messages' ,
        type: 'post',
        cache: false,
        dataType: 'json',
        data: $('form#messageForm').serialize(),
        beforeSend: function() {
            $('#preloader').show();
        },
        success: function(data) {
            if(data=="1"){
                $('#message-compose').modal('hide');
                $messageElement = $('<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button>Your message is sent</div>');
                $('.messageHolder').html($messageElement);
            }
        },
        error: function(xhr, textStatus, thrownError) {

            $messageElement = $('<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">×</button>' + xhr.responseText + '</div>');
            $('.messageHolder').html($messageElement);

        },
        complete : function(){
            $('#preloader').hide();
        }
    });
    event.preventDefault();
});