<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">


<body style="background-color: #023047">
    <div class="text-center">
    <font color="white">

<h1>
   Edita un  post
</h1>


<form action="{{ route('posts.update', $post) }}" method="POST">
    @csrf @method('PATCH')
    @include('posts.form-fields')
<br>
    <button type="submit" class="btn btn-primary">Actualizar</button>
    <br>
   
</form>

<a href="{{route('posts.index')}}" class="btn btn-success">Regresar</a>
</font>
    </div>
</body>