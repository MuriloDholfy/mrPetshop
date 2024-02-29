<?php
    class Cliente {
        public $codCliente, $nomeCliente, $cpfCliente, $dataNascCliente, $logradCliente, $numLogradCliente, $cepCliente, $bairroCliente, $cidadeCliente, $complementoCliente, $emailCliente, $passwordCliente, $imgCliente, $tokenCliente;

        public function getCodCliente () {
            return $this->codCliente; 
        }
        public function setCodCliente($codCliente) {
            $this->codCliente = $codCliente;
        }

        public function getNomeCliente () {
            return $this->nomeCliente;
        }
        public function setNomeCliente($nomeCliente) {
            $this->nomeCliente = $nomeCliente;
        }

        public function getCpfCliente () {
            return $this->cpfCliente;
        }
        public function setCpfCliente($cpfCliente) {
            $this->cpfCliente = $cpfCliente;
        }

        public function getDataNascCliente () {
            return $this->dataNascCliente;
        }
        public function setDataNascCliente ($dataNascCliente) {
            $this->dataNascCliente = $dataNascCliente;
        }

        public function getLogradCliente () {
            return $this->logradCliente;
        }
        public function setLogradCliente ($logradCliente) {
            $this->logradCliente = $logradCliente;
        }
        public function getNumLogradCliente () {
            return $this->numLogradCliente;
        }
        public function setNumLogradCliente ($numLogradCliente) {
            $this->numLogradCliente = $numLogradCliente;
        }
        public function getCepCliente () {
            return $this->cepCliente;
        }
        public function setCepCliente ($cepCliente) {
            $this->cepCliente = $cepCliente;
        }

        public function getBairroCliente () {
            return $this->bairroCliente;
        }
        public function setBairroCliente ($bairroCliente) {
            $this->bairroCliente = $bairroCliente;
        }

        public function getCidadeCliente () {
            return $this->cidadeCliente;
        }
        public function setCidadeCliente ($cidadeCliente) {
            $this->cidadeCliente = $cidadeCliente;
        }

        public function getComplementoCliente () {
            return $this->complementoCliente;
        }
        public function setComplementoCliente ($complementoCliente) {
            $this->complementoCliente = $complementoCliente;
        }
        
        

        public function getEmailCliente () {
            return $this->emailCliente;
        }
        public function setEmailCliente ($emailCliente) {
            $this->emailCliente = $emailCliente;
        }

        public function getPasswordCliente () {
            return $this->passwordCliente;
        }
        public function setPasswordCliente ($passwordCliente) {
            $this->passwordCliente = $passwordCliente;
        }

        public function getImgCliente () {
            return $this->imgCliente;
        }
        public function setImgCliente($imgCliente) {
            $this->imgCliente = $imgCliente;
        }

        public function getTokenCliente () {
            return $this->tokenCliente;
        }
        public function setTokenCliente ($tokenCliente) {
            $this->tokenCliente = $tokenCliente;
        }


        public function generateToken () {
            return bin2hex (random_bytes(16));
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