<?php
    //check for an existing session
    session_start();

    //unset session variables
    session_unset();

    //destroy session

    session_destroy();

    //redirect login
    header('location:login.php');
?>
