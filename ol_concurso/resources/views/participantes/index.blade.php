@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Participantes</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                            <table class="table table-striped mt-2">
                                <thead style="background-color: #6777ef;">
                                    <th style="display: none;">ID</th>
                                    <th style="color:#fff">Nombres</th>
                                    <th style="color:#fff">Apellidos</th>
                                    <th style="color:#fff">DNI</th>
                                    <th style="color:#fff">Fecha Nacimiento</th>
                                    <th style="color:#fff">Categoria</th>
                                    <th style="color:#fff">Foto DNI</th>
                                    <th style="color:#fff">Edad</th>
                                    <th style="color:#fff">Número Celular</th>
                                    <th style="color:#fff">Estado</th>
                                   
                                </thead>
                                <tbody>
                                    @foreach($participantes as $participante)
                                        <tr>
                                            <td style="display: none;">{{$participante->id}}</td>
                                            <td>{{$participante->nombres_par}}</td>
                                            <td>{{$participante->apellidos_par}}</td>
                                            <td>{{$participante->dni_par}}</td>
                                            <td>{{$participante->fecha_nac_par}}</td>
                                            <td>{{$participante->categoria_par}}</td>
                                            <td>{{$participante->foto_dni}}</td>
                                            <td>{{$participante->edad_par}}</td>
                                            <td>{{$participante->num_celular}}</td>
                                            
                                            
                                            <td>
                                            @if($participante->estado=='pendiente')
                                                <a class="btn btn-warning" href="{{ route('participantes.edit', $participante->id) }}">Pendiente</a>
                                            @else
                                                <a class="btn btn-success" href="{{ route('participantes.edit', $participante->id) }}">Confirmado</a>
                                            @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>

                            </table>
                            <div class="pagination justify-content-end">
                                {!! $participantes->links() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

    </section>
@endsection

