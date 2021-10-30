<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('alumnos_id') }}
            {{ Form::select('alumnos_id', $alumnos , $nota->alumnos_id, ['class' => 'form-control' . ($errors->has('alumnos_id') ? ' is-invalid' : ''), 'placeholder' => 'Alumnos Id']) }}
            {!! $errors->first('alumnos_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cursos_id') }}
            {{ Form::select('cursos_id',$cursos, $nota->cursos_id, ['class' => 'form-control' . ($errors->has('cursos_id') ? ' is-invalid' : ''), 'placeholder' => 'Cursos Id']) }}
            {!! $errors->first('cursos_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('docentes_id') }}
            {{ Form::select('docentes_id',$docentes, $nota->docentes_id, ['class' => 'form-control' . ($errors->has('docentes_id') ? ' is-invalid' : ''), 'placeholder' => 'Docentes Id']) }}
            {!! $errors->first('docentes_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nota1') }}
            {{ Form::text('nota1', $nota->nota1, ['class' => 'form-control' . ($errors->has('nota1') ? ' is-invalid' : ''), 'placeholder' => 'Nota1']) }}
            {!! $errors->first('nota1', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nota2') }}
            {{ Form::text('nota2', $nota->nota2, ['class' => 'form-control' . ($errors->has('nota2') ? ' is-invalid' : ''), 'placeholder' => 'Nota2']) }}
            {!! $errors->first('nota2', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nota3') }}
            {{ Form::text('nota3', $nota->nota3, ['class' => 'form-control' . ($errors->has('nota3') ? ' is-invalid' : ''), 'placeholder' => 'Nota3']) }}
            {!! $errors->first('nota3', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nota4') }}
            {{ Form::text('nota4', $nota->nota4, ['class' => 'form-control' . ($errors->has('nota4') ? ' is-invalid' : ''), 'placeholder' => 'Nota4']) }}
            {!! $errors->first('nota4', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('promedio') }}
            {{ Form::text('promedio', $nota->promedio, ['class' => 'form-control' . ($errors->has('promedio') ? ' is-invalid' : ''), 'placeholder' => 'Promedio']) }}
            {!! $errors->first('promedio', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('parcial') }}
            {{ Form::text('parcial', $nota->parcial, ['class' => 'form-control' . ($errors->has('parcial') ? ' is-invalid' : ''), 'placeholder' => 'Parcial']) }}
            {!! $errors->first('parcial', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>

        <a class="btn btn-success" href="{{ route('notas.index') }}"> Volver</a>
    </div>
</div>
