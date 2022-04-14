@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Dashboard</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 col-xl-4">
                                <div class="card bg-c-blue order-card">
                                    <div class="card-block">
                                        <h5>Usuarios</h5>
                                        @php
                                        use App\Models\User;
                                        $cant_usuarios = User::count();
                                        @endphp
                                        <h2 class="text-right"><i class="fa fa-users f-left"></i><span>{{ $cant_usuarios }}</span></h2>
                                        <p class="m-b-0 text-right"><a href="/usuarios" class="text-white">Ver más</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-xl-4">
                                <div class="card bg-c-green order-card">
                                    <div class="card-block">
                                        <h5>Participantes</h5>
                                        @php
                                        use App\Models\Participante;
                                        $cant_part = Participante::count();
                                        @endphp
                                        <h2 class="text-right"><i class="fa fa-user-lock f-left"></i><span>{{ $cant_part }}</span></h2>
                                        <p class="m-b-0 text-right"><a href="/participantes" class="text-white">Ver más</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-xl-4">
                                <div class="card bg-c-green order-card">
                                    <div class="card-block">
                                        <h5>Jurados</h5>
                                        @php
                                        use App\Models\Jurado;
                                        $cant_jur = Jurado::count();
                                        @endphp
                                        <h2 class="text-right"><i class="fa fa-user-lock f-left"></i><span>{{ $cant_jur }}</span></h2>
                                        <p class="m-b-0 text-right"><a href="/jurados" class="text-white">Ver más</a></p>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
