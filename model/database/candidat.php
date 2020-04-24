
<?php 
class candidat {
	 public $id_candidat;
	 public $nom_candidat;
	 public $prenom_candidat;
	 public $email;
	 public $telephone;
	 public $role;
	 public $equipe;
	 public $candidat=array();



                public function __construct($candidat=null) {
                    $this->candidat = $candidat;
                         
                }

                public function all()
                {
                    return $this->candidat;
                }

                public function role($id_candidat, $nom_candidat, $prenom_candidat, $email, $telephone, $role, $equipe)
                    {
                        $this->id_candidat = $id_candidat;
$this->nom_candidat = $nom_candidat;
$this->prenom_candidat = $prenom_candidat;
$this->email = $email;
$this->telephone = $telephone;
$this->role = $role;
$this->equipe = $equipe;

                    }
                


                    /**
                    * Get the value of id_candidat
                    */ 
                    public function getId_candidat($id_candidat=null)
                    {
                        if ($id_candidat != null && is_array($this->candidat) && count($this->candidat)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE id_candidat = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$id_candidat]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_candidat($d['id_candidat']);
$this->setNom_candidat($d['nom_candidat']);
$this->setPrenom_candidat($d['prenom_candidat']);
$this->setEmail($d['email']);
$this->setTelephone($d['telephone']);
$this->setRole($d['role']);
$this->setEquipe($d['equipe']);
$this->candidat =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->id_candidat;
                        }
                        
                    }
                    /**
                    * Get the value of nom_candidat
                    */ 
                    public function getNom_candidat($nom_candidat=null)
                    {
                        if ($nom_candidat != null && is_array($this->candidat) && count($this->candidat)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE nom_candidat = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$nom_candidat]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_candidat($d['id_candidat']);
$this->setNom_candidat($d['nom_candidat']);
$this->setPrenom_candidat($d['prenom_candidat']);
$this->setEmail($d['email']);
$this->setTelephone($d['telephone']);
$this->setRole($d['role']);
$this->setEquipe($d['equipe']);
$this->candidat =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->nom_candidat;
                        }
                        
                    }
                    /**
                    * Get the value of prenom_candidat
                    */ 
                    public function getPrenom_candidat($prenom_candidat=null)
                    {
                        if ($prenom_candidat != null && is_array($this->candidat) && count($this->candidat)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE prenom_candidat = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$prenom_candidat]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_candidat($d['id_candidat']);
$this->setNom_candidat($d['nom_candidat']);
$this->setPrenom_candidat($d['prenom_candidat']);
$this->setEmail($d['email']);
$this->setTelephone($d['telephone']);
$this->setRole($d['role']);
$this->setEquipe($d['equipe']);
$this->candidat =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->prenom_candidat;
                        }
                        
                    }
                    /**
                    * Get the value of email
                    */ 
                    public function getEmail($email=null)
                    {
                        if ($email != null && is_array($this->candidat) && count($this->candidat)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE email = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$email]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_candidat($d['id_candidat']);
$this->setNom_candidat($d['nom_candidat']);
$this->setPrenom_candidat($d['prenom_candidat']);
$this->setEmail($d['email']);
$this->setTelephone($d['telephone']);
$this->setRole($d['role']);
$this->setEquipe($d['equipe']);
$this->candidat =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->email;
                        }
                        
                    }
                    /**
                    * Get the value of telephone
                    */ 
                    public function getTelephone($telephone=null)
                    {
                        if ($telephone != null && is_array($this->candidat) && count($this->candidat)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE telephone = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$telephone]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_candidat($d['id_candidat']);
$this->setNom_candidat($d['nom_candidat']);
$this->setPrenom_candidat($d['prenom_candidat']);
$this->setEmail($d['email']);
$this->setTelephone($d['telephone']);
$this->setRole($d['role']);
$this->setEquipe($d['equipe']);
$this->candidat =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->telephone;
                        }
                        
                    }
                    /**
                    * Get the value of role
                    */ 
                    public function getRole($role=null)
                    {
                        if ($role != null && is_array($this->candidat) && count($this->candidat)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE role = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$role]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_candidat($d['id_candidat']);
$this->setNom_candidat($d['nom_candidat']);
$this->setPrenom_candidat($d['prenom_candidat']);
$this->setEmail($d['email']);
$this->setTelephone($d['telephone']);
$this->setRole($d['role']);
$this->setEquipe($d['equipe']);
$this->candidat =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->role;
                        }
                        
                    }
                    /**
                    * Get the value of equipe
                    */ 
                    public function getEquipe($equipe=null)
                    {
                        if ($equipe != null && is_array($this->candidat) && count($this->candidat)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE equipe = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$equipe]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_candidat($d['id_candidat']);
$this->setNom_candidat($d['nom_candidat']);
$this->setPrenom_candidat($d['prenom_candidat']);
$this->setEmail($d['email']);
$this->setTelephone($d['telephone']);
$this->setRole($d['role']);
$this->setEquipe($d['equipe']);
$this->candidat =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->equipe;
                        }
                        
                    }


                    /**
                    * Set the value of id_candidat
                    *
                    * @return  self
                    */ 
                   public function setId_candidat($id_candidat)
                   {
                    $this->id_candidat = $id_candidat;
               
                       return $this;
                   }
                    /**
                    * Set the value of nom_candidat
                    *
                    * @return  self
                    */ 
                   public function setNom_candidat($nom_candidat)
                   {
                    $this->nom_candidat = $nom_candidat;
               
                       return $this;
                   }
                    /**
                    * Set the value of prenom_candidat
                    *
                    * @return  self
                    */ 
                   public function setPrenom_candidat($prenom_candidat)
                   {
                    $this->prenom_candidat = $prenom_candidat;
               
                       return $this;
                   }
                    /**
                    * Set the value of email
                    *
                    * @return  self
                    */ 
                   public function setEmail($email)
                   {
                    $this->email = $email;
               
                       return $this;
                   }
                    /**
                    * Set the value of telephone
                    *
                    * @return  self
                    */ 
                   public function setTelephone($telephone)
                   {
                    $this->telephone = $telephone;
               
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
                    * Set the value of equipe
                    *
                    * @return  self
                    */ 
                   public function setEquipe($equipe)
                   {
                    $this->equipe = $equipe;
               
                       return $this;
                   }
}
