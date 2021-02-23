<?php

session_start();

    function startSession(){

        if (!isset($_SESSION['name_user']) AND !isset($_SESSION['email'])){
        
            header('location: ../index.php');
        }
    }
    startSession();
?>