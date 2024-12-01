<?php
  include_once '../../model/CrudAppartement.php';
  $crud=new crudAppartement();
  if(isset($_POST['rech']));
  $ref=htmlspecialchars($_POST['ref']);
  $lesApp=$crud->recupererApp($ref);
  if(empty($lesApp))
     echo"aucun appratement trouvé";
  else
  include '../../view/appartement/listerAppartement.php';
  
?>