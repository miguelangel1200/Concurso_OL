@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Jurados</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                
            
                        
                        <a class="btn btn-warning" href="{{ route('jurados.create') }}">Nuevo</a>
                        
            
                        <table class="table table-striped mt-2">
                                <thead style="background-color:#6777ef">                                     
                                    <th style="display: none;">ID</th>
                                    <th style="color:#fff;">Nombres</th>                                                                  
                                    <th style="color:#fff;">Apellidos</th>                                                                  
                                    <th style="color:#fff;">Número Celular</th>                                                                  
                                    <th style="color:#fff;">DNI</th>                                                               
                                    <th style="color:#fff;">Acciones</th>                                                                   
                              </thead>
                              <tbody>
                            @foreach ($jurados as $jurado)
                            <tr>
                                <td style="display: none;">{{ $jurado->id }}</td>                                
                                <td>{{ $jurado->nombres_jurado }}</td>
                                <td>{{ $jurado->apellidos_jurado }}</td>
                                <td>{{ $jurado->numero_jurado }}</td>
                                <td>{{ $jurado->dni_jurado }}</td>
                                <td>
                                    <form action="{{ route('jurados.destroy',$jurado->id) }}" method="POST">                                        
                                        <a class="btn btn-info" href="{{ route('jurados.edit',$jurado->id) }}">Editar</a>

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
                            {!! $jurados->links() !!}
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection