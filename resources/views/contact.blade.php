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
    <h2 class="featurette-heading mb-4">Contact</span></h2>

        <form action="{{ route('validate_message') }}" method="post" class="form">
            @csrf

            @if($errors->has('name'))
            <p class="text-danger mb-1">&#8226; {{ $errors->first('name') }}</p>
            @endif
            @if($errors->has('email'))
            <p class="text-danger mb-1">&#8226; {{ $errors->first('email') }}</p>
            @endif
            @if($errors->has('message'))
            <p class="text-danger mb-1">&#8226; {{ $errors->first('message') }}</p>
            @endif

            <div class="form-outline mb-4">
                <input name="name" type="text" class="form-control" placeholder="Name" required="required">
            </div>

            <div class="form-outline mb-4">
                <input name="email" type="email" class="form-control" placeholder="Email address" required="required">
            </div>

            <div class="form-outline mb-4">
                <textarea name="message" class="form-control" rows="2" placeholder="Message" required="required"></textarea>
            </div>

            <div class="form-outline mb-4">
                <div class="captcha"></div>
            </div>

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