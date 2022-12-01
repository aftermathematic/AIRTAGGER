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
                <!-- START users -->
                @if(Session::get('success'))
                <div class="alert alert-info col-md-9">
                    {{ Session::get('success') }}
                </div>
                @endif
                <!-- END MESSAGE -->

                <div class="mb-3">
                    <a href="{{ route('faqCat.create') }}" class="btn btn-primary">Create new FAQ category</a>

                    <a href="{{ route('faqItem.create') }}" class="btn btn-primary">Create new FAQ Q/A</a>
                </div>

                @foreach($faqCats as $faqCat)
                <div class="row featurette">
                    <div class="col-md-9">
                        <div class="list-group-item list-group-item-action lh-sm">

                            @if(count($faqCats))
                            <table class="table table-striped border-secondary border-4">

                                <thead>


                                    <tr>

                                        <th class="fs-3">{{$faqCat->title}}</th>

                                        <th class="col-md-1"><a class="btn btn-warning update"
                                                href="{{ route('faqCat.edit', ['id' => $faqCat->id]) }}"
                                                role="button">Update</a></th>
                                        <th class="col-md-1"><a class="btn btn-danger delete"
                                                href="{{ route('faqCat.destroy', ['id' => $faqCat->id]) }}"
                                                role="button" onclick="return confirm('Are you sure?')">Delete</a></td>
                                    </tr>

                                </thead>
                            </table>

                            <table class="table table-striped">

                                <tbody>
                                    @foreach( $faqCat->faqItems as $faqItem)
                                    <tr>
                                        <td class="text-justify">{{$faqItem->question}}</td>
                                        <td class="text-justify col-md-5">{{$faqItem->answer}}</td>
                                        <td class="col-md-1"><a class="btn btn-warning update"
                                                href="{{ route('faqItem.edit', ['id' => $faqItem->id]) }}"
                                                role="button">Update</a></td>
                                        <td class="col-md-1"><a class="btn btn-danger delete"
                                                href="{{ route('faqItem.destroy', ['id' => $faqItem->id]) }}"
                                                role="button" onclick="return confirm('Are you sure?')">Delete</a></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            @endif



                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <!-- END users -->
    </div>
</div>
<!-- END ADMIN -->

</div>
</div>

<!-- END DASHBOARD -->
@endsection

@section('scripts')
<link rel="stylesheet" type="text/css" href="/css/captcha.css">
<!-- captcha plugin -->
<script type="text/javascript" src="/js/captcha.jquery.js"></script>
<script>

</script>

@endsection