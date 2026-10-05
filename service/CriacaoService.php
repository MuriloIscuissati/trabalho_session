<?php

require_once(__DIR__ . "/../util/config.php");
class CriacaoService{
    public function iniciarSessao(){
        if(session_status() != PHP_SESSION_ACTIVE)
            session_start();
    }

    public function personagemEstaCriado(){
        $this->iniciarSessao();
        return isset($_SESSION[SESSAO_CHAR]);
    }

    public function excluirPersonagem(){
        $this->iniciarSessao();
        session_unset();
        session_destroy();
    }

    public function validar($nome, $classe){
        $erros = array();

        if(!$nome)
            array_push($erros, "Informe o nome!!!");
        if(!$classe)
            array_push($erros, "Informe a classe!!!");

        return $erros;
    }
}
