<?php
    $id=$_GET['id'];
    include_once '../../model/CrudVilla.php';
    $crud=new crudVilla();
    $res=$crud->supprimerApp($id);
    if($res){
        header('location:lise.php');exit();
    }
    else{
        echo"problem de supression !!!!!";
    }
?>