@extends('layouts.master')

@section('content')
<!-- START NEWS -->
@foreach($newsItems as $newsItem)
<div class="row featurette">
    <h2 class="featurette-heading mb-4">News</span></h2>

    @if($loop->iteration % 2 == 0)
    <div class="col-md-5">
        <img src="https://snworksceo.imgix.net/car/0e048d5a-258a-42ac-97d0-9a232242f8f3.sized-1000x1000.jpg"
            width="100%">
    </div>
    @endif

    <div class="col-md-7">

        <h2 class="featurette-heading">{{$newsItem->title}}</span></h2>
        <p class="text-muted">Published by: aftermathematic- {{$newsItem->created_at}}</p>
        <p class="lead">{{$newsItem->content}}</p>
    </div>

    @if($loop->iteration % 2 != 0)
    <div class="col-md-5">
        <img src="https://snworksceo.imgix.net/car/0e048d5a-258a-42ac-97d0-9a232242f8f3.sized-1000x1000.jpg"
            width="100%">
    </div>
    @endif

</div>
@endforeach
<!-- END NEWS -->
@endsection

@section('scripts')

<script>

</script>

@endsection