<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" />
</head>

<body>

    <?php
    include "./connection.php";
    $query = "SELECT * FROM users;";
    $users = $connection->query($query)->fetchAll();
    ?>
    <div class="container mt-5">
        <h1 class="text-center">list of users</h1>
        <a class="btn btn-success" href="index.html">create</a>
        <table class="table table-striped text-center">
            <thead>
                <tr>
                    <td>id</td>
                    <td>prenom</td>
                    <td>nom</td>
                    <td>action</td>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($users as  $user) { ?>
                    <tr>
                        <td><?= $user['id'] ?></td>
                        <td><?= $user["prenom"] ?></td>
                        <td><?= $user["nom"] ?></td>
                        <td>
                            <a class="btn btn-danger" href="delete.php?id_user=<?= $user['id'] ?>">delete</a>
                            <a class="btn btn-secondary" href="update.php?id_user=<?= $user['id'] ?>">update</a>
                        </td>
                    </tr>
                <?php
                }
                ?>

            </tbody>
        </table>
    </div>
</body>

</html>