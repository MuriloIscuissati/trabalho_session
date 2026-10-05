<?php

require_once(__DIR__ . "/../controller/CriacaoController.php");

$criacaoController = new CriacaoController();

$criacaoController->excluirPersonagem();

header("location:criacao.php");
exit();