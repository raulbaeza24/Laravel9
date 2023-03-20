@extends('layouts.app')

@section('title', 'Blog')
@section('meta-description', 'Blog meta description')

@section('content')
<div class="text-center">

<h1>Vista de Publicaciones</h1>

@auth
<a href="{{route('posts.create')}}" class="btn btn-success">
  Crea una nueva publicación
   </a>
@endauth
</div>  

<br>

@foreach ($posts as $post)

<div class="card" style="width: 200px;  height: 200px;
margin: 0 auto; background-color: #0E8388">
  <div class="card-body">
    <p>Nombre de la publicación: </p>

<h2>
 
    <a href="{{route('posts.show', $post)}}" class="btn btn-sucess">
      <font color="white">
     {{ $post->title }}
    </font>
    </a>
  
</h2> 

 
@auth
<div style="display:flex; align-items:flex-start; expand-lg ">

<a href="{{route('posts.edit', $post)}}" class="btn btn-warning">Editar</a>


<form action="{{route('posts.destroy', $post)}}" method="POST">
  @csrf 
  @method('DELETE')
  <button type="submit" class="btn btn-danger" style="py-50">Eliminar</button>
</form>
</div>

@endauth
</div>
</div> 
<br>
@endforeach


@endsection



