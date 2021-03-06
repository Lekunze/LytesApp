<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="apple-touch-icon" sizes="76x76" href="{{asset('new-ui/img/apple-icon.png')}}">
        <link rel="icon" type="image/png" href="{{asset('img/logo-x.png')}}">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>Store Not Found</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                color: #B0BEC5;
                display: table;
                font-weight: 300;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 72px;
                margin-bottom: 40px;
            }

            .message{
                font-size: 30px;
                margin-top: -40px !important;
            }

            @media screen and (min-width: 360px){
                body{
                    padding: 40px !important;
                }

                .title{
                    font-size: 50px !important;
                }

            }
            @media screen and (min-width: 375px){
                body{
                    padding: 40px !important;
                    font-size: 50px !important;
                }

            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Store Doesn't Exist Yet. <a href="/register"> Add one </a></div>
                <p style="text-align: center" class="message"> Or, You will be directed to the homepage!</p>
            </div>
        </div>
    </body>

    <script>
        window.setTimeout(function () {
            window.location.href = "/";
        },5000);

    </script>

</html>
