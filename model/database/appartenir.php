
<?php 
class appartenir {
	 public $membre;
	 public $etablissement;
	 public $exercice;
	 public $appartenir=array();



                public function __construct($appartenir=null) {
                    $this->appartenir = $appartenir;
                         
                }

                public function all()
                {
                    return $this->appartenir;
                }

                public function role($membre, $etablissement, $exercice)
                    {
                        $this->membre = $membre;
$this->etablissement = $etablissement;
$this->exercice = $exercice;

                    }
                


                    /**
                    * Get the value of membre
                    */ 
                    public function getMembre($membre)
                    {
                        if ($membre != null && is_array($this->appartenir) && count($this->appartenir)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE membre = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$membre]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setMembre($d['membre']);
$this->setEtablissement($d['etablissement']);
$this->setExercice($d['exercice']);
$this->appartenir =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->membre;
                        }
                        
                    }
                    /**
                    * Get the value of etablissement
                    */ 
                    public function getEtablissement($etablissement)
                    {
                        if ($etablissement != null && is_array($this->appartenir) && count($this->appartenir)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE etablissement = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$etablissement]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setMembre($d['membre']);
$this->setEtablissement($d['etablissement']);
$this->setExercice($d['exercice']);
$this->appartenir =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->etablissement;
                        }
                        
                    }
                    /**
                    * Get the value of exercice
                    */ 
                    public function getExercice($exercice)
                    {
                        if ($exercice != null && is_array($this->appartenir) && count($this->appartenir)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE exercice = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$exercice]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setMembre($d['membre']);
$this->setEtablissement($d['etablissement']);
$this->setExercice($d['exercice']);
$this->appartenir =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->exercice;
                        }
                        
                    }


                    /**
                    * Set the value of membre
                    *
                    * @return  self
                    */ 
                   public function setMembre($membre)
                   {
                    $this->membre = $membre;
               
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
                    * Set the value of exercice
                    *
                    * @return  self
                    */ 
                   public function setExercice($exercice)
                   {
                    $this->exercice = $exercice;
               
                       return $this;
                   }
}
