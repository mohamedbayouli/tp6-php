<?php
include 'immobilierr.php';
class appratement extends immobilierr{
    private $surfaceCommune;
    
    public function __construct($reference, $proprietaire, $localite, $surface, $nbPieces, $domaineUsage,$surfaceCommune)
    {
        parent::__construct($reference, $proprietaire, $localite, $surface, $nbPieces, $domaineUsage);
        $this->surfaceCommune= $surfaceCommune;
    }



    /**
     * Get the value of surfaceCommune
     */ 
    public function getSurfaceCommune()
    {
        return $this->surfaceCommune;
    }

    /**
     * Set the value of surfaceCommune
     *
     * @return  self
     */ 
    public function setSurfaceCommune($surfaceCommune)
    {
        $this->surfaceCommune = $surfaceCommune;

        return $this;
    }
}
?>