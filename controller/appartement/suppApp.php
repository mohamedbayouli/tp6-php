<?php
    $id=$_GET['id'];
    include_once '../../model/CrudAppartement.php';
    $crud=new crudAppartement();
    $res=$crud->supprimerApp($id);
    if($res){
        header('location:lise.php');exit();
    }
    else{
        echo"problem de supression !!!!!";
    }
?>