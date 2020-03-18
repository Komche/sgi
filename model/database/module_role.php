
<?php 
class module_role {
	 public $role_id;
	 public $module;



                public function __construct($module_role) {
                    if (is_array($module_role)) {
                         $this->role_id = isset($module_role['role_id']) ? $module_role['role_id'] : NULL;
$this->module = isset($module_role['module']) ? $module_role['module'] : NULL;

                    }
                }
                


                    /**
                    * Get the value of role_id
                    */ 
                    public function getRole_id()
                    {
                        return $this->role_id;
                    }
                    /**
                    * Get the value of module
                    */ 
                    public function getModule()
                    {
                        return $this->module;
                    }


                    /**
                    * Set the value of role_id
                    *
                    * @return  self
                    */ 
                   public function setRole_id($role_id)
                   {
                    $this->role_id = $role_id;
               
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
