
<?php 
class appartenir {
	 public $etablissement;
	 public $exercice;



                public function __construct($appartenir) {
                    if (is_array($appartenir)) {
                         $this->etablissement = isset($appartenir['etablissement']) ? $appartenir['etablissement'] : NULL;
$this->exercice = isset($appartenir['exercice']) ? $appartenir['exercice'] : NULL;

                    }
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
