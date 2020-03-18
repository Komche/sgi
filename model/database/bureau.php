
<?php 
class bureau {
	 public $libellebureau;
	 public $typebureau;
	 public $poste;
	 public $idRegion;



                public function __construct($bureau) {
                    if (is_array($bureau)) {
                         $this->libellebureau = isset($bureau['libellebureau']) ? $bureau['libellebureau'] : NULL;
$this->typebureau = isset($bureau['typebureau']) ? $bureau['typebureau'] : NULL;
$this->poste = isset($bureau['poste']) ? $bureau['poste'] : NULL;
$this->idRegion = isset($bureau['idRegion']) ? $bureau['idRegion'] : NULL;

                    }
                }
                


                    /**
                    * Get the value of libellebureau
                    */ 
                    public function getLibellebureau()
                    {
                        return $this->libellebureau;
                    }
                    /**
                    * Get the value of typebureau
                    */ 
                    public function getTypebureau()
                    {
                        return $this->typebureau;
                    }
                    /**
                    * Get the value of poste
                    */ 
                    public function getPoste()
                    {
                        return $this->poste;
                    }
                    /**
                    * Get the value of idRegion
                    */ 
                    public function getIdRegion()
                    {
                        return $this->idRegion;
                    }


                    /**
                    * Set the value of libellebureau
                    *
                    * @return  self
                    */ 
                   public function setLibellebureau($libellebureau)
                   {
                    $this->libellebureau = $libellebureau;
               
                       return $this;
                   }
                    /**
                    * Set the value of typebureau
                    *
                    * @return  self
                    */ 
                   public function setTypebureau($typebureau)
                   {
                    $this->typebureau = $typebureau;
               
                       return $this;
                   }
                    /**
                    * Set the value of poste
                    *
                    * @return  self
                    */ 
                   public function setPoste($poste)
                   {
                    $this->poste = $poste;
               
                       return $this;
                   }
                    /**
                    * Set the value of idRegion
                    *
                    * @return  self
                    */ 
                   public function setIdRegion($idRegion)
                   {
                    $this->idRegion = $idRegion;
               
                       return $this;
                   }
}
