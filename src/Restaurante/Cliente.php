<?php

namespace App\Restaurante;

class Cliente
{
    private $nome;
    private $telefone;
    private $email;
    private $data;

    public function __construct(string $nome, string $email, string $telefone)
    {
      $this->nome;
      $this->email;
      $this->telefone;
      $this->dataAtual();
    }


    function dataAtual()
    {
      $this->data = date('Y/m/d');
    }
}