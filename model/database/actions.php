
<?php 
class actions {
	 public $id;
	 public $name;
	 public $description;
	 public $action_url;
	 public $module;



                    /**
                    * Get the value of id
                    */ 
                    public function getId()
                    {
                        return $this->id;
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
                    * Get the value of action_url
                    */ 
                    public function getAction_url()
                    {
                        return $this->action_url;
                    }
                    /**
                    * Get the value of module
                    */ 
                    public function getModule()
                    {
                        return $this->module;
                    }


                    /**
                    * Set the value of id
                    *
                    * @return  self
                    */ 
                   public function setId($id)
                   {
                    $this->id = $id;
               
                       return $this;
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
                    /**
                    * Set the value of action_url
                    *
                    * @return  self
                    */ 
                   public function setAction_url($action_url)
                   {
                    $this->action_url = $action_url;
               
                       return $this;
                   }
                    /**
                    * Set the value of module
                    *
                    * @return  self
                    */ 
                   public function setModule($module)
                   {
                    $this->module = $module;
               
                       return $this;
                   }
}
