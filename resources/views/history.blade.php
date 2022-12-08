@extends('layouts.admin')

@section('content')
<!-- START PROFILE -->

<hr class="featurette-divider">
<div class="row featurette">

    <div class="col-md-12">

        <h2 class="featurette-heading">History</span></h2>

        <div class="row">
            <div class="col-3 mh-100 border-end">

                <div class="list-group">
                    @include('includes.navigationprofile')
                </div>

                
                @if ($airtags != null)
                <h4 class="mt-4">Airtags</h4>
                <div class="list-group">
                    @foreach($airtags as $airtag)
                    <a href="/history/{{ $airtag->serialnumber }}" class="list-group-item list-group-item-action">{{
                        $airtag->itememoji }} {{ $airtag->itemname }}</a>
                    @endforeach
                </div>
                @endif

            </div>
            <div class="col mh-100">
                <!-- START MESSAGE -->
                @if($message = Session::get('success'))
                <div class="alert alert-info">
                    {{ $message }}
                </div>
                @endif
                <!-- END MESSAGE -->

                <div class="p-5 mb-2 rounded-3 bg-opacity-50 map-canvas border-5" id="map">
                    <div class="container-fluid jumbo text-bg-primary">
                        <!-- <h1 class="display-5 fw-bold">Custom jumbotron</h1>
                  <p class="col-md-8 fs-4">Using a series of utilities, you can create this jumbotron, just like the one in previous versions of Bootstrap. Check out the examples below for how you can remix and restyle it to your liking.</p>
                  <button class="btn btn-secondary btn-lg" type="button">Example button</button> -->
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection

@section('scripts')

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDVTmIH1hT6FNzHr35NhWTNm-6bTWtmIAk" async defer></script>
<script
    src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
<script>
    function getCoords() {

        @if ($history != null)
        var locations = [            
            @foreach($history as $coord)
        ['{{ $coord->id }}', '{{ $coord->locationlatitude }}', '{{ $coord->locationlongitude }}'],
                @endforeach
        ];
        return locations;
        @endif
    }
</script>

<script src="/js/maps.js?t={{ time() }}"></script>

@endsection