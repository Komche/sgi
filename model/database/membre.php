
<?php 
class membre {
	 public $matricule;
	 public $nom;
	 public $prenom;
	 public $adresse;
	 public $numero;
	 public $photo;
	 public $typeMembre;
	 public $etablissement;
	 public $commission;
	 public $membre=array();



                public function __construct($membre=null) {
                    $this->membre = $membre;
                         
                }

                public function all()
                {
                    return $this->membre;
                }

                public function role($matricule, $nom, $prenom, $adresse, $numero, $photo, $typeMembre, $etablissement, $commission)
                    {
                        $this->matricule = $matricule;
$this->nom = $nom;
$this->prenom = $prenom;
$this->adresse = $adresse;
$this->numero = $numero;
$this->photo = $photo;
$this->typeMembre = $typeMembre;
$this->etablissement = $etablissement;
$this->commission = $commission;

                    }
                


                    /**
                    * Get the value of matricule
                    */ 
                    public function getMatricule($matricule)
                    {
                        if ($matricule != null && is_array($this->membre) && count($this->membre)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE matricule = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$matricule]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setMatricule($d['matricule']);
$this->setNom($d['nom']);
$this->setPrenom($d['prenom']);
$this->setAdresse($d['adresse']);
$this->setNumero($d['numero']);
$this->setPhoto($d['photo']);
$this->setTypeMembre($d['typeMembre']);
$this->setEtablissement($d['etablissement']);
$this->setCommission($d['commission']);
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
                    public function getNom($nom)
                    {
                        if ($nom != null && is_array($this->membre) && count($this->membre)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE nom = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$nom]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setMatricule($d['matricule']);
$this->setNom($d['nom']);
$this->setPrenom($d['prenom']);
$this->setAdresse($d['adresse']);
$this->setNumero($d['numero']);
$this->setPhoto($d['photo']);
$this->setTypeMembre($d['typeMembre']);
$this->setEtablissement($d['etablissement']);
$this->setCommission($d['commission']);
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
                    public function getPrenom($prenom)
                    {
                        if ($prenom != null && is_array($this->membre) && count($this->membre)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE prenom = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$prenom]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setMatricule($d['matricule']);
$this->setNom($d['nom']);
$this->setPrenom($d['prenom']);
$this->setAdresse($d['adresse']);
$this->setNumero($d['numero']);
$this->setPhoto($d['photo']);
$this->setTypeMembre($d['typeMembre']);
$this->setEtablissement($d['etablissement']);
$this->setCommission($d['commission']);
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
                    public function getAdresse($adresse)
                    {
                        if ($adresse != null && is_array($this->membre) && count($this->membre)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE adresse = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$adresse]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setMatricule($d['matricule']);
$this->setNom($d['nom']);
$this->setPrenom($d['prenom']);
$this->setAdresse($d['adresse']);
$this->setNumero($d['numero']);
$this->setPhoto($d['photo']);
$this->setTypeMembre($d['typeMembre']);
$this->setEtablissement($d['etablissement']);
$this->setCommission($d['commission']);
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
                    public function getNumero($numero)
                    {
                        if ($numero != null && is_array($this->membre) && count($this->membre)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE numero = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$numero]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setMatricule($d['matricule']);
$this->setNom($d['nom']);
$this->setPrenom($d['prenom']);
$this->setAdresse($d['adresse']);
$this->setNumero($d['numero']);
$this->setPhoto($d['photo']);
$this->setTypeMembre($d['typeMembre']);
$this->setEtablissement($d['etablissement']);
$this->setCommission($d['commission']);
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
                    public function getPhoto($photo)
                    {
                        if ($photo != null && is_array($this->membre) && count($this->membre)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE photo = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$photo]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setMatricule($d['matricule']);
$this->setNom($d['nom']);
$this->setPrenom($d['prenom']);
$this->setAdresse($d['adresse']);
$this->setNumero($d['numero']);
$this->setPhoto($d['photo']);
$this->setTypeMembre($d['typeMembre']);
$this->setEtablissement($d['etablissement']);
$this->setCommission($d['commission']);
$this->membre =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->photo;
                        }
                        
                    }
                    /**
                    * Get the value of typeMembre
                    */ 
                    public function getTypeMembre($typeMembre)
                    {
                        if ($typeMembre != null && is_array($this->membre) && count($this->membre)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE typeMembre = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$typeMembre]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setMatricule($d['matricule']);
$this->setNom($d['nom']);
$this->setPrenom($d['prenom']);
$this->setAdresse($d['adresse']);
$this->setNumero($d['numero']);
$this->setPhoto($d['photo']);
$this->setTypeMembre($d['typeMembre']);
$this->setEtablissement($d['etablissement']);
$this->setCommission($d['commission']);
$this->membre =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->typeMembre;
                        }
                        
                    }
                    /**
                    * Get the value of etablissement
                    */ 
                    public function getEtablissement($etablissement)
                    {
                        if ($etablissement != null && is_array($this->membre) && count($this->membre)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE etablissement = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$etablissement]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setMatricule($d['matricule']);
$this->setNom($d['nom']);
$this->setPrenom($d['prenom']);
$this->setAdresse($d['adresse']);
$this->setNumero($d['numero']);
$this->setPhoto($d['photo']);
$this->setTypeMembre($d['typeMembre']);
$this->setEtablissement($d['etablissement']);
$this->setCommission($d['commission']);
$this->membre =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->etablissement;
                        }
                        
                    }
                    /**
                    * Get the value of commission
                    */ 
                    public function getCommission($commission)
                    {
                        if ($commission != null && is_array($this->membre) && count($this->membre)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE commission = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$commission]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setMatricule($d['matricule']);
$this->setNom($d['nom']);
$this->setPrenom($d['prenom']);
$this->setAdresse($d['adresse']);
$this->setNumero($d['numero']);
$this->setPhoto($d['photo']);
$this->setTypeMembre($d['typeMembre']);
$this->setEtablissement($d['etablissement']);
$this->setCommission($d['commission']);
$this->membre =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->commission;
                        }
                        
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
                    /**
                    * Set the value of typeMembre
                    *
                    * @return  self
                    */ 
                   public function setTypeMembre($typeMembre)
                   {
                    $this->typeMembre = $typeMembre;
               
                       return $this;
                   }
                    /**
                    * Set the value of etablissement
                    *
                    * @return  self
                    */ 
                   public function setEtablissement($etablissement)
                   {
                    $this->etablissement = $etablissement;
               
                       return $this;
                   }
                    /**
                    * Set the value of commission
                    *
                    * @return  self
                    */ 
                   public function setCommission($commission)
                   {
                    $this->commission = $commission;
               
                       return $this;
                   }
}
