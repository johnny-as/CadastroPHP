<?php
$mysqlnd = function_exists('mysqli_fetch_all');

if ($mysqlnd) {
    echo 'mysqlnd enabled!';
}else{
    echo "nao está ativo";
}