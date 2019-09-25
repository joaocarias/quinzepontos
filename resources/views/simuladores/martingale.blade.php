@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"> <i class="fas fa-home"></i> <a href="{{ route('home') }}"> Home </a> </li>
                    <li class="breadcrumb-item"> <a href="{{ route('simuladores-index') }}"> {{ __('Simuladores') }} </a> </li>
                    <li class="breadcrumb-item active" aria-current="page"> {{ __('Método Martingale') }} </li>
                </ol>
            </nav>

        </div>
    </div>
    <div class="row justify-content-center">

        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><i class="fas fa-calendar-check"></i> <strong> {{ __('Método Martingale') }} </strong></div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card border-success mb-3">
                                <div class="card-body text-center">

                                    <?php
                                        $i = 1;
                                        $cardNumeros = "";
                                        while($i <= 25){
                                            $cardNumeros = $cardNumeros . "<div class='row justify-content-center'>";
                                            
                                            $t = 0;
                                            while($t < 5){
                                                $cardNumeros = $cardNumeros
                                                    . "<div class='col-md-2'>
                                                            <div class='card border-danger mb-3'>
                                                                <div class='card-body'>
                                                                    <strong>".$i."</strong>
                                                                </div>
                                                            </div>
                                                        </div>";
                                                $t++;
                                                $i++;    
                                            }
                                            
                                            $cardNumeros = $cardNumeros . "</div>";
                                        }

                                        echo $cardNumeros;
                                    ?>

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