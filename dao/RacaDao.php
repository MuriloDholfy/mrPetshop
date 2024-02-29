<?php
    require_once '../../model/Conexao.php';

    class RacaDao {
        public static function insert ($raca) {
            $conexao = Conexao::conectar();
            $query = "INSERT INTO tbraca (descRaca, codEspecie) VALUES (?, ?)";
            $stmt = $conexao->prepare ($query);
            $stmt->bindValue (1, $raca->getDescRaca());
            $stmt->bindValue (2, $raca->getcodEspecie());
            $stmt->execute();
        }

        public static function selectAll () {
            $conexao = Conexao::conectar();
            $query = "SELECT * FROM tbraca";
            $stmt = $conexao->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll();
        }

        public static function selectId ($codRaca) {
            $conexao = Conexao::conectar();
            $query = "SELECT * FROM tbraca WHERE codRaca = ?";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $codRaca);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);

        }

        public static function update ($codRaca, $raca) {
            $conexao = Conexao::conectar();
            $query = "UPDATE tbraca SET
            descRaca = ?,
            codEspecie = ?
            
            WHERE codRaca = ?";
            $stmt = $conexao->prepare ($query);
            $stmt->bindValue (1, $raca->getDescRaca());
            $stmt->bindValue (2, $raca->getcodEspecie());
            $stmt->bindValue (3, $codRaca);
            return $stmt->execute();
        
        }
        public static function delete ($codRaca) {
            $conexao = Conexao::conectar();
            $query = "DELETE FROM tbraca WHERE codRaca = ?";
            $stmt = $conexao ->prepare ($query);
            $stmt->bindValue(1, $codRaca);
            return $stmt->execute();
        }

        
    }


?>