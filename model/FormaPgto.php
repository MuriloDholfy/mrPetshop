<?php
    class FormaPgto {
        public $codFormaPgto, $descFormaPgto;

        public function getCodFormaPgto () {
            return $this->codFormaPgto; 
        }
        public function setCodFormaPgto($codFormaPgto) {
            $this->codFormaPgto = $codFormaPgto;
        }

        public function getDescFormaPgto () {
            return $this->descFormaPgto;
        }
        public function setDescFormaPgto($descFormaPgto) {
            $this->descFormaPgto = $descFormaPgto;
        }

    }


?>