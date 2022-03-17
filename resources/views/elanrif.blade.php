<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="css/picture.css">
    </head>
    <body>

        
<div class="d-flex justify-content-center">
    <nav class="navbar navbar-expand-lg navbar-light bg-light ">
  <div class="container-fluid">

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 text-capitalize align-items-center">
          
        <li class="nav-item me-5">
         <a class="nav-link active fw-bold fs-3" ia-currearnt="page" href="#"><i class="fa-brands fa-apple"></i> hootsuite</a >
        </li>
        <li class="nav-item">
          <a class="nav-link active fw-bold mx-3" aria-current="page" href="#">plate forme</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active fw-bold mx-3" href="#">for faits</a>
        </li>
          <li class="nav-item">
          <a class="nav-link active fw-bold mx-3" href="#">entreprise de tetouan </a>
        </li>
          <li class="nav-item">
          <a class="nav-link active fw-bold mx-3" href="#">L'éducation</a>
        </li>
          
        
        <li class="nav-item ms-5">
          <a class="nav-link active">contactez-nous</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active">se connecter</a>
        </li>
        <li class="nav-item ms-2">
          <button type="button" class="btn-success mt-1 round-3">s'inscrire </button>
        </li>
     
      </ul>
      
  </div>
    
    </div>
  </div>
 
<br><br>
<div class="text-center ">

    <h1 class="fw-bold pt-5">Contactez-nous</h1>
    <p>Vous voulez savoir comment Hoosuite peut résoudre les problèmes spécifiques à votre entreprise ? Parlons.</p>
</div>
<br>


<div class="container px-4 mt-5">
  <div class="row gx-2">
    <div class="col">
     <div class="shadow-lg p-3 mb-5 bg-body arrondi bg-light">
         <h3 class="fw-bold">Contacter le service commercial</h3>
         <form action="" method="poster">
             <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label fw-bold fs-6">Prénom</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="firstname@example.com">
             </div>
              <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label fw-bold fs-6">Nom de famille</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Lastname@example.com">
             </div>
              <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label fw-bold fs-6">Adresse e-mail professionnelle</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="emailadress@example.com">
             </div>
              <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label fw-bold fs-6">Société</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="namecompany@example.com">
             </div>
         </form>
     </div>
    </div>
    <div class="col mt-5">
      <div class="p-3 bg-light mt-4">
          <h4 class="fw-bold ms-4">Autres façons de se connecter</h4>
          <p class="text-body ms-4 fs-6">Appelez, envoyez-nous un e-mail, envoyez-nous une carte postale -- tout ce qui vous convient, nous <br/> serons là.</p>
          <br><br>
          <ul style="list-style:none">
              <li class="nav-item d-flex align-item-center" >
                  <i class="fa-solid fa-headphones-simple text-light rounded-circle p-2 bg-primary"></i><a class="nav-link active text-info" aria-currearnt="page " href="#">Centre d'aide</a>
              </li>
              <hr class="ms-5">
              <li class="d-flex align-item-center">
                  <i class="fa-solid fa-message text-light round-circle p-2 bg-primary"></i><a class="nav-link active text-info" aria-currearnt="page" href ="#">Obtenir une nouvelle assistance</a>
              </li>
          </ul>
      </div>
    </div>
  </div>
</div>
        <script src="{{asset('js/app.js')}}"></script>
    </body>
   
</html>