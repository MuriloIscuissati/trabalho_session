<?php

require_once(__DIR__ . "/../service/CriacaoService.php");
require_once(__DIR__ . "/../model/Personagem.php");

class CriacaoController
{
    private CriacaoService $criacaoService;

    public function __construct()
    {
        $this->criacaoService = new CriacaoService();
    }

    public function criarPersonagem(string $nome, string $classe)
    {
        $erros = $this->criacaoService->validar($nome, $classe);
        if ($erros) {
            $erros = implode("<br>", $erros);
            return $erros;
        }
        $personagem = new Personagem();
        switch ($classe) {
            case "samurai":
                $personagem->setNome($nome);
                $personagem->setClasse("Samurai");
                $personagem->setImagem("https://upload.wikimedia.org/wikipedia/commons/a/a6/Samurai_on_horseback0.jpg?utm_source=en.wikipedia.org&utm_campaign=imageinfo&utm_content=original");
                $personagem->setHp(70);

                $arma = new Arma();
                $arma->setNome("Katana");
                $arma->setDano(65);
                $arma->setVelocidade(90);
                $arma->setPrecisao(90);

                $armadura = new Armadura();
                $armadura->setNome("Haramaki");
                $armadura->setVelocidade(80);
                $armadura->setNegacaoDano(65);
                $armadura->setProtecaoMagica(false);

                $personagem->setArma($arma);
                $personagem->setArmadura($armadura);

                break;

            case "cavaleiroReal":
                $personagem->setNome($nome);
                $personagem->setClasse("Cavaleiro Real");
                $personagem->setImagem("https://i.redd.it/glzye17ln6y71.jpg");
                $personagem->setHp(90);

                $arma = new Arma();
                $arma->setNome("Claymore");
                $arma->setDano(90);
                $arma->setVelocidade(50);
                $arma->setPrecisao(70);

                $armadura = new Armadura();
                $armadura->setNome("Armadura Pesada de Placas");
                $armadura->setVelocidade(60);
                $armadura->setNegacaoDano(90);
                $armadura->setProtecaoMagica(false);

                $personagem->setArma($arma);
                $personagem->setArmadura($armadura);

                break;

            case "templario":
                $personagem->setNome($nome);
                $personagem->setClasse("Templário");
                $personagem->setImagem("https://e7.pngegg.com/pngimages/95/546/png-clipart-middle-ages-crusades-knights-templar-chivalry-knight-middle-ages-crusades-thumbnail.png");
                $personagem->setHp(80);

                $arma = new Arma();
                $arma->setNome("Espada Longa de Prata");
                $arma->setDano(77);
                $arma->setVelocidade(80);
                $arma->setPrecisao(75);

                $armadura = new Armadura();
                $armadura->setNome("Armadura de Prata");
                $armadura->setVelocidade(80);
                $armadura->setNegacaoDano(75);
                $armadura->setProtecaoMagica(true);

                $personagem->setArma($arma);
                $personagem->setArmadura($armadura);

                break;
        }

        $personagem->setSsj(false);
        // print_r($personagem);

        $this->criacaoService->iniciarSessao();
        $_SESSION[SESSAO_CHAR] = $personagem;

        // print_r($_SESSION[SESSAO_CHAR]);
    }

    public function getPersonagem()
    {
        $this->criacaoService->iniciarSessao();
        return $_SESSION[SESSAO_CHAR];
    }

    public function personagemEstaCriado()
    {
        return $this->criacaoService->personagemEstaCriado();
    }

    public function excluirPersonagem()
    {
        $this->criacaoService->excluirPersonagem();
    }

    public function superSayajin()
    {
        $personagem = $this->getPersonagem();
        switch ($personagem->getClasse()) {
            case "Samurai":
                $personagem->setImagem(BASE_URL . "assets/samurai_super_sayajin_3.png");
                $personagem->setHp(71);

                $personagem->getArma()->setNome("Shishkebab");
                $personagem->getArma()->setDano(88);
                $personagem->getArma()->setVelocidade(99);
                $personagem->getArma()->setPrecisao(99);

                $personagem->getArmadura()->setNome("Armadura do Grande Mestre");
                $personagem->getArmadura()->setVelocidade(92);
                $personagem->getArmadura()->setNegacaoDano(77);
                $personagem->getArmadura()->setProtecaoMagica(true);

                break;

            case "Cavaleiro Real":
                $personagem->setImagem(BASE_URL . "assets/cavaleiro_super_sayajin_excalibur_3.png");
                $personagem->setHp(99);

                $personagem->getArma()->setNome("Excalibur");
                $personagem->getArma()->setDano(99);
                $personagem->getArma()->setVelocidade(80);
                $personagem->getArma()->setPrecisao(85);

                $personagem->getArmadura()->setNome("Armadura da Nova Aliança");
                $personagem->getArmadura()->setVelocidade(75);
                $personagem->getArmadura()->setNegacaoDano(99);
                $personagem->getArmadura()->setProtecaoMagica(true);

                break;

            
            case "Templário":
                $personagem->setImagem(BASE_URL . "assets/templario_super_sayajin_blue_4.png");

                $personagem->setHp(90);

                $personagem->getArma()->setNome("Geada Branca");
                $personagem->getArma()->setDano(88);
                $personagem->getArma()->setVelocidade(90);
                $personagem->getArma()->setPrecisao(85);

                $personagem->getArmadura()->setNome("Armadura da Caçada");
                $personagem->getArmadura()->setVelocidade(90);
                $personagem->getArmadura()->setNegacaoDano(90);
                $personagem->getArmadura()->setProtecaoMagica(true);

                break;
        }

        $personagem->setSsj(true);
        $this->criacaoService->iniciarSessao();
        $_SESSION[SESSAO_CHAR] = $personagem;
        return  $personagem;
    }
}
