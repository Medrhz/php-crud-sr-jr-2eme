<?php
include "./connection.php";

// get id from url
$id = $_GET['id_user'];
$stmt = $connection->prepare("DELETE FROM users WHERE id = ?");
$isDeleted = $stmt->execute([$id]);
if ($isDeleted) {
    header("location:users.php");
} else {
    echo "error";
}
