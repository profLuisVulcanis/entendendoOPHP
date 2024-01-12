<?php

//Aula 7 - Tipos de Dados

$x = 5;

var_dump($x);
echo "<hr>";

$x = "5";

var_dump($x);
echo "<hr>";

//Tipo String

$x = "Curso de PHP";
$y = 'Curso de PHP';

var_dump($x);
echo "<br>";
var_dump($y);
echo "<hr>";

//Tipo Integer

$x = 3488;
$y = -5485;

var_dump($x);
echo "<br>";
var_dump($y);
echo "<hr>";

// Tipo Float

$x = 14.45;
$y = 1.215e2;

var_dump($x);
echo "<br>";
var_dump($y);
echo "<hr>";

// Tipo Booleano

$x = true;
$y = false;

var_dump($x);
echo "<br>";
var_dump($y);
echo "<hr>";

// Tipo Array

$x = array("Pedro", "Werneck", "Aluno", "Aprovado");
$y = array("Priscila","Oyster",2015,8.75,true);

var_dump($x);
echo "<br>";
var_dump($y);
echo "<hr>";

// Tipo Object

class Guitar {
    public $model;
    public $year;

    public function __construct($model, $year) {
        $this->model = $model;
        $this->year = $year;
    }
}

$myGuitar = new Guitar("Les Paul", 1973);

var_dump($myGuitar);
echo "<hr>";

// Tipo NULL

$x = null;

var_dump($x);
echo "<hr>";
