
<?php 
class ville {
	 public $idRegion;
	 public $nomRegion;



                    /**
                    * Get the value of idRegion
                    */ 
                    public function getIdRegion()
                    {
                        return $this->idRegion;
                    }
                    /**
                    * Get the value of nomRegion
                    */ 
                    public function getNomRegion()
                    {
                        return $this->nomRegion;
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
                    /**
                    * Set the value of nomRegion
                    *
                    * @return  self
                    */ 
                   public function setNomRegion($nomRegion)
                   {
                    $this->nomRegion = $nomRegion;
               
                       return $this;
                   }
}
