
<?php 
class appartenir {
	 public $membre;
	 public $etablissement;
	 public $exercice;



                    /**
                    * Get the value of membre
                    */ 
                    public function getMembre()
                    {
                        return $this->membre;
                    }
                    /**
                    * Get the value of etablissement
                    */ 
                    public function getEtablissement()
                    {
                        return $this->etablissement;
                    }
                    /**
                    * Get the value of exercice
                    */ 
                    public function getExercice()
                    {
                        return $this->exercice;
                    }


                    /**
                    * Set the value of membre
                    *
                    * @return  self
                    */ 
                   public function setMembre($membre)
                   {
                    $this->membre = $membre;
               
                       return $this;
                   }
                    /**
                    * Set the value of etablissement
                    *
                    * @return  self
                    */ 
                   public function setEtablissement($etablissement)
                   {
                    $this->etablissement = $etablissement;
               
                       return $this;
                   }
                    /**
                    * Set the value of exercice
                    *
                    * @return  self
                    */ 
                   public function setExercice($exercice)
                   {
                    $this->exercice = $exercice;
               
                       return $this;
                   }
}
