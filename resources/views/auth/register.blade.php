
@extends('layouts.app')

@section('title', 'Register')
@section('meta-description', 'Register meta description')

@section('content')
<div class="text-center">
<h1>Registro de cuentas: </h1>


<form action="{{ route('register') }}" method="POST">
    @csrf
    <label>
       Ingresa tu nombre: 
        <br>
        <input autofocus="autofocus" name="name" type="text" value="{{old('name')}}">
       
        @error('name')
        <br>
            <small style="color: red">
            {{$message}}
            </small>
        @enderror
    </label> <br>

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
 

    <button type="submit" class="btn btn-success">Iniciar Registro</button>
    <br>
  
   
</form>
</div>
@endsection
  
