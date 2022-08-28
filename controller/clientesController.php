<?php
    require_once('./model/cliente.php');

    class clientesController{
        private $model;

        public function __construct()
        {
            $this-> model = new ClienteModel;
        }

        public function getAll()
        {
            return $this -> model -> getAll();
        }

        public function update(array $data) {
            return $this -> model -> update((object)$data);
        }

        public function xmlUpload()
        {
            $this -> model -> xmlupload();
            
            return $this -> model -> getAll();
        }

    }

?>