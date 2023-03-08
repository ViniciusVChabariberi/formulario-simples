<?php
    //Classe
    class Principal{
        //Atributos
        private $nome;
        private $telefone;
        private $origem;
        private $data;
        private $observacao;

        //Método GET
        public function getNome(){
            return $this->nome;
        }

        //Método SET
        public function setNome($nome){
            $this->nome = $nome;
        }

        public function getTelefone(){
            return $this->nome;
        }

        public function setTelefone($telefone){
            $this->telefone = $telefone;
        }

        public function getOrigem(){
            return $this->origem;
        }

        public function setOrigem($origem){
            $this->origem = $origem;
        }

        public function getData(){
            return $this->data;
        }

        public function setTelefone($data){
            $this->data = $data;
        }

        public function getObservacao(){
            return $this->observacao;
        }

        public function setObservacao($observacao){
            $this->observacao = $observacao;
        }

    }
?>