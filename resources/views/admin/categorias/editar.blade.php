@extends('admin.layouts.dashboard')

@section('content-header')

<div class="row mb-2">
    <div class="col-sm-6">
      <h1 class="m-0 text-dark">EDITAR CATEGORIA</h1>
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

  <form action="{{ route('categorias.update', $categoria->id) }}" method="POST">
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
           ID # {{ $categoria->id }}
        </label>
      </div>
      <div class="form-group">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $categoria->nombre }}">
      </div>
      <div class="form-group">
        <label for="mostrar" class="form-label">Mostrar</label>
        <select class="custom-select" id="mostrar" name="mostrar" value={{ $categoria->mostrar }}>
          <option {{ $categoria->mostrar == 0 ? 'selected' : '' }} value='falso'>No visible</option>
          <option {{ $categoria->mostrar == 1 ? 'selected' : '' }} value='verdadero'>Visible</option>
        </select>
      </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
      <button type="submit" class="btn btn-success">Actualizar</button>
    </div>
  </form>
</div>
@endsection
