<?php
if(!$_SESSION['usuario']){
    header('Location: index.html');
    exit();
}