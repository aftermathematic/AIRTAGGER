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
                <!-- START MESSAGES -->

                <div class="d-flex flex-column align-items-stretch flex-shrink-0">

                    <div class="list-group list-group-flush border-bottom">
                        @foreach($messages as $message)
                        <div class="row featurette">
                    <div class="col-md-9">
                        
                        <a href="#" class="list-group-item list-group-item-action py-3 lh-sm" aria-current="true">
                            <div class="d-flex w-100 align-items-center justify-content-between">
                                <strong class="mb-1">{{$message->name}} - {{$message->email}}</strong>
                                <small>{{$message->created_at->format('d-m-Y')}}</small>
                            </div>
                            <div class="col-10 mb-1 small">{{$message->message}}</div>
                        </a>

                        </div>
                </div>
                        @endforeach
                    </div>
                </div>

                <!-- END MESSAGES -->
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