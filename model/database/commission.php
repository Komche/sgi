
<?php 
class commission {
	 public $idCommission;
	 public $nomCommission;
	 public $commission=array();



                public function __construct($commission=null) {
                    $this->commission = $commission;
                         
                }

                public function all()
                {
                    return $this->commission;
                }

                public function role($idCommission, $nomCommission)
                    {
                        $this->idCommission = $idCommission;
$this->nomCommission = $nomCommission;

                    }
                


                    /**
                    * Get the value of idCommission
                    */ 
                    public function getIdCommission($idCommission)
                    {
                        if ($idCommission != null && is_array($this->commission) && count($this->commission)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE idCommission = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$idCommission]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setIdCommission($d['idCommission']);
$this->setNomCommission($d['nomCommission']);
$this->commission =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->idCommission;
                        }
                        
                    }
                    /**
                    * Get the value of nomCommission
                    */ 
                    public function getNomCommission($nomCommission)
                    {
                        if ($nomCommission != null && is_array($this->commission) && count($this->commission)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE nomCommission = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$nomCommission]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setIdCommission($d['idCommission']);
$this->setNomCommission($d['nomCommission']);
$this->commission =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->nomCommission;
                        }
                        
                    }


                    /**
                    * Set the value of idCommission
                    *
                    * @return  self
                    */ 
                   public function setIdCommission($idCommission)
                   {
                    $this->idCommission = $idCommission;
               
                       return $this;
                   }
                    /**
                    * Set the value of nomCommission
                    *
                    * @return  self
                    */ 
                   public function setNomCommission($nomCommission)
                   {
                    $this->nomCommission = $nomCommission;
               
                       return $this;
                   }
}
