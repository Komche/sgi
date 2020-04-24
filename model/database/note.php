
<?php 
class note {
	 public $id_note;
	 public $faisabilite;
	 public $apport;
	 public $originalite;
	 public $viabilite;
	 public $user;
	 public $projet;
	 public $note=array();



                public function __construct($note=null) {
                    $this->note = $note;
                         
                }

                public function all()
                {
                    return $this->note;
                }

                public function role($id_note, $faisabilite, $apport, $originalite, $viabilite, $user, $projet)
                    {
                        $this->id_note = $id_note;
$this->faisabilite = $faisabilite;
$this->apport = $apport;
$this->originalite = $originalite;
$this->viabilite = $viabilite;
$this->user = $user;
$this->projet = $projet;

                    }
                


                    /**
                    * Get the value of id_note
                    */ 
                    public function getId_note($id_note=null)
                    {
                        if ($id_note != null && is_array($this->note) && count($this->note)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE id_note = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$id_note]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_note($d['id_note']);
$this->setFaisabilite($d['faisabilite']);
$this->setApport($d['apport']);
$this->setOriginalite($d['originalite']);
$this->setViabilite($d['viabilite']);
$this->setUser($d['user']);
$this->setProjet($d['projet']);
$this->note =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->id_note;
                        }
                        
                    }
                    /**
                    * Get the value of faisabilite
                    */ 
                    public function getFaisabilite($faisabilite=null)
                    {
                        if ($faisabilite != null && is_array($this->note) && count($this->note)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE faisabilite = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$faisabilite]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_note($d['id_note']);
$this->setFaisabilite($d['faisabilite']);
$this->setApport($d['apport']);
$this->setOriginalite($d['originalite']);
$this->setViabilite($d['viabilite']);
$this->setUser($d['user']);
$this->setProjet($d['projet']);
$this->note =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->faisabilite;
                        }
                        
                    }
                    /**
                    * Get the value of apport
                    */ 
                    public function getApport($apport=null)
                    {
                        if ($apport != null && is_array($this->note) && count($this->note)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE apport = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$apport]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_note($d['id_note']);
$this->setFaisabilite($d['faisabilite']);
$this->setApport($d['apport']);
$this->setOriginalite($d['originalite']);
$this->setViabilite($d['viabilite']);
$this->setUser($d['user']);
$this->setProjet($d['projet']);
$this->note =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->apport;
                        }
                        
                    }
                    /**
                    * Get the value of originalite
                    */ 
                    public function getOriginalite($originalite=null)
                    {
                        if ($originalite != null && is_array($this->note) && count($this->note)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE originalite = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$originalite]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_note($d['id_note']);
$this->setFaisabilite($d['faisabilite']);
$this->setApport($d['apport']);
$this->setOriginalite($d['originalite']);
$this->setViabilite($d['viabilite']);
$this->setUser($d['user']);
$this->setProjet($d['projet']);
$this->note =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->originalite;
                        }
                        
                    }
                    /**
                    * Get the value of viabilite
                    */ 
                    public function getViabilite($viabilite=null)
                    {
                        if ($viabilite != null && is_array($this->note) && count($this->note)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE viabilite = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$viabilite]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_note($d['id_note']);
$this->setFaisabilite($d['faisabilite']);
$this->setApport($d['apport']);
$this->setOriginalite($d['originalite']);
$this->setViabilite($d['viabilite']);
$this->setUser($d['user']);
$this->setProjet($d['projet']);
$this->note =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->viabilite;
                        }
                        
                    }
                    /**
                    * Get the value of user
                    */ 
                    public function getUser($user=null)
                    {
                        if ($user != null && is_array($this->note) && count($this->note)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE user = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$user]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_note($d['id_note']);
$this->setFaisabilite($d['faisabilite']);
$this->setApport($d['apport']);
$this->setOriginalite($d['originalite']);
$this->setViabilite($d['viabilite']);
$this->setUser($d['user']);
$this->setProjet($d['projet']);
$this->note =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->user;
                        }
                        
                    }
                    /**
                    * Get the value of projet
                    */ 
                    public function getProjet($projet=null)
                    {
                        if ($projet != null && is_array($this->note) && count($this->note)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE projet = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$projet]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_note($d['id_note']);
$this->setFaisabilite($d['faisabilite']);
$this->setApport($d['apport']);
$this->setOriginalite($d['originalite']);
$this->setViabilite($d['viabilite']);
$this->setUser($d['user']);
$this->setProjet($d['projet']);
$this->note =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->projet;
                        }
                        
                    }


                    /**
                    * Set the value of id_note
                    *
                    * @return  self
                    */ 
                   public function setId_note($id_note)
                   {
                    $this->id_note = $id_note;
               
                       return $this;
                   }
                    /**
                    * Set the value of faisabilite
                    *
                    * @return  self
                    */ 
                   public function setFaisabilite($faisabilite)
                   {
                    $this->faisabilite = $faisabilite;
               
                       return $this;
                   }
                    /**
                    * Set the value of apport
                    *
                    * @return  self
                    */ 
                   public function setApport($apport)
                   {
                    $this->apport = $apport;
               
                       return $this;
                   }
                    /**
                    * Set the value of originalite
                    *
                    * @return  self
                    */ 
                   public function setOriginalite($originalite)
                   {
                    $this->originalite = $originalite;
               
                       return $this;
                   }
                    /**
                    * Set the value of viabilite
                    *
                    * @return  self
                    */ 
                   public function setViabilite($viabilite)
                   {
                    $this->viabilite = $viabilite;
               
                       return $this;
                   }
                    /**
                    * Set the value of user
                    *
                    * @return  self
                    */ 
                   public function setUser($user)
                   {
                    $this->user = $user;
               
                       return $this;
                   }
                    /**
                    * Set the value of projet
                    *
                    * @return  self
                    */ 
                   public function setProjet($projet)
                   {
                    $this->projet = $projet;
               
                       return $this;
                   }
}
