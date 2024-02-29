<?php
    require_once '../../model/Conexao.php';

    class VendaProdutoDao {
        public static function insert ($vendaProduto) {
            $conexao = Conexao::conectar();
            $query = "INSERT INTO tbvendaproduto (codVenda, codProduto, codFormaPgto, codAgendamento ) VALUES (?, ?, ?, ?)";
            $stmt = $conexao->prepare ($query);
            $stmt->bindValue (1, $vendaProduto->getCodVenda());
            $stmt->bindValue (2, $vendaProduto->getCodProduto());
            $stmt->bindValue (3, $vendaProduto->getCodFormaPgto());
            $stmt->bindValue (4, $vendaProduto->getCodAgendamento());
            $stmt->execute();
        }

        public static function selectAll () {
            $conexao = Conexao::conectar();
            $query = "SELECT * FROM tbvendaproduto";
            $stmt = $conexao->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll();
        }

        public static function selectId ($codVendaProduto) {
            $conexao = Conexao::conectar();
            $query = "SELECT * FROM tbvendaproduto WHERE codVendaProduto = ?";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $codVendaProduto);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);

        }

        public static function update ($codVendaProduto, $vendaProduto) {
            $conexao = Conexao::conectar();
            $query = "UPDATE tbvendaproduto SET
            codVenda = ?,
            codProduto = ?,
            codFormaPgto = ?,
            codAgendamento = ?
            WHERE codVendaProduto = ?";
            $stmt = $conexao->prepare ($query);
            $stmt->bindValue (1, $vendaProduto->getCodVenda());
            $stmt->bindValue (2, $vendaProduto->getCodProduto());
            $stmt->bindValue (3, $vendaProduto->getCodFormaPgto());
            $stmt->bindValue (4, $vendaProduto->getCodAgendamento());
            $stmt->bindValue (5, $codVendaProduto);
            return $stmt->execute();
        
        }
        public static function delete ($codVendaProduto) {
            $conexao = Conexao::conectar();
            $query = "DELETE FROM tbvendaproduto WHERE codVendaProduto = ?";
            $stmt = $conexao ->prepare ($query);
            $stmt->bindValue(1, $codVendaProduto);
            return $stmt->execute();
        }
    }


?>