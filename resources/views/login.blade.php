@extends('layouts.master')

@section('content')

    <!-- START MESSAGE -->
    @if($message = Session::get('success'))

    <div class="alert alert-info">
        {{ $message }}
    </div>
    @endif
    
    {{ $message }}
    <!-- END MESSAGE -->


    <div class="row mt-4">
        <div class="col"></div>
        <div class="col-4">
            <form action="{{ route('login.validate_login') }}" method="post">
                @csrf

                @if($errors->has('email'))
                <p class="text-danger mb-1">&#8226; {{ $errors->first('email') }}</p>
                @endif
                @if($errors->has('password'))
                <p class="text-danger mb-1">&#8226; {{ $errors->first('password') }}</p>
                @endif            

                <div class="form-outline mb-4">
                    <label for="floatingInput">Email address</label>
                    <input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                </div>

                <div class="form-outline mb-4">
                    <label class="form-label">Password</label>
                    <input name="password" type="password" class="form-control" placeholder="password" />
                </div>

                <div class="row mb-4">
                    <div class="col d-flex justify-content-center">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                            <label class="form-check-label" for="form2Example31"> Remember me </label>
                        </div>
                    </div>


                </div>

                <div class="row mb-4">
                    <div class="col d-flex justify-content-center">
                        <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                            <div class="btn-group me-2" role="group">
                                <button type="submit" class="btn btn-success btn-block mb-4">Sign in</button>
                            </div>
                            <div class="btn-group me-2" role="group">
                                <a href="{{ route('register') }}" class="btn btn-danger btn-block mb-4">Register</a>
                            </div>
                        </div>
                    </div>
                </div>

            </form>
        </div>
        <div class="col"></div>
    </div>
    <div class="row">




    <!-- START LOGIN -->

    @guest
    <p>not logged in</p>
    @else
    <p>logged in</p>
    @endguest

    <!-- END LOGIN -->

    @endsection

    @section('scripts')

    <script>

    </script>

    @endsection