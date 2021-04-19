<?php 
    //Sign out akun.
    session_start();

    session_unset();
    session_destroy();
    //Kembali ke SignIn.php
    header("Location: SignIn.php"); 
?>