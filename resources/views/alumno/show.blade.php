@extends('layouts.app')

@section('template_title')
    {{ $alumno->name ?? 'Show Alumno' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Alumno</span>
                        </div>
                        <div class="float-right">
                            <a href="{{ route('alumnos.pdf') }}" class="btn btn-danger "  data-placement="left">
                                {{ __('PDF') }}
                              </a>

                            <a class="btn btn-primary" href="{{ route('alumnos.index') }}">
                                <span class="fi-action-undo"></span> Volver</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $alumno->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido:</strong>
                            {{ $alumno->apellido }}
                        </div>
                        <div class="form-group">
                            <strong>Fechanacimiento:</strong>
                            {{ $alumno->fechanacimiento }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $alumno->direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Genero:</strong>
                            {{ $alumno->genero }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $alumno->telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Correo:</strong>
                            {{ $alumno->correo }}
                        </div>
                        <div class="form-group">
                            <strong>Clave:</strong>
                            {{ $alumno->clave }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
