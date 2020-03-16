
<?php 
class bureau {
	 public $idBureau;
	 public $libellebureau;
	 public $typebureau;
	 public $poste;
	 public $idRegion;



                    /**
                    * Get the value of idBureau
                    */ 
                    public function getIdBureau()
                    {
                        return $this->idBureau;
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
                    * Set the value of idBureau
                    *
                    * @return  self
                    */ 
                   public function setIdBureau($idBureau)
                   {
                    $this->idBureau = $idBureau;
               
                       return $this;
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
