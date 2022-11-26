@extends('layouts.admin')

@section('content')
<!-- START PROFILE -->

<hr class="featurette-divider">
<div class="row featurette">

    <div class="col-md-12">

        <h2 class="featurette-heading">Update profile</span></h2>

        <div class="row">
            <div class="col-3 mh-100 border-end">
                <ul>
                    <li><a href="{{ route('updateprofile') }}">Update profile</a></li>
                </ul>
            </div>
            <div class="col mh-100">
                2 of 3
            </div>
        </div>

    </div>
</div>

@endsection

@section('scripts')
<script>

</script>
@endsection