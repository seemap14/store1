<?php
$delete_id=$_GET["delete_id"];
include("config.php");

$stmt = $conn->prepare("DELETE FROM products_git WHERE id=?");

$stmt->bind_param("i",$delete_id);

$stmt->execute();

header("Location:manage.php?page_id=1");
?>