
<?php 
class ville {
	 public $idRegion;
	 public $nomRegion;
	 public $ville=array();



                public function __construct($ville=null) {
                    $this->ville = $ville;
                         
                }

                public function all()
                {
                    return $this->ville;
                }

                public function role($idRegion, $nomRegion)
                    {
                        $this->idRegion = $idRegion;
$this->nomRegion = $nomRegion;

                    }
                


                    /**
                    * Get the value of idRegion
                    */ 
                    public function getIdRegion($idRegion)
                    {
                        if ($idRegion != null && is_array($this->ville) && count($this->ville)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE idRegion = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$idRegion]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setIdRegion($d['idRegion']);
$this->setNomRegion($d['nomRegion']);
$this->ville =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->idRegion;
                        }
                        
                    }
                    /**
                    * Get the value of nomRegion
                    */ 
                    public function getNomRegion($nomRegion)
                    {
                        if ($nomRegion != null && is_array($this->ville) && count($this->ville)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE nomRegion = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$nomRegion]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setIdRegion($d['idRegion']);
$this->setNomRegion($d['nomRegion']);
$this->ville =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->nomRegion;
                        }
                        
                    }


                    /**
                    * Set the value of idRegion
                    *
                    * @return  self
                    */ 
                   public function setIdRegion($idRegion)
                   {
                    $this->idRegion = $idRegion;
               
                       return $this;
                   }
                    /**
                    * Set the value of nomRegion
                    *
                    * @return  self
                    */ 
                   public function setNomRegion($nomRegion)
                   {
                    $this->nomRegion = $nomRegion;
               
                       return $this;
                   }
}
