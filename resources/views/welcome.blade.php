@extends('layouts.app')

@section('title', 'Home')
@section('meta-description', 'Home meta description')



@section('content')
<div class="text-center">
<h1>Inicio</h1>
@auth
<h2>Bienvenido {{Auth::user()->name}} !</h2>
@endauth

@guest
    <h2>Aplicación de Bolsa de trabajo </h2>
    <h3>¡Registrate e Inicia sesión!</h3>
@endguest

</div>
@endsection
  


 