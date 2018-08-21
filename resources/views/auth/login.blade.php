<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login V9</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/register&login/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/register&login/main.css') }}">
    <!--===============================================================================================-->
</head>
<body>


<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
    <div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
        <form method="POST" action="{{route('login')}}" class="login100-form validate-form">
            @csrf
				<span class="login100-form-title p-b-37">
					وارد شوید
				</span>
            <div class="wrap-input100 validate-input m-b-20" data-validate="ایمیل خود را وارد کنید">
                <input class="input100" type="email" name="email" placeholder="ایمیل" value="{{old('email')}}">
                <span style="color: red" class="focus-input100">
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>ایمیل وارد شده صحیح نمی باشد</strong>
                        </span>
                    @endif
                </span>
            </div>

            <div class="wrap-input100 validate-input m-b-25" data-validate = "رمز عبور خود را وارد کنید">
                <input class="input100" type="password" name="password" placeholder="رمز عبور">
                <span style="color: red" class="focus-input100">
                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>رمز عبور مطابق نیست</strong>
                        </span>
                    @endif
                </span>
            </div>

            <div class="container-login100-form-btn">
                <button class="login100-form-btn">
                   ورود
                </button>
            </div>


        </form>


    </div>
</div>



<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
<script src="{{ URL::asset('js/main.js') }}"></script>

</body>
</html>