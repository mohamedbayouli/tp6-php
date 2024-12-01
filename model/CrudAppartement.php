<?php
include_once "config.php";
include_once "appartement.php";
    class crudAppartement{
       private $connexion;
       function __construct()
       {
        $con=new config();
        $this->connexion=$con->getConnexion();
       }
       function ajouterApp(appratement $appratement){
            $ref=$appratement->getReference();
            $prop=$appratement->getProprietaire();
            $loc=$appratement->getLocalite();
            $sur=$appratement->getSurface();
            $nbP=$appratement->getNbPieces();
            $domSur=$appratement->getDomaineUsage();
            $surcom=$appratement->getSurfaceCommune();
            $sql="insert into immobilier values($ref,'$prop','$loc',$sur,$nbP,'$domSur','Appartement',null,$surcom);";
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
       function modifierApp(appratement $appratement){
        $ref=$appratement->getReference();
        $prop=$appratement->getProprietaire();
        $loc=$appratement->getLocalite();
        $sur=$appratement->getSurface();
        $nbP=$appratement->getNbPieces();
        $domSur=$appratement->getDomaineUsage();
        $surCom=$appratement->getSurfaceCommune();
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