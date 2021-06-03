<?php

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';

//print_r($categorias);

$nome = $_POST['nome'];

$idade = $_POST['idade'];

if(empty($nome)){
    echo 'O nome não pode ser vazio';
    return;
}

if(strlen($nome) < 3 ){
    echo 'O nome deve conter mais de 3 caracteres';
    return;
}

if(strlen($nome) > 40 ){
    echo 'O nome é muito extenso';
    return;
}

if(!is_numeric($idade))
{
    echo 'A idade deve ser um número';
    return;
}


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
