//phone
$(document).ready(function(){


    $( ".feedback" ).submit(function(e) {
        e.preventDefault();
        e.stopImmediatePropagation();
        var name = $('.name').val();
        var message_language = $('.choose-language').val();
        var contacts = $('.contacts').val();
        var theme = $('.theme').val();
        var text = $('.text').val();

        if(name == '' || contacts =='' || theme == '' || text == ''){
            var msg = (message_language == 'ru') ? 'Заполните все поля' : 'All fields must be filled';
            alert(msg);
            return false;
        }

        $.ajax({
            url: '/site/feedback',
            type: 'POST',
            async : false,
            data: {
                name: name,
                contacts: contacts,
                theme: theme,
                text: text,
                reCaptcha : $('#g-recaptcha-response').val()
            },
            success: function (response) {

                if($('#g-recaptcha-response').val()) {
                    var msg = (message_language == 'ru') ? 'Ваша заявка принята.' : 'Your application is submitted.';
                    // alert(msg);
                    $('.pop').magnificPopup('close');

                    setTimeout(function(){
                        $('.thank-you').click();
                    } , 500);

                    // $('.pop').dialog('close');
                    $('.name').val('');
                    $('.contacts').val('');
                    $('.theme').val('');
                    $('.text').val('');
                    $('#g-recaptcha-response').val('');
                    $('#submit_captcha').hide();
                }



            }
        });
        return false;
    });

});