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

        <form action="{{ route('validate_updatedetails') }}" method="post" class="form">
            @csrf

            @if($errors->has('username'))
            <p class="text-danger mb-1">&#8226; {{ $errors->first('username') }}</p>
            @endif
            @if($errors->has('email'))
            <p class="text-danger mb-1">&#8226; {{ $errors->first('email') }}</p>
            @endif

            <div class="form-outline mb-4">
                <input name="username" type="text" class="form-control" placeholder="Username" value="{{ $user->username }}" required="required">
            </div>

            <div class="form-outline mb-4">
                <input name="email" type="email" class="form-control" placeholder="Email address" value="{{ $user->email }}" required="required">
            </div>

            <div class="form-outline mb-4">
                <input name="birthday" type="date" class="form-control" placeholder="Birthday" value="{{ $user->birthday }}">
            </div>

            <div class="form-outline mb-4">
                <textarea name="aboutme" class="form-control" rows="2" placeholder="About me">{{ $user->aboutme }}</textarea>
            </div>

            <div class="form-outline mb-4">
                <div class="captcha"></div>
            </div>

            <div class="row mb-4">
                <div class="col d-flex justify-content-center">
                    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                        <div class="btn-group me-2" role="group">
                            <button type="submit" id="submit" class="btn btn-primary btn-block mb-4">Update</button>
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
<script>

</script>
@endsection