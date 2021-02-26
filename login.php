<?php
include ('conexao.php');

if(empty($_POST['usuario']) || empty ($_POST['senha'])){
    header('location: index.html');
    exit();
}
