<?php

function soma() {
    static $valor = 0;
    echo "<p>$valor</p>";
    $valor++;
}

soma();
soma();
soma();

