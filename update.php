<?php
include "./connection.php";

$id = $_GET['id_user'];


$query = "select * from users where id = $id";
$user = $connection->query($query)->fetch();
// var_dump($user);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="edit.php" method="post">
        <input type="hidden" name="id" value="<?= $user["id"] ?>">
        <div>
            <label for="">prenom</label>
            <input type="text" name="p" value="<?= $user["prenom"] ?>" />
        </div>
        <div>
            <label for="">nom</label>
            <input type="text" name="n" value="<?= $user["nom"] ?>" />
        </div>
        <div>
            <input type="submit" value="edit" />
        </div>
    </form>
</body>

</html>