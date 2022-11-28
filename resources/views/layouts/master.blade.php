<!doctype html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Airtagger</title>
</head>

<body>
   <div class="container mb-5">

      <!-- START NAVIGATION -->
      <header class="d-flex flex-wrap justify-content-center py-1 mb-1">

         @include('includes.letters')

         <!-- <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
            <span class="fs-4"></span>
         </a> -->

         @include('includes.navigation')

      </header>
      <!-- END NAVIGATION -->

      @yield('content')


   </div>

   <footer class="footer fixed-bottom">
      <div class="container">
         <span class="text-dark">(c) 2022 Airtagger by <a href="https://github.com/aftermathematic" target="_blank">aftermathematic</a>)</span>
      </div>
   </footer>




   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
      crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha256-98vAGjEDGN79TjHkYWVD4s87rvWkdWLHPs5MC3FvFX4=" crossorigin="anonymous"></script>

      @yield('scripts')





   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
   <link href="{{ asset('css/page.css') }}" rel="stylesheet">
   <script src="{{ asset('js/page.js') }}"></script>
</body>

</html>