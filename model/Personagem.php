<?php

require_once(__DIR__ . "/Armadura.php");
require_once(__DIR__ . "/Arma.php");

class Personagem{
    private string $nome;
    private int $hp;
    private string $classe;
    private string $imagem;
    private bool $ssj;
    private Arma $arma;
    private Armadura $armadura;


    public function getCombatSpeed(){
        return ($this->arma->getVelocidade() + $this->armadura->getVelocidade())/2;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getHp(): int
    {
        return $this->hp;
    }

    public function setHp(int $hp): self
    {
        $this->hp = $hp;

        return $this;
    }

    public function getArma(): Arma
    {
        return $this->arma;
    }

    public function setArma(Arma $arma): self
    {
        $this->arma = $arma;

        return $this;
    }

    public function getArmadura(): Armadura
    {
        return $this->armadura;
    }

    public function setArmadura(Armadura $armadura): self
    {
        $this->armadura = $armadura;

        return $this;
    }

    public function getClasse(): string
    {
        return $this->classe;
    }

    public function setClasse(string $classe): self
    {
        $this->classe = $classe;

        return $this;
    }

    public function getImagem(): string
    {
        return $this->imagem;
    }

    public function setImagem(string $imagem): self
    {
        $this->imagem = $imagem;

        return $this;
    }

    public function isSsj(): bool
    {
        return $this->ssj;
    }

    public function setSsj(bool $ssj): self
    {
        $this->ssj = $ssj;

        return $this;
    }

}
