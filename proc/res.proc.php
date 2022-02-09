<?php
// echo $_POST['pokemon'];
session_start(); //creo una sesión
if (isset($_POST['pokemon1'])) {
    if (strtolower($_POST['pokemon1'])=="pikachu") {
        $_SESSION['pantalla1']='check'; //creo la variable de sesión y lo llevo a pantalla 1

        header('Location: ../view/pantalla1.php');
    } 
    else {
        header('Location: ../index.php?msg=25');
    }
}
if (isset($_POST['pokemon2'])) {
    if (strtolower($_POST['pokemon2'])=="mew") {
        $_SESSION['pantalla2']='check'; //creo la variable de sesión y lo llevo a pantalla 1

        header('Location: ../view/pantalla2.php');
    } 
    else {
        header('Location: ../view/pantalla1.php?msg=151');
    }
}

?>
