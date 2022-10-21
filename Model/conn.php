<?php
//CONEXÃO COM BASE DE DADOS ONDE FICARAM ARMAZENADOS OS DADOS DO FORMULARIO DE CONTATO

define ("HOST","localhost");
define ("USER","root");
define ("DB","");
define ("PW","");

$msg = FALSE;

try {
   $conn = mysqli_connect(HOST,USER,PW);
    mysqli_select_db($conn,DB);
}
catch (Exception $e) {
   $msg = "Erro na conexão";
   echo $msg.$e->getMessage();
}
