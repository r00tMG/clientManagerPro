<?php
function redirect_to_login(){
    header('location:api/auth/login.php');
    exit(0);
}