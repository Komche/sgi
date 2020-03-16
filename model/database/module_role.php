
<?php 
class module_role {
	 public $id;
	 public $role_id;
	 public $module;



                    /**
                    * Get the value of id
                    */ 
                    public function getId()
                    {
                        return $this->id;
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
