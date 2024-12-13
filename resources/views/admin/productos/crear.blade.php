@extends('admin.layouts.dashboard')

@section('content-header')

<div class="row mb-2">
    <div class="col-sm-6">
      <h1 class="m-0 text-dark">NUEVO PRODUCTO</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Inicio</a></li>
        <li class="breadcrumb-item"><a href="{{ route('categorias.index') }}">Producto</a></li>
        <li class="breadcrumb-item active">Nuevo</li>
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

  <form action="{{ route('productos.store') }}" method="post">
    @csrf
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
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre">
      </div>
      <div class="form-group">
        <label for="id_categoria">Categoría</label>
        <select class="form-control" id="id_categoria" name="id_categoria">
            <option value="">Selecciona una categoría</option>
            @foreach ($categorias as $categoria)
                <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
            @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="color" class="form-label">Color</label>
        <input type="text" class="form-control" id="color" name="color">
      </div>
      <div class="form-group">
        <label for="marca" class="form-label">Marca</label>
        <input type="text" class="form-control" id="marca" name="marca">
      </div>
      <div class="form-group">
        <label for="material" class="form-label">Material</label>
        <input type="text" class="form-control" id="material" name="material">
      </div>
      <div class="form-group">
        <label for="talla" class="form-label">Talla</label>
        <input type="text" class="form-control" id="talla" name="talla">
      </div>
      <div class="form-group">
        <label for="precio" class="form-label">Precio</label>
        <input type="number" class="form-control" id="precio" name="precio">
      </div>
      <div class="form-group">
        <label for="stock" class="form-label">Cantidad Existente</label>
        <input type="number" class="form-control" id="stock" name="stock">
      </div>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
      <button type="submit" class="btn btn-success">Guardar</button>
    </div>
  </form>
</div>
@endsection
