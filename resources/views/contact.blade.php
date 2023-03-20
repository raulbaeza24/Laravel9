@extends('layouts.app')

@section('title', 'Contact')
@section('meta-description', 'Contact meta description')

@section('content')
<h1>Contacto</h1>

@guest
    <h2>Parece que aquí no hay nada :/ </h2>
    <h3>¡Inicia sesión para ver tu información de perfil!</h3>
@endguest

@auth
<h2>Mi nombre es: {{Auth::user()->name}}</h2>
<h2>Mi correo es: {{Auth::user()->email}}</h2> 
@endauth


@endsection
  
