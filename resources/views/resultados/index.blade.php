@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"> <i class="fas fa-home"></i> <a href="{{ route('home') }}"> Home </a> </li>
                    <li class="breadcrumb-item active" aria-current="page"> {{ __('Resultados') }} </li>
                </ol>
            </nav>

        </div>
    </div>
    <div class="row justify-content-center">

        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><i class="far fa-check-square"></i> <strong> {{ __('Resultados') }} </strong></div>

                <div class="card-body">

                    @if($msg == 200)
                    <div class="row">
                    <div class="col col-12">
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ __('Registros Atualizados Com Sucesso!') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                    </div>
                    @endif

                    <div class="row">

                        <div class="col-sm-6">
                            <a href="#" class="link-sem-decoracao">
                                <div class="card border-danger mb-3">
                                    <div class="card-body text-center">
                                        <i class="far fa-calendar-check fa-3x icon-card-title"></i>
                                        <h2 class="card-title">Todos Resultados</h2>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-sm-6">
                            <a href="{{ route('resultados-atualizar') }}" class="link-sem-decoracao">
                                <div class="card border-success mb-3">
                                    <div class="card-body text-center">
                                        <i class="fas fa-cloud-upload-alt fa-3x icon-card-title"></i>
                                        <h2 class="card-title">Atualizar</h2>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection