@extends('layouts.admin')

@section('content')

<!-- START DASHBOARD -->
<div class="row featurette">

    <div class="col-md-12">

        <h2 class="featurette-heading">Admin</span></h2>

        <!-- START ADMIN -->
        <div class="row">
            <div class="col-3">
                @include('includes.navigationadmin')
            </div>
            <div class="col">
                <!-- START MESSAGE -->
                @if($message = Session::get('success'))
                <div class="alert alert-info">
                    {{ $message }}
                </div>
                @endif
                <!-- END MESSAGE -->
                <!-- START NEWS ITEM -->

               <div class="d-flex flex-column align-items-stretch flex-shrink-0">
                    <div class="list-group list-group-flush border-bottom">

                        <div class="row featurette" id="coll">
                            <div class="col-md-9">
                                <div class="list-group-item list-group-item-action  lh-sm">

                                    <div class="col-10 mb-1 small">

                                        <form action="{{ route('faqCat.store') }}" method="post" class="form">
                                            @csrf

                                            @if($errors->has('title'))
                                            <p class="text-danger mb-1">&#8226; {{ $errors->first('title') }}</p>
                                            @endif
          
                                            <div class="form-outline mb-4">
                                                <input name="title" type="text" class="form-control"
                                                    placeholder="Title" required="required">
                                            </div>

                                            <div class="form-outline mb-4">
                                                <div class="captcha"></div>
                                            </div>

                                            <input type="hidden" name="adminSection" value="true"/>

                                            <div class="row mb-4">
                                                <div class="col d-flex justify-content-center">
                                                    <div class="btn-toolbar" role="toolbar"
                                                        aria-label="Toolbar with button groups">
                                                        <div class="btn-group me-2" role="group">
                                                            <button type="submit" id="submit"
                                                                class="btn btn-primary btn-block mb-4"
                                                                disabled>Insert</button>
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
                </div>
                <!-- END NEWS ITEM -->
            </div>
        </div>
        <!-- END ADMIN -->

    </div>
</div>

<!-- END DASHBOARD -->
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

    $('<span class="asterisk">???</span>').insertBefore(":input[required]");
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