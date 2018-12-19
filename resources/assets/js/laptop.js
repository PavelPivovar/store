$('#submit_button').click(function(){
    $.ajax({
        url: 'laptop.index.blade.php',
        type: 'POST',
        dataType: 'html',
        data: $('#form_id').serialize(),
        success: function(response) {
            alert(response); // отправлено удачно
        },
        error: function(response) {
            alert(response); // ошибка
        }
    });

});