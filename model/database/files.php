
<?php 
class files {
	 public $id;
	 public $file_name;
	 public $file_url;
	 public $file_type;
	 public $file_size;



                    /**
                    * Get the value of id
                    */ 
                    public function getId()
                    {
                        return $this->id;
                    }
                    /**
                    * Get the value of file_name
                    */ 
                    public function getFile_name()
                    {
                        return $this->file_name;
                    }
                    /**
                    * Get the value of file_url
                    */ 
                    public function getFile_url()
                    {
                        return $this->file_url;
                    }
                    /**
                    * Get the value of file_type
                    */ 
                    public function getFile_type()
                    {
                        return $this->file_type;
                    }
                    /**
                    * Get the value of file_size
                    */ 
                    public function getFile_size()
                    {
                        return $this->file_size;
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
                    * Set the value of file_name
                    *
                    * @return  self
                    */ 
                   public function setFile_name($file_name)
                   {
                    $this->file_name = $file_name;
               
                       return $this;
                   }
                    /**
                    * Set the value of file_url
                    *
                    * @return  self
                    */ 
                   public function setFile_url($file_url)
                   {
                    $this->file_url = $file_url;
               
                       return $this;
                   }
                    /**
                    * Set the value of file_type
                    *
                    * @return  self
                    */ 
                   public function setFile_type($file_type)
                   {
                    $this->file_type = $file_type;
               
                       return $this;
                   }
                    /**
                    * Set the value of file_size
                    *
                    * @return  self
                    */ 
                   public function setFile_size($file_size)
                   {
                    $this->file_size = $file_size;
               
                       return $this;
                   }
}
