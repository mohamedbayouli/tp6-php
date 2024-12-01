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
        <?php
        foreach ($app as $value) {
           
        
        ?>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post"  class="form-control">
       <fieldset><legend>Modifier des données d'un villa</legend> Réference:<input type="text" name="ref" value="<?=$value[0]?>"><br>
        Propriétaire: <input type="text"  name="prop" value="<?=$value[1]?>"><br>
        Localité :<input type="text" name="loc" value="<?=$value[2]?>"><br>
        Surface : <input type="text" name="sur" value="<?=$value[3]?>"><br>
        domaineUsage :<select name="domUse" value='<?=$value[5]?>'>
            <option value='Bureau'>Bureau</option>
            <option value='domicile'>domicile </option>
        </select><br>
        Nombre de pieces :<input type="text" name="nbp" value="<?=$value[4]?>"><br>
        Nombre d'etage<input type="text" name ="surcom" value="<?=$value[8]?>"><br>
        <input type="submit" value="Modifier" name="ok">
        <?php } 
        ?>
</fieldset>
    </form>
    </div>
    <?php
        $contenu=ob_get_clean(); 
        include 'layout.php';
    ?>
</body>
</html>