$(function () {
    $('#formLogin').on('submit', function (e) {
        e.preventDefault();

        var email = $('input[name=email]').val();
        var pass = $('input[name=pass]').val();

        $.ajax({
            type: 'POST',
            url: 'login.php',
            data: {
                email: email,
                pass: pass
            },
            success: function (msg) {
                alert(msg)
                //window.location.href = 'login.php';
            }
        });
    });
});