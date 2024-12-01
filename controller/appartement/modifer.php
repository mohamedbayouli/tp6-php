<?php
  include_once '../../model/CrudAppartement.php';
  $crud=new crudAppartement();
  if(isset($_GET['id'])){
  $id=$_GET['id'];
  $app=$crud->recupererApp($id);
  include_once '../../view/appartement/modifierAppartement.php';}
  if (isset($_POST['ok'])){
    $ref=htmlspecialchars($_POST['ref']);
    $loc=htmlspecialchars($_POST['loc']);
    $prop=htmlspecialchars($_POST['prop']);
    $sur=htmlspecialchars($_POST['sur']);
    $domUse=htmlspecialchars($_POST['domUse']);
    $nbp=htmlspecialchars($_POST['nbp']);
    $surcom=htmlspecialchars($_POST['surcom']);
    include_once '../../model/appartement.php';
    $appartement=new appratement($ref,$prop,$loc,$sur,$nbp,$domUse,$surcom);
    $res=$crud->modifierApp($appartement);
    include 'lise.php';
  }
?>