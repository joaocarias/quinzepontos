@extends('layouts.app')

<?php
$i = 0;
$gastos = $model->getGastos();
$pontos = $model->getPontos();
$ganhoTotal = 0;
?>

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"> <i class="fas fa-home"></i> <a href="{{ route('home') }}"> Home </a> </li>
                    <li class="breadcrumb-item"> <a href="{{ route('simuladores-index') }}"> {{ __('Simuladores') }} </a> </li>
                    <li class="breadcrumb-item active" aria-current="page"> {{ __('Todos os Concursos') }} </li>
                </ol>
            </nav>

        </div>
    </div>
    <div class="row justify-content-center">

        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><i class="fas fa-calendar-check"></i> <strong> {{ __('Todos os Concursos') }} </strong></div>



                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card border-success mb-3">
                                <div class="card-body text-center">

                                    <table class="table table-sm">
                                        <tbody>
                                            <tr>
                                                @foreach($model->getAposta() as $r)
                                                <td>{{ $r }}</td>
                                                @endforeach
                                            </tr>
                                        </tbody>
                                    </table>

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
                                                <th scope="col">Gastos</th>
                                                <th scope="col">Pontos</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($model->getConcursos() as $r)
                                            <?php

                                            $classTR = "";
                                            $ponto = $pontos[$i];
                                            $gasto = $gastos[$i];
                                            $i++;

                                            if ($ponto == 11) {
                                                $classTR = 'class="table-active"';
                                                $ganhoTotal = $ganhoTotal + $r->valor_rateio_11_numeros;
                                            } else if ($ponto == 12) {
                                                $classTR = 'class="table-danger"';
                                                $ganhoTotal = $ganhoTotal + $r->valor_rateio_12_numeros;
                                            } else if ($ponto == 13) {
                                                $classTR = 'class="table-warning"';
                                                $ganhoTotal = $ganhoTotal + $r->valor_rateio_13_numeros;
                                            } else if ($ponto == 14) {
                                                $classTR = 'class="table-info"';
                                                $ganhoTotal = $ganhoTotal + $r->valor_rateio_14_numeros;
                                            } else if ($ponto == 15) {
                                                $classTR = 'class="table-success"';
                                                $ganhoTotal = $ganhoTotal + $r->valor_rateio_15_numeros;
                                            }
                                            ?>
                                            <tr <?php echo $classTR; ?>>
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
                                                <td>{{ $gasto }}</td>
                                                <td>{{ $ponto }}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>

                                    <table class="table table-sm text-center">
                                        <thead>
                                            <tr>
                                                <th scope="col">Valor Gasto</th>
                                                <th scope="col">Valor Ganho</th>
                                                <th scope="col">Saldo</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>{{ array_sum($gastos) }}</td>
                                                <td>{{ $ganhoTotal }}</td>
                                                <td>{{ $ganhoTotal - array_sum($gastos)  }}
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