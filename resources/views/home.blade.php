@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">

            <!-- <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page"> <i class="fas fa-home"></i> Home </li>
                </ol>
            </nav> -->

        </div>

    </div>
    <div class="row justify-content-center">

        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><i class="fas fa-home"></i> <strong> Home</strong></div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <div class="row">

                        <div class="col-sm-6">
                            <a href="{{ route('resultados-index') }}" class="link-sem-decoracao">
                                <div class="card border-success mb-3">
                                    <div class="card-body text-center">
                                        <i class="far fa-check-square fa-3x icon-card-title"></i>                                        
                                        <h2 class="card-title">Resultados</h2>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-sm-6">
                            <a href="{{ route('simuladores-index') }}" class="link-sem-decoracao">
                                <div class="card border-primary mb-3">
                                    <div class="card-body text-center">
                                        <i class="far fa-calendar-check fa-3x icon-card-title"></i>                                        
                                        <h2 class="card-title">Simuladores</h2>
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