
<?php 
class roles {
	 public $name;
	 public $description;



                public function __construct($roles) {
                    if (is_array($roles)) {
                         $this->name = isset($roles['name']) ? $roles['name'] : NULL;
$this->description = isset($roles['description']) ? $roles['description'] : NULL;

                    }
                }
                


                    /**
                    * Get the value of name
                    */ 
                    public function getName()
                    {
                        return $this->name;
                    }
                    /**
                    * Get the value of description
                    */ 
                    public function getDescription()
                    {
                        return $this->description;
                    }


                    /**
                    * Set the value of name
                    *
                    * @return  self
                    */ 
                   public function setName($name)
                   {
                    $this->name = $name;
               
                       return $this;
                   }
                    /**
                    * Set the value of description
                    *
                    * @return  self
                    */ 
                   public function setDescription($description)
                   {
                    $this->description = $description;
               
                       return $this;
                   }
}
