@extends('admin.layouts.dashboard')

@section('content-header')

<div class="row mb-2">
    <div class="col-sm-6">
      <h1 class="m-0 text-dark">{{ $categoria->nombre }}</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Inicio</a></li>
        <li class="breadcrumb-item"><a href="{{ route('categorias.index') }}">Categoría</a></li>
        <li class="breadcrumb-item active">{{ $categoria->nombre }}</li>
      </ol>
    </div><!-- /.col -->
  </div><!-- /.row -->

@endsection

@section('content')
<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title"></h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
    <div class="card-body">

      <div class="form-group">
        <label for="id" class="form-label">
            ID # {{ $categoria->id }}
        </label>
      </div>
      <div class="form-group">
        <label for="nombre" class="form-label">
            Nombre: {{ $categoria->nombre }}
        </label>
      </div>
      <div class="form-group">
        <label for="nombre" class="form-label">
            Mostrar: {{ $categoria->ocultar == 0 ? 'Visible' : 'No visible' }}
        </label>
      </div>
      <div class="form-group">
        <label for="nombre" class="form-label">
            Fecha de Creación: {{ $categoria->created_at }}
        </label>
      </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
      <a href="{{ route('categorias.index') }}" class="btn btn-link"> Regresar </a>
    </div>
</div>
@endsection
