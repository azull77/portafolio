@extends('layouts.app')

@section('template_title')
    {{ $nota->name ?? 'Show Nota' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Nota</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('notas.index') }}"> Volver</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Alumnos Id:</strong>
                            {{ $nota->alumnos_id }}
                        </div>
                        <div class="form-group">
                            <strong>Cursos Id:</strong>
                            {{ $nota->cursos_id }}
                        </div>
                        <div class="form-group">
                            <strong>Docentes Id:</strong>
                            {{ $nota->docentes_id }}
                        </div>
                        <div class="form-group">
                            <strong>Nota1:</strong>
                            {{ $nota->nota1 }}
                        </div>
                        <div class="form-group">
                            <strong>Nota2:</strong>
                            {{ $nota->nota2 }}
                        </div>
                        <div class="form-group">
                            <strong>Nota3:</strong>
                            {{ $nota->nota3 }}
                        </div>
                        <div class="form-group">
                            <strong>Nota4:</strong>
                            {{ $nota->nota4 }}
                        </div>
                        <div class="form-group">
                            <strong>Promedio:</strong>
                            {{ $nota->promedio }}
                        </div>
                        <div class="form-group">
                            <strong>Parcial:</strong>
                            {{ $nota->parcial }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
