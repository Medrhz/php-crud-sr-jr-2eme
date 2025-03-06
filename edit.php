<?php

include "./connection.php";
$prenom = $_POST['p'];
$nom = $_POST['n'];
$id = $_POST['id'];

$query = "update users set prenom = ?, nom = ? where id = ?";
$stmt = $connection->prepare($query);
$isUpdated = $stmt->execute([$prenom, $nom, $id]);

if ($isUpdated) {
    header("location:users.php");
} else {
    echo "error";
}
