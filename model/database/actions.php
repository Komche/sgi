
<?php 
class actions {
	 public $name;
	 public $description;
	 public $action_url;
	 public $module;



                public function __construct($actions) {
                    if (is_array($actions)) {
                         $this->name = isset($actions['name']) ? $actions['name'] : NULL;
$this->description = isset($actions['description']) ? $actions['description'] : NULL;
$this->action_url = isset($actions['action_url']) ? $actions['action_url'] : NULL;
$this->module = isset($actions['module']) ? $actions['module'] : NULL;

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
