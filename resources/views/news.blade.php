@extends('layouts.master')

@section('content')
<h2 class="featurette-heading mb-4">News</span></h2>

<!-- START NEWS -->
@foreach($newsItems as $newsItem)
<div class="row featurette">
    

    @if($loop->iteration % 2 == 0)
    <div class="col-md-5">
        <img src="/images/news/{{$newsItem->image}}" width="100%">
    </div>
    @endif

    <div class="col-md-7">

        <h2 class="featurette-heading">{{$newsItem->title}}</span></h2>
        <p class="text-muted">Published by: aftermathematic- {{ date('d-m-Y', strtotime($newsItem->created_at)) }}</p>
        <p class="lead">{{$newsItem->content}}</p>
    </div>

    @if($loop->iteration % 2 != 0)
    <div class="col-md-5">
        <img src="/images/news/{{$newsItem->image}}" width="100%">
    </div>
    @endif

</div>
<hr class="featurette-divider">
@endforeach
<!-- END NEWS -->
@endsection

@section('scripts')

<script>

</script>

@endsection