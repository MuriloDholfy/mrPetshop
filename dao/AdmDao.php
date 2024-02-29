<?php
    require_once '../../model/Conexao.php';

    class AdmDao {
        public static function insert ($adm) {
            $conexao = Conexao::conectar();
            $query = "INSERT INTO tbadm (nomeAdm, cpfAdm, dataNascAdm, emailAdm, passwordAdm, imgAdm, tokenAdm) VALUES (?, ?, ?, ?, ?, ?, ?)";
            $stmt = $conexao->prepare ($query);
            $stmt->bindValue (1, $adm->getNomeAdm());
            $stmt->bindValue (2, $adm->getCpfAdm());
            $stmt->bindValue (3, $adm->getDataNascAdm());
            $stmt->bindValue (4, $adm->getEmailAdm());
            $stmt->bindValue (5, $adm->getPasswordAdm());
            $stmt->bindValue (6, $adm->getImgAdm());
            $stmt->bindValue (7, $adm->getTokenAdm());
            $stmt->execute();
        }

        public static function selectAll () {
            $conexao = Conexao::conectar();
            $query = "SELECT * FROM tbadm";
            $stmt = $conexao->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll();
        }

        public static function selectId ($codAdm) {
            $conexao = Conexao::conectar();
            $query = "SELECT * FROM tbadm WHERE codAdm = ?";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $codAdm);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);

        }

        public static function update ($codAdm, $adm) {
            $conexao = Conexao::conectar();
            $query = "UPDATE tbadm SET
            nomeAdm = ?,
            cpfAdm = ?,
            dataNascAdm = ?,
            emailAdm = ?,
            passwordAdm = ?,
            imgAdm = ?,
            tokenAdm = ?
            WHERE codAdm = ?";
            $stmt = $conexao->prepare ($query);
            $stmt->bindValue (1, $adm->getNomeAdm());
            $stmt->bindValue (2, $adm->getCpfAdm());
            $stmt->bindValue (3, $adm->getDataNascAdm());
            $stmt->bindValue (4, $adm->getEmailAdm());
            $stmt->bindValue (5, $adm->getPasswordAdm());
            $stmt->bindValue (6, $adm->getImgAdm());
            $stmt->bindValue (7, $adm->getTokenAdm());
            $stmt->bindValue (8, $codAdm);
            return $stmt->execute();
        
        }
        public static function delete ($codAdm) {
            $conexao = Conexao::conectar();
            $query = "DELETE FROM tbadm WHERE codAdm = ?";
            $stmt = $conexao ->prepare ($query);
            $stmt->bindValue(1, $codAdm);
            return $stmt->execute();
        }

        public static function checkCredentials ($email, $senha ) {
            $conexao = Conexao::conectar();
            $query = "SELECT * FROM tbadm WHERE emailAdm = ? AND passwordAdm = ?";
            $stmt = $conexao -> prepare ($query);
            $stmt -> bindValue (1, $email);
            $stmt -> bindValue (2, $senha);
            $stmt->execute();
            return $stmt->fetch (PDO::FETCH_ASSOC);
        }
    }


?>