<?php
class immobilierr{
    protected $reference;

    protected $proprietaire;

    protected $localite;

    protected $surface;

    protected $nbPieces;

    protected $domaineUsage;

    

    public function __construct($reference, $proprietaire, $localite, $surface, $nbPieces, $domaineUsage)
    {
        
        $this->reference = $reference;
        $this->proprietaire = $proprietaire;
        $this->localite = $localite;
        $this->surface = $surface;
        $this->nbPieces = $nbPieces;
        $this->domaineUsage = $domaineUsage;
    }

    /**
     * Get the value of reference
     */ 
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set the value of reference
     *
     * @return  self
     */ 
    public function setReference($reference)
    {
        $this->reference = $reference;

        return $this;
    }

        /**
         * Get the value of proprietaire
         */ 
        public function getProprietaire()
        {
                return $this->proprietaire;
        }

        /**
         * Set the value of proprietaire
         *
         * @return  self
         */ 
        public function setProprietaire($proprietaire)
        {
                $this->proprietaire = $proprietaire;

                return $this;
        }

        /**
         * Get the value of localite
         */ 
        public function getLocalite()
        {
                return $this->localite;
        }

        /**
         * Set the value of localite
         *
         * @return  self
         */ 
        public function setLocalite($localite)
        {
                $this->localite = $localite;

                return $this;
        }

        /**
         * Get the value of surface
         */ 
        public function getSurface()
        {
                return $this->surface;
        }

        /**
         * Set the value of surface
         *
         * @return  self
         */ 
        public function setSurface($surface)
        {
                $this->surface = $surface;

                return $this;
        }

        /**
         * Get the value of nbPieces
         */ 
        public function getNbPieces()
        {
                return $this->nbPieces;
        }

        /**
         * Set the value of nbPieces
         *
         * @return  self
         */ 
        public function setNbPieces($nbPieces)
        {
                $this->nbPieces = $nbPieces;

                return $this;
        }

        /**
         * Get the value of domaineUsage
         */ 
        public function getDomaineUsage()
        {
                return $this->domaineUsage;
        }

        /**
         * Set the value of domaineUsage
         *
         * @return  self
         */ 
        public function setDomaineUsage($domaineUsage)
        {
                $this->domaineUsage = $domaineUsage;

                return $this;
        }
}
?>