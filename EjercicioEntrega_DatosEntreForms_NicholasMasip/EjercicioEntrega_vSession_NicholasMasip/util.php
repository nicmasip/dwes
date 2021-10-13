<?php

function prettyVardump($array){
    return '<pre>' . var_export($array, true) . '</pre></br>';
}

function printVD($array){
    echo prettyVardump($array);
}

// Errores

function enableErrors(){
    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);
}

// $_GET y $_POST

function check($name, $array){
    $value = null;
    if(isset($array[$name])){
        $value = $array[$name];
    }
    return $value;
}

// function read($nombre){
//     $valor = null;
//     if(isset($_POST[$nombre])){
//         $valor = $_POST[$nombre];
//     }
//     else if(isset($_GET[$nombre])){
//         $valor = $_GET[$nombre];
//     }
//     return $valor;
// }

function read($name){
    $value = check($name, $_POST);
    if($value == null){
        $value = check($name, $_GET);
    }
    return $value;
}

function save($name){
    if(isset($_POST[$name])){
        $_SESSION[$name] = $_POST[$name];
    }
}