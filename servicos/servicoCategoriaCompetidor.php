<?php

function defineCategoriaCompetidor(string $nome, string $idade) : ?string
{

    $categorias = [];
    $categorias[] = 'infantil';
    $categorias[] = 'adolescente';
    $categorias[] = 'adulto';

    if(validaNome($nome) && validaIdade($idade))
    {
        removerMensagemErro();
        if($idade >= 6 && $idade <= 12)
        {
            setarMensagemSucesso('O nadador '  .$nome. ' compete na categoria infantil');
            return null;
        }
        else if($idade >= 13 && $idade <= 18)
        {
            setarMensagemSucesso('O nadador '  .$nome. ' compete na categoria adolescente');
            return null;
        }
        else 
        {
            setarMensagemSucesso('O nadador '  .$nome. ' compete na categoria adulto');
            return null;
        }
    }
    else
    {
        removerMensagemSucesso();
        return obterMensagemErro();
    }
}
