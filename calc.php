<?php

echo 'Digite dois numero, para saber os resultados de suas operações';

$primeiroNumero = $_GET['primeiroNumero'];
$segundoNumero = $_GET['segundoNumero'];
$op = $_GET['op'];
switch ($_GET['op'])
{
    case '+'
        $resultado = $primeiroNumero + $segundoNumero;
        echo "A soma e $result";
    break;
    case '-'
        $resultado = $primeiroNumero - $segundoNumero;
        echo "A subtracao e $result";
    break;  
    case '*'
        $resultado = $primeiroNumero * $segundoNumero;
        echo "A multiplicacao e $result";
    break; 
    case '/'
        if ($primeiroNumero = 0 || $segundoNumero = 0)
        {
            echo 'Impossivel realizar divisao por 0'
        }
        else
        {
            $resultado = $primeiroNumero / $segundoNumero;
            echo "A divisao e $result";
            break; 
        }

}