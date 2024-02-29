<?php
    require_once '../../model/Conexao.php';

    class AgendamentoDao {
        public static function insert ($agendamento) {
            $conexao = Conexao::conectar();
            $query = "INSERT INTO tbagendamento (dataAgendamento, horaAgendamento, codPet, obsAgendamento) VALUES (?, ?, ?, ?)";
            $stmt = $conexao->prepare ($query);
            $stmt->bindValue (1, $agendamento->getDataAgendamento());
            $stmt->bindValue (2, $agendamento->getHoraAgendamento());
            $stmt->bindValue (3, $agendamento->getCodPet());
            $stmt->bindValue (4, $agendamento->getObsAgendamento());
            $stmt->execute();
        }

        public static function selectAll () {
            $conexao = Conexao::conectar();
            $query = "SELECT * FROM tbagendamento";
            $stmt = $conexao->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll();
        }

        public static function selectId ($codAgendamento) {
            $conexao = Conexao::conectar();
            $query = "SELECT * FROM tbagendamento WHERE codAgendamento = ?";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $codAgendamento);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);

        }

        public static function update ($codAgendamento, $agendamento) {
            $conexao = Conexao::conectar();
            $query = "UPDATE tbagendamento SET
            dataAgendamento = ?,
            horaAgendamento = ?,
            codPet = ?,
            obsAgendamento = ? 
            WHERE codAgendamento = ?";
            $stmt = $conexao->prepare ($query);
            $stmt->bindValue (1, $agendamento->getDataAgendamento());
            $stmt->bindValue (2, $agendamento->getHoraAgendamento());
            $stmt->bindValue (3, $agendamento->getCodPet());
            $stmt->bindValue (4, $agendamento->getObsAgendamento());
            $stmt->bindValue (5, $codAgendamento);
            return $stmt->execute();
        
        }
        public static function delete ($codAgendamento) {
            $conexao = Conexao::conectar();
            $query = "DELETE FROM tbagendamento WHERE codAgendamento = ?";
            $stmt = $conexao ->prepare ($query);
            $stmt->bindValue(1, $codAgendamento);
            return $stmt->execute();
        }

        /*public static function checkCredentials ($email, $senha ) {
            $conexao = Conexao::conectar();
            $query = "SELECT * FROM tbadm WHERE emailAdm = ? AND passwordAdm = ?";
            $stmt = $conexao -> prepare ($query);
            $stmt -> bindValue (1, $email);
            $stmt -> bindValue (2, $senha);
            $stmt->execute();
            return $stmt->fetch (PDO::FETCH_ASSOC);
        }*/
    }


?>