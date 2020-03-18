
<?php 
class ville {
	 public $nomRegion;



                public function __construct($ville) {
                    if (is_array($ville)) {
                         $this->nomRegion = isset($ville['nomRegion']) ? $ville['nomRegion'] : NULL;

                    }
                }
                


                    /**
                    * Get the value of nomRegion
                    */ 
                    public function getNomRegion()
                    {
                        return $this->nomRegion;
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
