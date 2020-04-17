
<?php 
class exercice {
	 public $id_exercice;
	 public $bureau;
	 public $etablissement;
	 public $date_debut;
	 public $date_fin;
	 public $exercice=array();



                public function __construct($exercice=null) {
                    $this->exercice = $exercice;
                         
                }

                public function all()
                {
                    return $this->exercice;
                }

                public function role($id_exercice, $bureau, $etablissement, $date_debut, $date_fin)
                    {
                        $this->id_exercice = $id_exercice;
$this->bureau = $bureau;
$this->etablissement = $etablissement;
$this->date_debut = $date_debut;
$this->date_fin = $date_fin;

                    }
                


                    /**
                    * Get the value of id_exercice
                    */ 
                    public function getId_exercice($id_exercice=null)
                    {
                        if ($id_exercice != null && is_array($this->exercice) && count($this->exercice)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE id_exercice = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$id_exercice]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_exercice($d['id_exercice']);
$this->setBureau($d['bureau']);
$this->setEtablissement($d['etablissement']);
$this->setDate_debut($d['date_debut']);
$this->setDate_fin($d['date_fin']);
$this->exercice =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->id_exercice;
                        }
                        
                    }
                    /**
                    * Get the value of bureau
                    */ 
                    public function getBureau($bureau=null)
                    {
                        if ($bureau != null && is_array($this->exercice) && count($this->exercice)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE bureau = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$bureau]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_exercice($d['id_exercice']);
$this->setBureau($d['bureau']);
$this->setEtablissement($d['etablissement']);
$this->setDate_debut($d['date_debut']);
$this->setDate_fin($d['date_fin']);
$this->exercice =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->bureau;
                        }
                        
                    }
                    /**
                    * Get the value of etablissement
                    */ 
                    public function getEtablissement($etablissement=null)
                    {
                        if ($etablissement != null && is_array($this->exercice) && count($this->exercice)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE etablissement = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$etablissement]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_exercice($d['id_exercice']);
$this->setBureau($d['bureau']);
$this->setEtablissement($d['etablissement']);
$this->setDate_debut($d['date_debut']);
$this->setDate_fin($d['date_fin']);
$this->exercice =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->etablissement;
                        }
                        
                    }
                    /**
                    * Get the value of date_debut
                    */ 
                    public function getDate_debut($date_debut=null)
                    {
                        if ($date_debut != null && is_array($this->exercice) && count($this->exercice)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE date_debut = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$date_debut]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_exercice($d['id_exercice']);
$this->setBureau($d['bureau']);
$this->setEtablissement($d['etablissement']);
$this->setDate_debut($d['date_debut']);
$this->setDate_fin($d['date_fin']);
$this->exercice =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->date_debut;
                        }
                        
                    }
                    /**
                    * Get the value of date_fin
                    */ 
                    public function getDate_fin($date_fin=null)
                    {
                        if ($date_fin != null && is_array($this->exercice) && count($this->exercice)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE date_fin = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$date_fin]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_exercice($d['id_exercice']);
$this->setBureau($d['bureau']);
$this->setEtablissement($d['etablissement']);
$this->setDate_debut($d['date_debut']);
$this->setDate_fin($d['date_fin']);
$this->exercice =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->date_fin;
                        }
                        
                    }


                    /**
                    * Set the value of id_exercice
                    *
                    * @return  self
                    */ 
                   public function setId_exercice($id_exercice)
                   {
                    $this->id_exercice = $id_exercice;
               
                       return $this;
                   }
                    /**
                    * Set the value of bureau
                    *
                    * @return  self
                    */ 
                   public function setBureau($bureau)
                   {
                    $this->bureau = $bureau;
               
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
                    * Set the value of date_debut
                    *
                    * @return  self
                    */ 
                   public function setDate_debut($date_debut)
                   {
                    $this->date_debut = $date_debut;
               
                       return $this;
                   }
                    /**
                    * Set the value of date_fin
                    *
                    * @return  self
                    */ 
                   public function setDate_fin($date_fin)
                   {
                    $this->date_fin = $date_fin;
               
                       return $this;
                   }
}
