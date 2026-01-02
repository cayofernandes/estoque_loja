<?php
require __DIR__ . '/functions.php';
$lista_produtos = [];
do{
    $produto = criaProduto($lista_produtos);
}while($produto != [] );
    //soma total do estoque:
$soma_total = 0; //tenho que declarar a variavel fora da loop para acessa-la após o loop. O loop continua modificando ela.
foreach ($lista_produtos as $produto ){
    $soma_total += $produto['valor_total']; //esse loop percorre o array de produtos e soma cada variavel 'valor_total' de cada produto
}
echo "O valor total no estoque é: {$soma_total} \n";

//pegar o produto com maior valor no estoque
$maior_valor = $lista_produtos[0];
foreach ($lista_produtos as $maior_valor){
    if ($produto['valor_total'] > $maior_valor['valor_total']){
        $maior_valor = $produto;
    }
}
echo "O produto de maior valor é: " . $maior_valor['nome'] . " e seu valor é: " . $maior_valor['valor_total'] . "\n";

//pegar o produto com menor valor no estoque
$menor_valor = $lista_produtos[0];
foreach($lista_produtos as $produto){
    if($produto['valor_total'] < $menor_valor['valor_total']){
        $menor_valor = $produto;
    }
}
echo "O produto com menor valor do estoque é:". $menor_valor['nome']. " e seu valor total é: ". $menor_valor['valor_total']. "\n";



/*
Valor médio dos produtos em estoque */


