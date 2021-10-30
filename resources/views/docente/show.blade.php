@extends('layouts.app')

@section('template_title')
    {{ $docente->name ?? 'Show Docente' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Mostrar Docente</span>
                        </div>
                        <div class="float-right">
                            <a href="{{ route('alumnos.pdf') }}" class="btn btn-danger "  data-placement="left">
                                {{ __('PDF') }}
                              </a>
                              &nbsp;
                            <a class="btn btn-primary" href="{{ route('docentes.index') }}"> Volver</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $docente->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido:</strong>
                            {{ $docente->apellido }}
                        </div>
                        <div class="form-group">
                            <strong>Dui:</strong>
                            {{ $docente->dui }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $docente->telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $docente->email }}
                        </div>
                        <div class="form-group">
                            <strong>Clave:</strong>
                            {{ $docente->clave }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
