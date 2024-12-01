<?php
    require_once '../../model/CrudAppartement.php';
    $crud=new crudAppartement();
    $lesApp=$crud->listerApp();
    include '../../view/appartement/listerAppartement.php';
?>