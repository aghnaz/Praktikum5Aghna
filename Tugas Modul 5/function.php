<?php

    function do_login($username, $password){
        if($username == "admin" && $password == "admin"){
            $_SESSION["username"] = $username;
            $_SESSION["password"] = $password;
            header("location:beranda.php");
        }
        if($username != "admin" || $password != "admin"){
            header("location:flogin.php?error=wrong");
        }

        
    }
    function check_login(){
        if(!isset($_SESSION["username"])){
            header("location:flogin.php");
        }
    }
?>