<?php
session_start();
if(!empty($_GET['tok']))
{
    if($_GET['tok'] == $_SESSION['token'])
    {
        if($_COOKIE['login'] && $_COOKIE['password'])
        {
            echo 'bienvenue, <a href="deco.php">Se déconnecter</a>';
            exit;
        }
    }
}
header('location:motdepasse.php');
?>