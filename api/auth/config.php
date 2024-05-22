<?php
function isConnect():bool{
    if(session_status()===PHP_SESSION_NONE){
        session_start();
        $_SESSION['users']=1;
    }
    return isset($_SESSION['users']);
}
