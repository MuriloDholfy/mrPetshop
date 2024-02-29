<?php
    class Venda {
        public $codVenda, $precoVenda, $dataVenda, $codCliente;

        public function getCodVenda () {
            return $this->codVenda; 
        }
        public function setCodVenda($codVenda) {
            $this->codVenda = $codVenda;
        }

        public function getPrecoVenda () {
            return $this->precoVenda;
        }
        public function setPrecoVenda($precoVenda) {
            $this->precoVenda = $precoVenda;
        }

        public function getDataVenda () {
            return $this->dataVenda;
        }
        public function setDataVenda($dataVenda) {
            $this->dataVenda = $dataVenda;
        }
        public function getCodCliente () {
            return $this->codCliente;
        }
        public function setCodCliente($codCliente) {
            $this->codCliente = $codCliente;
        }


    }


?>