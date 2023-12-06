<?php

//Escopo de Variáveis

$nomeDaVariavel = "valor da variável";
$mesmo_nome = "Escopo Global";

function nomeDaFuncao() {
    $variavel_local = "Valor da Variável";
    $mesmo_nome = "Escopo Local";
    global $nomeDaVariavel;
    $GLOBALS['mesmo_nome'] = "Escopo Global Dentro da Função";

    echo "<h2>$variavel_local</h2>";
}

nomeDaFuncao();

echo "<h1>$nomeDaVariavel</h1>";