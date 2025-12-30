<?php
function criaProduto(){
    $nome = readline ("Digite o nome do produto: ");
    $preco = (float) readline("Digite o preço do produto: ");
    $quantidade = (int) readline("Digite a quantidade de ". $nome. " no estoque: ");
    $valor_total = $preco * $quantidade;
    if($valor_total <= 500){
        $classificacao = "Estoque baixo";
    }elseif($valor_total <= 2000){
        $classificacao = "Estoque médio";
    }else{
        $classificacao = "Estoque alto";
    }
    $produto = [
        'nome' => $nome,
        'preco'=> $preco,
        'quantiadade'=> $quantidade,
        'valor_total'=> $valor_total,
        'classificacao'=> $classificacao
    ];
    return $produto;
}