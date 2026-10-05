<?php

class Arma{
    private string $nome;
    private int $dano;
    private int $velocidade;
    private int $precisao;

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getDano(): int
    {
        return $this->dano;
    }

    public function setDano(int $dano): self
    {
        $this->dano = $dano;

        return $this;
    }

    public function getVelocidade(): int
    {
        return $this->velocidade;
    }

    public function setVelocidade(int $velocidade): self
    {
        $this->velocidade = $velocidade;

        return $this;
    }

    public function getPrecisao(): int
    {
        return $this->precisao;
    }

    public function setPrecisao(int $precisao): self
    {
        $this->precisao = $precisao;

        return $this;
    }
}