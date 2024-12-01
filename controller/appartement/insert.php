<?php
   if (isset($_POST['ok'])){
      $ref=htmlspecialchars($_POST['ref']);
      $prop=htmlspecialchars($_POST['prop']);
      $loc=htmlspecialchars($_POST['loc']);
      $sur=htmlspecialchars($_POST['sur']);
      $domUse=htmlspecialchars($_POST['domUse']);
      $nbp=htmlspecialchars($_POST['nbp']);
      $surcom=htmlspecialchars($_POST['surcom']);
      include '../../model/appartement.php';
      $appartement=new appratement($ref,$prop,$loc,$sur,$nbp,$domUse,$surcom);
      require_once '../../model/CrudAppartement.php';
      $crud=new crudAppartement();
      $res=$crud->ajouterApp($appartement);
    include '../../view/appartement/findall.php';
   }
?>