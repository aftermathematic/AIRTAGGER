@extends('layouts.master')

@section('content')

<!-- START DASHBOARD -->
<div class="row featurette">

    <div class="col-md-12">

        <h2 class="featurette-heading">Profile</span></h2>

        <!-- START ADMIN -->
        <div class="row">
            <div class="col-3">

                <div class="list-group sticky-top">
                    <img src="/images/avatars/{{ $user->image }}" class="img-fluid">
                </div>

            </div>
            <div class="col">
                <!-- START MESSAGES -->

                <div class="d-flex flex-column align-items-stretch flex-shrink-0">
                    <div class="list-group list-group-flush border-bottom">
                        <div class="mb-4">
                            <div class="row featurette">
                                <div class="col-md-9">

                                    <div class="list-group-item list-group-item-action py-3 lh-sm">
                                        <div class="d-flex w-100 align-items-center justify-content-between">
                                            <strong class="mb-1">{{ ucfirst(trans($user->username)) }}</strong>
                                            <p class="text-muted">{{ date('d-m-Y', strtotime($user->birthday )) }}</p>
                                        </div>
                                        <div class="col mb-1 small">{{ $user->aboutme }}</div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>


    </div>
</div>

<!-- END DASHBOARD -->
@endsection