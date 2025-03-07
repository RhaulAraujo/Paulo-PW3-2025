<?php
    class Agenda{
        public $data, $hora, $motivo;

        public function get_Data(){
            return $this->data;
        }

        public function set_Data($data){
            $this->data = $data;
        }

        public function get_Hora(){
            return $this->hora;
        }

        public function set_Hora($hora){
            $this->hora = $hora;
        }
        public function get_Motivo(){
            return $this->motivo;
        }

        public function set_Motivo($motivo){
            $this->motivo = $motivo;
        }
    }