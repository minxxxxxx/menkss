<?php
include "connection.php";
if(isset($_GET['id'])){
    $id = filter_var($_GET['id'], FILTER_VALIDATE_INT);
    if($id !== false){
        $stmt = $conn->prepare("DELETE FROM `floweritems` WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $stmt->close();
    }
}
header('location:/bolak2/index.php');
exit;
?>