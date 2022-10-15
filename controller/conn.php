<?php

//CONEXAO AO BANCO DE DADOS PARA COLETA DE INFORMAÇOES VIA POST DO FORMULARIO
//REAL ASSESSORIA EMPRESARIAL

define ("HOST","localhost");
define ("USER","root");
define ("DB","");
define ("PW","");

try {
   $conn = mysqli_connect(HOST,USER,PW);
    mysqli_select_db($conn,DB);
}
catch (Exception $e) {

}