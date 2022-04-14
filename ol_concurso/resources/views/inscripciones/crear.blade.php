@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Inscripción</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">     
                                                                      
                        @if ($errors->any())                                                
                            <div class="alert alert-dark alert-dismissible fade show" role="alert">
                            <strong>¡Revise los campos!</strong>                        
                                @foreach ($errors->all() as $error)                                    
                                    <span class="badge badge-danger">{{ $error }}</span>
                                @endforeach                        
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                        @endif
                    
                    

                    <form action="{{ route('inscripciones.store') }}" method="POST">
                        @csrf
                        <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                   <label for="modalidad_id">Modalidades</label>
                                   <select name="modalidad_id" id="" class="form-control">
                                       @php
                                       use App\Models\Modalidad;
                                       $modalidad = Modalidad::all();
                                       @endphp
                                        @foreach($modalidad as $item)
                                        <option value="{{ $item->id }}">{{ $item->nombre_modalidad }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>   
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                   <label for="modalidad_id">Nombres:</label>
                                   <input type="text" name="nombres_jurado" class="form-control">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                   <label for="apellidos_jurado">Apellidos:</label>
                                   <input type="text" name="apellidos_jurado" class="form-control">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                   <label for="numero_jurado">Número Celular:</label>
                                   <input type="text" name="numero_jurado" class="form-control">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                   <label for="dni_jurado">DNI:</label>
                                   <input type="text" name="dni_jurado" class="form-control">
                                </div>
                            </div>
                            
                                                 
                                
                            
                            <button type="submit" class="btn btn-primary">Guardar</button>                            
                       
                    </form>
                    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection