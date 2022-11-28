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

                <!-- START MESSAGE -->
                @if($message = Session::get('success'))
                <div class="alert alert-info col-md-9">
                    {{ $message }}
                </div>
                @endif
                <!-- END MESSAGE -->

                <div class="d-flex flex-column align-items-stretch flex-shrink-0">

                    <div class="list-group list-group-flush border-bottom">
                        @foreach($messages as $message)
                        <div class="row featurette">
                            <div class="col-md-9">

                                <a class="list-group-item list-group-item-action py-3 lh-sm" aria-current="true"
                                    data-bs-toggle="collapse" href="#coll{{$message->id}}" role="button"
                                    aria-expanded="false" aria-controls="collapseExample">
                                    <div class="d-flex w-100 align-items-center justify-content-between">
                                        <strong class="mb-1">{{$message->name}} - {{$message->email}}</strong>
                                        <small>{{ date('d-m-Y', strtotime($message->created_at)) }}</small>
                                    </div>
                                    <div class="col mb-1 small">{{$message->message}}</div>
                                </a>

                            </div>
                        </div>

                        <div class="row featurette collapse" id="coll{{$message->id}}">
                            <div class="col-md-8">
                                <div class="list-group-item list-group-item-action py-3 lh-sm">
                                    <div class="col-10 mb-1 small">

                                        <form action="{{ route('reply_message') }}" method="post" class="form">
                                            @csrf

                                            <input type="hidden" name="recipient_email" value="{{$message->email}}" />

                                            <div class="form-outline mb-2">
                                                <textarea name="message" class="form-control" rows="2"
                                                    placeholder="Message" required="required"></textarea>
                                            </div>

                                            <div class="row mb-0">
                                                <div class="col d-flex justify-content-left">
                                                    <button type="submit" id="submit"
                                                        class="btn btn-primary btn-block">Reply</button>
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                </div>
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
    $('<span class="asterisk">⊛</span>').insertBefore(":input[required]");
    $(".asterisk").parent("div").css("position", "relative");

    $(".asterisk").each(function () {
        $(this).css({
            position: "absolute",
            top: 6,
            right: 10,
            color: "#F00",
            fontWeight: "bold",
        });
    });
</script>
@endsection