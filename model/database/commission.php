
<?php 
class commission {
	 public $idCommission;
	 public $nomCommission;



                    /**
                    * Get the value of idCommission
                    */ 
                    public function getIdCommission()
                    {
                        return $this->idCommission;
                    }
                    /**
                    * Get the value of nomCommission
                    */ 
                    public function getNomCommission()
                    {
                        return $this->nomCommission;
                    }


                    /**
                    * Set the value of idCommission
                    *
                    * @return  self
                    */ 
                   public function setIdCommission($idCommission)
                   {
                    $this->idCommission = $idCommission;
               
                       return $this;
                   }
                    /**
                    * Set the value of nomCommission
                    *
                    * @return  self
                    */ 
                   public function setNomCommission($nomCommission)
                   {
                    $this->nomCommission = $nomCommission;
               
                       return $this;
                   }
}
