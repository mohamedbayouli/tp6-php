<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../view/villa/bootstrap.css">
    <title>Liste des villa</title>
</head>
<body>
    <div class="container mt-5">
        <fieldset>
            <legend class="mb-4">Liste des villa</legend>
            <table class="table table-bordered table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th>Référence</th>
                        <th>Propriétaire</th>
                        <th>Localité</th>
                        <th>Surface</th>
                        <th>Usage</th>
                        <th>NB Pièces</th>
                        <th>nb Etage</th>
                        <th colspan="2" class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    
                    foreach ($lesApp as $value) {
                        if($value[6]=='Villa'){
                        ?>
                        <tr>    
                            <td><?=$value[0] ?></td>
                            <td><?= $value[1] ?></td>
                            <td><?= $value[2] ?></td>
                            <td><?= $value[3] ?></td>
                            <td><?= $value[4] ?></td>
                            <td><?= $value[5] ?></td>
                            <td><?=$value[8] ?></td>
                            <td>
                                <a href="../../controller/villa/suppApp.php?id=<?=$value[0] ?>" class="btn btn-danger btn-sm">Supprimer</a>
                            </td>
                            <td>
                                <a href="../../controller/villa/modifer.php?id=<?=$value[0]?>" class="btn btn-warning btn-sm">Modifier</a>
                            </td>
                        </tr>
                        <?php
                        }}
                    ?>
                </tbody>
            </table>
        </fieldset>
    </div>
    <?php
    $contenu = ob_get_clean();
    include 'layout.php';
    ?>
</body>
</html>
