@extends('admin.layouts.dashboard')

@section('content-header')

<div class="row mb-2">
    <div class="col-sm-6">
      <h1 class="m-0 text-dark">EDITAR CLIENTE</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="{{ route('admin') }}">Inicio</a></li>
        <li class="breadcrumb-item"><a href="{{ route('clientes.index') }}">Categoría</a></li>
        <li class="breadcrumb-item active">{{ $cliente->nombre }}</li>
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

  <form action="{{ route('clientes.update', $cliente->id) }}" method="POST">
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
        <label for="Nombres" class="form-label">Nombres</label>
        <input type="text" class="form-control" id="Nombres" name="Nombres"
        value="{{old('Nombres') ?? $cliente->Nombres}}">
      </div>
      <div class="form-group">
        <label for="Apellidos" class="form-label">Apellidos</label>
        <input type="text" class="form-control" id="Apellidos" name="Apellidos"
        value="{{old('Apellidos') ?? $cliente->Apellidos}}">
      </div>
      <div class="form-group">
        <label for="Correo" class="form-label">Correo</label>
        <input type="text" class="form-control" id="Correo" name="Correo"
        value="{{old('Correo') ?? $cliente->Correo}}">
      </div>
      <div class="form-group">
        <label for="Contraseña" class="form-label">Contraseña</label>
        <input type="password" class="form-control" id="Contraseña" name="Contraseña"
        value="{{old('Contraseña') ?? $cliente->Contraseña}}">
      </div>
      <div class="form-group">
        <label for="Direccion" class="form-label">Direccion</label>
        <input type="text" class="form-control" id="Direccion" name="Direccion"
        value="{{old('Direccion') ?? $cliente->Direccion}}">
      </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
      <button type="submit" class="btn btn-success">Actualizar</button>
    </div>
  </form>
</div>
@endsection
