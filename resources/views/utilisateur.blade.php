
@extends('layout')

@section('contenu')

<div class="pt-5 text-center">
<h1 class="text-center text-info"> Bienvenu ! </h1>
         <ul class="ps-0">
             @foreach($utilisateurs as $utilisateur)
             <li class="my-3 fs-5" >
            <a href="/{{$utilisateur->email}}" style = "text-decoration:none;">{{ $utilisateur->email}} </a> 
            </li>
             @endforeach
         </ul>
</div>
@endsection 