
<?php 
class etablissement {
	 public $nom;
	 public $adresse;
	 public $filiere;



                public function __construct($etablissement) {
                    if (is_array($etablissement)) {
                         $this->nom = isset($etablissement['nom']) ? $etablissement['nom'] : NULL;
$this->adresse = isset($etablissement['adresse']) ? $etablissement['adresse'] : NULL;
$this->filiere = isset($etablissement['filiere']) ? $etablissement['filiere'] : NULL;

                    }
                }
                


                    /**
                    * Get the value of nom
                    */ 
                    public function getNom()
                    {
                        return $this->nom;
                    }
                    /**
                    * Get the value of adresse
                    */ 
                    public function getAdresse()
                    {
                        return $this->adresse;
                    }
                    /**
                    * Get the value of filiere
                    */ 
                    public function getFiliere()
                    {
                        return $this->filiere;
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
