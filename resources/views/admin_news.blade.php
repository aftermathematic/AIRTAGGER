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

                <div class="d-flex flex-column align-items-stretch flex-shrink-0">

                    <div class="list-group list-group-flush">

                        <div class="row featurette">
                            <div class="col-md-9">
                                <div class="list-group-item list-group-item-action py-3 lh-sm">

                                <a href="{{ route('newsItem.create') }}" class="btn btn-primary">Create new News
                                        item</a>

                                    @if(count($newsItems))
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Title</th>
                                                <th>Content</th>
                                                <th>Image</th>
                                                <th>Update</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($newsItems as $newsItem)

                                            <tr>
                                                <td>{{$newsItem->id}}</td>
                                                <td>{{$newsItem->title}}</td>
                                                <td>{{$newsItem->content}}</td>
                                                <td><img src="/images/news/{{$newsItem->image}}" class="img-fluid"></td>
                                                <th><a class="btn btn-warning update"
                                                        href="{{ route('newsItem.edit', ['id' => $newsItem->id]) }}"
                                                        role="button">Update</a></th>
                                                <th><a class="btn btn-danger delete"
                                                        href="{{ route('newsItem.destroy', ['id' => $newsItem->id]) }}"
                                                        role="button"
                                                        onclick="return confirm('Are you sure?')">Delete</a></th>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    @endif

                                    

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
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