@extends('layouts.app')

@section('title', 'Register')
@section('meta-description', 'Register meta description')

@section('content')
<div class="text-center">
<h1>Inicio de Sesión</h1>


<form action="{{ route('login') }}" method="POST">
    @csrf

    <label>
        Ingresa tu correo electrónico: 
        <br>
        <input name="email" type="email" value="{{old('email')}}">
       
        @error('email')
        <br>
            <small style="color: red">
            {{$message}}
            </small>
        @enderror
    </label> <br>

    <label>
        Ingresa tu contraseña:  
        <br>
        <input name="password" type="password">
       
        @error('password')
        <br>
            <small style="color: red">
            {{$message}}
            </small>
        @enderror
    </label> <br>

    <label>
        Confirma tu contraseña:
        <br>
        <input name="password_confirmation" type="password">
       
        @error('password_confirmation')
        <br>
            <small style="color: red">
            {{$message}}
            </small>
        @enderror
    </label> <br>

    <label>
        <input name="remember" type="checkbox">
        <span>
            Recuérdame
            </span>
    </label>
 
    <button type="submit" class="btn btn-success">Iniciar</button>
    <br>

    <p>¿Aún no tienes una cuenta registrada? <br>
    ¡Registrate! </p>
   
   
</form>
</div>
@endsection
  
