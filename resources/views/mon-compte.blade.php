
@extends('layout')

@section('contenu')
<div class="section text-center mt-5">
    <h1 class="title fs-1 pt-5"> Mon compte </h1>
    <p class="fs-3 text-info"> Vous êtes bien connecté .</p>

   
</div>
    <form class="container w-50" method="post" action="/modification-mot-de-passe">
         @csrf
  <div class="mb-3">
    <label  class="form-label fw-bold my-3 ">Password</label>
    <input type="password" name="password" class="form-control w-75" placeholder="Mot de passe" >
  </div>
  @if($errors->has('password'))
   <p class="text-danger">{{ $errors->first('password')}} </p>
  @endif
 
  <div class="mb-3">
    <label  class="form-label fw-bold my-3">Password-confirmation</label>
    <input type="password" name="password_confirmation" class="form-control w-75" placeholder="Mot de passe (confirmation)" >
  </div>
  @if($errors->has('password_confirmation'))
  <p class="text-danger">{{ $errors->first('password_confirmation')}}</p>
  @endif
  
  <button class="rounded-3 btn-primary" type="submit">Modifier</button>
</form>

@endsection