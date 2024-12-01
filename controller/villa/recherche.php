<?php
  include_once '../../model/CrudVilla.php';
  $crud=new crudVilla();
  if(isset($_POST['rech']));
  $ref=htmlspecialchars($_POST['ref']);
  $lesApp=$crud->recupererApp($ref);
  if(empty($lesApp))
     echo"aucun appratement trouvé";
  else
  include '../../view/villa/listerVilla.php';
  
?>