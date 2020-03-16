
<?php 
class etablissement {
	 public $idEtablissement;
	 public $nom;
	 public $adresse;
	 public $filiere;



                    /**
                    * Get the value of idEtablissement
                    */ 
                    public function getIdEtablissement()
                    {
                        return $this->idEtablissement;
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
                    * Set the value of idEtablissement
                    *
                    * @return  self
                    */ 
                   public function setIdEtablissement($idEtablissement)
                   {
                    $this->idEtablissement = $idEtablissement;
               
                       return $this;
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
