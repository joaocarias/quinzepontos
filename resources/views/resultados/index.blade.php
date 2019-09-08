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
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <div class="row">

                        <div class="col-sm-4">
                            <a href="#" class="link-sem-decoracao">
                                <div class="card border-danger mb-3">
                                    <div class="card-body text-center">
                                        <i class="far fa-calendar-check fa-3x icon-card-title"></i>
                                        <h2 class="card-title">Todos Resultados</h2>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-sm-4">
                            <a href="{{ route('resultados-atualizar') }}" class="link-sem-decoracao">
                                <div class="card border-success mb-3">
                                    <div class="card-body text-center">
                                        <i class="fas fa-cloud-upload-alt fa-3x icon-card-title"></i>
                                        <h2 class="card-title">Atualizar</h2>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-sm-4">
                            <a href="#" class="link-sem-decoracao">
                                <div class="card border-info mb-3">
                                    <div class="card-body text-center">
                                        <i class="far fa-list-alt fa-3x icon-card-title"></i>
                                        <h2 class="card-title">Implementado</h2>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h5 class="card-title">Título especial</h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque volutpat, ipsum a iaculis imperdiet, felis nibh bibendum mi, eget convallis lacus elit sed dolor. Suspendisse vulputate lacus nec ultricies varius. Fusce non egestas quam, quis viverra arcu. Etiam ac commodo nunc, eget convallis ante. Vivamus sed vestibulum felis, non posuere lectus. Praesent lorem mi, dictum in condimentum eget, vulputate non tortor. Aenean mi leo, feugiat nec commodo et, consectetur vitae risus. Vivamus laoreet scelerisque nisl, ultricies tristique erat molestie eu.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Primeiro</th>
                                                <th scope="col">Último</th>
                                                <th scope="col">Nickname</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@fat</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td colspan="2">Larry the Bird</td>
                                                <td>@twitter</td>
                                            </tr>
                                        </tbody>
                                    </table>
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