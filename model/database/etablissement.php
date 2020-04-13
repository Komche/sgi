
<?php 
class etablissement {
	 public $idEtablissement;
	 public $nom;
	 public $adresse;
	 public $filiere;
	 public $etablissement=array();



                public function __construct($etablissement=null) {
                    $this->etablissement = $etablissement;
                         
                }

                public function all()
                {
                    return $this->etablissement;
                }

                public function role($idEtablissement, $nom, $adresse, $filiere)
                    {
                        $this->idEtablissement = $idEtablissement;
$this->nom = $nom;
$this->adresse = $adresse;
$this->filiere = $filiere;

                    }
                


                    /**
                    * Get the value of idEtablissement
                    */ 
                    public function getIdEtablissement($idEtablissement)
                    {
                        if ($idEtablissement != null && is_array($this->etablissement) && count($this->etablissement)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE idEtablissement = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$idEtablissement]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setIdEtablissement($d['idEtablissement']);
$this->setNom($d['nom']);
$this->setAdresse($d['adresse']);
$this->setFiliere($d['filiere']);
$this->etablissement =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->idEtablissement;
                        }
                        
                    }
                    /**
                    * Get the value of nom
                    */ 
                    public function getNom($nom)
                    {
                        if ($nom != null && is_array($this->etablissement) && count($this->etablissement)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE nom = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$nom]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setIdEtablissement($d['idEtablissement']);
$this->setNom($d['nom']);
$this->setAdresse($d['adresse']);
$this->setFiliere($d['filiere']);
$this->etablissement =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->nom;
                        }
                        
                    }
                    /**
                    * Get the value of adresse
                    */ 
                    public function getAdresse($adresse)
                    {
                        if ($adresse != null && is_array($this->etablissement) && count($this->etablissement)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE adresse = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$adresse]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setIdEtablissement($d['idEtablissement']);
$this->setNom($d['nom']);
$this->setAdresse($d['adresse']);
$this->setFiliere($d['filiere']);
$this->etablissement =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->adresse;
                        }
                        
                    }
                    /**
                    * Get the value of filiere
                    */ 
                    public function getFiliere($filiere)
                    {
                        if ($filiere != null && is_array($this->etablissement) && count($this->etablissement)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE filiere = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$filiere]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setIdEtablissement($d['idEtablissement']);
$this->setNom($d['nom']);
$this->setAdresse($d['adresse']);
$this->setFiliere($d['filiere']);
$this->etablissement =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->filiere;
                        }
                        
                    }


                    /**
                    * Set the value of idEtablissement
                    *
                    * @return  self
                    */ 
                   public function setIdEtablissement($idEtablissement)
                   {
                    $this->idEtablissement = $idEtablissement;
               
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
                    * Set the value of filiere
                    *
                    * @return  self
                    */ 
                   public function setFiliere($filiere)
                   {
                    $this->filiere = $filiere;
               
                       return $this;
                   }
}
