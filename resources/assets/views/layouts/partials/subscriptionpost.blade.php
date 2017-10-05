<script>
    var frm = $('#download-book-form');
    frm.submit(function (ev) {
        $.ajax({
            type: frm.attr('method'),
            url: frm.attr('action'),
            data: frm.serialize(),
            success: function (data) {
                alert('Успешно!');
            }
        });
        ev.preventDefault();
        frm[0].reset();
    });
</script>