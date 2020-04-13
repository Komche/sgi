<?php

class Role 
{
    public function all()
                {
                    return $this->roles;
                }


                    /**
                    * Get the value of name
                    */ 
                    public function getName($name)
                    {
                        if ($name != null && is_array($this->roles) && count($this->roles)!=0) {
                            foreach ($this->roles as $key => $value) {
                                if ($value['name'] == $name) {
                                    $this->setName($value['name']);
                                    $this->setDescription($value['description']);
                                    return $this;
                                }
                            }
                        } else {
                            return $this->name;
                        }
                        
                    }
}
