<?php 
include "connection.php";
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "DELETE FROM faslmodares WHERE id=$id";
    $conn->query($sql);
}

header('location:/PROX/admin/dashboard4.php');
exit;
?>
