<?php
function armazenaProduto ($produto, &$lista_produtos):void {
    $lista_produtos[] = $produto; //função que armazena todo produto em um array de produtos
}
function criaProduto(&$lista_produtos) :array {
    $nome = readline ("Digite o nome do produto: ");
    if($nome == "FIM"){
        return [];
    }
    $preco = (float) readline("Digite o preço do produto: ");
    while ($preco <= 0){
        echo "O preço não pode ser negativo. \n";
         $preco = (float) readline("Digite o preço do produto: ");
    }
    $quantidade = (int) readline("Digite a quantidade de ". $nome. " no estoque: ");
    while ($quantidade <= 0){
        echo "A quantidade não pode ser negativa. \n";
        $quantidade = (int) readline("Digite a quantidade de ". $nome. " no estoque: ");
    }
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
        'quantidade'=> $quantidade,
        'valor_total'=> $valor_total,
        'classificacao'=> $classificacao
    ];
  armazenaProduto($produto, $lista_produtos); //chamada da função que armazena o produto no array de todos os produtos
  return $produto;
}





