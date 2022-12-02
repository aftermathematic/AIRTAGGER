@extends('layouts.admin')

@section('content')
<!-- START PROFILE -->

<hr class="featurette-divider">
<div class="row featurette">

    <div class="col-md-12">

        <h2 class="featurette-heading">Profile</span></h2>

        <div class="row">
            <div class="col-3 mh-100 border-end">
                @include('includes.navigationprofile')
            </div>
            <div class="col mh-100">
                <div class="col-4">

                    <!-- START MESSAGE -->
                    @if($message = Session::get('success'))
                    <div class="alert alert-info">
                        {{ $message }}
                    </div>
                    @endif
                    <!-- END MESSAGE -->

                    <form action="{{ route('user.updatepw') }}" method="post" class="form">
                        @csrf

                        @if($errors->has('password'))
                        <p class="text-danger mb-1">&#8226; {{ $errors->first('password') }}</p>
                        @endif

                        <div class="form-outline mb-4">
                            <input name="password" type="password" class="form-control" placeholder="Password"
                                required="required">
                        </div>

                        <div class="form-outline mb-4">
                            <input name="password_confirmation" type="password" class="form-control"
                                placeholder="Password confirmation" required="required"/>
                        </div>

                        <div class="form-outline mb-4">
                            <div class="captcha"></div>
                        </div>

                        <input type="hidden" name="id" value="{{$user->id}}" />

                        <div class="row mb-4">
                            <div class="col d-flex justify-content-center">
                                <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                    <div class="btn-group me-2" role="group">
                                        <button type="submit" id="submit"
                                            class="btn btn-primary btn-block mb-4" disabled>Update</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>

    </div>
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