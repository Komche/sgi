
<?php 
class region {
	 public $id_region;
	 public $nom_region;
	 public $region=array();



                public function __construct($region=null) {
                    $this->region = $region;
                         
                }

                public function all()
                {
                    return $this->region;
                }

                public function role($id_region, $nom_region)
                    {
                        $this->id_region = $id_region;
$this->nom_region = $nom_region;

                    }
                


                    /**
                    * Get the value of id_region
                    */ 
                    public function getId_region($id_region=null)
                    {
                        if ($id_region != null && is_array($this->region) && count($this->region)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE id_region = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$id_region]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_region($d['id_region']);
$this->setNom_region($d['nom_region']);
$this->region =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->id_region;
                        }
                        
                    }
                    /**
                    * Get the value of nom_region
                    */ 
                    public function getNom_region($nom_region=null)
                    {
                        if ($nom_region != null && is_array($this->region) && count($this->region)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE nom_region = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$nom_region]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_region($d['id_region']);
$this->setNom_region($d['nom_region']);
$this->region =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->nom_region;
                        }
                        
                    }


                    /**
                    * Set the value of id_region
                    *
                    * @return  self
                    */ 
                   public function setId_region($id_region)
                   {
                    $this->id_region = $id_region;
               
                       return $this;
                   }
                    /**
                    * Set the value of nom_region
                    *
                    * @return  self
                    */ 
                   public function setNom_region($nom_region)
                   {
                    $this->nom_region = $nom_region;
               
                       return $this;
                   }
}
