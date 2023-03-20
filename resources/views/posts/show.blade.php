<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

<body style="background-color: #023047">
    <div class="text-center">
    <font color="white">
    <h1>
    {{$post->title}}
</h1>
@if (session('status'))
<div>
    {{session('status')}}
</div> 
@endif
<p>
    {{$post->body}}
</p>

<a href="{{route('posts.index')}}" type="button" class="btn btn-success">Regresar</a>
<a href="" type="button" class="btn btn-danger">Imprimir PDF</a>
    </font>
    </div>
</body>
