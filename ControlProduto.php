<?php

require_once ('classes/carrinho.php');
require_once('classes/Produto.php');

$produto1 = new Produto(12, "arroz", 25.78, 104);
$produto2 = new Produto(2, "Café", 5.78, 14);
$produto3 = new Produto(120, "Feijao", 15.78, 504);

$carrinho = new Carrinho();
$carrinho -> adicionarItem($produto1);
$carrinho -> adicionarItem($produto2);
$carrinho -> adicionarItem($produto3);

$retorno = $carrinho -> exibirLista();
print_r($retorno);

echo "Total: ".$carrinho -> calcularTotalCarrinho();

?>