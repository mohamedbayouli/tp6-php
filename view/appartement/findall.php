<?php
ob_start();
 echo"Insertion effectué avec success";
 
?>

<form action="../../controller/appartement/lise.php" method="post">
    <input type="submit" value="Lister">
</form>
<?php
$contenu=ob_get_clean();
include 'layout.php';
?>