  @extends('booster')

@section('con')

    <?php
    $errors_arr=array();
    if(isset($_GET['error_fields'] )){
        $errors_arr= explode(",",$_GET['error_fieldas']);
    }
    ?>

    <html>

    <head>
        <meta charset="Utf-8">
        <meta name="description" content="new forme">
        <title>learnphp</title>
        <link rel="stylesheet" href="{{URL::asset('learn.css')}}"><style>
            .lowbox {
                width: 150px;
                padding: 11px;
                font-size: 15px;
                line-height: 16px;
                border-radius: 5px;


            }
            .hibox {
                border-radius: 4.5rem;
                width: 343px;
                padding: 14px;
                font-size: 22px;
                line-height: 24px;
                border-radius: 18px;
                margin: 3px;

            }
.fontform1{
    font-size: 21px;
    color: #0e0b0b;
}

        </style>
    </head>

    <body>

    <form  id="contactForm" data-sb-form-api-token="API_TOKEN" >
        <input type="text" class="hibox" name="name" placeholder="Full Name"><br>
        <input type="text" class="hibox" placeholder="username" name="username"> <br>
        <input type="email" class="hibox" placeholder="Email" name="email"><br>
        <input type="password" name="pass" placeholder="Password" class="hibox"><br>

            <input type="number" class="hibox" placeholder="ID NO" name="age"><br> <label for="sex" class="fontform1">gental :</label>
      <label for="male" class="fontsex1">male</label> <input type="radio" name="male" id=""> <label
            for="female" class="fontsex1">female</label> <input type="radio" name="female" id=""><br><label
            for="userinfo">descripion :</label>
       <textarea cols="18" rows="2"> pleas enter text</textarea>
        <input type="submit" name="submit" value="Register">

        <div class="col-md-6">
            <a href="{{ url('login/facebook') }}" class="btn btn-social-icon btn-facebook"><i class="fa fa-facebook"></i></a>
            <a href="{{ url('login/twitter') }}" class="btn btn-social-icon btn-twitter"><i class="fa fa-twitter"></i></a>
            <a href="{{ url('login/google') }}" class="btn btn-social-icon btn-google-plus"><i class="fa fa-google-plus"></i></a>
            <a href="{{ url('login/linkedin') }}" class="btn btn-social-icon btn-linkedin"><i class="fa fa-linkedin"></i></a>
            <a href="{{ url('login/github') }}" class="btn btn-social-icon btn-github"><i class="fa fa-github"></i></a>
            <a href="{{ url('login/bitbucket') }}" class="btn btn-social-icon btn-bitbucket"><i class="fa fa-bitbucket"></i></a>
        </div>

        <script>
            window.fbAsyncInit = function() {
                FB.init({
                    appId      : '1215259552565894',
                    xfbml      : true,
                    version    : 'v14.0'
                });
                FB.AppEvents.logPageView();
            };

            (function(d, s, id){
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) {return;}
                js = d.createElement(s); js.id = id;
                js.src = "https://connect.facebook.net/en_US/sdk.js";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>
    </form>
    <?php




    ?>

    </body>

    </html>



@stop
