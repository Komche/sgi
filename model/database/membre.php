
<?php 
class membre {
	 public $id_membre;
	 public $matricule;
	 public $nom;
	 public $prenom;
	 public $adresse;
	 public $numero;
	 public $photo;
	 public $membre=array();



                public function __construct($membre=null) {
                    $this->membre = $membre;
                         
                }

                public function all()
                {
                    return $this->membre;
                }

                public function role($id_membre, $matricule, $nom, $prenom, $adresse, $numero, $photo)
                    {
                        $this->id_membre = $id_membre;
$this->matricule = $matricule;
$this->nom = $nom;
$this->prenom = $prenom;
$this->adresse = $adresse;
$this->numero = $numero;
$this->photo = $photo;

                    }
                


                    /**
                    * Get the value of id_membre
                    */ 
                    public function getId_membre($id_membre=null)
                    {
                        if ($id_membre != null && is_array($this->membre) && count($this->membre)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE id_membre = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$id_membre]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_membre($d['id_membre']);
$this->setMatricule($d['matricule']);
$this->setNom($d['nom']);
$this->setPrenom($d['prenom']);
$this->setAdresse($d['adresse']);
$this->setNumero($d['numero']);
$this->setPhoto($d['photo']);
$this->membre =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->id_membre;
                        }
                        
                    }
                    /**
                    * Get the value of matricule
                    */ 
                    public function getMatricule($matricule=null)
                    {
                        if ($matricule != null && is_array($this->membre) && count($this->membre)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE matricule = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$matricule]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_membre($d['id_membre']);
$this->setMatricule($d['matricule']);
$this->setNom($d['nom']);
$this->setPrenom($d['prenom']);
$this->setAdresse($d['adresse']);
$this->setNumero($d['numero']);
$this->setPhoto($d['photo']);
$this->membre =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->matricule;
                        }
                        
                    }
                    /**
                    * Get the value of nom
                    */ 
                    public function getNom($nom=null)
                    {
                        if ($nom != null && is_array($this->membre) && count($this->membre)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE nom = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$nom]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_membre($d['id_membre']);
$this->setMatricule($d['matricule']);
$this->setNom($d['nom']);
$this->setPrenom($d['prenom']);
$this->setAdresse($d['adresse']);
$this->setNumero($d['numero']);
$this->setPhoto($d['photo']);
$this->membre =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->nom;
                        }
                        
                    }
                    /**
                    * Get the value of prenom
                    */ 
                    public function getPrenom($prenom=null)
                    {
                        if ($prenom != null && is_array($this->membre) && count($this->membre)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE prenom = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$prenom]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_membre($d['id_membre']);
$this->setMatricule($d['matricule']);
$this->setNom($d['nom']);
$this->setPrenom($d['prenom']);
$this->setAdresse($d['adresse']);
$this->setNumero($d['numero']);
$this->setPhoto($d['photo']);
$this->membre =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->prenom;
                        }
                        
                    }
                    /**
                    * Get the value of adresse
                    */ 
                    public function getAdresse($adresse=null)
                    {
                        if ($adresse != null && is_array($this->membre) && count($this->membre)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE adresse = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$adresse]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_membre($d['id_membre']);
$this->setMatricule($d['matricule']);
$this->setNom($d['nom']);
$this->setPrenom($d['prenom']);
$this->setAdresse($d['adresse']);
$this->setNumero($d['numero']);
$this->setPhoto($d['photo']);
$this->membre =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->adresse;
                        }
                        
                    }
                    /**
                    * Get the value of numero
                    */ 
                    public function getNumero($numero=null)
                    {
                        if ($numero != null && is_array($this->membre) && count($this->membre)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE numero = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$numero]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_membre($d['id_membre']);
$this->setMatricule($d['matricule']);
$this->setNom($d['nom']);
$this->setPrenom($d['prenom']);
$this->setAdresse($d['adresse']);
$this->setNumero($d['numero']);
$this->setPhoto($d['photo']);
$this->membre =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->numero;
                        }
                        
                    }
                    /**
                    * Get the value of photo
                    */ 
                    public function getPhoto($photo=null)
                    {
                        if ($photo != null && is_array($this->membre) && count($this->membre)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE photo = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$photo]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_membre($d['id_membre']);
$this->setMatricule($d['matricule']);
$this->setNom($d['nom']);
$this->setPrenom($d['prenom']);
$this->setAdresse($d['adresse']);
$this->setNumero($d['numero']);
$this->setPhoto($d['photo']);
$this->membre =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->photo;
                        }
                        
                    }


                    /**
                    * Set the value of id_membre
                    *
                    * @return  self
                    */ 
                   public function setId_membre($id_membre)
                   {
                    $this->id_membre = $id_membre;
               
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
                    * Set the value of nom
                    *
                    * @return  self
                    */ 
                   public function setNom($nom)
                   {
                    $this->nom = $nom;
               
                       return $this;
                   }
                    /**
                    * Set the value of prenom
                    *
                    * @return  self
                    */ 
                   public function setPrenom($prenom)
                   {
                    $this->prenom = $prenom;
               
                       return $this;
                   }
                    /**
                    * Set the value of adresse
                    *
                    * @return  self
                    */ 
                   public function setAdresse($adresse)
                   {
                    $this->adresse = $adresse;
               
                       return $this;
                   }
                    /**
                    * Set the value of numero
                    *
                    * @return  self
                    */ 
                   public function setNumero($numero)
                   {
                    $this->numero = $numero;
               
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
}
