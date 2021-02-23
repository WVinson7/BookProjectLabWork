<?php

function killSession() {

    session_start();

    unset($_SESSION['name_user']);
    unset($_SESSION['email']);
    unset($_SESSION['user_type']);

    session_unset();
    session_destroy();

    header('location: ../index.php');

}

killSession();



?>