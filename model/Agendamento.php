<?php
    class Agendamento {
        public $codAgendamento, $dataAgendamento, $horaAgendamento, $codPet, $obsAgendamento;

        public function getCodAgendamento () {
            return $this->codAgendamento; 
        }
        public function setCodAgendamento($codAgendamento) {
            $this->codAgendamento = $codAgendamento;
        }

        public function getDataAgendamento () {
            return $this->dataAgendamento;
        }
        public function setDataAgendamento($dataAgendamento) {
            $this->dataAgendamento = $dataAgendamento;
        }

        public function getHoraAgendamento () {
            return $this->horaAgendamento;
        }
        public function setHoraAgendamento($horaAgendamento) {
            $this->horaAgendamento = $horaAgendamento;
        }

        public function getCodPet () {
            return $this->codPet;
        }
        public function setCodPet ($codPet) {
            $this->codPet = $codPet;
        }

        public function getObsAgendamento () {
            return $this->obsAgendamento;
        }
        public function setObsAgendamento ($obsAgendamento) {
            $this->obsAgendamento = $obsAgendamento;
        }
        
        
    }


?>