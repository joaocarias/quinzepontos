@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"> <i class="fas fa-home"></i> <a href="{{ route('home') }}"> Home </a> </li>
                    <li class="breadcrumb-item active" aria-current="page"> <a href="{{ route('simuladores-index') }}"> {{ __('Simuladores') }} </a> </li>
                    <li class="breadcrumb-item active" aria-current="page"> {{ __('Simular Fechamento') }} </li>
                </ol>
            </nav>

        </div>
    </div>
    <div class="row justify-content-center">

        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><i class="fas fa-calendar-check"></i> <strong> {{ __('Simular Fechamento') }} </strong></div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card border-success mb-3">
                                <div class="card-body text-center">
                                    <p>Ignorar: [ 
                                        @foreach($model->getIgnorados() as $ignorado)
                                            {{ $ignorado }} 
                                        @endforeach
                                        ]</p>
                                    </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection