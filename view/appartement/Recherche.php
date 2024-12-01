<?php
ob_start();
?>

<h1>Recherche par référence</h1>
<form action="../../controller/appartement/recherche.php" method="post">
    Réfernce: <input type="text" name='ref'><input type="submit" value="rechercher" name="rech">
</form>
<?php
        $contenu=ob_get_clean(); 
        include 'layout.php';
    ?>