@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"> <i class="fas fa-home"></i> <a href="{{ route('home') }}"> Home </a> </li>
                    <li class="breadcrumb-item"> <a href="{{ route('resultados-index') }}"> {{ __('Resultados') }} </a></li>
                    <li class="breadcrumb-item active" aria-current="page"> {{ __('Atualizar') }} </li>
                </ol>
            </nav>

        </div>
    </div>
    <div class="row justify-content-center">

        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><i class="fas fa-cloud-upload-alt"></i> <strong> {{ __('Atualizar') }} </strong></div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                   
                     <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque volutpat, ipsum a iaculis imperdiet, felis nibh bibendum mi, eget convallis lacus elit sed dolor. Suspendisse vulputate lacus nec ultricies varius. Fusce non egestas quam, quis viverra arcu. Etiam ac commodo nunc, eget convallis ante. Vivamus sed vestibulum felis, non posuere lectus. Praesent lorem mi, dictum in condimentum eget, vulputate non tortor. Aenean mi leo, feugiat nec commodo et, consectetur vitae risus. Vivamus laoreet scelerisque nisl, ultricies tristique erat molestie eu.</p>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection