<?php
    require_once '../../model/Conexao.php';

    class VendaDao {
        public static function insert ($venda) {
            $conexao = Conexao::conectar();
            $query = "INSERT INTO tbvenda (precoVenda, dataVenda, codCliente) VALUES (?, ?, ?)";
            $stmt = $conexao->prepare ($query);
            $stmt->bindValue (1, $venda->getPrecoVenda());
            $stmt->bindValue (2, $venda->getDataVenda());
            $stmt->bindValue (3, $venda->getCodCliente());
            $stmt->execute();
        }

        public static function selectAll () {
            $conexao = Conexao::conectar();
            $query = "SELECT * FROM tbvenda";
            $stmt = $conexao->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll();
        }

        public static function selectId ($codVenda) {
            $conexao = Conexao::conectar();
            $query = "SELECT * FROM tbvenda WHERE codVenda = ?";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $codVenda);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);

        }

        public static function update ($codVenda, $venda) {
            $conexao = Conexao::conectar();
            $query = "UPDATE tbvenda SET
            precoVenda = ?,
            dataVenda = ?,
            codCliente = ?
            WHERE codVenda = ?";
            $stmt = $conexao->prepare ($query);
            $stmt->bindValue (1, $venda->getPrecoVenda());
            $stmt->bindValue (2, $venda->getDataVenda());
            $stmt->bindValue (3, $venda->getCodCliente());
            $stmt->bindValue (4, $codVenda);
            return $stmt->execute();
        
        }
        public static function delete ($codVenda) {
            $conexao = Conexao::conectar();
            $query = "DELETE FROM tbvenda WHERE codVenda = ?";
            $stmt = $conexao ->prepare ($query);
            $stmt->bindValue(1, $codVenda);
            return $stmt->execute();
        }

        
    }


?>