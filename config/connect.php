<?php

    define('HOST','localhost');
    define('DBNAME','AllBlacks');
    define('PASSWORD','1234');
    define('USER','postgres');

    class Connect{
        protected $connection;
        function __construct()
        {
            $this->connectDatabase();
        }
        function connectDatabase()
        {
            try
            {
                $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
                $this->connection = new PDO('pgsql:host='.HOST.';dbname='.DBNAME, USER, PASSWORD, $options);
            }
            catch(PDOException $e)
            {
               echo nl2br("error\n".$e->getMessage());
               die();
            }
        }
    }

    // $testeconnect = new Connect();





?>