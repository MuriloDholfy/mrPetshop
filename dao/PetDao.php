<?php
    require_once '../../model/Conexao.php';

    class PetDao {
        public static function insert ($pet) {
            $conexao = Conexao::conectar();
            $query = "INSERT INTO tbpet (descPet, codCliente, pesoPet, codRaca) VALUES (?, ?, ?, ?)";
            $stmt = $conexao->prepare ($query);
            $stmt->bindValue (1, $pet->getDescPet());
            $stmt->bindValue (2, $pet->getCodCliente());
            $stmt->bindValue (3, $pet->getPesoPet());
            $stmt->bindValue (4, $pet->getCodRaca());
            $stmt->execute();
        }

        public static function selectAll () {
            $conexao = Conexao::conectar();
            $query = "SELECT * FROM tbpet";
            $stmt = $conexao->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll();
        }

        public static function selectId ($codPet) {
            $conexao = Conexao::conectar();
            $query = "SELECT * FROM tbpet WHERE codPet = ?";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $codPet);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);

        }

        public static function update ($codPet, $pet) {
            $conexao = Conexao::conectar();
            $query = "UPDATE tbpet SET
            descPet = ?,
            codCliente = ?,
            pesoPet = ?,
            codRaca = ? 
            WHERE codPet = ?";
            $stmt = $conexao->prepare ($query);
            $stmt->bindValue (1, $pet->getDescPet());
            $stmt->bindValue (2, $pet->getCodCliente());
            $stmt->bindValue (3, $pet->getPesoPet());
            $stmt->bindValue (4, $pet->getCodRaca()); 
            $stmt->bindValue (5, $codPet);
            return $stmt->execute();
        
        }
        public static function delete ($codPet) {
            $conexao = Conexao::conectar();
            $query = "DELETE FROM tbpet WHERE codPet = ?";
            $stmt = $conexao ->prepare ($query);
            $stmt->bindValue(1, $codPet);
            return $stmt->execute();
        }
    }


?>