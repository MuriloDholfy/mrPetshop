<?php
    require_once (__DIR__.'../../model/Conexao.php');

    class ClienteDao {
        public static function insert ($cliente) {
            $conexao = Conexao::conectar();
            $query = "INSERT INTO tbcliente (nomeCliente, cpfCliente, dataNascCliente, logradCliente, numLogradCliente, cepCliente, bairroCliente, cidadeCliente, complementoCliente, emailCliente, passwordCliente, imgCliente, tokenCliente) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
            $stmt = $conexao->prepare ($query);
            $stmt->bindValue (1, $cliente->getNomeCliente());
            $stmt->bindValue (2, $cliente->getCpfCliente());
            $stmt->bindValue (3, $cliente->getDataNascCliente());
            $stmt->bindValue (4, $cliente->getLogradCliente());
            $stmt->bindValue (5, $cliente->getNumLogradCliente());
            $stmt->bindValue (6, $cliente->getCepCliente());
            $stmt->bindValue (7, $cliente->getBairroCliente());
            $stmt->bindValue (8, $cliente->getCidadeCliente());
            $stmt->bindValue (9, $cliente->getComplementoCliente());
            $stmt->bindValue (10, $cliente->getEmailCliente());
            $stmt->bindValue (11, $cliente->getPasswordCliente());
            $stmt->bindValue (12, $cliente->getImgCliente());
            $stmt->bindValue (13, $cliente->getTokenCliente());
            $stmt->execute();
        }

        public static function selectAll () {
            $conexao = Conexao::conectar();
            $query = "SELECT * FROM tbcliente";
            $stmt = $conexao->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll();
        }

        public static function selectId ($codCliente) {
            $conexao = Conexao::conectar();
            $query = "SELECT * FROM tbcliente WHERE codCliente = ?";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $codCliente);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);

        }

        public static function update ($codCliente, $cliente) {
            $conexao = Conexao::conectar();
            $query = "UPDATE tbcliente SET
            nomeCliente = ?,
            cpfCliente = ?,
            dataNascCliente = ?,
            logradCliente = ?,
            numLogradCliente = ?,
            cepCliente = ?,
            bairroCliente = ?,
            cidadeCliente = ?,
            complementoCliente = ?,
            emailCliente = ?,
            passwordCliente = ?,
            imgCliente = ?,
            tokenCliente = ?
            WHERE codCliente = ?";
            $stmt = $conexao->prepare ($query);
            $stmt->bindValue (1, $cliente->getNomeCliente());
            $stmt->bindValue (2, $cliente->getCpfCliente());
            $stmt->bindValue (3, $cliente->getDataNascCliente());
            $stmt->bindValue (4, $cliente->getLogradCliente());
            $stmt->bindValue (5, $cliente->getNumLogradCliente());
            $stmt->bindValue (6, $cliente->getCepCliente());
            $stmt->bindValue (7, $cliente->getBairroCliente());
            $stmt->bindValue (8, $cliente->getCidadeCliente());
            $stmt->bindValue (9, $cliente->getComplementoCliente());
            $stmt->bindValue (10, $cliente->getEmailCliente());
            $stmt->bindValue (11, $cliente->getPasswordCliente());
            $stmt->bindValue (12, $cliente->getImgCliente());
            $stmt->bindValue (13, $cliente->getTokenCliente());
            $stmt->bindValue (14, $codCliente);
            return $stmt->execute();
        
        }
        public static function delete ($codCliente) {
            $conexao = Conexao::conectar();
            $query = "DELETE FROM tbcliente WHERE codCliente = ?";
            $stmt = $conexao ->prepare ($query);
            $stmt->bindValue(1, $codCliente);
            return $stmt->execute();
        }

        public static function checkCredentials ($email, $senha ) {
            $conexao = Conexao::conectar();
            $query = "SELECT * FROM tbcliente WHERE emailCliente = ? AND passwordCliente = ?";
            $stmt = $conexao -> prepare ($query);
            $stmt -> bindValue (1, $email);
            $stmt -> bindValue (2, $senha);
            $stmt->execute();
            return $stmt->fetch (PDO::FETCH_ASSOC);
        }
    }


?>