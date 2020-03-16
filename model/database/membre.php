
<?php 
class membre {
	 public $matricule;
	 public $nom;
	 public $prenom;
	 public $adresse;
	 public $numero;
	 public $photo;
	 public $typeMembre;
	 public $etablissement;
	 public $commission;



                    /**
                    * Get the value of matricule
                    */ 
                    public function getMatricule()
                    {
                        return $this->matricule;
                    }
                    /**
                    * Get the value of nom
                    */ 
                    public function getNom()
                    {
                        return $this->nom;
                    }
                    /**
                    * Get the value of prenom
                    */ 
                    public function getPrenom()
                    {
                        return $this->prenom;
                    }
                    /**
                    * Get the value of adresse
                    */ 
                    public function getAdresse()
                    {
                        return $this->adresse;
                    }
                    /**
                    * Get the value of numero
                    */ 
                    public function getNumero()
                    {
                        return $this->numero;
                    }
                    /**
                    * Get the value of photo
                    */ 
                    public function getPhoto()
                    {
                        return $this->photo;
                    }
                    /**
                    * Get the value of typeMembre
                    */ 
                    public function getTypeMembre()
                    {
                        return $this->typeMembre;
                    }
                    /**
                    * Get the value of etablissement
                    */ 
                    public function getEtablissement()
                    {
                        return $this->etablissement;
                    }
                    /**
                    * Get the value of commission
                    */ 
                    public function getCommission()
                    {
                        return $this->commission;
                    }


                    /**
                    * Set the value of matricule
                    *
                    * @return  self
                    */ 
                   public function setMatricule($matricule)
                   {
                    $this->matricule = $matricule;
               
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
                    * Set the value of prenom
                    *
                    * @return  self
                    */ 
                   public function setPrenom($prenom)
                   {
                    $this->prenom = $prenom;
               
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
                    * Set the value of numero
                    *
                    * @return  self
                    */ 
                   public function setNumero($numero)
                   {
                    $this->numero = $numero;
               
                       return $this;
                   }
                    /**
                    * Set the value of photo
                    *
                    * @return  self
                    */ 
                   public function setPhoto($photo)
                   {
                    $this->photo = $photo;
               
                       return $this;
                   }
                    /**
                    * Set the value of typeMembre
                    *
                    * @return  self
                    */ 
                   public function setTypeMembre($typeMembre)
                   {
                    $this->typeMembre = $typeMembre;
               
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
                    * Set the value of commission
                    *
                    * @return  self
                    */ 
                   public function setCommission($commission)
                   {
                    $this->commission = $commission;
               
                       return $this;
                   }
}
