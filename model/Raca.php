<?php
    class Raca {
        public $codRaca, $descRaca, $codEspecie;

        public function getCodRaca () {
            return $this->codRaca; 
        }
        public function setCodRaca($codRaca) {
            $this->codRaca = $codRaca;
        }

        public function getDescRaca () {
            return $this->descRaca;
        }
        public function setDescRaca($descRaca) {
            $this->descRaca = $descRaca;
        }

        public function getcodEspecie () {
            return $this->codEspecie;
        }
        public function setcodEspecie($codEspecie) {
            $this->codEspecie = $codEspecie;
        }


    }


?>