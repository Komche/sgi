
<?php 
class bureauCommission {
	 public $bureau;
	 public $commission;
	 public $exercice;
	 public $bureauCommission=array();



                public function __construct($bureauCommission=null) {
                    $this->bureauCommission = $bureauCommission;
                         
                }

                public function all()
                {
                    return $this->bureauCommission;
                }

                public function role($bureau, $commission, $exercice)
                    {
                        $this->bureau = $bureau;
$this->commission = $commission;
$this->exercice = $exercice;

                    }
                


                    /**
                    * Get the value of bureau
                    */ 
                    public function getBureau($bureau)
                    {
                        if ($bureau != null && is_array($this->bureauCommission) && count($this->bureauCommission)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE bureau = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$bureau]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setBureau($d['bureau']);
$this->setCommission($d['commission']);
$this->setExercice($d['exercice']);
$this->bureauCommission =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->bureau;
                        }
                        
                    }
                    /**
                    * Get the value of commission
                    */ 
                    public function getCommission($commission)
                    {
                        if ($commission != null && is_array($this->bureauCommission) && count($this->bureauCommission)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE commission = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$commission]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setBureau($d['bureau']);
$this->setCommission($d['commission']);
$this->setExercice($d['exercice']);
$this->bureauCommission =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->commission;
                        }
                        
                    }
                    /**
                    * Get the value of exercice
                    */ 
                    public function getExercice($exercice)
                    {
                        if ($exercice != null && is_array($this->bureauCommission) && count($this->bureauCommission)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE exercice = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$exercice]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setBureau($d['bureau']);
$this->setCommission($d['commission']);
$this->setExercice($d['exercice']);
$this->bureauCommission =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->exercice;
                        }
                        
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
                    * Set the value of commission
                    *
                    * @return  self
                    */ 
                   public function setCommission($commission)
                   {
                    $this->commission = $commission;
               
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
