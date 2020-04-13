
<?php 
class bureau {
	 public $idBureau;
	 public $libellebureau;
	 public $typebureau;
	 public $poste;
	 public $idRegion;
	 public $bureau=array();



                public function __construct($bureau=null) {
                    $this->bureau = $bureau;
                         
                }

                public function all()
                {
                    return $this->bureau;
                }

                public function role($idBureau, $libellebureau, $typebureau, $poste, $idRegion)
                    {
                        $this->idBureau = $idBureau;
$this->libellebureau = $libellebureau;
$this->typebureau = $typebureau;
$this->poste = $poste;
$this->idRegion = $idRegion;

                    }
                


                    /**
                    * Get the value of idBureau
                    */ 
                    public function getIdBureau($idBureau)
                    {
                        if ($idBureau != null && is_array($this->bureau) && count($this->bureau)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE idBureau = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$idBureau]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setIdBureau($d['idBureau']);
$this->setLibellebureau($d['libellebureau']);
$this->setTypebureau($d['typebureau']);
$this->setPoste($d['poste']);
$this->setIdRegion($d['idRegion']);
$this->bureau =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->idBureau;
                        }
                        
                    }
                    /**
                    * Get the value of libellebureau
                    */ 
                    public function getLibellebureau($libellebureau)
                    {
                        if ($libellebureau != null && is_array($this->bureau) && count($this->bureau)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE libellebureau = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$libellebureau]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setIdBureau($d['idBureau']);
$this->setLibellebureau($d['libellebureau']);
$this->setTypebureau($d['typebureau']);
$this->setPoste($d['poste']);
$this->setIdRegion($d['idRegion']);
$this->bureau =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->libellebureau;
                        }
                        
                    }
                    /**
                    * Get the value of typebureau
                    */ 
                    public function getTypebureau($typebureau)
                    {
                        if ($typebureau != null && is_array($this->bureau) && count($this->bureau)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE typebureau = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$typebureau]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setIdBureau($d['idBureau']);
$this->setLibellebureau($d['libellebureau']);
$this->setTypebureau($d['typebureau']);
$this->setPoste($d['poste']);
$this->setIdRegion($d['idRegion']);
$this->bureau =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->typebureau;
                        }
                        
                    }
                    /**
                    * Get the value of poste
                    */ 
                    public function getPoste($poste)
                    {
                        if ($poste != null && is_array($this->bureau) && count($this->bureau)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE poste = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$poste]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setIdBureau($d['idBureau']);
$this->setLibellebureau($d['libellebureau']);
$this->setTypebureau($d['typebureau']);
$this->setPoste($d['poste']);
$this->setIdRegion($d['idRegion']);
$this->bureau =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->poste;
                        }
                        
                    }
                    /**
                    * Get the value of idRegion
                    */ 
                    public function getIdRegion($idRegion)
                    {
                        if ($idRegion != null && is_array($this->bureau) && count($this->bureau)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE idRegion = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$idRegion]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setIdBureau($d['idBureau']);
$this->setLibellebureau($d['libellebureau']);
$this->setTypebureau($d['typebureau']);
$this->setPoste($d['poste']);
$this->setIdRegion($d['idRegion']);
$this->bureau =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->idRegion;
                        }
                        
                    }


                    /**
                    * Set the value of idBureau
                    *
                    * @return  self
                    */ 
                   public function setIdBureau($idBureau)
                   {
                    $this->idBureau = $idBureau;
               
                       return $this;
                   }
                    /**
                    * Set the value of libellebureau
                    *
                    * @return  self
                    */ 
                   public function setLibellebureau($libellebureau)
                   {
                    $this->libellebureau = $libellebureau;
               
                       return $this;
                   }
                    /**
                    * Set the value of typebureau
                    *
                    * @return  self
                    */ 
                   public function setTypebureau($typebureau)
                   {
                    $this->typebureau = $typebureau;
               
                       return $this;
                   }
                    /**
                    * Set the value of poste
                    *
                    * @return  self
                    */ 
                   public function setPoste($poste)
                   {
                    $this->poste = $poste;
               
                       return $this;
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
}
