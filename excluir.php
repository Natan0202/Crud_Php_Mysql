<?php
    include("conectando.php");
    $id = 0;
    if(isset($_GET['delete'])){
        $id = $_GET['delete'];
        $conne->query("DELETE FROM cadastro WHERE id = $id") or die($mysqli->error()); //exclui
    }

?>