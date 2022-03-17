
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

         <link rel="stylesheet" href="css/app.css">

    </head>
    <body>
      
     <nav class="navbar navbar-expand navbar-dark bg-dark" >
     <div class="container-fluid">
         <div class="navbar-nav fs-5">
        @include('partials.navbar-item' , ['lien'=>'/' , 'texte' => 'Acceuil'])
        
        @auth
        
        @include('partials.navbar-item' , ['lien'=> auth()->user()->email, 'texte'=> auth()->user()->email])
        @endauth
         </div>
        
        <div  class ="navbar-nav fs-5 pe-5">
            @auth

           @include('partials.navbar-item',['lien'=>'mon-compte' , 'texte'=>'Mon compte'])
           @include('partials.navbar-item',['lien'=>'deconnexion' ,'texte'=>'Déconnexion'])

         @else 

        @include('partials.navbar-item',['lien'=>'connexion', 'texte'=>'Connexion'])
        @include('partials.navbar-item',['lien' =>'inscription' , 'texte'=>'Inscription'])

        @endauth
        </div>
     </div>
    </nav>

     <div class="mt-5">
         
         @yield('contenu')
     </div>

        <script src="js/app.js"></script>
    </body>
</html>
