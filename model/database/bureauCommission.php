
<?php 
class bureauCommission {
	 public $commission;
	 public $exercice;



                public function __construct($bureauCommission) {
                    if (is_array($bureauCommission)) {
                         $this->commission = isset($bureauCommission['commission']) ? $bureauCommission['commission'] : NULL;
$this->exercice = isset($bureauCommission['exercice']) ? $bureauCommission['exercice'] : NULL;

                    }
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
