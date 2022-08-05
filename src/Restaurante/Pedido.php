<?php

namespace App\Restaurante;



class Pedido
{


    public function __construct(string $nome, string $mesa, string $quant, string $prato)
    {
        $this->insertPedidos($this->idCliente($nome), $this->valorTotal($prato, $quant), $this->dataAtual(), $this->quant = $quant);
        
        $this->insertPedidosItens($this->consultaIdPedido(), $this->idItem($prato), $this->numMesa($mesa));
    }

    
    function insertPedidos(string $id_cliente, string $valor_total, string $data_cadastro, string $quantidade)
    {
        require "connection.php";
        $sql =  "INSERT INTO pedidos(id_cliente, valor_total, data_cadastro, quantidade) VALUES ('$id_cliente', '$valor_total', '$data_cadastro', '$quantidade')";

        if (mysqli_query($conn, $sql)) {
            //echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        
        mysqli_close($conn);

    }

    function insertPedidosItens(string $id_pedido, string $id_item, string $mesa)
    {
        require "connection.php";
        $sql =  "INSERT INTO pedidos_itens(id_pedido, id_item, mesa) VALUES ('$id_pedido', '$id_item', '$mesa')";

        if (mysqli_query($conn, $sql)) {
          //echo "New record created successfully";
        } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        
        mysqli_close($conn);

    }

    function dataAtual()
    {
        return $this->data_atual = date('Y/m/d');
    }

    function idItem(string $prato){
        $pos = strpos($prato," "); // posição onde inicia a string " "

        $id_prato = substr($prato, 0, $pos);

        return $id_prato;
    }

    function idCliente($nome):string
    {
        $pos = strpos($nome," "); // posição onde inicia a string " "
    
        $id_cliente = substr($nome, 0, $pos);

        return $id_cliente;

    }

    function valorTotal($prato,$quant):string
    {
        $pos = strpos($prato,"R$ "); // posição onde inicia a string "R$"
    
        $valor_total = $quant * substr($prato, $pos+3, strlen($prato));

        return $valor_total;
    }
        
    function consultaIdPedido()
    {
        require 'connection.php';

		$sql = "SELECT MAX(id) as id_pedido FROM pedidos";

		$result = $conn->query($sql);
        $user_data = mysqli_fetch_assoc($result);

        return $user_data['id_pedido'];
    }

    function numMesa($mesa):string
    {
        $pos = strpos($mesa," "); // posição onde inicia a string " "
    
        $num_mesa = substr($mesa, $pos+1, strlen($mesa));

        return $num_mesa;

    }

}