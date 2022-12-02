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
                <!-- START users -->
                @if(Session::get('success'))
                <div class="alert alert-info col-md-9">
                    {{ Session::get('success') }}
                </div>
                @endif
                <!-- END MESSAGE -->

                <div class="d-flex flex-column align-items-stretch flex-shrink-0">
                    <div class="list-group list-group-flush border-bottom">

                        <div class="row featurette collapse" id="coll">
                            <div class="col-md-9">
                                <div class="list-group-item list-group-item-action py-3 lh-sm">

                                    <div class="col-10 mb-1 small">

                                        <form action="{{ route('user.admin.store') }}" method="post"
                                            enctype="multipart/form-data" class="form">
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
                                                <input name="username" type="text" class="form-control"
                                                    placeholder="Username" required="required">
                                            </div>

                                            <div class="form-outline mb-4">
                                                <input name="email" type="email" class="form-control"
                                                    placeholder="Email address" required="required">
                                            </div>

                                            <div class="form-outline mb-4">
                                                <input name="birthday" type="text" class="form-control"
                                                    placeholder="Birthday" onfocus="(this.type='date')">
                                            </div>

                                            <div class="form-outline mb-4">
                                                <textarea name="aboutme" class="form-control" rows="2"
                                                    placeholder="About me"></textarea>
                                            </div>

                                            <div class="form-outline mb-4 input-group custom-file-button">
                                                <label class="input-group-text" for="image" role="button">File</label>
                                                <label for="image" class="form-control" id="image-label"
                                                    role="button">Profile photo</label>
                                                <input type="file" class="d-none" id="image" name="image">
                                            </div>

                                            <div class="form-outline mb-4 form-check form-switch">
                                                <input class="form-check-input" type="checkbox" id="adminSelector"
                                                    name="admin">
                                                <label class="form-check-label" for="adminSelector">Admin ?</label>
                                            </div>

                                            <div class="form-outline mb-4">
                                                <input name="password" type="password" class="form-control"
                                                    placeholder="Password" required="required">
                                            </div>

                                            <div class="form-outline mb-4">
                                                <input name="password_confirmation" type="password" class="form-control"
                                                    placeholder="Password confirmation" />
                                            </div>

                                            <div class="form-outline mb-4">
                                                <div class="captcha"></div>
                                            </div>

                                            <input type="hidden" name="adminSection" value="true" />

                                            <div class="row mb-4">
                                                <div class="col d-flex justify-content-center">
                                                    <div class="btn-toolbar" role="toolbar"
                                                        aria-label="Toolbar with button groups">
                                                        <div class="btn-group me-2" role="group">
                                                            <button type="submit" id="submit"
                                                                class="btn btn-danger btn-block mb-4"
                                                                disabled>Register</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>




                        <div class="row featurette">
                            <div class="col-md-9">
                                <div class="list-group-item list-group-item-action lh-sm">

                                <a href="{{ route('user.create') }}" class="btn btn-primary">Create new user</a>

                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Username</th>
                                                <th>Email</th>
                                                <th class="text-center">Admin</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($users as $user)
                                            <tr>
                                                <td>{{$user->id}}</td>
                                                <td>{{$user->username}}</td>
                                                <td>{{$user->email}}</td>
                                                <td class="text-center"><input class="active toggle-class"
                                                        {{$user->admin == 1 ?'checked':''}} type="checkbox" name="admin"
                                                    id="{{$user->id}}"></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END users -->
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


    // AJAX Checkbox handling
    // $(function () {
    //     $(".alert").hide();
    // });

    $('.toggle-class').on('change', function () {

        let admin = $(this).prop('checked') == true ? 1 : 0;
        let id = $(this).prop('id');

        if (confirm("Do you want to update the admin status of this user?")) {

            $.ajax({
                type: 'GET',
                dataType: 'json',
                url: ' /admin_promote',
                data: { 'id': id, 'admin': admin },
                async: false
            });

        } else {
            let admin = isAdmin == 1 ? false : true;
            $(this).prop('checked', admin);
        }

    });
</script>
@endsection