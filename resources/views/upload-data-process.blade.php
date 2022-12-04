@extends('layouts.admin')

@section('content')
<!-- START PROFILE -->

<hr class="featurette-divider">
<div class="row featurette">

    <div class="col-md-12">

        <h2 class="featurette-heading">Upload Airtag data</span></h2>

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

    $('#csvfile').on('change', function () {
        var filename = $(this).val().split('\\').pop();
        $("#csv-label").text(filename);
    });
</script>
@endsection