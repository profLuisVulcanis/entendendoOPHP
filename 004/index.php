<?php

// Variáveis sempre iniciam com o símbolo $

$marca = "Toyota";
$modelo = "Corolla";
$ano = 2020;

echo "<h1>Vende-se um $marca $modelo, ano $ano.</h1>";

$nome = "João";
$Nome = "Maria";

echo "<h2>O nome dele é $nome e o dela é $Nome.</h2>";

/** O PHP não é tipado
 * Não é necessário declarar o tipo de uma variável
 * Isto traz vantagens e desvantagens
 */

 $valor = "Aprovado";
 echo "<p>O aluno foi $valor.</p>";

 $valor = 95;
 echo "<p>O resultado foi $valor</p>";

 $valor = 80.15;
 echo "<p>A mercadoria pesa $valor Kg.</p>";

 $valor = true;
 echo "<p>O teste resultou em $valor.</p>";

 $produto = $_GET['prod'];
 $tipo = $_GET['type'];
 $cor = $_GET['color'];

 echo "<h3>Você solicitou: $produto $tipo na cor $cor</h3>";

 