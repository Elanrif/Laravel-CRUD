
@extends('layout')

@section('contenu')

    <div class="section">

    <nav class="row d-flex justify-content-center">
        <h1 class="title fs-1 text-center col"> {{ $utilisateur->email}}
        </h1>
        @auth
         <form class="text-center col" action="/{{ $utilisateur->email }} /suivis" method="post" >
            @csrf
            @if (auth()->user()->suit($utilisateur))
            {{ method_field('delete')}}
            @endif
            <button type="submit" class="btn btn-primary rounded-3">
                @if(auth()->user()->suit($utilisateur))
                désabonner
                @else 
                suivre 
                @endif
            </button>
        </form>
        @endauth
    </nav>

        @if (auth()->check() AND auth()->user()->id == $utilisateur->id)
        <form class="container w-50" method="post" action="/messages">
         @csrf
   <div class="mb-3">
    <label class="form-label fw-bold my-3 fs-1 text-info">Message</label>
   <textarea name="message"  cols="100" rows="10" placeholder = "Qu'avez-vous à dire ? "></textarea>
   @if($errors->has('message'))
    <p class="text-danger">{{ $errors->first('message')}} </p>
   @endif

 
  <button class="rounded-3 btn-primary" type="submit"> Publier </button>
</form>
        @endif
    </div>

    @foreach ($utilisateur->messages as $message)
    <hr>
    <p class="text-center">
        <strong class="text-center fs-6">{{ $message->contenu}} </strong>
    </p>
    @endforeach
@endsection