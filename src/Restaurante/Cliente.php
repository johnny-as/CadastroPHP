<?php

namespace App\Restaurante;



class Cliente
{
    

    public function __construct(string $nome, string $email, string $telefone){

      $this->insertCliente($this->nome = $nome, $this->email= $email, $this->telefone = $telefone, $this->dataAtual());

    }

    function dataAtual()
      {
        return $this->data_atual = date('Y/m/d');
      }

    function insertCliente(string $nome, string $email, string $telefone, string $data)
      {
        require "connection.php";
        $sql =  "INSERT INTO clientes(nome, email, celular, data_cadastro) VALUES ('$nome', '$email', '$telefone', '$data')";

        if (mysqli_query($conn, $sql)) {
          //echo "New record created successfully";
        } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        
        mysqli_close($conn);

      }


}