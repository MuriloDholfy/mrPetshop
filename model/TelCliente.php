<?php
    class TelCliente {
        public $codTelCliente, $numTelCliente, $codCliente;

        public function getCodTelCliente () {
            return $this->codTelCliente; 
        }
        public function setCodCliente($codTelCliente) {
            $this->codTelCliente = $codTelCliente;
        }

        public function getNumTelCliente () {
            return $this->numTelCliente;
        }
        public function setNumTelCliente($numTelCliente) {
            $this->numTelCliente = $numTelCliente;
        }

        public function getCodCliente () {
            return $this->codCliente;
        }
        public function setCodCliente($codCliente) {
            $this->codCliente = $codCliente;
        }


    }


?>