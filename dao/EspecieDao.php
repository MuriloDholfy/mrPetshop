<?php
    require_once '../../model/Conexao.php';

    class EspecieDao {
        public static function insert ($especie) {
            $conexao = Conexao::conectar();
            $query = "INSERT INTO tbespecie (descEspecie) VALUES (?)";
            $stmt = $conexao->prepare ($query);
            $stmt->bindValue (1, $especie->getDescEspecie());
            $stmt->execute();
        }

        public static function selectAll () {
            $conexao = Conexao::conectar();
            $query = "SELECT * FROM tbespecie";
            $stmt = $conexao->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll();
        }

        public static function selectId ($codEspecie) {
            $conexao = Conexao::conectar();
            $query = "SELECT * FROM tbespecie WHERE codEspecie = ?";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $codEspecie);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);

        }

        public static function update ($codEspecie, $especie) {
            $conexao = Conexao::conectar();
            $query = "UPDATE tbespecie SET
            descEspecie = ?
            WHERE codEspecie = ?";
            $stmt = $conexao->prepare ($query);
            $stmt->bindValue (1, $especie->getDescEspecie());
            $stmt->bindValue (2, $codEspecie);
            return $stmt->execute();
        
        }
        public static function delete ($codEspecie) {
            $conexao = Conexao::conectar();
            $query = "DELETE FROM tbespecie WHERE codEspecie = ?";
            $stmt = $conexao ->prepare ($query);
            $stmt->bindValue(1, $codEspecie);
            return $stmt->execute();
        }

    }


?>