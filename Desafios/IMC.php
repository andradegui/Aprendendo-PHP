<?php

$altura = 1.85;
$peso = 85;

$result = $peso / ($altura * $altura) ;

if ($result < 18) {
    echo "vc esta abaixo do peso";
} else if ($result < 24) {
    echo "seu peso está ok";
} else {
    echo "vc está acima do peso";
}
