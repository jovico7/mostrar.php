<?php
// echo $_POST['pokemon'];

if (isset($_POST['pokemon1'])) {
    if (strtolower($_POST['pokemon1'])=="pikachu") {
        header('Location: ../view/pantalla1.php');
    } 
    else {
        header('Location: ../index.php?msg=25');
    }
}
if (isset($_POST['pokemon2'])) {
    if (strtolower($_POST['pokemon2'])=="mew") {
        header('Location: ../view/pantalla2.php');
    } 
    else {
        header('Location: ../view/pantalla1.php?msg=151');
    }
}

?>
