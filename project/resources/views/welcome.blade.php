<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Workpro</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-image: url(http://localhost/project/public/img/background.jpg);
                background-size: cover;
                


                background-color: #9ad6d4;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                        <a href="{{ url('/profile') }}/{{ Auth::user()->slug }}">Profile</a>
                    @else
                        <a href="{{ url('/login') }}"><b><font color="red">Login</font></b></a>
                        <a href="{{ url('/register') }}"><b><font color="red">Register</font></b></a>
                    @endif
                </div>
            @endif

            <div class="content">
            
                <div class="title m-b-md">
                   <b> <font color="white"> Welcome to </font></b> 

                </div>
                <div class="title m-b-md">
                    <b><font color="white"> Workpro! </font></b>

                </div>
               <!--  <img src="{{url('../')}}/public/img/of.jpg"  width="1500px" height="500px"  /> -->


                
            </div>
        </div>
    </body>
</html>
