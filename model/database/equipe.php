
<?php 
class equipe {
	 public $id_equipe;
	 public $nom_equipe;
     public $region;
     public $pays;
     public $user;
	 public $equipe=array();



                public function __construct($equipe=null) {
                    $this->equipe = $equipe;
                         
                }

                public function all()
                {
                    return $this->equipe;
                }

                public function role($id_equipe, $nom_equipe, $region, $pays, $user)
                    {
                        $this->id_equipe = $id_equipe;
                        $this->nom_equipe = $nom_equipe;
                        $this->region = $region;
                        $this->pays = $pays;
                        $this->user = $user;

                    }
                


                    /**
                    * Get the value of id_equipe
                    */ 
                    public function getId_equipe($id_equipe=null)
                    {
                        if ($id_equipe != null && is_array($this->equipe) && count($this->equipe)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE id_equipe = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$id_equipe]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
                            $d=$data[0];
                            $this->setId_equipe($d['id_equipe']);
                            $this->setNom_equipe($d['nom_equipe']);
                            $this->setRegion($d['region']);
                            $this->setPays($d['pays']);
                            $this->setUser($d['user']);
                            $this->equipe =$data; 
                            return $this;
                                }
                            
                        } else {
                            return $this->id_equipe;
                        }
                        
                    }
                    /**
                    * Get the value of nom_equipe
                    */ 
                    public function getNom_equipe($nom_equipe=null)
                    {
                        if ($nom_equipe != null && is_array($this->equipe) && count($this->equipe)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE nom_equipe = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$nom_equipe]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
                            $d=$data[0];
                            $this->setId_equipe($d['id_equipe']);
                            $this->setNom_equipe($d['nom_equipe']);
                            $this->setRegion($d['region']);
                            $this->setPays($d['pays']);
                            $this->setUser($d['user']);
                            $this->equipe =$data; 
                            return $this;
                                }
                            
                        } else {
                            return $this->nom_equipe;
                        }
                        
                    }
                    /**
                    * Get the value of region
                    */ 
                    public function getRegion($region=null)
                    {
                        if ($region != null && is_array($this->equipe) && count($this->equipe)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE region = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$region]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
                            $d=$data[0];
                            $this->setId_equipe($d['id_equipe']);
                            $this->setNom_equipe($d['nom_equipe']);
                            $this->setRegion($d['region']);
                            $this->setPays($d['pays']);
                            $this->setUser($d['user']);
                            $this->equipe =$data; 
                            return $this;
                                }
                            
                        } else {
                            return $this->region;
                        }
                        
                    }

                    public function getPays($pays=null)
                    {
                        if ($pays != null && is_array($this->equipe) && count($this->equipe)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE pays = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$pays]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
                            $d=$data[0];
                            $this->setId_equipe($d['id_equipe']);
                            $this->setNom_equipe($d['nom_equipe']);
                            $this->setRegion($d['region']);
                            $this->setPays($d['pays']);
                            $this->setUser($d['user']);
                            $this->equipe =$data; 
                            return $this;
                                }
                            
                        } else {
                            return $this->pays;
                        }
                        
                    }
                    public function getUser($user=null)
                    {
                        if ($user != null && is_array($this->equipe) && count($this->equipe)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE user = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$user]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
                            $d=$data[0];
                            $this->setId_equipe($d['id_equipe']);
                            $this->setNom_equipe($d['nom_equipe']);
                            $this->setRegion($d['region']);
                            $this->setPays($d['pays']);
                            $this->setUser($d['user']);
                            $this->equipe =$data; 
                            return $this;
                                }
                            
                        } else {
                            return $this->user;
                        }
                        
                    }

                    /**
                    * Set the value of id_equipe
                    *
                    * @return  self
                    */ 
                   public function setId_equipe($id_equipe)
                   {
                    $this->id_equipe = $id_equipe;
               
                       return $this;
                   }
                    /**
                    * Set the value of nom_equipe
                    *
                    * @return  self
                    */ 
                   public function setNom_equipe($nom_equipe)
                   {
                    $this->nom_equipe = $nom_equipe;
               
                       return $this;
                   }
                    /**
                    * Set the value of region
                    *
                    * @return  self
                    */ 
                   public function setRegion($region)
                   {
                    $this->region = $region;
               
                       return $this;
                   }
                   public function setPays($pays)
                   {
                    $this->pays = $pays;
               
                       return $this;
                   }
                   public function setUser($user)
                   {
                    $this->user = $user;
               
                       return $this;
                   }
}
