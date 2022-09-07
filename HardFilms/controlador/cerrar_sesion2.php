<?php
session_start();

$_SESSION['log'] = false;
session_destroy();

$id = $_GET['id'];
header("Location: ../controlador/controlador_extendido.php?id=".$id);



