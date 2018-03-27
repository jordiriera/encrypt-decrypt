<?php

// Dades que s'encriptaran
$idUser = 'cualquier cosa ';
$idCompra = 'jordiriera ejejeje';

// data son varies dades concatenades
$data = $idUser . $idCompra;

// metode o algoritme que emplearem per encriptar
$method = 'aes-256-ctr';

//contrasenya que emplearem per encriptar i desencriptar les dades
$pass = "n4XeZ9EjPc1RU8cMI4";
//$iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length());



//metode per encriptar
$encrypt =  openssl_encrypt($data, $method, $pass);


// això ens mostrara el codi encriptat
echo $encrypt;




//*****   PROVES *****//
//$decrypt = openssl_decrypt($encrypt, $method, $pass);
//echo '<br>';
//echo $decrypt;
 ?>
