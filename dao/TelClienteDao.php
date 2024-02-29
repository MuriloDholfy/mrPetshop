<?php
    require_once '../../model/Conexao.php';

    class TelClienteDao {
        public static function insert ($telCliente) {
            $conexao = Conexao::conectar();
            $query = "INSERT INTO tbtelcliente (numTelCliente, codCliente) VALUES (?, ?)";
            $stmt = $conexao->prepare ($query);
            $stmt->bindValue (1, $telCliente->getNumTelCliente());
            $stmt->bindValue (2, $telCliente->getCodCliente());
            $stmt->execute();
        }

        public static function selectAll () {
            $conexao = Conexao::conectar();
            $query = "SELECT * FROM tbtelcliente";
            $stmt = $conexao->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll();
        }

        public static function selectId ($codTelCliente) {
            $conexao = Conexao::conectar();
            $query = "SELECT * FROM tbtelcliente WHERE codTelCliente = ?";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $codTelCliente);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);

        }

        public static function update ($codTelCliente, $telCliente) {
            $conexao = Conexao::conectar();
            $query = "UPDATE tbtelcliente SET
            numTelCliente = ?,
            codCliente = ?,
            WHERE codTelCliente = ?";
            $stmt = $conexao->prepare ($query);
            $stmt->bindValue (1, $telCliente->getNumTelCliente());
            $stmt->bindValue (2, $telCliente->getCodCliente());
            $stmt->bindValue (3, $codTelCliente);
            return $stmt->execute();
        
        }
        public static function delete ($codTelCliente) {
            $conexao = Conexao::conectar();
            $query = "DELETE FROM tbtelcliente WHERE codTelCliente = ?";
            $stmt = $conexao ->prepare ($query);
            $stmt->bindValue(1, $codTelCliente);
            return $stmt->execute();
        }

        
    }


?>