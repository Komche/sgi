
<?php 
class commission {
	 public $nomCommission;



                public function __construct($commission) {
                    if (is_array($commission)) {
                         $this->nomCommission = isset($commission['nomCommission']) ? $commission['nomCommission'] : NULL;

                    }
                }
                


                    /**
                    * Get the value of nomCommission
                    */ 
                    public function getNomCommission()
                    {
                        return $this->nomCommission;
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
