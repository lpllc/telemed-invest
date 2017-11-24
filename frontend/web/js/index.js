//phone
$(document).ready(function(){

    $( ".feedback" ).submit(function(e) {
        e.preventDefault();
        e.stopImmediatePropagation();
        var name = $('.name').val();
        var contacts = $('.contacts').val();
        var theme = $('.theme').val();
        var text = $('.text').val();


        if(name == '' || contacts =='' || theme == '' || text == ''){
            alert('Заполните все поля');
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
                alert('Ваша заявка принята.');
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