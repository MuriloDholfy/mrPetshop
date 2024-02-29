<?php
    class Produto {
        public $codProduto, $descProduto, $valorProduto, $agendamentoProduto, $imgProduto;

        public function getCodProduto () {
            return $this->codProduto; 
        }
        public function setCodProduto($codProduto) {
            $this->codProduto = $codProduto;
        }

        public function getDescProduto () {
            return $this->descProduto;
        }
        public function setDescProduto($descProduto) {
            $this->descProduto = $descProduto;
        }

        public function getValorProduto () {
            return $this->valorProduto;
        }
        public function setValorProduto($valorProduto) {
            $this->valorProduto = $valorProduto;
        }

        public function getAgendamentoProduto () {
            return $this->agendamentoProduto;
        }
        public function setAgendamentoProduto ($agendamentoProduto) {
            $this->agendamentoProduto = $agendamentoProduto;
        }

        public function getImgProduto () {
            return $this->imgProduto;
        }
        public function setImgProduto($imgProduto) {
            $this->imgProduto = $imgProduto;
        }

        public function salvarImagem ($novo_nome) {
            //a foto vem com a extenção $_FILES
            if (empty ($_FILES['foto']['size']) !=1) {
                //pegar extensao do arquivo
                if ($novo_nome=="") {
                    $novo_nome = md5(time()). ".jpg";
                }
                //$definindo o diretorio
                $diretorio = "../../img/user/";
                //juntando o nome com o diretorio
                $nomeCompletoDir = $diretorio.$novo_nome;
                //efetuando o upload

                move_uploaded_file ($_FILES['foto']['tmp_name'], $nomeCompletoDir);
                return $novo_nome;
            } else {
                return $novo_nome;
            }
        }

    }


?>