<?php
    require_once (__DIR__.'../../model/Conexao.php');

    class ProdutoDao {
        public static function insert ($produto) {
            $conexao = Conexao::conectar();
            $query = "INSERT INTO tbproduto (descProduto, valorProduto, agendamentoProduto, imgProduto) VALUES (?, ?, ?, ?)";
            $stmt = $conexao->prepare ($query);
            $stmt->bindValue (1, $produto->getDescProduto());
            $stmt->bindValue (2, $produto->getValorProduto());
            $stmt->bindValue (3, $produto->getAgendamentoProduto());
            $stmt->bindValue (4, $produto->getImgProduto());
            $stmt->execute();
        }

        public static function selectAll () {
            $conexao = Conexao::conectar();
            $query = "SELECT * FROM tbproduto";
            $stmt = $conexao->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll();
        }

        public static function selectId ($codProduto) {
            $conexao = Conexao::conectar();
            $query = "SELECT * FROM tbproduto WHERE codProduto = ?";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $codProduto);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);

        }

        public static function update ($codProduto, $produto) {
            $conexao = Conexao::conectar();
            $query = "UPDATE tbproduto SET
            descProduto = ?,
            valorProduto = ?,
            agendamentoProduto = ?,
            imgProduto = ?
            WHERE codProduto = ?";
            $stmt = $conexao->prepare ($query);
            $stmt->bindValue (1, $produto->getDescProduto());
            $stmt->bindValue (2, $produto->getValorProduto());
            $stmt->bindValue (3, $produto->getAgendamentoProduto());
            $stmt->bindValue (4, $produto->getImgProduto());
            $stmt->bindValue (5, $codProduto);
            return $stmt->execute();
        
        }
        public static function delete ($codProduto) {
            $conexao = Conexao::conectar();
            $query = "DELETE FROM tbproduto WHERE codProduto = ?";
            $stmt = $conexao ->prepare ($query);
            $stmt->bindValue(1, $codProduto);
            return $stmt->execute();
        }

        
    }


?>