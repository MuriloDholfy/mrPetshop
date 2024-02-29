<?php
    class Pet {
        public $codPet, $descPet, $codCliente, $pesoPet, $codRaca;

        public function getCodPet () {
            return $this->codPet; 
        }
        public function setCodPet($codPet) {
            $this->codPet = $codPet;
        }

        public function getDescPet () {
            return $this->descPet;
        }
        public function setDescPet($descPet) {
            $this->descPet = $descPet;
        }

        public function getCodCliente () {
            return $this->codCliente;
        }
        public function setCodCliente($codCliente) {
            $this->codCliente = $codCliente;
        }

        public function getPesoPet () {
            return $this->pesoPet;
        }
        public function setPesoPet ($pesoPet) {
            $this->pesoPet = $pesoPet;
        }

        public function getCodRaca () {
            return $this->codRaca;
        }
        public function setCodRaca ($codRaca) {
            $this->codRaca = $codRaca;
        }
        
        
    }


?>