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

            tr {
                font-size: smaller;
            }

        </style>

    </head>


    <body>

        <!-- (O título) -->

        <h3 class="text-center" style="padding: 1.25em">Trabalho prático de avaliação <span style="font-size: large">(módulo 18)</span></h3>

        <!-- (O formulário em si.) -->

        <div class="container">

            <h5 class="bg-dark text-center text-light" style="padding: 0.25em">Lista de produtos</h5>
            <br>

            <!-- (A tabela com os produtos) -->

            <table class="table">

                <!-- (O header da tabela) -->

                <thead class="table-light">

                    <tr>
                        <th scope="col">Código <small>(ID)</small></th>
                        <th scope="col">Nome <small>do produto</small></th>
                        <th scope="col">Categoria <small>do produto</small></th>
                        <th scope="col">Preço unitário <small>em €</small></th>
                        <th scope="col">Descrição <small>do produto</small></th>
                    </tr>

                </thead>

                <!-- (O conteúdo da tabela; usamos o foreach (...) para mostrar os
                      produtos de cada registo) -->

                <tbody>

                    @foreach ($Produtos as $Registo)
                    
                    <tr>
                        <th scope="row">{{$Registo->Codigo}}</th>
                        <td>{{$Registo->Nome}}</td>
                        <td>{{$Registo->Categoria}}</td>
                        <td>{{$Registo->Preco}}</td>
                        <td>{{$Registo->Descricao}}</td>
                    </tr>

                    @endforeach

                </tbody>

            </table>

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