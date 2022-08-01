<?php

namespace App\Restaurante;

class Produtos
{
  public function __construct(string $nome, string $valor)
  {
    $this->insertProdutos($this->nome = $nome, $this->valor = $valor);
  }
  function insertProdutos(string $nome, string $valor)
  {
    require "connection.php";
    mysqli_query($conn , "INSERT INTO itens(nome, valor) VALUES ('$nome', '$valor')");

  }

}