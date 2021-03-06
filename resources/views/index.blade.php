@extends('layouts.appIndex')

@section('contenido')
    <!-- Page Features -->
    <div class="row text-center">

      @foreach ($listaDeListas as $lista)
        @foreach ($lista->libros as $libro)
          <div class="col-lg-3 col-md-2 m-2 p-2">
            <div class="card h-100">
              <div class="card-body">
                <h4 class="card-title">Titulo:{{$libro -> Titulo}}</h4>
                <h6 class="card-subtitle mb-2 text-muted">Autor:{{$libro -> Autor}}</h6>
                <h6 class="card-text">Genero: {{$libro->Genero}}</h6>        
              <a href="/profiles/{{$libro->listaLibro->user->id}}"> {{$libro->listaLibro->user->name}}</a>
            </div>
            </div>
          </div>
        @endforeach
      @endforeach 

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->
@endsection  