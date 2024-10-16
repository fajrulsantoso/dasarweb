$('#upload-form').submit(function(e) {
    e.preventDefault();
    var forData = new FormData(this);

    $.ajax({
        type: 'POST',
        url: 'upload.php', // Pastikan URL ini sesuai
        data: forData,
        cache: false,
        contentType: false,
        processData: false,
        success: function(response) {
            $('#status').html(response);
        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.error(textStatus, errorThrown);
            $('#status').html('Terjadi kesalahan saat mengunggah file.');
        }
    });
});
