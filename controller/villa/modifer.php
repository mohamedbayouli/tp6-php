<?php
  include_once '../../model/CrudVilla.php';
  $crud=new crudVilla();
  if(isset($_GET['id'])){
  $id=$_GET['id'];
  $app=$crud->recupererApp($id);
  include_once '../../view/villa/modifierVilla.php';}
  if (isset($_POST['ok'])){
    $ref=htmlspecialchars($_POST['ref']);
    $loc=htmlspecialchars($_POST['loc']);
    $prop=htmlspecialchars($_POST['prop']);
    $sur=htmlspecialchars($_POST['sur']);
    $domUse=htmlspecialchars($_POST['domUse']);
    $nbp=htmlspecialchars($_POST['nbp']);
    $surcom=htmlspecialchars($_POST['surcom']);
    include_once '../../model/villa.php';
    $villa=new villa($ref,$prop,$loc,$sur,$nbp,$domUse,$surcom);
    $res=$crud->modifierApp($villa);
    include 'lise.php';
  }
?>