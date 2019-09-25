@extends('layouts.app')

@section('content')
<div class="container-fluid">
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
                                            @foreach($model->getConcursoAtual() as $r)
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

                                    <p>Ignorar: [
                                        @foreach($model->getIgnorados() as $ignorado)
                                        {{ $ignorado }}
                                        @endforeach
                                        ]</p>

                                    <table class="table table-sm">
                                        <thead>
                                            <tr>
                                                <th scope="col">Concurso</th>
                                                <th scope="col">Data</th>
                                                <th scope="col">1</th>
                                                <th scope="col">2</th>
                                                <th scope="col">3</th>
                                                <th scope="col">4</th>
                                                <th scope="col">5</th>
                                                <th scope="col">6</th>
                                                <th scope="col">7</th>
                                                <th scope="col">8</th>
                                                <th scope="col">9</th>
                                                <th scope="col">10</th>
                                                <th scope="col">11</th>
                                                <th scope="col">12</th>
                                                <th scope="col">13</th>
                                                <th scope="col">14</th>
                                                <th scope="col">15</th>
                                                <th scope="col">16</th>
                                                <th scope="col">17</th>
                                                <th scope="col">18</th>
                                                <th scope="col">19</th>
                                                <th scope="col">20</th>
                                                <th scope="col">21</th>
                                                <th scope="col">22</th>
                                                <th scope="col">23</th>
                                                <th scope="col">24</th>
                                                <th scope="col">25</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($model->getConcursos() as $r)
                                                
                                                <?php
                                                    $array = [
                                                        $r->bola1, $r->bola2, $r->bola3, $r->bola4, $r->bola5
                                                        , $r->bola6, $r->bola7, $r->bola8, $r->bola9, $r->bola10
                                                        , $r->bola11, $r->bola12, $r->bola13, $r->bola14, $r->bola15
                                                        ];
                                                 ?>
                                            <tr>
                                                <th scope="row">{{ $r->concurso }}</th>
                                                <td>{{ $r->data_sorteio }}</td>
                                                <td>@if( in_array(1, $array) )
                                                        {{ __('X') }} 
                                                    @endif</td>
                                                <td>@if( in_array(2, $array) )
                                                        {{ __('X') }} 
                                                    @endif</td>
                                                <td>@if( in_array(3, $array) )
                                                        {{ __('X') }} 
                                                    @endif</td>
                                                <td>@if( in_array(4, $array) )
                                                        {{ __('X') }} 
                                                    @endif</td>
                                                <td>@if( in_array(5, $array) )
                                                        {{ __('X') }} 
                                                    @endif</td>
                                                <td>@if( in_array(6, $array) )
                                                        {{ __('X') }} 
                                                    @endif</td>
                                                <td>@if( in_array(7, $array) )
                                                        {{ __('X') }} 
                                                    @endif</td>
                                                <td>@if( in_array(8, $array) )
                                                        {{ __('X') }} 
                                                    @endif</td>
                                                <td>@if( in_array(9, $array) )
                                                        {{ __('X') }} 
                                                    @endif</td>
                                                <td>@if( in_array(10, $array) )
                                                        {{ __('X') }} 
                                                    @endif</td>
                                                <td>@if( in_array(11, $array) )
                                                        {{ __('X') }} 
                                                    @endif</td>
                                                <td>@if( in_array(12, $array) )
                                                        {{ __('X') }} 
                                                    @endif</td>
                                                <td>@if( in_array(13, $array) )
                                                        {{ __('X') }} 
                                                    @endif</td>
                                                <td>@if( in_array(14, $array) )
                                                        {{ __('X') }} 
                                                    @endif</td>
                                                <td>@if( in_array(15, $array) )
                                                        {{ __('X') }} 
                                                    @endif</td>
                                                <td>@if( in_array(16, $array) )
                                                        {{ __('X') }} 
                                                    @endif</td>
                                                <td>@if( in_array(17, $array) )
                                                        {{ __('X') }} 
                                                    @endif</td>
                                                    <td>@if( in_array(18, $array) )
                                                        {{ __('X') }} 
                                                    @endif</td>
                                                <td>@if( in_array(19, $array) )
                                                        {{ __('X') }} 
                                                    @endif</td>
                                                <td>@if( in_array(20, $array) )
                                                        {{ __('X') }} 
                                                    @endif</td>
                                                <td>@if( in_array(21, $array) )
                                                        {{ __('X') }} 
                                                    @endif</td>
                                                <td>@if( in_array(22, $array) )
                                                        {{ __('X') }} 
                                                    @endif</td>
                                                    <td>@if( in_array(23, $array) )
                                                        {{ __('X') }} 
                                                    @endif</td>
                                                <td>@if( in_array(24, $array) )
                                                        {{ __('X') }} 
                                                    @endif</td>
                                                <td>@if( in_array(25, $array) )
                                                        {{ __('X') }} 
                                                    @endif</td>
                                            </tr>
                                            @endforeach
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