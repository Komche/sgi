
<?php 
class projet {
	 public $id_projet;
	 public $nom_projet;
	 public $domaine;
	 public $file;
	 public $desciption;
	 public $statut;
	 public $besion_tech;
	 public $etat_retenu;
	 public $equipe;
	 public $user;
	 public $projet=array();



                public function __construct($projet=null) {
                    $this->projet = $projet;
                         
                }

                public function all()
                {
                    return $this->projet;
                }

                public function role($id_projet, $nom_projet, $domaine, $file, $desciption, $statut, $besion_tech, $etat_retenu, $equipe, $user)
                    {
                        $this->id_projet = $id_projet;
$this->nom_projet = $nom_projet;
$this->domaine = $domaine;
$this->file = $file;
$this->desciption = $desciption;
$this->statut = $statut;
$this->besion_tech = $besion_tech;
$this->etat_retenu = $etat_retenu;
$this->equipe = $equipe;
$this->user = $user;

                    }
                


                    /**
                    * Get the value of id_projet
                    */ 
                    public function getId_projet($id_projet=null)
                    {
                        if ($id_projet != null && is_array($this->projet) && count($this->projet)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE id_projet = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$id_projet]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_projet($d['id_projet']);
$this->setNom_projet($d['nom_projet']);
$this->setDomaine($d['domaine']);
$this->setFile($d['file']);
$this->setDesciption($d['desciption']);
$this->setStatut($d['statut']);
$this->setBesion_tech($d['besion_tech']);
$this->setEtat_retenu($d['etat_retenu']);
$this->setEquipe($d['equipe']);
$this->setUser($d['user']);
$this->projet =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->id_projet;
                        }
                        
                    }
                    /**
                    * Get the value of nom_projet
                    */ 
                    public function getNom_projet($nom_projet=null)
                    {
                        if ($nom_projet != null && is_array($this->projet) && count($this->projet)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE nom_projet = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$nom_projet]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_projet($d['id_projet']);
$this->setNom_projet($d['nom_projet']);
$this->setDomaine($d['domaine']);
$this->setFile($d['file']);
$this->setDesciption($d['desciption']);
$this->setStatut($d['statut']);
$this->setBesion_tech($d['besion_tech']);
$this->setEtat_retenu($d['etat_retenu']);
$this->setEquipe($d['equipe']);
$this->setUser($d['user']);
$this->projet =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->nom_projet;
                        }
                        
                    }
                    /**
                    * Get the value of domaine
                    */ 
                    public function getDomaine($domaine=null)
                    {
                        if ($domaine != null && is_array($this->projet) && count($this->projet)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE domaine = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$domaine]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_projet($d['id_projet']);
$this->setNom_projet($d['nom_projet']);
$this->setDomaine($d['domaine']);
$this->setFile($d['file']);
$this->setDesciption($d['desciption']);
$this->setStatut($d['statut']);
$this->setBesion_tech($d['besion_tech']);
$this->setEtat_retenu($d['etat_retenu']);
$this->setEquipe($d['equipe']);
$this->setUser($d['user']);
$this->projet =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->domaine;
                        }
                        
                    }
                    /**
                    * Get the value of file
                    */ 
                    public function getFile($file=null)
                    {
                        if ($file != null && is_array($this->projet) && count($this->projet)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE file = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$file]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_projet($d['id_projet']);
$this->setNom_projet($d['nom_projet']);
$this->setDomaine($d['domaine']);
$this->setFile($d['file']);
$this->setDesciption($d['desciption']);
$this->setStatut($d['statut']);
$this->setBesion_tech($d['besion_tech']);
$this->setEtat_retenu($d['etat_retenu']);
$this->setEquipe($d['equipe']);
$this->setUser($d['user']);
$this->projet =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->file;
                        }
                        
                    }
                    /**
                    * Get the value of desciption
                    */ 
                    public function getDesciption($desciption=null)
                    {
                        if ($desciption != null && is_array($this->projet) && count($this->projet)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE desciption = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$desciption]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_projet($d['id_projet']);
$this->setNom_projet($d['nom_projet']);
$this->setDomaine($d['domaine']);
$this->setFile($d['file']);
$this->setDesciption($d['desciption']);
$this->setStatut($d['statut']);
$this->setBesion_tech($d['besion_tech']);
$this->setEtat_retenu($d['etat_retenu']);
$this->setEquipe($d['equipe']);
$this->setUser($d['user']);
$this->projet =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->desciption;
                        }
                        
                    }
                    /**
                    * Get the value of statut
                    */ 
                    public function getStatut($statut=null)
                    {
                        if ($statut != null && is_array($this->projet) && count($this->projet)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE statut = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$statut]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_projet($d['id_projet']);
$this->setNom_projet($d['nom_projet']);
$this->setDomaine($d['domaine']);
$this->setFile($d['file']);
$this->setDesciption($d['desciption']);
$this->setStatut($d['statut']);
$this->setBesion_tech($d['besion_tech']);
$this->setEtat_retenu($d['etat_retenu']);
$this->setEquipe($d['equipe']);
$this->setUser($d['user']);
$this->projet =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->statut;
                        }
                        
                    }
                    /**
                    * Get the value of besion_tech
                    */ 
                    public function getBesion_tech($besion_tech=null)
                    {
                        if ($besion_tech != null && is_array($this->projet) && count($this->projet)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE besion_tech = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$besion_tech]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_projet($d['id_projet']);
$this->setNom_projet($d['nom_projet']);
$this->setDomaine($d['domaine']);
$this->setFile($d['file']);
$this->setDesciption($d['desciption']);
$this->setStatut($d['statut']);
$this->setBesion_tech($d['besion_tech']);
$this->setEtat_retenu($d['etat_retenu']);
$this->setEquipe($d['equipe']);
$this->setUser($d['user']);
$this->projet =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->besion_tech;
                        }
                        
                    }
                    /**
                    * Get the value of etat_retenu
                    */ 
                    public function getEtat_retenu($etat_retenu=null)
                    {
                        if ($etat_retenu != null && is_array($this->projet) && count($this->projet)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE etat_retenu = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$etat_retenu]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_projet($d['id_projet']);
$this->setNom_projet($d['nom_projet']);
$this->setDomaine($d['domaine']);
$this->setFile($d['file']);
$this->setDesciption($d['desciption']);
$this->setStatut($d['statut']);
$this->setBesion_tech($d['besion_tech']);
$this->setEtat_retenu($d['etat_retenu']);
$this->setEquipe($d['equipe']);
$this->setUser($d['user']);
$this->projet =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->etat_retenu;
                        }
                        
                    }
                    /**
                    * Get the value of equipe
                    */ 
                    public function getEquipe($equipe=null)
                    {
                        if ($equipe != null && is_array($this->projet) && count($this->projet)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE equipe = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$equipe]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_projet($d['id_projet']);
$this->setNom_projet($d['nom_projet']);
$this->setDomaine($d['domaine']);
$this->setFile($d['file']);
$this->setDesciption($d['desciption']);
$this->setStatut($d['statut']);
$this->setBesion_tech($d['besion_tech']);
$this->setEtat_retenu($d['etat_retenu']);
$this->setEquipe($d['equipe']);
$this->setUser($d['user']);
$this->projet =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->equipe;
                        }
                        
                    }
                    /**
                    * Get the value of user
                    */ 
                    public function getUser($user=null)
                    {
                        if ($user != null && is_array($this->projet) && count($this->projet)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE user = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$user]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_projet($d['id_projet']);
$this->setNom_projet($d['nom_projet']);
$this->setDomaine($d['domaine']);
$this->setFile($d['file']);
$this->setDesciption($d['desciption']);
$this->setStatut($d['statut']);
$this->setBesion_tech($d['besion_tech']);
$this->setEtat_retenu($d['etat_retenu']);
$this->setEquipe($d['equipe']);
$this->setUser($d['user']);
$this->projet =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->user;
                        }
                        
                    }


                    /**
                    * Set the value of id_projet
                    *
                    * @return  self
                    */ 
                   public function setId_projet($id_projet)
                   {
                    $this->id_projet = $id_projet;
               
                       return $this;
                   }
                    /**
                    * Set the value of nom_projet
                    *
                    * @return  self
                    */ 
                   public function setNom_projet($nom_projet)
                   {
                    $this->nom_projet = $nom_projet;
               
                       return $this;
                   }
                    /**
                    * Set the value of domaine
                    *
                    * @return  self
                    */ 
                   public function setDomaine($domaine)
                   {
                    $this->domaine = $domaine;
               
                       return $this;
                   }
                    /**
                    * Set the value of file
                    *
                    * @return  self
                    */ 
                   public function setFile($file)
                   {
                    $this->file = $file;
               
                       return $this;
                   }
                    /**
                    * Set the value of desciption
                    *
                    * @return  self
                    */ 
                   public function setDesciption($desciption)
                   {
                    $this->desciption = $desciption;
               
                       return $this;
                   }
                    /**
                    * Set the value of statut
                    *
                    * @return  self
                    */ 
                   public function setStatut($statut)
                   {
                    $this->statut = $statut;
               
                       return $this;
                   }
                    /**
                    * Set the value of besion_tech
                    *
                    * @return  self
                    */ 
                   public function setBesion_tech($besion_tech)
                   {
                    $this->besion_tech = $besion_tech;
               
                       return $this;
                   }
                    /**
                    * Set the value of etat_retenu
                    *
                    * @return  self
                    */ 
                   public function setEtat_retenu($etat_retenu)
                   {
                    $this->etat_retenu = $etat_retenu;
               
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
}
