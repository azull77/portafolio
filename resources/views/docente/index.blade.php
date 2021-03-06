@extends('layouts.app')

@section('template_title')
    Docente
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Docente') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('alumnos.pdf') }}" class="btn btn-danger "  data-placement="left">
                                    {{ __('PDF') }}
                                  </a>
                                  &nbsp;
                                <a href="{{ route('docentes.create') }}" class="btn btn-primary  float-right"  data-placement="left">
                                  {{ __('Crear Nuevo') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>

										<th>Nombre</th>
										<th>Apellido</th>
										<th>Dui</th>
										<th>Telefono</th>
										<th>Email</th>
										<th>Clave</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($docentes as $docente)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $docente->nombre }}</td>
											<td>{{ $docente->apellido }}</td>
											<td>{{ $docente->dui }}</td>
											<td>{{ $docente->telefono }}</td>
											<td>{{ $docente->email }}</td>
											<td>{{ $docente->clave }}</td>

                                            <td>
                                                <form action="{{ route('docentes.destroy',$docente->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('docentes.show',$docente->id) }}"><i class="fa fa-fw fa-eye"></i> Mostrar</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('docentes.edit',$docente->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Borrar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $docentes->links() !!}
            </div>
        </div>
    </div>
@endsection
