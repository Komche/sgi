
<?php 
class bureauCommission {
	 public $bureau;
	 public $commission;
	 public $exercice;



                    /**
                    * Get the value of bureau
                    */ 
                    public function getBureau()
                    {
                        return $this->bureau;
                    }
                    /**
                    * Get the value of commission
                    */ 
                    public function getCommission()
                    {
                        return $this->commission;
                    }
                    /**
                    * Get the value of exercice
                    */ 
                    public function getExercice()
                    {
                        return $this->exercice;
                    }


                    /**
                    * Set the value of bureau
                    *
                    * @return  self
                    */ 
                   public function setBureau($bureau)
                   {
                    $this->bureau = $bureau;
               
                       return $this;
                   }
                    /**
                    * Set the value of commission
                    *
                    * @return  self
                    */ 
                   public function setCommission($commission)
                   {
                    $this->commission = $commission;
               
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
