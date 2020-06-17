
<?php 
class langue {
	 public $id_langue;
	 public $libelle_langue;
	 public $langue=array();



                public function __construct($langue=null) {
                    $this->langue = $langue;
                         
                }

                public function all()
                {
                    return $this->langue;
                }

                public function role($id_langue, $libelle_langue)
                    {
                        $this->id_langue = $id_langue;
$this->libelle_langue = $libelle_langue;

                    }
                


                    /**
                    * Get the value of id_langue
                    */ 
                    public function getId_langue($id_langue=null)
                    {
                        if ($id_langue != null && is_array($this->langue) && count($this->langue)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE id_langue = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$id_langue]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_langue($d['id_langue']);
$this->setLibelle_langue($d['libelle_langue']);
$this->langue =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->id_langue;
                        }
                        
                    }
                    /**
                    * Get the value of libelle_langue
                    */ 
                    public function getLibelle_langue($libelle_langue=null)
                    {
                        if ($libelle_langue != null && is_array($this->langue) && count($this->langue)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE libelle_langue = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$libelle_langue]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_langue($d['id_langue']);
$this->setLibelle_langue($d['libelle_langue']);
$this->langue =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->libelle_langue;
                        }
                        
                    }


                    /**
                    * Set the value of id_langue
                    *
                    * @return  self
                    */ 
                   public function setId_langue($id_langue)
                   {
                    $this->id_langue = $id_langue;
               
                       return $this;
                   }
                    /**
                    * Set the value of libelle_langue
                    *
                    * @return  self
                    */ 
                   public function setLibelle_langue($libelle_langue)
                   {
                    $this->libelle_langue = $libelle_langue;
               
                       return $this;
                   }
}
