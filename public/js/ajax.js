$(document).ready(function ()
    {
        //Xử lý Login
        $('#loginForm').submit(function (event){
            event.preventDefault();

            $.ajax(
                {
                    url: $(this).attr('action'),
                    type: 'POST',
                    data: $(this).serialize(),
                }
            )
        })
        $('#change_passForm').submit(function (event){
            event.preventDefault();

            $.ajax(
                {
                    url: $(this).attr('action'),
                    type: 'POST',
                    data: $(this).serialize(),
                }
            )
        })
        $('#registerForm').submit(function (event){
            event.preventDefault();

            $.ajax(
                {
                    url: $(this).attr('action'),
                    type: 'POST',
                    data: $(this).serialize(),
                }
            )
        })
        $('#sendEmailForm').submit(function (event){
            event.preventDefault();

            $.ajax(
                {
                    url: $(this).attr('action'),
                    type: 'POST',
                    data: $(this).serialize(),
                }
            )
        })
    }
)
