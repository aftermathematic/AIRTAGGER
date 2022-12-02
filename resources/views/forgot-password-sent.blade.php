@extends('layouts.master')

@section('content')

<!-- START MESSAGE -->
@if($message = Session::get('success'))
<div class="alert alert-info">
    {{ $message }}
</div>
@endif

@if($message = Session::get('status'))
<div class="alert alert-info">
    {{ $message }}
</div>
@endif
<!-- END MESSAGE -->



<div class="row mt-4">
    <div class="col"></div>
    <div class="col-4">
    <h2 class="featurette-heading mb-4">Reset your password</span></h2>

        <p>Check your mailbox. A password reset link has been mailed to you. </p>
        
    </div>
    <div class="col"></div>
</div>
@endsection

@section('scripts')


@endsection