<?php

include '../db/db_con.php';

if(isset($_GET['deleteid'])) {

        $id = $_GET['deleteid'];

    $pdoStatement = $pdo->prepare("DELETE FROM `people` WHERE id=$id");
    
    if($pdoStatement->execute()) {
        print "Ma'lumot o'chirildi";
        header('Location: ../ruyxat.php');
    } else {
        print "Qanaqadir xatolik ruy berdi";
    }
}

?>