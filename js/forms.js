jQuery(function($) {
    $(document).ready(function () {

        $(document).on('click','.form-control',function (e) {
            e.preventDefault();
            if ($('form.signup-form').find('.signup_detect').val().length > 0) return false;
            $.ajax({
                type: "POST",
                url: '/ajax/signup.php',
                data: 'EMAIL='+$('form.signup-form').find('[name="EMAIL"]').val(),
                success: function (p) {
                    open_saccess_popup();
                }
            });
        });

        function open_saccess_popup() {

        }

    });
});


