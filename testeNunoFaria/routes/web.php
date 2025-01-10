<?php

use Illuminate\Support\Facades\Route;

// Quando o utilizador aceder ao diretório root (/), mostrá-la o welcome.blade.php.

Route::get('/', function () {
    return view('welcome');
});

// Quando o utilizador aceder a /lista, redirecioná-lo a uma vista que mostrará
// os produtos na base de dados.

Route::get('/lista', function () {
    return view('lista', array('Produtos' => App\Models\Produtos::all()));
});

// Quando o utilizador aceder a /inserirProduto (através do método POST), inserir
// o produto na base de dados.

Route::post('/inserirProduto', function (Illuminate\Http\Request $request) {

    // (Isto não verifica se o produto já está na base de dados, mas eu
    // tenho demasiada pouca experiência com o Laravel para verificar isso.)

    $Produtos = new App\Models\Produtos();

    $Produtos->Codigo = $request->get('Codigo');
    $Produtos->Nome = $request->get('Nome');
    $Produtos->Categoria = $request->get('Categoria');
    $Produtos->Preco = $request->get('Preco');
    $Produtos->Descricao = $request->get('Descricao');

    // (Se a descrição não foi preenchida, preenchê-la com " " para evitar erros)

    if ($Produtos->Descricao == null) {
        $Produtos->Descricao = " ";
    }
    
    // (Tentar guardar, e verificar o resultado, mostrando-o ao utilizador)

    try {
        $Resultado = $Produtos->save();
        echo("<b>O seu produto foi inserido com sucesso!</b> (ID: '".$Produtos->id."')");
    } catch (Exception $e) {
        echo("<b>Houve um erro a inserir o registo:</b> (ID: '".$Produtos->id."'): "."<br><pre>".$e."</pre>");
    }

});