<?php

//checks whether an invalid email is entered
function validateEmail($email){
    $result;
    if(!filter_var($email, FILTER_vALIDATE_EMAIL)){
        $result = true;
    }else{
        $result = false;
    }
    return $result;
}

function passMatch($pwd, $repeat){
    $result;
    if($pwd !== $repeat){
        $result = true;
    }else{
        $result = false;
    }
    return $result;
}

function invalidPass($pwd){
    $result;
    if(!preg_match("/^[a-zA-Z][0-9][7,24]$/", $pwd)){
        $result = true;
    }else{
        $result = false;
    }
    return $result;
}
