<?php

function dump(...$vars){
    echo '<pre>';
    var_dump(...$vars);
    echo '</pre>';
}

function dd(...$vars){
    dump(...$vars);
    die;
}

function view($viewName, $vars=[]){
    extract($vars);
    include __DIR__ . "/views/$viewName.php";
}

function redirect($path){
    header("Location: $path");
}