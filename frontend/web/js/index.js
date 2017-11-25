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
            data: {
                name: name,
                contacts: contacts,
                theme: theme,
                text: text
            },
            success: function (response) {
                var msg = (message_language == 'ru') ? 'Ваша заявка принята.' : 'Your application is submitted.';
                alert(msg);
                $('.pop').magnificPopup('close');
                // $('.pop').dialog('close');
                $('.name').val('');
                $('.contacts').val('');
                $('.theme').val('');
                $('.text').val('');

            }
        });
        return false;
    });

});