<?php

require_once(__DIR__ . "/../util/config.php");
require_once(__DIR__ . "/../model/Personagem.php");
require_once(__DIR__ . "/../controller/CriacaoController.php");

$criacaoController = new CriacaoController();
$erros = "";
if (isset($_POST["nome"])) {
    $erros = $criacaoController->criarPersonagem($_POST["nome"], $_POST["classe"]);
    if(!$erros){
        header("location:card.php");
        exit();
    }
}

if ($criacaoController->personagemEstaCriado())
    $personagem = $criacaoController->getPersonagem();

include_once(__DIR__ . "/include/header.php");
include_once(__DIR__ . "/form.php");
include_once(__DIR__ . "/include/header.php");
