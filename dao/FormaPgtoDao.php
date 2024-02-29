<?php
    require_once '../../model/Conexao.php';

    class FormaPgtoDao {
        public static function insert ($formapgto) {
            $conexao = Conexao::conectar();
            $query = "INSERT INTO tbformapgto (descFormaPgto)  VALUES (?)";
            $stmt = $conexao->prepare ($query);
            $stmt->bindValue (1, $formapgto->getDescFormaPgto());
            $stmt->execute();
        }

        public static function selectAll () {
            $conexao = Conexao::conectar();
            $query = "SELECT * FROM tbformapgto";
            $stmt = $conexao->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll();
        }

        public static function selectId ($codFormaPgto) {
            $conexao = Conexao::conectar();
            $query = "SELECT * FROM tbformapgto WHERE codFormaPgto = ?";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $codFormaPgto);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);

        }

        public static function update ($codFormaPgto, $formapgto) {
            $conexao = Conexao::conectar();
            $query = "UPDATE tbformapgto SET
            descFormaPgto = ?
            WHERE codFormaPgto = ?";
            $stmt = $conexao->prepare ($query);
            $stmt->bindValue (1, $formapgto->getDescFormaPgto());      
            $stmt->bindValue (2, $codFormaPgto);
            return $stmt->execute();
        
        }
        public static function delete ($codFormaPgto) {
            $conexao = Conexao::conectar();
            $query = "DELETE FROM tbformapgto WHERE codFormaPgto = ?";
            $stmt = $conexao ->prepare ($query);
            $stmt->bindValue(1, $codFormaPgto);
            return $stmt->execute();
        }

        
    }


?>