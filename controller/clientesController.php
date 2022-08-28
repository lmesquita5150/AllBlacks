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
            // $resultData = $this -> model -> getAll();
            // include('./view/index.php');
            return $this -> model -> getAll();
            //pre($resultData);
            //echo $resultData[0]->nome;
            /* foreach($resultData as $obj) {
                foreach($obj as $key => $value) {
                    echo "$key => $value<br>";


                }
            } */
        }

        public function update(array $data) {
            return $this -> model -> update((object)$data);
        }

        public function xmlUpload()
        {
            $this -> model -> xmlupload();
            // $resultXml = $this -> model -> xmlupload();
            // include('./view/index.php');
            //echo $resultXml();
        }

    }

?>