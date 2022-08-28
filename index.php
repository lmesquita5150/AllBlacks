<?php

$resultData = array();

include('./view/index.php');

// if (!$_POST) {
//     require_once('./config/connect.php');
//     require_once('./controller/clientesController.php');

//     (new clientesController)->getAll();
//     // $controller = new clientesController();

//     // $action = !empty($_GET['a']) ? $_GET['a'] : 'getAll';

//     // if ($_POST) {
//     //     $controller->xmlUpload();
//     //     header('Location: ./');
//     //     exit;
//     // }

//     // $data = $controller -> {$action}();
// }

   /*  pre($data);

    function pre( $arr, $exit = false, $line = false, $return = false )
    {
        $backtrace = debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS, 2);$l='';$r='';$i=0;
        if ($line && isset($backtrace[1]) && is_array($backtrace[1])) $i = 1;
        if ($line && isset($backtrace[$i]) && is_array($backtrace[$i]))
            $l = nl2br("\n\n{$backtrace[$i]['file']}:{$backtrace[$i]['line']}");
        if (is_array($arr) || gettype($arr)==='object') $r .= '<pre>' . print_r($arr,1) . '</pre>' . $l;
        elseif (gettype($arr)==='string' && json_decode($arr, true)) $r .= '<pre>' . print_r(json_decode($arr, true),1) . '</pre>' . $l;
        else $r .= $arr . $l;
        if ($return) return $arr;
        echo $r;
        if ($exit) exit;
    } */
    ?>

