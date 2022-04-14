@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Inscripciones</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                
            
                        
                        <a class="btn btn-warning" href="{{ route('inscripciones.create') }}">Nuevo</a>
                        
            
                        <table class="table table-striped mt-2">
                                <thead style="background-color:#6777ef">                                     
                                    <th style="color:#fff;">N° Pareja</th>
                                    <th style="color:#fff;">Nombre Varon</th>                                                                  
                                    <th style="color:#fff;">Nombre Dama</th>                                                                  
                                    <th style="color:#fff;">Categoria</th>                                                       
                                    <th style="color:#fff;">Acciones</th>                                                                   
                              </thead>
                              <tbody>
                            @foreach ($inscripciones as $inscripcion)
                            <tr>
                                <td>{{ $inscripcion->id }}</td>                                
                                <td>{{ $inscripcion->nombres_1 }} {{ $inscripcion->apellidos_1 }}</td>
                                <td>{{ $inscripcion->nombres_2 }} {{ $inscripcion->apellidos_2 }}</td>
                                <td>{{ $inscripcion->categoria_ins }}</td>
                                <td>
                                    <form action="{{ route('inscripciones.destroy',$inscripcion->id) }}" method="POST">                                        
                                        <a class="btn btn-info" href="{{ route('inscripciones.edit',$inscripcion->id) }}">Detalle</a>

                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Borrar</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>

                        <!-- Ubicamos la paginacion a la derecha -->
                        <div class="pagination justify-content-end">
                            {!! $inscripciones->links() !!}
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection