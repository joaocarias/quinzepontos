@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"> <i class="fas fa-home"></i> <a href="{{ route('home') }}"> Home </a> </li>
                    <li class="breadcrumb-item active" aria-current="page"> {{ __('Simuladores') }} </li>
                </ol>
            </nav>

        </div>
    </div>
    <div class="row justify-content-center">

        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><i class="fas fa-calendar-check"></i> <strong> {{ __('Simuladores') }} </strong></div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card border-success mb-3">
                                <div class="card-body text-justify">
                                    <h3 class="card-title">Fechamentos</h3>
                                    <p>“Fechar” a Lotofácil é um termo muito utilizado por apostadores que procuram maximizar seus ganhos na loteria. E aprender como fazer isso é mais simples do que parece. Com nossas dicas, técnicas e ferramentas gratuitas você aprende e coloca em prática essa modalidade de aposta. </p>
                                    <div class="row text-center">
                                        <div class="col col-12">
                                            <a href="{{ route('simulador-fechamentos') }}" type="button" class="btn btn-success">Simular Fechamentos</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card border-success mb-3">
                                <div class="card-body text-justify">
                                    <h3 class="card-title">Método Martingale</h3>
                                    <p class="card-text">
                                        Existe um método que levou o nome de seu autor (um conhecido matemático que atua com probabilidades) que é chamado de Método de Hawks, também é conhecido por método Martingale. É um método extremamente confiável e simples que diz o seguinte: não se pode perder sempre, uma hora você ganha!
                                    </p>

                                    <h5>Como Aplicar o Método Martigale</h4>
                                        <p>
                                            Ele consiste em apostar sempre no mesmo jogo , e em caso de perda, duplicamos o valor que você aposta até conseguir ganhar. A meta é recuperar o que perdeu e, finalmente, lucrar quando ganhar. É um método cuja a necessidade é de apostar a longo prazo.
                                        </p>
                                        <p>
                                            Como ele tem essa garantia estatística, não demorou muito para que os apostadores adaptassem-o para as apostas, cassino, etc…
                                        </p>

                                        <h5>Técnica Martingale na Lotofácil</h5>
                                        <p>
                                            Considerando que uma aposta “bem bolada” de 15 dezenas na lotofácil faz 11 pontos em um concursos, usando essa estratégia é possível atingir um lucro (na prática a realidade é outra). O sistema Martingale consiste em repetir as apostas perdedoras em progressão de maneira a ter um lucro assim que a aposta de 15 dezenas faça no mínimo 11 pontos. A cada vitória inicia-se o ciclo novamente. O sistema torna-se inviável devido a quantidade de dinheiro necessário para manter o sistema em caso de demora em fazer 11 pontos. Exemplo, se chegarmos ao ciclo 10 sem ter feito 11 pontos teríamos gasto o valor acumulado de R$ 79.130,00 e necessidade de fazer 20.724 apostas com a mesma cartela. Vence-se sempre, mas não se sabe em qual ciclo o que torna o sistema inviável para a maioria das pessoas.
                                        </p>

                                        <h5>Dicas para o Uso dessa Técnica</h5>
                                        <ul>
                                            <li>
                                                1 combinação apenas;
                                            </li>
                                            <li>
                                                Mude a combinação a cada rodada;
                                            </li>
                                            <li>
                                                Volte a etapa 0 se acertar os 11 ponto ou mais;
                                            </li>
                                            <li>
                                                Triplique a aposta ao invés de duplicar;
                                            </li>
                                            <li>
                                                Ganhasse pouco,se quiser jogar com segurança;
                                            </li>
                                            <li>
                                                Como eu falei Quanto mais dinheiro mais premio.
                                            </li>
                                        </ul>
                                        <p>Fonte: <a href="http://eunsetee.com/8Ln0" target="_blank">Lotomaisfacil</a>
                                            <div class="row text-center">
                                                <div class="col col-12">
                                                    <a href="{{ route('simulador-metodo-martingale') }}" type="button" class="btn btn-success">Simular com Método Martingale</a>
                                                </div>
                                            </div>
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