@extends('admin.layouts.dashboard')

@section('content-header')

<div class="row mb-2">
    <div class="col-sm-6">
      <h1 class="m-0 text-dark">{{ $cliente->nombre }}</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="{{ route('admin') }}">Inicio</a></li>
        <li class="breadcrumb-item"><a href="{{ route('clientes.index') }}">Clientes</a></li>
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
    <div class="card-body">

      <div class="form-group">
        <label for="id" class="form-label">
            ID # {{ $cliente->id }}
        </label>
      </div>
      <div class="form-group">
        <label class="form-label">
            Apellidos: {{ $cliente->Apellidos }}
        </label>
      </div>
      <div class="form-group">
        <label class="form-label">
            Nombres: {{ $cliente->Nombres }}
        </label>
      </div>
      <div class="form-group">
        <label class="form-label">
            Correo: {{ $cliente->Correo }}
        </label>
      </div>
      <div class="form-group">
        <label class="form-label">
            Direccion: {{ $cliente->Direccion }}
        </label>
      </div>
      <div class="form-group">
        <label for="nombre" class="form-label">
            Fecha de Creación: {{ $cliente->created_at }}
        </label>
      </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
      <a href="{{ route('clientes.index') }}" class="btn btn-link"> Regresar </a>
    </div>
</div>
@endsection
