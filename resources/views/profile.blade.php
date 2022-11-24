@extends('layouts.master')

@section('content')
<!-- START DASHBOARD -->

<hr class="featurette-divider">
<div class="row featurette">

    <div class="col-md-7">

        <h2 class="featurette-heading">Profile</span></h2>

    <!-- START LOGIN -->

   EMAIL = {{ @session()->get('user.email') }}


    @guest
    <p>not logged in</p>
    @else
    <p>logged in</p>
    @endguest



    <!-- END LOGIN -->

    </div>
</div>

<!-- END DASHBOARD -->
@endsection

@section('scripts')
<script>

</script>
@endsection