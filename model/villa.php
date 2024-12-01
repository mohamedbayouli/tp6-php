<?php
include_once 'immobilierr.php';
class villa extends immobilierr{
    protected $nbetages;

    public function __construct($reference, $proprietaire, $localite, $surface, $nbPieces, $domaineUsage,$nbetages)
    {
        parent::__construct($reference, $proprietaire, $localite, $surface, $nbPieces, $domaineUsage);
        $this->nbetages = $nbetages;
    }



    /**
     * Get the value of nbetages
     */ 
    public function getNbetages()
    {
        return $this->nbetages;
    }

    /**
     * Set the value of nbetages
     *
     * @return  self
     */ 
    public function setNbetages($nbetages)
    {
        $this->nbetages = $nbetages;

        return $this;
    }
}
?>