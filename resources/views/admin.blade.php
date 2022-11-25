@extends('layouts.admin')

@section('content')
<!-- START DASHBOARD -->


<hr class="featurette-divider">
<div class="row featurette">

    <div class="col-md-12">

        <h2 class="featurette-heading">Admin</span></h2>

        <!-- START LOGIN -->

        EMAIL = {{ @session()->get('user.email') }}


        @guest
        <p>not logged in</p>
        @else
        <p>logged in</p>
        @endguest





            <div class="row">
                <div class="col-3 mh-100 border-end">
                    1 of 3
                </div>
                <div class="col mh-100">
                    2 of 3
                </div>
            </div>




        <!-- END LOGIN -->

    </div>
</div>

<!-- END DASHBOARD -->
@endsection

@section('scripts')
<script>

</script>
@endsection