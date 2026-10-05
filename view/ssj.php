<?php

require_once(__DIR__ . "/../controller/CriacaoController.php");

$criacaoController = new CriacaoController();

$criacaoController->superSayajin();

header("location:card.php");
exit();