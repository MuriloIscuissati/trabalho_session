<?php

require_once(__DIR__ . "/../model/Personagem.php");
require_once(__DIR__ . "/../controller/CriacaoController.php");

$criacaoController = new CriacaoController();

if (!$criacaoController->personagemEstaCriado())
    header("location:criacao.php");
$personagem = $criacaoController->getPersonagem();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style/bootstrap.min.css">
</head>

<body>


    <div class="container-fluid mt-4 mb-4">

        <!-- Removida a borda do card com 'border-0' -->
        <div class="card w-100 d-flex flex-column text-center align-self-center border-0 bg-transparent">
            <!-- Aumentado o tamanho da imagem de 250px para 400px para maior destaque -->
            <img src="<?= $personagem->getImagem() ?>" class="card-img-top mx-auto d-block" alt="..." style="height: 400px; width: 400px; object-fit: contain;">
            <div class="card-body mb-3 bg-transparent">
                <h5 class="card-title fs-3"><?= $personagem->getNome() ?></h5>
            </div>
            
            <!-- Removidas as bordas das listas com 'list-group-flush border-0' e adicionado 'border-0' nos itens -->
            <ul class="list-group list-group-flush border-0 bg-transparent">
                <li class="list-group-item border-0">Classe: <?= $personagem->getClasse() ?></li>
            </ul>

            <div class="card-body">
                <p class="card-text"><strong>Armadura: <?= $personagem->getArmadura()->getNome() ?></strong></p>
            </div>
            <ul class="list-group list-group-flush border-0 bg-transparent">
                <li class="list-group-item border-0">Velocidade: <?= $personagem->getArmadura()->getVelocidade() ?></li>
                <li class="list-group-item border-0">Negação de dano: <?= $personagem->getArmadura()->getNegacaoDano() ?></li>
                <li class="list-group-item border-0">Proteção Mágica: <?= $personagem->getArmadura()->isProtecaoMagica() ? "Sim" : "Não" ?></li>
            </ul>

            <div class="card-body">
                <p class="card-text"><strong>Arma: <?= $personagem->getArma()->getNome() ?></strong></p>
            </div>
            <ul class="list-group list-group-flush border-0 bg-transparent">
                <li class="list-group-item border-0">Dano: <?= $personagem->getArma()->getDano() ?></li>
                <li class="list-group-item border-0">Velocidade: <?= $personagem->getArma()->getVelocidade() ?></li>
                <li class="list-group-item border-0">Precisão: <?= $personagem->getArma()->getPrecisao() ?></li>
            </ul>
            <div class="card-body">
                <p class="card-text"><strong>Velocidade de combate: <?= $personagem->getCombatSpeed() ?></strong></p>
            </div>
        </div>
        
        <div class="mt-3">
            <a href="criacao.php" class="btn btn-success">Alterar</a>
            <?php if(!$personagem->isSsj()):?>
                <a href="ssj.php" class="btn btn-warning">Super Sayajin</a>
            <?php endif; ?>
            <a href="excluir.php" class="btn btn-danger">Excluir</a>
        </div>

    </div>

</body>

</html>
