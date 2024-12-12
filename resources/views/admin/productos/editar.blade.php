@extends('admin.layouts.dashboard')

@section('content-header')

<div class="row mb-2">
    <div class="col-sm-6">
      <h1 class="m-0 text-dark">EDITAR PRODUCTO</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Inicio</a></li>
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

  <form action="{{ route('productos.update', $producto->id) }}" method="POST">
      @csrf
      @method('PUT')
    <div class="card-body">
      @if ($errors->any())
          <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
          </div>
      @endif
      <div class="form-group">
        <label for="id" class="form-label">
           ID # {{ $producto->id }}
        </label>
      </div>
      <div class="form-group">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $producto->nombre }}">
      </div>
      <div class="form-group">
        <label for="color" class="form-label">Color</label>
        <input type="text" class="form-control" id="color" name="color" value="{{ $producto->color }}>
      </div>
      <div class="form-group">
        <label for="marca" class="form-label">Marca</label>
        <input type="text" class="form-control" id="marca" name="marca" value="{{ $producto->marca }}>
      </div>
      <div class="form-group">
        <label for="material" class="form-label">Material</label>
        <input type="text" class="form-control" id="material" name="material" value="{{ $producto->material }}>
      </div>
      <div class="form-group">
        <label for="talla" class="form-label">Talla</label>
        <input type="text" class="form-control" id="talla" name="talla" value="{{ $producto->talla }}>
      </div>
      <div class="form-group">
        <label for="precio" class="form-label">Precio</label>
        <input type="number" class="form-control" id="precio" name="precio" value="{{ $producto->precio }}>
      </div>
      <div class="form-group">
        <label for="stock" class="form-label">Cantidad Existente</label>
        <input type="number" class="form-control" id="stock" name="stock" value="{{ $producto->stock }}>
      </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
      <button type="submit" class="btn btn-success">Actualizar</button>
    </div>
  </form>
</div>
@endsection
