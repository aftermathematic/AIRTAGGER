@extends('layouts.master')

@section('content')
<!-- START FAQ CATS-->
<!-- <ul>
    @foreach($faqCats as $faqCat)
    <li>{{$faqCat->title}}</li>
    @endforeach
</ul> -->
<!-- END FAQ CATS-->

<!-- START FAQ CATS-->

<hr class="featurette-divider">
    <div class="row featurette">
        <div class="col-md-8">
        <ul class="list-group">
@foreach($faqCats as $faqCat)
  <li class="list-group-item d-flex justify-content-between align-items-center">
  <a href="#{{ ($faqCat->id) }}">{{$faqCat->title}}</a>
  </li>
  @endforeach
</ul>
        </div>

    </div>




<!-- END FAQ CATS-->


<!-- START FAQ CATS-->

@foreach($faqCats as $faqCat)


    <div class="col-md-8 mt-5" id="{{$faqCat->id}}">
        <h2 class="featurette-heading">{{$faqCat->title}}</h2>
    </div>

    @foreach ($faqItems->where('faq_cat_id', $faqCat->id) as $faqItem)

    <hr class="featurette-divider">
    <div class="row featurette">



        <div class="col-md-8">
            <h3 class="featurette-heading">{{$faqItem->question}}</h3>
            <p class="lead">{{$faqItem->answer}}</p>
        </div>

    </div>
@endforeach


@endforeach

<!-- END FAQ CATS-->

@endsection

@section('scripts')

<script>

</script>

@endsection