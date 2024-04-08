$(document).ready(function () {
    $('#js-feedback').on('submit', function (e) {
        let data = new FormData(this)
        $.ajax({
            method: $(this).attr('method'),
            url: $(this).attr('action'),
            data: data,
            dataType: 'json',
            processData: false,
            contentType: false,
            success: function (result) {
                if (result.status == 'success') {
                    console.log(result)
                    $('.feedback').append('<div class="feedback__message-sended">' +
                       '<table>' +
                        '<tr><th>ФИО</th> <th>Адрес</th> <th>Телефон</th> <th>email</th></tr>'+
                            '<tr>' +
                                '<td>'+result.data.name +'</td>' +
                                '<td>'+result.data.address +'</td>' +
                                '<td>'+result.data.email +'</td>' +
                                '<td>'+result.data.phone +'</td>' +
                           '</tr>' +
                        '</table></div>'
                    );
                }
                if (result.status == 'error') {
                    alert('ОШИБКА')
                }
            }
        });
        $("#form").trigger('reset');
        e.preventDefault();
    });
})