<?php
    require_once '../../model/CrudVilla.php';
    $crud=new crudvilla();
    $lesApp=$crud->listerApp();
    include '../../view/villa/listerVilla.php';
?>