@extends('layouts.master')

@section('content')
<!-- START FAQ CATS LIST-->
<hr class="featurette-divider">
<div class="row featurette">
    <div class="col-md-8">
        <ul class="list-group">
            @foreach($faqCats as $faqCat)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <a href="#{{ ($faqCat->id) }}">{{ $faqCat->title }}</a>
            </li>
            @endforeach
        </ul>
    </div>
</div>
<!-- END FAQ CATS LIST-->

<!-- START FAQ CATS + ITEMS-->
@foreach($faqCats as $faqCat)
<div class="col-md-8 mt-5" id="{{$faqCat->id}}">
    <h2 class="featurette-heading">{{ $faqCat->title }}</h2>
</div>
    @foreach ($faqItems->where('faq_cat_id', $faqCat->id) as $faqItem)
    <hr class="featurette-divider">
    <div class="row featurette">
        <div class="col-md-8">
            <h3 class="featurette-heading">{{ $faqItem->question }}</h3>
            <p class="lead">"{{ $faqItem->answer }}"</p>
        </div>
    </div>
    @endforeach
@endforeach
<!-- END FAQ CATS + ITEMS -->

@endsection

@section('scripts')

<script>

</script>

@endsection