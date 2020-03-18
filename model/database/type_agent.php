
<?php 
class type_agent {
	 public $label;



                public function __construct($type_agent) {
                    if (is_array($type_agent)) {
                         $this->label = isset($type_agent['label']) ? $type_agent['label'] : NULL;

                    }
                }
                


                    /**
                    * Get the value of label
                    */ 
                    public function getLabel()
                    {
                        return $this->label;
                    }


                    /**
                    * Set the value of label
                    *
                    * @return  self
                    */ 
                   public function setLabel($label)
                   {
                    $this->label = $label;
               
                       return $this;
                   }
}
