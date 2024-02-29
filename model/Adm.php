<?php
    class Adm {
        public $codAdm, $nomeAdm, $cpfAdm, $dataNascAdm, $emailAdm, $passwordAdm, $imgAdm, $tokenAdm;

        public function getCodAdm () {
            return $this->codAdm; 
        }
        public function setCodAdm($codAdm) {
            $this->codAdm = $codAdm;
        }

        public function getNomeAdm () {
            return $this->nomeAdm;
        }
        public function setNomeAdm($nomeAdm) {
            $this->nomeAdm = $nomeAdm;
        }

        public function getCpfAdm () {
            return $this->cpfAdm;
        }
        public function setCpfAdm($cpfAdm) {
            $this->cpfAdm = $cpfAdm;
        }

        public function getDataNascAdm () {
            return $this->dataNascAdm;
        }
        public function setDataNascAdm ($dataNascAdm) {
            $this->dataNascAdm = $dataNascAdm;
        }

        public function getEmailAdm () {
            return $this->emailAdm;
        }
        public function setEmailAdm ($emailAdm) {
            $this->emailAdm = $emailAdm;
        }

        public function getPasswordAdm () {
            return $this->passwordAdm;
        }
        public function setPasswordAdm ($passwordAdm) {
            $this->passwordAdm = $passwordAdm;
        }

        public function getImgAdm () {
            return $this->imgAdm;
        }
        public function setImgAdm($imgAdm) {
            $this->imgAdm = $imgAdm;
        }

        public function getTokenAdm () {
            return $this->tokenAdm;
        }
        public function setTokenAdm ($tokenAdm) {
            $this->tokenAdm = $tokenAdm;
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
                $nomeCompletodir = $diretorio.$novo_nome;
                //efetuando o upload

                move_uploaded_file ($_FILES['foto']['tmp_name'], $nomeCompletodir);
                return $novo_nome;
            } else {
                return $novo_nome;
            }
        }
        
    }


?>