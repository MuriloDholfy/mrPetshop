<?php
    class VendaProduto {
        public $codVendaProduto, $codVenda, $codProduto, $codFormaPgto, $codAgendamento;

        public function getCodVendaProduto () {
            return $this->codVendaProduto; 
        }
        public function setCodVendaProduto($codVendaProduto) {
            $this->codVendaProduto = $codVendaProduto;
        }

        public function getCodVenda () {
            return $this->codVenda;
        }
        public function setCodVenda($codVenda) {
            $this->codVenda = $codVenda;
        }

        public function getCodProduto () {
            return $this->codProduto;
        }
        public function setCodProduto($codProduto) {
            $this->codProduto = $codProduto;
        }
        public function getCodFormaPgto () {
            return $this->codFormaPgto;
        }
        public function setCodFormaPgto($codFormaPgto) {
            $this->codFormaPgto = $codFormaPgto;
        }

        public function getCodAgendamento () {
            return $this->codAgendamento;
        }
        public function setCodAgendamento($codAgendamento) {
            $this->codAgendamento = $codAgendamento;
        }


    }


?>