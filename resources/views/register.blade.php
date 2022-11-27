@extends('layouts.master')

@section('content')

<!-- START MESSAGE -->
@if($message = Session::get('success'))
<div class="alert alert-info">
    {{ $message }}
</div>
@endif
<!-- END MESSAGE -->

<div class="row mt-4">
    <div class="col"></div>
    <div class="col-4">
        <h2 class="featurette-heading mb-4">Register</span></h2>

        <form action="{{ route('login.validate_registration') }}" method="post" enctype="multipart/form-data"
            class="form">
            @csrf

            @if($errors->has('username'))
            <p class="text-danger mb-1">&#8226; {{ $errors->first('username') }}</p>
            @endif
            @if($errors->has('email'))
            <p class="text-danger mb-1">&#8226; {{ $errors->first('email') }}</p>
            @endif
            @if($errors->has('password'))
            <p class="text-danger mb-1">&#8226; {{ $errors->first('password') }}</p>
            @endif
            @if($errors->has('image'))
            <p class="text-danger mb-1">&#8226; {{ $errors->first('image') }}</p>
            @endif

            <div class="form-outline mb-4">
                <input name="username" type="text" class="form-control" placeholder="Username" required="required">
            </div>

            <div class="form-outline mb-4">
                <input name="email" type="email" class="form-control" placeholder="Email address" required="required">
            </div>

            <div class="form-outline mb-4">
                <input name="birthday" type="text" class="form-control" placeholder="Birthday"
                    onfocus="(this.type='date')">
            </div>

            <div class="form-outline mb-4">
                <textarea name="aboutme" class="form-control" rows="2" placeholder="About me"></textarea>
            </div>

            <div class="form-outline mb-4 input-group custom-file-button">
                <label class="input-group-text" for="image" role="button">File</label>
                <label for="image" class="form-control" id="image-label" role="button">Profile photo</label>
                <input type="file" class="d-none" id="image" name="image">
            </div>

            <div class="form-outline mb-4">
                <input name="password" type="password" class="form-control" placeholder="Password" required="required">
            </div>

            <div class="form-outline mb-4">
                <input name="password_confirmation" type="password" class="form-control"
                    placeholder="Password confirmation" />
            </div>

            <div class="form-outline mb-4">
                <div class="captcha"></div>
            </div>

            <div class="row mb-4">
                <div class="col d-flex justify-content-center">
                    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                        <div class="btn-group me-2" role="group">
                            <button type="submit" id="submit" class="btn btn-danger btn-block mb-4" disabled>Register</button>
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

    $('#image').on('change', function () {
        var filename = $(this).val().split('\\').pop();
        $("#image-label").text(filename);
    });
</script>
@endsection