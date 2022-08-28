<?php

    class ClienteModel extends Connect
    {
        private $table;

        public function __construct()
        {
            parent::__construct();
            $this->table = 'clientes';
        }

        public function getAll()
        {
            $sqlSelect = $this->connection->query("SELECT * FROM {$this->table}");
            $resultQuery = $sqlSelect->fetchAll(PDO::FETCH_OBJ);
            return $resultQuery;
        }

        public function get()
        {
            return $this->getAll()[0];
        }

        public function update(\stdClass $data) {
            $valor = str_replace('\\', '\'', trim(addslashes($data->value)));
            $query = "UPDATE {$this->table} SET {$data->column} = '$valor' WHERE id = $data->id";

            $message = "";

            try {
                $this->connection->query($query);
            } catch (\Exception $e) {
                $message = $e->getMessage();
            }

            return [
                'message' => $message,
            ];
        }

        public function xmlupload()
        {
            if(!empty($_FILES['arquivo']['tmp_name']))
            {
                $xml = simplexml_load_file($_FILES['arquivo']['tmp_name']);
                $arquivo = new DomDocument();
                $arquivo->load($_FILES['arquivo']['tmp_name']);

                foreach($xml as $torcedor)
                {
                    $attributes = $torcedor->attributes();
                    $colunas = "INSERT INTO {$this->table} (";
                    $valores = "VALUES (";
                    foreach ($attributes as $attrName => $attrValue) {
                        $valor = addslashes(strval($attrValue));

                        if ($attrName == 'ativo' && empty($valor)) $valor = 1;

                        $valores .= "'" . str_replace('\\', '\'', trim($valor)) . "', ";
                        $colunas .= "$attrName, ";
                    }

                    $query = substr($colunas, 0, -2) . ") " . substr($valores, 0, -2) . ");\n";

                    try {
                        $this->connection->query($query);
                    } catch (\Exception $e) {
                        echo $e->getMessage();
                    }
                }
            }
        }
    }



?>