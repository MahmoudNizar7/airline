<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,700' rel='stylesheet' type='text/css'>

    <title>لوحة التحكم | شركة المصطفى للسياحة و السفر</title>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
        @import url("https://fonts.googleapis.com/css?family=SourceSansPro");
        * {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }
        html,
        body {
            width: 100%;
            height: 100%;
            background: #f2f1ef;
        }
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        p,
        input,
        button {
            font-family: 'Source Sans Pro', sans-serif;
        }

        input {
            width: 100%;
            border: none;
            margin: 0;
            padding: 20px 30px;
            font-size: 18px;
            font-weight: 200;
            outline: none;
            background: none;
        }
        .login-form {
            width: 360px;
            position: absolute;
            left: 50%;
            top: 50%;
            margin: -260px 0 0 -180px;
        }
        .login-form header {
            background: #22313f;
            color: #fff;
            padding: 30px;
            height: 300px;
            overflow: hidden;
            text-align: center;
        }
        .login-form header .photo,
        .login-form header .user-info {
            width: 100%;
        }
        .login-form header .photo {
            margin-top: 30px;
        }
        .login-form header img {
            border-radius: 50%;
        }
        .login-form header .user-info {
            padding-top: 20px;
        }
        .login-form header .user-info h3,
        .login-form header .user-info h5 {
            font-weight: 200;
        }
        .login-form header .user-info h3 {
            font-size: 36px;
        }
        .login-form header .user-info h5 {
            font-size: 12px;
            letter-spacing: 0.05em;
        }
        .login-form section .input,
        .login-form section .password {
            border-bottom: 1px solid #d2d7d3;
            background: #fff;
        }
        .login-form section .password {
            position: relative;
        }
        .login-form section .password .toggle-password {
            font-size: 12px;
            color: #d2d7d3;
            border: 1px solid #d2d7d3;
            border-radius: 4px;
            padding: 4px 8px;
            position: absolute;
            right: 30px;
            top: 20px;
        }
        .login-form section .password .toggle-password:hover {
            background: #d2d7d3;
            color: #fff;
        }
        .login-form section .confirm-password,
        .login-form section .inner {
            -webkit-transition: all 500ms cubic-bezier(0.645, 0.045, 0.355, 1);
            -moz-transition: all 500ms cubic-bezier(0.645, 0.045, 0.355, 1);
            -o-transition: all 500ms cubic-bezier(0.645, 0.045, 0.355, 1);
            -ms-transition: all 500ms cubic-bezier(0.645, 0.045, 0.355, 1);
            transition: all 500ms cubic-bezier(0.645, 0.045, 0.355, 1);
        }
        .login-form section .confirm-password {
            position: relative;
            -webkit-perspective: 1000px;
            -moz-perspective: 1000px;
            -ms-perspective: 1000px;
            perspective: 1000px;
            height: 64px;
        }
        .login-form section .inner {
            height: 0px;
            -webkit-transform-origin: top;
            -moz-transform-origin: top;
            -o-transform-origin: top;
            -ms-transform-origin: top;
            transform-origin: top;
            -webkit-transform: rotateX(-90deg);
            -moz-transform: rotateX(-90deg);
            -o-transform: rotateX(-90deg);
            -ms-transform: rotateX(-90deg);
            transform: rotateX(-90deg);
            background-color: #d2d7d3;
        }
        .login-form footer {
            background: #fff;
            overflow: hidden;
            -webkit-transition: all 500ms cubic-bezier(0.645, 0.045, 0.355, 1);
            -moz-transition: all 500ms cubic-bezier(0.645, 0.045, 0.355, 1);
            -o-transition: all 500ms cubic-bezier(0.645, 0.045, 0.355, 1);
            -ms-transition: all 500ms cubic-bezier(0.645, 0.045, 0.355, 1);
            transition: all 500ms cubic-bezier(0.645, 0.045, 0.355, 1);
            -webkit-transform: translate3d(0px, -64px, 0px);
            -moz-transform: translate3d(0px, -64px, 0px);
            -o-transform: translate3d(0px, -64px, 0px);
            -ms-transform: translate3d(0px, -64px, 0px);
            transform: translate3d(0px, -64px, 0px);
        }
        .login-form footer a {
            color: #d2d7d3;
            float: left;
            height: 40px;
            line-height: 0px;
            padding: 30px;
        }
        .login-form footer .action a {
            background: #22a7f0;
            color: #fff;
            float: right;
            padding: 30px 60px;
        }
        .login-form footer .action a:hover {
            background: #38b0f2;
        }
        .login-form.confirming .inner {
            height: 64px;
            border-bottom: 1px solid #f2f1ef;
            -webkit-transform: rotateX(0deg);
            -moz-transform: rotateX(0deg);
            -o-transform: rotateX(0deg);
            -ms-transform: rotateX(0deg);
            transform: rotateX(0deg);
            background-color: #fff;
        }
        .login-form.confirming footer {
            border-top: 1px solid #d2d7d3;
            -webkit-transform: translate3d(0px, -1px, 0px);
            -moz-transform: translate3d(0px, -1px, 0px);
            -o-transform: translate3d(0px, -1px, 0px);
            -ms-transform: translate3d(0px, -1px, 0px);
            transform: translate3d(0px, -1px, 0px);
        }

    </style>
</head>
<body>

<div class="login-form">
    <form action="{{ route('login') }}" method="post">
        @csrf
        @php
            $image = \App\Models\Control\Setting::where('key', 'image')->first();
        @endphp
        <header>
            <div class="photo"><img style="margin-top:-60px " src="{{ asset('assets/images/'.$image->value) }}" alt=""/></div>
        </header>
        <section>
            <div class="input">
                <input name="email" class="@error('email') is-invalid @enderror" type="email" placeholder="البريد الإلكتروني"/>
                @error('email')<span
                    class="invalid-feedback" style="color: red;"><strong>{{ __($message) }}</strong></span>@enderror
            </div>
            <div class="password">
                <input name="password" class="@error('password') is-invalid @enderror" type="password" placeholder="كلمة المرور" style="">
                @error('password')<span
                    class="invalid-feedback" style="color: red"><strong>{{ __($message) }}</strong></span>@enderror

            </div>
            <div class="confirm-password">
                <div class="inner">
                    <input placeholder=""/>

                </div>
            </div>
        </section>
        <footer>
            <div class="action"><input type="submit" class="btn btn-info save form-group form-check-input" style="font-size: 20px;font-family: 'Cairo'" value="دخول"></div>
        </footer>
    </form>
</div>

</body>
</html>
