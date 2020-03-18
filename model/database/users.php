
<?php 
class users {
	 public $first_name;
	 public $last_name;
	 public $matricule;
	 public $phone_number;
	 public $casern;
	 public $type_agent;
	 public $created_at;
	 public $updated_at;
	 public $photo;
	 public $role;
	 public $status;
	 public $password_;



                public function __construct($users) {
                    if (is_array($users)) {
                         $this->first_name = isset($users['first_name']) ? $users['first_name'] : NULL;
$this->last_name = isset($users['last_name']) ? $users['last_name'] : NULL;
$this->matricule = isset($users['matricule']) ? $users['matricule'] : NULL;
$this->phone_number = isset($users['phone_number']) ? $users['phone_number'] : NULL;
$this->casern = isset($users['casern']) ? $users['casern'] : NULL;
$this->type_agent = isset($users['type_agent']) ? $users['type_agent'] : NULL;
$this->created_at = isset($users['created_at']) ? $users['created_at'] : NULL;
$this->updated_at = isset($users['updated_at']) ? $users['updated_at'] : NULL;
$this->photo = isset($users['photo']) ? $users['photo'] : NULL;
$this->role = isset($users['role']) ? $users['role'] : NULL;
$this->status = isset($users['status']) ? $users['status'] : NULL;
$this->password_ = isset($users['password_']) ? $users['password_'] : NULL;

                    }
                }
                


                    /**
                    * Get the value of first_name
                    */ 
                    public function getFirst_name()
                    {
                        return $this->first_name;
                    }
                    /**
                    * Get the value of last_name
                    */ 
                    public function getLast_name()
                    {
                        return $this->last_name;
                    }
                    /**
                    * Get the value of matricule
                    */ 
                    public function getMatricule()
                    {
                        return $this->matricule;
                    }
                    /**
                    * Get the value of phone_number
                    */ 
                    public function getPhone_number()
                    {
                        return $this->phone_number;
                    }
                    /**
                    * Get the value of casern
                    */ 
                    public function getCasern()
                    {
                        return $this->casern;
                    }
                    /**
                    * Get the value of type_agent
                    */ 
                    public function getType_agent()
                    {
                        return $this->type_agent;
                    }
                    /**
                    * Get the value of created_at
                    */ 
                    public function getCreated_at()
                    {
                        return $this->created_at;
                    }
                    /**
                    * Get the value of updated_at
                    */ 
                    public function getUpdated_at()
                    {
                        return $this->updated_at;
                    }
                    /**
                    * Get the value of photo
                    */ 
                    public function getPhoto()
                    {
                        return $this->photo;
                    }
                    /**
                    * Get the value of role
                    */ 
                    public function getRole()
                    {
                        return $this->role;
                    }
                    /**
                    * Get the value of status
                    */ 
                    public function getStatus()
                    {
                        return $this->status;
                    }
                    /**
                    * Get the value of password_
                    */ 
                    public function getPassword_()
                    {
                        return $this->password_;
                    }


                    /**
                    * Set the value of first_name
                    *
                    * @return  self
                    */ 
                   public function setFirst_name($first_name)
                   {
                    $this->first_name = $first_name;
               
                       return $this;
                   }
                    /**
                    * Set the value of last_name
                    *
                    * @return  self
                    */ 
                   public function setLast_name($last_name)
                   {
                    $this->last_name = $last_name;
               
                       return $this;
                   }
                    /**
                    * Set the value of matricule
                    *
                    * @return  self
                    */ 
                   public function setMatricule($matricule)
                   {
                    $this->matricule = $matricule;
               
                       return $this;
                   }
                    /**
                    * Set the value of phone_number
                    *
                    * @return  self
                    */ 
                   public function setPhone_number($phone_number)
                   {
                    $this->phone_number = $phone_number;
               
                       return $this;
                   }
                    /**
                    * Set the value of casern
                    *
                    * @return  self
                    */ 
                   public function setCasern($casern)
                   {
                    $this->casern = $casern;
               
                       return $this;
                   }
                    /**
                    * Set the value of type_agent
                    *
                    * @return  self
                    */ 
                   public function setType_agent($type_agent)
                   {
                    $this->type_agent = $type_agent;
               
                       return $this;
                   }
                    /**
                    * Set the value of created_at
                    *
                    * @return  self
                    */ 
                   public function setCreated_at($created_at)
                   {
                    $this->created_at = $created_at;
               
                       return $this;
                   }
                    /**
                    * Set the value of updated_at
                    *
                    * @return  self
                    */ 
                   public function setUpdated_at($updated_at)
                   {
                    $this->updated_at = $updated_at;
               
                       return $this;
                   }
                    /**
                    * Set the value of photo
                    *
                    * @return  self
                    */ 
                   public function setPhoto($photo)
                   {
                    $this->photo = $photo;
               
                       return $this;
                   }
                    /**
                    * Set the value of role
                    *
                    * @return  self
                    */ 
                   public function setRole($role)
                   {
                    $this->role = $role;
               
                       return $this;
                   }
                    /**
                    * Set the value of status
                    *
                    * @return  self
                    */ 
                   public function setStatus($status)
                   {
                    $this->status = $status;
               
                       return $this;
                   }
                    /**
                    * Set the value of password_
                    *
                    * @return  self
                    */ 
                   public function setPassword_($password_)
                   {
                    $this->password_ = $password_;
               
                       return $this;
                   }
}
