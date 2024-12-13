@extends('admin.layouts.dashboard')

@section('content-header')

<div class="row mb-2">
    <div class="col-sm-6">
      <h1 class="m-0 text-dark">{{ $producto->nombre }}</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="{{ route('admin') }}">Inicio</a></li>
        <li class="breadcrumb-item"><a href="{{ route('categorias.index') }}">Producto</a></li>
        <li class="breadcrumb-item active">{{ $producto->nombre }}</li>
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
            ID # {{ $producto->id }}
        </label>
      </div>
      <div class="form-group">
        <label for="nombre" class="form-label">
            Categoría: {{ $producto->categoria->nombre }}
        </label>
      </div>
      <div class="form-group">
        <label for="nombre" class="form-label">
            Nombre: {{ $producto->nombre }}
        </label>
      </div>
      <div class="form-group">
        <label for="nombre" class="form-label">
            Color: {{ $producto->color }}
        </label>
      </div>
      <div class="form-group">
        <label for="nombre" class="form-label">
            Marca: {{ $producto->marca }}
        </label>
      </div>
      <div class="form-group">
        <label for="nombre" class="form-label">
            Material: {{ $producto->material }}
        </label>
      </div>
      <div class="form-group">
        <label for="nombre" class="form-label">
            Talla: {{ $producto->talla }}
        </label>
      </div>
      <div class="form-group">
        <label for="nombre" class="form-label">
            Precio: {{ $producto->precio }}
        </label>
      </div>
      <div class="form-group">
        <label for="nombre" class="form-label">
            Cantidad Existente: {{ $producto->stock }}
        </label>
      </div>
      <div class="form-group">
        <label for="nombre" class="form-label">
            Fecha de Creación: {{ $producto->created_at }}
        </label>
      </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
      <a href="{{ route('productos.index') }}" class="btn btn-link"> Regresar </a>
    </div>
</div>
@endsection
