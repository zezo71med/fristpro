{{--@extends('booster')--}}

{{--@section('con')--}}
{{----}}
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
        <input type="submit" name="submit" value="Register"><br>
    </form>
    <?php




    ?>

    </body>

    </html>



@stop
