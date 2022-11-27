@extends('layouts.master')

@section('content')

<!-- START DASHBOARD -->
<div class="row featurette">

    <div class="col-md-12">

        <h2 class="featurette-heading">FAQ</span></h2>

        <!-- START ADMIN -->
        <div class="row">
            <div class="col-3">

                <div class="list-group sticky-top">
                    <!-- START FAQ CATS LIST-->
                    @foreach($faqCats as $faqCat)
                    <a href="#{{ ($faqCat->id) }}" class="list-group-item list-group-item-action">&#9657; {{ $faqCat->title
                        }}</a>
                    @endforeach
                    <!-- END FAQ CATS LIST-->
                </div>

            </div>
            <div class="col">
                <!-- START MESSAGES -->

                <div class="d-flex flex-column align-items-stretch flex-shrink-0">

                    <div class="list-group list-group-flush border-bottom">
                        @foreach($faqCats as $faqCat)

                        <div class="mb-4">
                            <div class="row featurette">
                                <div class="col-md-9" id="{{ $faqCat->id }}">

                                    <h2>{{ $faqCat->title }}</h2>

                                </div>
                            </div>

                            @foreach ($faqItems->where('faq_cat_id', $faqCat->id) as $faqItem)
                            <div class="row featurette">
                                <div class="col-md-9">

                                    <div class="list-group-item list-group-item-action py-3 lh-sm">
                                        <div class="d-flex w-100 align-items-center justify-content-between">
                                            <strong class="mb-1">{{$faqItem->question}}</strong>
                                        </div>
                                        <div class="col mb-1 small">{{$faqItem->answer}}</div>
                                    </div>

                                </div>
                            </div>
                            @endforeach
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