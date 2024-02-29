<?php
    class Especie {
        public $codEspecie, $descEspecie;

        public function getCodEspecie () {
            return $this->codEspecie; 
        }
        public function setCodEspecie($codEspecie) {
            $this->codEspecie = $codEspecie;
        }

        public function getDescEspecie () {
            return $this->descEspecie;
        }
        public function setDescEspecie($descEspecie) {
            $this->descEspecie = $descEspecie;
        }

    }


?>