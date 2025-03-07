<?php
    //Entidade Pessoa
    class pessoa {
        private $nome, $cpf, $contato;

        public function get_Cpf(){
            return $this->cpf;
        }

        public function set_Cpf($cpf){
            $this->cpf = $cpf;
        }

        public function get_Nome(){
            return $this->nome;
        }

        public function set_Nome($nome){
            $this->nome = $nome;
        }

        public function get_Contato(){
            return $this->contato;
        }

        public function set_Contato($contato){
            $this->contato = $contato;
        }
    }
