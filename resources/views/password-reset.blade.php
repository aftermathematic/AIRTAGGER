@extends('layouts.master')

@section('content')

<!-- START MESSAGE -->
@if($message = Session::get('success'))
<div class="alert alert-info">
    {{ $message }}
</div>
@endif

@if($message = Session::get('status'))
<div class="alert alert-info">
    {{ $message }}
</div>
@endif
<!-- END MESSAGE -->



<div class="row mt-4">
    <div class="col"></div>
    <div class="col-4">
    <h2 class="featurette-heading mb-4">Reset your password</span></h2>

        <form action="{{ route('reset-password') }}" method="post" class="form">
            @csrf


            @if($errors->has('password'))
            <p class="text-danger mb-1">&#8226; {{ $errors->first('password') }}</p>
            @endif

            <div class="form-outline mb-4">
                <input name="password" type="password" class="form-control" placeholder="Password" required="required">
            </div>

            <div class="form-outline mb-4">
                <input name="password_confirmation" type="password" class="form-control"
                    placeholder="Password confirmation" required="required"/>
            </div>

            <div class="form-outline mb-4">
                <div class="captcha"></div>
            </div>

            <input type="hidden" name="id" value="{{$user->id}}"/>
            <input type="hidden" name="email" value="{{$email}}"/>
            <input type="hidden" name="token" value="{{$token}}"/>

            <div class="row mb-4">
                <div class="col d-flex justify-content-center">
                    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                        <div class="btn-group me-2" role="group">
                            <button type="submit" id="submit" class="btn btn-primary btn-block mb-4" disabled>Send</button>
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