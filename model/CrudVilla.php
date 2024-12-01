<?php
include_once "config.php";
include_once "villa.php";
    class crudVilla{
       private $connexion;
       function __construct()
       {
        $con=new config();
        $this->connexion=$con->getConnexion();
       }
       function ajouterApp(villa $villa){
            $ref=$villa->getReference();
            $prop=$villa->getProprietaire();
            $loc=$villa->getLocalite();
            $sur=$villa->getSurface();
            $nbP=$villa->getNbPieces();
            $domSur=$villa->getDomaineUsage();
            $surcom=$villa->getNbetages();
            $sql="insert into immobilier values($ref,'$prop','$loc',$sur,$nbP,'$domSur','Villa',null,$surcom);";
            $res=$this->connexion->exec($sql);
            return $res;
       }
       function recupererApp($ref){
        $sql="select * from immobilier where reference=$ref;";
        $res=$this->connexion->query($sql);
        return $res->fetchAll(PDO::FETCH_NUM);
       }
       function supprimerApp($ref){
        $sql="delete from immobilier where reference=$ref";
        $res=$this->connexion->exec($sql);
        return $res;
       }
       function modifierApp(villa $villa){
        $ref=$villa->getReference();
        $prop=$villa->getProprietaire();
        $loc=$villa->getLocalite();
        $sur=$villa->getSurface();
        $nbP=$villa->getNbPieces();
        $domSur=$villa->getDomaineUsage();
        $surCom=$villa->getNbetages();
        $sql="update immobilier set proriete='$prop',localite='$loc',surface=$sur,nbpieces=$nbP,domaineUsage='$domSur',surfaceCommune=$surCom where reference=$ref;";
        $res=$this->connexion->exec($sql);
        return $res;
       }
       function listerApp(){
        $sql="select * from immobilier ";
        $res=$this->connexion->query($sql);
        return $res->fetchAll(PDO::FETCH_NUM);
       }
    }
?>