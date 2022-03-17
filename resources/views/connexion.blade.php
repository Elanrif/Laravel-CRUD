

@extends('layout')

@section('contenu')
   <form class="container w-50" method="post" action="/connexion">
         @csrf
   <div class="mb-3">
    <label class="form-label fw-bold my-3">Email address</label>
    <input type="email" name="email" class="form-control w-75" placeholder="adresse email" value="{{ old('email') }}">
   @if($errors->has('email'))
    <p class="text-danger">{{ $errors->first('email')}} </p>
    @endif
  <div class="mb-3">
    <label  class="form-label fw-bold my-3 ">Password</label>
    <input type="password" name="password" class="form-control w-75" placeholder="Mot de passe" >
  </div>
  @if($errors->has('password'))
   <p class="text-danger">{{ $errors->first('password')}} </p>
  @endif
 
  <button class="rounded-3 btn-primary" type="submit"> Se connecter</button>
</form>
@endsection