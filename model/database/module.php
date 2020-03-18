
<?php 
class module {
	 public $name;
	 public $icon;
	 public $description;
	 public $action_url;
	 public $sub_module;



                public function __construct($module) {
                    if (is_array($module)) {
                         $this->name = isset($module['name']) ? $module['name'] : NULL;
$this->icon = isset($module['icon']) ? $module['icon'] : NULL;
$this->description = isset($module['description']) ? $module['description'] : NULL;
$this->action_url = isset($module['action_url']) ? $module['action_url'] : NULL;
$this->sub_module = isset($module['sub_module']) ? $module['sub_module'] : NULL;

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
                    * Get the value of icon
                    */ 
                    public function getIcon()
                    {
                        return $this->icon;
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
                    * Get the value of sub_module
                    */ 
                    public function getSub_module()
                    {
                        return $this->sub_module;
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
                    * Set the value of icon
                    *
                    * @return  self
                    */ 
                   public function setIcon($icon)
                   {
                    $this->icon = $icon;
               
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
                    * Set the value of sub_module
                    *
                    * @return  self
                    */ 
                   public function setSub_module($sub_module)
                   {
                    $this->sub_module = $sub_module;
               
                       return $this;
                   }
}
