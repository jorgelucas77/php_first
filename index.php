<?php

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';

//print_r($categorias);

$nome = 'Eduardo';
$idade = 18;

if($idade >= 6 && $idade <= 12)
{
    echo 'O nadador '  .$nome. ' compete na categoria infantil';
}
else if($idade >= 13 && $idade <= 18)
{
    echo 'O nadador '  .$nome. ' compete na categoria adolescente';
}
else 
{
    echo 'O nadador '  .$nome. ' compete na categoria adulto';
}

?>
