<?php

class Armadura{
    private string $nome;
    private int $velocidade;
    private int $negacaoDano;
    private bool $protecaoMagica;

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getNegacaoDano(): int
    {
        return $this->negacaoDano;
    }

    public function setNegacaoDano(int $negacaoDano): self
    {
        $this->negacaoDano = $negacaoDano;

        return $this;
    }

    public function isProtecaoMagica(): bool
    {
        return $this->protecaoMagica;
    }

    public function setProtecaoMagica(bool $protecaoMagica): self
    {
        $this->protecaoMagica = $protecaoMagica;

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
}