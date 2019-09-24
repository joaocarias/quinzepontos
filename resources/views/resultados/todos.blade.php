@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"> <i class="fas fa-home"></i> <a href="{{ route('home') }}"> Home </a> </li>
                    <li class="breadcrumb-item"> <a href="{{ route('resultados-index') }}"> Resultados </a> </li>
                    <li class="breadcrumb-item active" aria-current="page"> {{ __('Todos Resultados') }} </li>
                </ol>
            </nav>

        </div>
    </div>
    <div class="row justify-content-center">

        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><i class="far fa-check-square"></i> <strong> {{ __('Todos Resultados') }} </strong></div>

                <div class="card-body">
                    <table class="table table-sm">
                        <thead>
                            <tr>
                                <th scope="col">Concurso</th>
                                <th scope="col">Data</th>
                                <th scope="col">Bola1</th>
                                <th scope="col">Bola2</th>
                                <th scope="col">Bola3</th>
                                <th scope="col">Bola4</th>
                                <th scope="col">Bola5</th>
                                <th scope="col">Bola6</th>
                                <th scope="col">Bola7</th>
                                <th scope="col">Bola8</th>
                                <th scope="col">Bola9</th>
                                <th scope="col">Bola10</th>
                                <th scope="col">Bola11</th>
                                <th scope="col">Bola12</th>
                                <th scope="col">Bola13</th>
                                <th scope="col">Bola14</th>
                                <th scope="col">Bola15</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($resultados as $r)
                            <tr>
                                <th scope="row">{{ $r->concurso }}</th>
                                <td>{{ $r->data_sorteio }}</td>
                                <td>{{ $r->bola1 }}</td>
                                <td>{{ $r->bola2 }}</td>
                                <td>{{ $r->bola3 }}</td>
                                <td>{{ $r->bola4 }}</td>
                                <td>{{ $r->bola5 }}</td>
                                <td>{{ $r->bola6 }}</td>
                                <td>{{ $r->bola7 }}</td>
                                <td>{{ $r->bola8 }}</td>
                                <td>{{ $r->bola9 }}</td>
                                <td>{{ $r->bola10 }}</td>
                                <td>{{ $r->bola11 }}</td>
                                <td>{{ $r->bola12 }}</td>
                                <td>{{ $r->bola13 }}</td>
                                <td>{{ $r->bola14 }}</td>
                                <td>{{ $r->bola15 }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection