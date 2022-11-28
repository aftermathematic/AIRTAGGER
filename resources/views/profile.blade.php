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
            <div class="col-6 mh-100">
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

@endsection

@section('scripts')
<script>

</script>
@endsection