<?php
include "./connection.php";

// global variables
$pernom = $_POST['p'];
$nom = $_POST['n'];

$prepare = $connection->prepare("INSERT INTO users VALUES(null,?,?)");
$data = [$pernom, $nom];
$res = $prepare->execute($data);

if ($res) {
    // echo "$pernom is insert with success";
    header("location:users.php");
} else {
    echo "$pernom field to inserting";
}
