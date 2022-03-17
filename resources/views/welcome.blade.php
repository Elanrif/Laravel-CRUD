<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

         <link rel="stylesheet" href="css/app.css">

    </head>
    <body>
      
     <div class="mt-5">
         <h1 class="fs-1 fw-bold text-center text-body"> Bienvenu dans mon site </h1>
         @yield('register')
     </div>

        <script src="js/app.js"></script>
    </body>
</html>
