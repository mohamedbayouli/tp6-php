<?php
   if (isset($_POST['ok'])){
      $ref=htmlspecialchars($_POST['ref']);
      $prop=htmlspecialchars($_POST['prop']);
      $loc=htmlspecialchars($_POST['loc']);
      $sur=htmlspecialchars($_POST['sur']);
      $domUse=htmlspecialchars($_POST['domUse']);
      $nbp=htmlspecialchars($_POST['nbp']);
      $surcom=htmlspecialchars($_POST['surcom']);
      include '../../model/villa.php';
      $villa=new villa($ref,$prop,$loc,$sur,$nbp,$domUse,$surcom);
      require_once '../../model/CrudVilla.php';
      $crud=new CrudVilla();
      $res=$crud->ajouterApp($villa);
    include '../../view/villa/findall.php';
   }
?>