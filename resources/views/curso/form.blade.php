<div class="box box-info padding-1">
    <div class="box-body">


        <div class="form-group">
            {{ Form::label('docentes_id') }}
            {{ Form::select('docentes_id', $docentes ,$curso->docentes_id, ['class' => 'form-control' . ($errors->has('docentes_id') ? ' is-invalid' : ''), 'placeholder' => 'Docentes Id']) }}
            {!! $errors->first('docentes_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('nombrecurso') }}
            {{ Form::text('nombrecurso', $curso->nombrecurso, ['class' => 'form-control' . ($errors->has('nombrecurso') ? ' is-invalid' : ''), 'placeholder' => 'Nombrecurso']) }}
            {!! $errors->first('nombrecurso', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('año') }}
            {{ Form::text('año', $curso->año, ['class' => 'form-control' . ($errors->has('año') ? ' is-invalid' : ''), 'placeholder' => 'Año']) }}
            {!! $errors->first('año', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ciclo') }}
            {{ Form::text('ciclo', $curso->ciclo, ['class' => 'form-control' . ($errors->has('ciclo') ? ' is-invalid' : ''), 'placeholder' => 'Ciclo']) }}
            {!! $errors->first('ciclo', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
        <button type="submit" class="btn btn-success" href="{{ route('cursos.index') }}">Volver</button>

    </div>
</div>
