@extends('layout.principal')

@section('title', 'Cadastro de Aviso')

@section('content')

    <div class="container">
        <div class="row justify-content-center">

            <!-- CARD FEST VOZ -->
            <div class="col-md-3" style="margin-top: 80; margin-right: 50px;">
                <div class="card mt-n3" style="height: 100%;">
                    <img src="FESTVOZ.jpg" class="card-img-top" style="height: 200px; object-fit: cover;" alt="Fest Voz">

                    <div class="card-body p-2">
                        <h5 class="card-title fs-6 mb-2">FEST VOZ</h5>

                        <p class="card-text small mb-0">
                            🎤 Fest Voz 2026

                            É o festival estudantil de música que revela os jovens
                            talentos cantores e compositores do SESI.

                            <br><br>

                            Categorias: Ensino Fundamental I ao Ensino Médio,
                            divididos por idades (Kids, Teens e Alphas), além de
                            modalidades de Interpretação, Composição e Grupos Musicais.
                        </p>
                        <div class="btn-group" role="group" aria-label="Basic outlined example"
                            style="width: 15px; height: 30px; margin-top: 35px;">
                            <button type="button" class="btn btn-outline-dark btn-sm">🗑️</button>
                            <button type="button" class="btn btn-outline-dark btn-sm">✎</button>
                        </div>
                    </div>

                    <div class="card-footer p-2">
                        <small class="text-body-secondary">

                        </small>
                    </div>
                </div>
            </div>


            <!-- CARD SESI DANCE -->
            <div class="col-md-3" style="margin-top: 80; margin-right: 50px;">
                <div class="card h-100">
                    <img src="SESIDANCE.png" class="card-img-top" style="height: 200px; object-fit: cover;"
                        alt="SESI Dance">

                    <div class="card-body p-2">
                        <h5 class="card-title fs-6 mb-2">SESI DANCE</h5>

                        <p class="card-text small mb-0">
                            💃 SESI DANCE 2026

                            É o festival estudantil de dança que estimula o
                            desenvolvimento da consciência corporal, a criatividade
                            e a expressão artística dos alunos da rede SESI-SP.

                            <br><br>

                            Categorias: Kids I, Kids II, Teens e Alphas.
                        </p>
                        <div class="btn-group" role="group" aria-label="Basic outlined example"
                            style="width: 15px; height: 30px; margin-top: 78px;">
                            <button type="button" class="btn btn-outline-dark btn-sm">🗑️</button>
                            <button type="button" class="btn btn-outline-dark btn-sm">✎</button>
                        </div>
                    </div>

                    <div class="card-footer p-2">
                        <small class="text-body-secondary">

                        </small>
                    </div>
                </div>
            </div>


            <!-- CARD SELIBI -->
            <div class="col-md-3" style="margin-top: 80;">
                <div class="card h-100">
                    <img src="SELIBI.jpg" class="card-img-top" style="height: 200px; object-fit: cover;" alt="SELIBI">

                    <div class="card-body p-2">
                        <h5 class="card-title fs-6 mb-2">SELIBI</h5>

                        <p class="card-text small mb-0">
                            📚 SELIBI 2026!

                            A Semana do Livro e da Biblioteca (SELIBI) da rede
                            SESI-SP já começou! Este ano, o evento celebra o
                            protagonismo estudantil e o prazer da leitura com
                            uma programação especial para todas as turmas.
                        </p>
                        <div class="btn-group" role="group" aria-label="Basic outlined example"
                            style="width: 15px; height: 30px; margin-top: 100px;">
                            <button type="button" class="btn btn-outline-dark btn-sm">🗑️</button>
                            <button type="button" class="btn btn-outline-dark btn-sm">✎</button>
                        </div>
                    </div>

                    <div class="card-footer p-2">
                        <small class="text-body-secondary">

                        </small>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
