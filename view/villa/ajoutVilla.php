<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../view/villa/bootstrap.css">
</head>
<body>
    <div class="container">
    <form action="../../controller/villa/insert.php" method="post"  class="form-control">
       <fieldset><legend>Ajout d'un Villa</legend> Réference:<input type="text" name="ref" ><br>
        Propriétaire: <input type="text"  name="prop"><br>
        Localité :<input type="text" name="loc"><br>
        Surface : <input type="text" name="sur"><br>
        domaineUsage :<select name="domUse">
            <option value='Bureau'>Bureau</option>
            <option value='domicile'>domicile </option>
        </select><br>
        Nombre de pieces :<input type="text" name="nbp"><br>
        Nombre d'etage<input type="text" name ="surcom"><br>
        <input type="submit" value="ajouter" name="ok">
</fieldset>
    </form>
    </div>
    <?php
        $contenu=ob_get_clean(); 
        include 'layout.php';
    ?>
</body>
</html>