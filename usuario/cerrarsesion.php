<?php
if($_GET['usu']=='') {
session_start();
session_unset();

header("location:./../catalogo.php");


}

