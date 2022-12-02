@extends('layouts.master')

@section('content')




<div class="row mt-4">
    <div class="col"></div>
    <div class="col-4">

        <!-- START MESSAGE -->
        @if($message = Session::get('success'))
        <div class="alert alert-info">
            {{ $message }}
        </div>
        @endif
        <!-- END MESSAGE -->

        <h2 class="featurette-heading mb-4">Login</span></h2>
        <form action="{{ route('login.validate_login') }}" method="post" class="form">
            @csrf

            @if($errors->has('email'))
            <p class="text-danger mb-1">&#8226; {{ $errors->first('email') }}</p>
            @endif
            @if($errors->has('password'))
            <p class="text-danger mb-1">&#8226; {{ $errors->first('password') }}</p>
            @endif

            <div class="form-outline mb-4">
                <input name="email" type="email" class="form-control" id="floatingInput" placeholder="Email address">
            </div>

            <div class="form-outline mb-4">
                <input name="password" type="password" class="form-control" placeholder="Password" />
            </div>

            <div class="form-outline mb-4">
                <div class="captcha"></div>
            </div>

            <div class="row mb-4">
                <div class="col d-flex justify-content-center">
                    <div class="form-check">
                        <input name="remember" class="form-check-input" type="checkbox" value="" checked />
                        <label class="form-check-label" for="form2Example31"> Remember me </label>
                        | <a href="{{ route('forgot-password') }}">Forgot password?</a>
                    </div>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col d-flex justify-content-center">
                    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                        <div class="btn-group me-2" role="group">
                            <button type="submit" id="submit" class="btn btn-success btn-block mb-4" disabled>Sign
                                in</button>
                        </div>
                        <div class="btn-group me-2" role="group">
                            <a href="{{ route('user.create') }}" class="btn btn-danger btn-block mb-4">Register</a>
                        </div>
                    </div>
                </div>
            </div>

        </form>
    </div>
    <div class="col"></div>
</div>
@endsection

@section('scripts')
<link rel="stylesheet" type="text/css" href="/css/captcha.css">
<!-- captcha plugin -->
<script type="text/javascript" src="/js/captcha.jquery.js"></script>

<script>
    $(document).ready(function () {
        $('.form').captcha();
        $('#captchacheck').click(function () {
            $('#submit').prop('disabled', false);
        });
    });

    $('<span class="asterisk">⊛</span>').insertBefore(":input[required]");
    $(".asterisk").parent("div").css("position", "relative");

    $(".asterisk").each(function () {
        $(this).css({
            position: "absolute",
            top: 6,
            right: 10,
            color: "#F00",
            fontWeight: "bold",
        });
    });
</script>
@endsection