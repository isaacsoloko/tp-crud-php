<?php
    require_once('db/db.php');
    require_once('src/model/user.php');
    require_once('src/model/crudModel.php');
    $crud = new CrudModel(DB::get_instance());
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>TP-CRUD-PHP & MySQL</title>
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta property="og:title" content="TP-CRUD-PHP & MySQL" />
        <meta property="og:type" content="profile" />
        <meta property="og:image" content="https://isaacsoloko.github.io/tp-crud-php/img/code.png" />
        <meta property="og:description" content="Create-Read-Update-Delete User in PHP & MySQL" />
        <link rel="shortcut icon" href="img/code.png" type="image/x-icon">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <nav>
            <h3>TP-CRUD-PHP & MySQL</h3>
        </nav>
        <form method="POST" action="src/controller/crudController.php">
            <input type="text" name="name" placeholder="User name" required />
            <input type="email" name="email" placeholder="User e-mail" required />
            <input type="password" name="password" placeholder="User password" required />
            <input type="submit" name="create" value="Créer user"/>
        </form>
        <table>
            <tbody>
                <?php
                    $users = $crud->getUsers();
                    foreach ($users as $user) {
                        ?>
                            <tr>
                                <td class="name-td">
                                    <?= $user->getName(); ?>
                                </td>
                                <td class="email-td">
                                    <?= $user->getEmail(); ?>
                                </td>
                                <td>
                                    <a href="" class="edit-btn">Modifier</a>
                                </td>
                                <td>
                                    <a href="src/controller/deleteUserController.php?id=<?= $user->getId(); ?>" 
                                    class="delete-btn">Supprimer</a>
                                </td>
                            </tr>
                        <?php
                    }
                ?>
            </tbody>
        </table>
    </body>
</html>