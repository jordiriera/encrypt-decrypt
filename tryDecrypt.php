<?php

// Aqui agafam el codi encriptat  link/trydeCrypt.php?id='codi'
$encrypt = $_GET['id'];

//el mètode que empleam per desencriptar (el mateix que per encriptar)
$method = 'aes-256-ctr';

//password que empleam per desencriptar (la mateixa que per encriptar )
$pass = "n4XeZ9EjPc1RU8cMI4";

//mètode que desencripta
$decrypt = openssl_decrypt($encrypt, $method, $pass);


echo '<br>';

echo $decrypt;


 ?>
