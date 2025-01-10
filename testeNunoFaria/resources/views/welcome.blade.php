<!DOCTYPE html>

<!-- Nuno Faria (n.º 8) - Programação e Sistemas de Informação - Escola da APEL (2024/25) -->
<!-- TGPSI3 (Técnico de Gestão e Programação de Sistemas de Informação, 12º ano) -->

<html lang="pt">


    <head>

        <!-- (Título da página, e metadata.) -->

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Trabalho de avaliação (Nuno Faria - TGPSI3)</title>

        <!-- (Estilos, da página, e também do Bootstrap.) -->

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="icon" type="image/x-icon" href="{{ asset('icon.png') }}">

        <style>

            @import url('https://fonts.cdnfonts.com/css/open-sauce-one');

            body {
                font-family: 'Open Sauce One', sans-serif;
                padding-left: 7.5%; padding-right: 7.5%
            }

            p {
                font-size: smaller;
            }

            .col-form-label {
                font-weight: bold;
            }

        </style>

    </head>


    <body>

        <!-- (O título) -->

        <h3 class="text-center" style="padding: 1.25em">Trabalho prático de avaliação <span style="font-size: large">(módulo 18)</span></h3>

        <!-- (O formulário em si.) -->

        <div class="container">

            <h5 class="bg-dark text-center text-light" style="padding: 0.25em">Inserir um produto</h5>
            <br>

            <form action="/inserirProduto" method="post">

                <!-- (O token CSRF do Laravel; à partida, isto é para autenticar o utilizador) -->

                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <!-- (Codigo, INT(11) ou BIGINT(20), required) -->

                <div class="row mb-3">

                    <label for="Codigo" class="col-sm-2 col-form-label">Código <small>(do produto)</small></label>

                    <div class="col-sm-4">
                        <input type="number" class="form-control" id="Codigo" min="1" name="Codigo" required>
                    </div>

                </div>

                <!-- (Nome, VARCHAR(100), required) -->

                <div class="row mb-3">

                    <label for="Nome" class="col-sm-2 col-form-label">Nome</label>

                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="Nome" minlength="1" maxlength="100" name="Nome" required>
                    </div>

                </div>

                <!-- (Categoria, VARCHAR(40), required) -->

                <div class="row mb-3">

                    <label for="Categoria" class="col-sm-2 col-form-label">Categoria</label>

                    <div class="col-sm-3">

                        <select class="form-select" id="Categoria" name="Categoria" required>

                            <option value="Computadores">Computadores</option>
                            <option value="Smartphones">Smartphones e Telemóveis</option>
                            <option value="Eletrodomesticos">Eletrodomésticos</option>
                            <option value="Perifericos">Periféricos</option>
                            <option value="Componentes">Componentes</option>
                            <option value="Software">Software</option>
                            <option value="Outro">Outro</option>

                        </select>

                    </div>

                </div>

                <!-- (Preco, DECIMAL(9,2), required) -->

                <div class="row mb-3">

                    <label for="Preco" class="col-sm-2 col-form-label">Preço unitário <small>(em euros)</small></label>

                    <div class="col-sm-2">
                        <input type="number" class="form-control" id="Preco" name="Preco" min="0" max="999999999.99" step="0.01" required>
                    </div>

                </div>

                <!-- (Descricao, TEXT(500), opcional) -->

                <div class="mb-3">

                    <label for="Descricao" class="col-form-label">Descrição do produto</label>
                    <textarea class="form-control" id="Descricao" name="Descricao" maxlength="500"></textarea>

                </div>

                <!-- (O botão para submeter os dados.) -->

                <button type="submit" class="btn btn-dark btn-sm mt-3">Submeter os dados</button>

            </form>

        </div>

        <br>

        <!-- (O footer da página.) -->

        <h6 class="fst-italic footer text-center" style="color: gray">
            
            <hr>

            <p>

                Nuno Faria (n.º 8) – Programação e Sistemas de Informação – TGPSI3 (Escola da APEL)

                <a href="https://www.escola-apel.com/web/">
                    <img src="{{ asset('icon.png') }}" style="height: 16px; padding-left: 0.2em; opacity: 0.5">
                </a>

                <br><br>
                <span style="color: lightgray">10 de janeiro de 2025</span>

            </p>

        </h6>

        <!-- (O script do Bootstrap; isto é necessário para algumas funções.) -->

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    </body>


</html>