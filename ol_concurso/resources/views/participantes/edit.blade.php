@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Detalles</h3>
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


                    <form action="{{ route('participantes.update',$participante->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                   <label for="nombres_par">Nombres</label>
                                   <input type="text" name="nombres_par" class="form-control" value="{{ $participante->nombres_par }}" disabled>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                   <label for="apellidos_par">Apellidos</label>
                                   <input type="text" name="apellidos_par" class="form-control" value="{{ $participante->apellidos_par }}" disabled>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                   <label for="dni_par">DNI</label>
                                   <input type="text" name="dni_par" class="form-control" value="{{ $participante->dni_par }}" disabled>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                   <label for="fecha_nac_par">Decha Nacimiento</label>
                                   <input type="date" name="fecha_nac_par" class="form-control" value="{{ $participante->fecha_nac_par }}" disabled>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                   <label for="categoria_par">Categoria</label>
                                   <input type="text" name="categoria_par" class="form-control" value="{{ $participante->categoria_par }}" disabled>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                   <label for="foto_dni">Foto</label>
                                   <input type="text" name="foto_dni" class="form-control" value="{{ $participante->foto_dni }}" disabled>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                   <label for="edad_par">Edad</label>
                                   <input type="text" name="edad_par" class="form-control" value="{{ $participante->edad_par }}" disabled>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                   <label for="num_celular">Número Celular</label>
                                   <input type="text" name="num_celular" class="form-control" value="{{ $participante->num_celular }}" disabled>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                   <label for="academia">Academia</label>
                                   <input type="text" name="academia" class="form-control" value="{{ $participante->academia }}" disabled>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                   <label for="correo_par">Correo</label>
                                   <input type="text" name="correo_par" class="form-control" value="{{ $participante->correo_par }}" disabled>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                   <label for="sexo_par">Sexo</label>
                                   <input type="text" name="sexo_par" class="form-control" value="{{ $participante->sexo_par }}" disabled>
                                </div>
                            </div>


                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                   <label for="nombre_apoderado">Nombre Apoderado</label>
                                   <input type="text" name="nombre_apoderado" class="form-control" value="{{ $participante->nombre_apoderado }}" disabled>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                   <label for="apellido_apoderado">Apellido Apoderado</label>
                                   <input type="text" name="apellido_apoderado" class="form-control" value="{{ $participante->apellido_apoderado }}" disabled>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                   <label for="dni_apoderado">DNI Apoderado</label>
                                   <input type="text" name="dni_apoderado" class="form-control" value="{{ $participante->dni_apoderado }}" disabled>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <select name="estado" id="" class="form-control">
                                        <option value="pendiente">Pendiente</option>
                                        <option value="confirmado">Confirmado</option>
                                    </select>
                                </div>
                            </div>
                            
                            <button type="submit" class="btn btn-primary">Guardar</button>                            
                        </div>
                    </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection