@extends('layouts.admin')

@section('content')
<!-- START PROFILE -->

<!-- START MESSAGE -->
@if($message = Session::get('success'))
<div class="alert alert-info">
    {{ $message }}
</div>
@endif
<!-- END MESSAGE -->

<hr class="featurette-divider">
<div class="row featurette">

    <div class="col-md-12">

        <h2 class="featurette-heading">Airtag history</span></h2>



    </div>
</div>

@endsection

@section('scripts')
<link rel="stylesheet" type="text/css" href="/css/captcha.css">
<!-- captcha plugin -->
<script type="text/javascript" src="/js/captcha.jquery.js"></script>

<script>


</script>
@endsection