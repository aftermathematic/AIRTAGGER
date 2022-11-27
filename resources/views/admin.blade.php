@extends('layouts.admin')

@section('content')
<!-- START DASHBOARD -->

<div class="row featurette">

    <div class="col-md-12">

        <h2 class="featurette-heading">Admin</span></h2>

        <!-- START ADMIN -->
        <div class="row">
            <div class="col-3 mh-100">
                @include('includes.navigationadmin')
            </div>
            <div class="col mh-100">
                2 of 3
            </div>
        </div>
        <!-- END ADMIN -->

    </div>
</div>

<!-- END DASHBOARD -->
@endsection

@section('scripts')
<script>

</script>
@endsection