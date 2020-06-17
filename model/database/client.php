
<?php 
class client {
	 public $id_client;
	 public $type_client;
	 public $civilite;
	 public $nom_client;
	 public $prenom_client;
	 public $nom_jeune_fille;
	 public $date_naissance;
	 public $lieu_naissanc;
	 public $nationalite;
	 public $situation_mat;
	 public $regime_mat;
	 public $nb_enfant;
	 public $nom_conjoint;
	 public $adresse_post;
	 public $code_postal;
	 public $observation;
	 public $adresse_geo;
	 public $adresse_pro;
	 public $type_piece;
	 public $num_piece;
	 public $date_delivrance_piece;
	 public $date_fin_piece;
	 public $piece_authoite;
	 public $lieu_piece;
	 public $pays_residence;
	 public $ville_residence;
	 public $quartier;
	 public $phone_number_1;
	 public $phone_number_2;
	 public $photo;
	 public $email_1;
	 public $email_2;
	 public $langue;
	 public $modalite;
	 public $date_relation;
	 public $client=array();



                public function __construct($client=null) {
                    $this->client = $client;
                         
                }

                public function all()
                {
                    return $this->client;
                }

                public function role($id_client, $type_client, $civilite, $nom_client, $prenom_client, $nom_jeune_fille, $date_naissance, $lieu_naissanc, $nationalite, $situation_mat, $regime_mat, $nb_enfant, $nom_conjoint, $adresse_post, $code_postal, $observation, $adresse_geo, $adresse_pro, $type_piece, $num_piece, $date_delivrance_piece, $date_fin_piece, $piece_authoite, $lieu_piece, $pays_residence, $ville_residence, $quartier, $phone_number_1, $phone_number_2, $photo, $email_1, $email_2, $langue, $modalite, $date_relation)
                    {
                        $this->id_client = $id_client;
$this->type_client = $type_client;
$this->civilite = $civilite;
$this->nom_client = $nom_client;
$this->prenom_client = $prenom_client;
$this->nom_jeune_fille = $nom_jeune_fille;
$this->date_naissance = $date_naissance;
$this->lieu_naissanc = $lieu_naissanc;
$this->nationalite = $nationalite;
$this->situation_mat = $situation_mat;
$this->regime_mat = $regime_mat;
$this->nb_enfant = $nb_enfant;
$this->nom_conjoint = $nom_conjoint;
$this->adresse_post = $adresse_post;
$this->code_postal = $code_postal;
$this->observation = $observation;
$this->adresse_geo = $adresse_geo;
$this->adresse_pro = $adresse_pro;
$this->type_piece = $type_piece;
$this->num_piece = $num_piece;
$this->date_delivrance_piece = $date_delivrance_piece;
$this->date_fin_piece = $date_fin_piece;
$this->piece_authoite = $piece_authoite;
$this->lieu_piece = $lieu_piece;
$this->pays_residence = $pays_residence;
$this->ville_residence = $ville_residence;
$this->quartier = $quartier;
$this->phone_number_1 = $phone_number_1;
$this->phone_number_2 = $phone_number_2;
$this->photo = $photo;
$this->email_1 = $email_1;
$this->email_2 = $email_2;
$this->langue = $langue;
$this->modalite = $modalite;
$this->date_relation = $date_relation;

                    }
                


                    /**
                    * Get the value of id_client
                    */ 
                    public function getId_client($id_client=null)
                    {
                        if ($id_client != null && is_array($this->client) && count($this->client)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE id_client = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$id_client]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_client($d['id_client']);
$this->setType_client($d['type_client']);
$this->setCivilite($d['civilite']);
$this->setNom_client($d['nom_client']);
$this->setPrenom_client($d['prenom_client']);
$this->setNom_jeune_fille($d['nom_jeune_fille']);
$this->setDate_naissance($d['date_naissance']);
$this->setLieu_naissanc($d['lieu_naissanc']);
$this->setNationalite($d['nationalite']);
$this->setSituation_mat($d['situation_mat']);
$this->setRegime_mat($d['regime_mat']);
$this->setNb_enfant($d['nb_enfant']);
$this->setNom_conjoint($d['nom_conjoint']);
$this->setAdresse_post($d['adresse_post']);
$this->setCode_postal($d['code_postal']);
$this->setObservation($d['observation']);
$this->setAdresse_geo($d['adresse_geo']);
$this->setAdresse_pro($d['adresse_pro']);
$this->setType_piece($d['type_piece']);
$this->setNum_piece($d['num_piece']);
$this->setDate_delivrance_piece($d['date_delivrance_piece']);
$this->setDate_fin_piece($d['date_fin_piece']);
$this->setPiece_authoite($d['piece_authoite']);
$this->setLieu_piece($d['lieu_piece']);
$this->setPays_residence($d['pays_residence']);
$this->setVille_residence($d['ville_residence']);
$this->setQuartier($d['quartier']);
$this->setPhone_number_1($d['phone_number_1']);
$this->setPhone_number_2($d['phone_number_2']);
$this->setPhoto($d['photo']);
$this->setEmail_1($d['email_1']);
$this->setEmail_2($d['email_2']);
$this->setLangue($d['langue']);
$this->setModalite($d['modalite']);
$this->setDate_relation($d['date_relation']);
$this->client =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->id_client;
                        }
                        
                    }
                    /**
                    * Get the value of type_client
                    */ 
                    public function getType_client($type_client=null)
                    {
                        if ($type_client != null && is_array($this->client) && count($this->client)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE type_client = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$type_client]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_client($d['id_client']);
$this->setType_client($d['type_client']);
$this->setCivilite($d['civilite']);
$this->setNom_client($d['nom_client']);
$this->setPrenom_client($d['prenom_client']);
$this->setNom_jeune_fille($d['nom_jeune_fille']);
$this->setDate_naissance($d['date_naissance']);
$this->setLieu_naissanc($d['lieu_naissanc']);
$this->setNationalite($d['nationalite']);
$this->setSituation_mat($d['situation_mat']);
$this->setRegime_mat($d['regime_mat']);
$this->setNb_enfant($d['nb_enfant']);
$this->setNom_conjoint($d['nom_conjoint']);
$this->setAdresse_post($d['adresse_post']);
$this->setCode_postal($d['code_postal']);
$this->setObservation($d['observation']);
$this->setAdresse_geo($d['adresse_geo']);
$this->setAdresse_pro($d['adresse_pro']);
$this->setType_piece($d['type_piece']);
$this->setNum_piece($d['num_piece']);
$this->setDate_delivrance_piece($d['date_delivrance_piece']);
$this->setDate_fin_piece($d['date_fin_piece']);
$this->setPiece_authoite($d['piece_authoite']);
$this->setLieu_piece($d['lieu_piece']);
$this->setPays_residence($d['pays_residence']);
$this->setVille_residence($d['ville_residence']);
$this->setQuartier($d['quartier']);
$this->setPhone_number_1($d['phone_number_1']);
$this->setPhone_number_2($d['phone_number_2']);
$this->setPhoto($d['photo']);
$this->setEmail_1($d['email_1']);
$this->setEmail_2($d['email_2']);
$this->setLangue($d['langue']);
$this->setModalite($d['modalite']);
$this->setDate_relation($d['date_relation']);
$this->client =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->type_client;
                        }
                        
                    }
                    /**
                    * Get the value of civilite
                    */ 
                    public function getCivilite($civilite=null)
                    {
                        if ($civilite != null && is_array($this->client) && count($this->client)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE civilite = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$civilite]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_client($d['id_client']);
$this->setType_client($d['type_client']);
$this->setCivilite($d['civilite']);
$this->setNom_client($d['nom_client']);
$this->setPrenom_client($d['prenom_client']);
$this->setNom_jeune_fille($d['nom_jeune_fille']);
$this->setDate_naissance($d['date_naissance']);
$this->setLieu_naissanc($d['lieu_naissanc']);
$this->setNationalite($d['nationalite']);
$this->setSituation_mat($d['situation_mat']);
$this->setRegime_mat($d['regime_mat']);
$this->setNb_enfant($d['nb_enfant']);
$this->setNom_conjoint($d['nom_conjoint']);
$this->setAdresse_post($d['adresse_post']);
$this->setCode_postal($d['code_postal']);
$this->setObservation($d['observation']);
$this->setAdresse_geo($d['adresse_geo']);
$this->setAdresse_pro($d['adresse_pro']);
$this->setType_piece($d['type_piece']);
$this->setNum_piece($d['num_piece']);
$this->setDate_delivrance_piece($d['date_delivrance_piece']);
$this->setDate_fin_piece($d['date_fin_piece']);
$this->setPiece_authoite($d['piece_authoite']);
$this->setLieu_piece($d['lieu_piece']);
$this->setPays_residence($d['pays_residence']);
$this->setVille_residence($d['ville_residence']);
$this->setQuartier($d['quartier']);
$this->setPhone_number_1($d['phone_number_1']);
$this->setPhone_number_2($d['phone_number_2']);
$this->setPhoto($d['photo']);
$this->setEmail_1($d['email_1']);
$this->setEmail_2($d['email_2']);
$this->setLangue($d['langue']);
$this->setModalite($d['modalite']);
$this->setDate_relation($d['date_relation']);
$this->client =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->civilite;
                        }
                        
                    }
                    /**
                    * Get the value of nom_client
                    */ 
                    public function getNom_client($nom_client=null)
                    {
                        if ($nom_client != null && is_array($this->client) && count($this->client)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE nom_client = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$nom_client]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_client($d['id_client']);
$this->setType_client($d['type_client']);
$this->setCivilite($d['civilite']);
$this->setNom_client($d['nom_client']);
$this->setPrenom_client($d['prenom_client']);
$this->setNom_jeune_fille($d['nom_jeune_fille']);
$this->setDate_naissance($d['date_naissance']);
$this->setLieu_naissanc($d['lieu_naissanc']);
$this->setNationalite($d['nationalite']);
$this->setSituation_mat($d['situation_mat']);
$this->setRegime_mat($d['regime_mat']);
$this->setNb_enfant($d['nb_enfant']);
$this->setNom_conjoint($d['nom_conjoint']);
$this->setAdresse_post($d['adresse_post']);
$this->setCode_postal($d['code_postal']);
$this->setObservation($d['observation']);
$this->setAdresse_geo($d['adresse_geo']);
$this->setAdresse_pro($d['adresse_pro']);
$this->setType_piece($d['type_piece']);
$this->setNum_piece($d['num_piece']);
$this->setDate_delivrance_piece($d['date_delivrance_piece']);
$this->setDate_fin_piece($d['date_fin_piece']);
$this->setPiece_authoite($d['piece_authoite']);
$this->setLieu_piece($d['lieu_piece']);
$this->setPays_residence($d['pays_residence']);
$this->setVille_residence($d['ville_residence']);
$this->setQuartier($d['quartier']);
$this->setPhone_number_1($d['phone_number_1']);
$this->setPhone_number_2($d['phone_number_2']);
$this->setPhoto($d['photo']);
$this->setEmail_1($d['email_1']);
$this->setEmail_2($d['email_2']);
$this->setLangue($d['langue']);
$this->setModalite($d['modalite']);
$this->setDate_relation($d['date_relation']);
$this->client =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->nom_client;
                        }
                        
                    }
                    /**
                    * Get the value of prenom_client
                    */ 
                    public function getPrenom_client($prenom_client=null)
                    {
                        if ($prenom_client != null && is_array($this->client) && count($this->client)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE prenom_client = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$prenom_client]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_client($d['id_client']);
$this->setType_client($d['type_client']);
$this->setCivilite($d['civilite']);
$this->setNom_client($d['nom_client']);
$this->setPrenom_client($d['prenom_client']);
$this->setNom_jeune_fille($d['nom_jeune_fille']);
$this->setDate_naissance($d['date_naissance']);
$this->setLieu_naissanc($d['lieu_naissanc']);
$this->setNationalite($d['nationalite']);
$this->setSituation_mat($d['situation_mat']);
$this->setRegime_mat($d['regime_mat']);
$this->setNb_enfant($d['nb_enfant']);
$this->setNom_conjoint($d['nom_conjoint']);
$this->setAdresse_post($d['adresse_post']);
$this->setCode_postal($d['code_postal']);
$this->setObservation($d['observation']);
$this->setAdresse_geo($d['adresse_geo']);
$this->setAdresse_pro($d['adresse_pro']);
$this->setType_piece($d['type_piece']);
$this->setNum_piece($d['num_piece']);
$this->setDate_delivrance_piece($d['date_delivrance_piece']);
$this->setDate_fin_piece($d['date_fin_piece']);
$this->setPiece_authoite($d['piece_authoite']);
$this->setLieu_piece($d['lieu_piece']);
$this->setPays_residence($d['pays_residence']);
$this->setVille_residence($d['ville_residence']);
$this->setQuartier($d['quartier']);
$this->setPhone_number_1($d['phone_number_1']);
$this->setPhone_number_2($d['phone_number_2']);
$this->setPhoto($d['photo']);
$this->setEmail_1($d['email_1']);
$this->setEmail_2($d['email_2']);
$this->setLangue($d['langue']);
$this->setModalite($d['modalite']);
$this->setDate_relation($d['date_relation']);
$this->client =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->prenom_client;
                        }
                        
                    }
                    /**
                    * Get the value of nom_jeune_fille
                    */ 
                    public function getNom_jeune_fille($nom_jeune_fille=null)
                    {
                        if ($nom_jeune_fille != null && is_array($this->client) && count($this->client)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE nom_jeune_fille = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$nom_jeune_fille]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_client($d['id_client']);
$this->setType_client($d['type_client']);
$this->setCivilite($d['civilite']);
$this->setNom_client($d['nom_client']);
$this->setPrenom_client($d['prenom_client']);
$this->setNom_jeune_fille($d['nom_jeune_fille']);
$this->setDate_naissance($d['date_naissance']);
$this->setLieu_naissanc($d['lieu_naissanc']);
$this->setNationalite($d['nationalite']);
$this->setSituation_mat($d['situation_mat']);
$this->setRegime_mat($d['regime_mat']);
$this->setNb_enfant($d['nb_enfant']);
$this->setNom_conjoint($d['nom_conjoint']);
$this->setAdresse_post($d['adresse_post']);
$this->setCode_postal($d['code_postal']);
$this->setObservation($d['observation']);
$this->setAdresse_geo($d['adresse_geo']);
$this->setAdresse_pro($d['adresse_pro']);
$this->setType_piece($d['type_piece']);
$this->setNum_piece($d['num_piece']);
$this->setDate_delivrance_piece($d['date_delivrance_piece']);
$this->setDate_fin_piece($d['date_fin_piece']);
$this->setPiece_authoite($d['piece_authoite']);
$this->setLieu_piece($d['lieu_piece']);
$this->setPays_residence($d['pays_residence']);
$this->setVille_residence($d['ville_residence']);
$this->setQuartier($d['quartier']);
$this->setPhone_number_1($d['phone_number_1']);
$this->setPhone_number_2($d['phone_number_2']);
$this->setPhoto($d['photo']);
$this->setEmail_1($d['email_1']);
$this->setEmail_2($d['email_2']);
$this->setLangue($d['langue']);
$this->setModalite($d['modalite']);
$this->setDate_relation($d['date_relation']);
$this->client =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->nom_jeune_fille;
                        }
                        
                    }
                    /**
                    * Get the value of date_naissance
                    */ 
                    public function getDate_naissance($date_naissance=null)
                    {
                        if ($date_naissance != null && is_array($this->client) && count($this->client)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE date_naissance = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$date_naissance]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_client($d['id_client']);
$this->setType_client($d['type_client']);
$this->setCivilite($d['civilite']);
$this->setNom_client($d['nom_client']);
$this->setPrenom_client($d['prenom_client']);
$this->setNom_jeune_fille($d['nom_jeune_fille']);
$this->setDate_naissance($d['date_naissance']);
$this->setLieu_naissanc($d['lieu_naissanc']);
$this->setNationalite($d['nationalite']);
$this->setSituation_mat($d['situation_mat']);
$this->setRegime_mat($d['regime_mat']);
$this->setNb_enfant($d['nb_enfant']);
$this->setNom_conjoint($d['nom_conjoint']);
$this->setAdresse_post($d['adresse_post']);
$this->setCode_postal($d['code_postal']);
$this->setObservation($d['observation']);
$this->setAdresse_geo($d['adresse_geo']);
$this->setAdresse_pro($d['adresse_pro']);
$this->setType_piece($d['type_piece']);
$this->setNum_piece($d['num_piece']);
$this->setDate_delivrance_piece($d['date_delivrance_piece']);
$this->setDate_fin_piece($d['date_fin_piece']);
$this->setPiece_authoite($d['piece_authoite']);
$this->setLieu_piece($d['lieu_piece']);
$this->setPays_residence($d['pays_residence']);
$this->setVille_residence($d['ville_residence']);
$this->setQuartier($d['quartier']);
$this->setPhone_number_1($d['phone_number_1']);
$this->setPhone_number_2($d['phone_number_2']);
$this->setPhoto($d['photo']);
$this->setEmail_1($d['email_1']);
$this->setEmail_2($d['email_2']);
$this->setLangue($d['langue']);
$this->setModalite($d['modalite']);
$this->setDate_relation($d['date_relation']);
$this->client =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->date_naissance;
                        }
                        
                    }
                    /**
                    * Get the value of lieu_naissanc
                    */ 
                    public function getLieu_naissanc($lieu_naissanc=null)
                    {
                        if ($lieu_naissanc != null && is_array($this->client) && count($this->client)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE lieu_naissanc = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$lieu_naissanc]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_client($d['id_client']);
$this->setType_client($d['type_client']);
$this->setCivilite($d['civilite']);
$this->setNom_client($d['nom_client']);
$this->setPrenom_client($d['prenom_client']);
$this->setNom_jeune_fille($d['nom_jeune_fille']);
$this->setDate_naissance($d['date_naissance']);
$this->setLieu_naissanc($d['lieu_naissanc']);
$this->setNationalite($d['nationalite']);
$this->setSituation_mat($d['situation_mat']);
$this->setRegime_mat($d['regime_mat']);
$this->setNb_enfant($d['nb_enfant']);
$this->setNom_conjoint($d['nom_conjoint']);
$this->setAdresse_post($d['adresse_post']);
$this->setCode_postal($d['code_postal']);
$this->setObservation($d['observation']);
$this->setAdresse_geo($d['adresse_geo']);
$this->setAdresse_pro($d['adresse_pro']);
$this->setType_piece($d['type_piece']);
$this->setNum_piece($d['num_piece']);
$this->setDate_delivrance_piece($d['date_delivrance_piece']);
$this->setDate_fin_piece($d['date_fin_piece']);
$this->setPiece_authoite($d['piece_authoite']);
$this->setLieu_piece($d['lieu_piece']);
$this->setPays_residence($d['pays_residence']);
$this->setVille_residence($d['ville_residence']);
$this->setQuartier($d['quartier']);
$this->setPhone_number_1($d['phone_number_1']);
$this->setPhone_number_2($d['phone_number_2']);
$this->setPhoto($d['photo']);
$this->setEmail_1($d['email_1']);
$this->setEmail_2($d['email_2']);
$this->setLangue($d['langue']);
$this->setModalite($d['modalite']);
$this->setDate_relation($d['date_relation']);
$this->client =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->lieu_naissanc;
                        }
                        
                    }
                    /**
                    * Get the value of nationalite
                    */ 
                    public function getNationalite($nationalite=null)
                    {
                        if ($nationalite != null && is_array($this->client) && count($this->client)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE nationalite = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$nationalite]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_client($d['id_client']);
$this->setType_client($d['type_client']);
$this->setCivilite($d['civilite']);
$this->setNom_client($d['nom_client']);
$this->setPrenom_client($d['prenom_client']);
$this->setNom_jeune_fille($d['nom_jeune_fille']);
$this->setDate_naissance($d['date_naissance']);
$this->setLieu_naissanc($d['lieu_naissanc']);
$this->setNationalite($d['nationalite']);
$this->setSituation_mat($d['situation_mat']);
$this->setRegime_mat($d['regime_mat']);
$this->setNb_enfant($d['nb_enfant']);
$this->setNom_conjoint($d['nom_conjoint']);
$this->setAdresse_post($d['adresse_post']);
$this->setCode_postal($d['code_postal']);
$this->setObservation($d['observation']);
$this->setAdresse_geo($d['adresse_geo']);
$this->setAdresse_pro($d['adresse_pro']);
$this->setType_piece($d['type_piece']);
$this->setNum_piece($d['num_piece']);
$this->setDate_delivrance_piece($d['date_delivrance_piece']);
$this->setDate_fin_piece($d['date_fin_piece']);
$this->setPiece_authoite($d['piece_authoite']);
$this->setLieu_piece($d['lieu_piece']);
$this->setPays_residence($d['pays_residence']);
$this->setVille_residence($d['ville_residence']);
$this->setQuartier($d['quartier']);
$this->setPhone_number_1($d['phone_number_1']);
$this->setPhone_number_2($d['phone_number_2']);
$this->setPhoto($d['photo']);
$this->setEmail_1($d['email_1']);
$this->setEmail_2($d['email_2']);
$this->setLangue($d['langue']);
$this->setModalite($d['modalite']);
$this->setDate_relation($d['date_relation']);
$this->client =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->nationalite;
                        }
                        
                    }
                    /**
                    * Get the value of situation_mat
                    */ 
                    public function getSituation_mat($situation_mat=null)
                    {
                        if ($situation_mat != null && is_array($this->client) && count($this->client)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE situation_mat = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$situation_mat]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_client($d['id_client']);
$this->setType_client($d['type_client']);
$this->setCivilite($d['civilite']);
$this->setNom_client($d['nom_client']);
$this->setPrenom_client($d['prenom_client']);
$this->setNom_jeune_fille($d['nom_jeune_fille']);
$this->setDate_naissance($d['date_naissance']);
$this->setLieu_naissanc($d['lieu_naissanc']);
$this->setNationalite($d['nationalite']);
$this->setSituation_mat($d['situation_mat']);
$this->setRegime_mat($d['regime_mat']);
$this->setNb_enfant($d['nb_enfant']);
$this->setNom_conjoint($d['nom_conjoint']);
$this->setAdresse_post($d['adresse_post']);
$this->setCode_postal($d['code_postal']);
$this->setObservation($d['observation']);
$this->setAdresse_geo($d['adresse_geo']);
$this->setAdresse_pro($d['adresse_pro']);
$this->setType_piece($d['type_piece']);
$this->setNum_piece($d['num_piece']);
$this->setDate_delivrance_piece($d['date_delivrance_piece']);
$this->setDate_fin_piece($d['date_fin_piece']);
$this->setPiece_authoite($d['piece_authoite']);
$this->setLieu_piece($d['lieu_piece']);
$this->setPays_residence($d['pays_residence']);
$this->setVille_residence($d['ville_residence']);
$this->setQuartier($d['quartier']);
$this->setPhone_number_1($d['phone_number_1']);
$this->setPhone_number_2($d['phone_number_2']);
$this->setPhoto($d['photo']);
$this->setEmail_1($d['email_1']);
$this->setEmail_2($d['email_2']);
$this->setLangue($d['langue']);
$this->setModalite($d['modalite']);
$this->setDate_relation($d['date_relation']);
$this->client =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->situation_mat;
                        }
                        
                    }
                    /**
                    * Get the value of regime_mat
                    */ 
                    public function getRegime_mat($regime_mat=null)
                    {
                        if ($regime_mat != null && is_array($this->client) && count($this->client)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE regime_mat = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$regime_mat]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_client($d['id_client']);
$this->setType_client($d['type_client']);
$this->setCivilite($d['civilite']);
$this->setNom_client($d['nom_client']);
$this->setPrenom_client($d['prenom_client']);
$this->setNom_jeune_fille($d['nom_jeune_fille']);
$this->setDate_naissance($d['date_naissance']);
$this->setLieu_naissanc($d['lieu_naissanc']);
$this->setNationalite($d['nationalite']);
$this->setSituation_mat($d['situation_mat']);
$this->setRegime_mat($d['regime_mat']);
$this->setNb_enfant($d['nb_enfant']);
$this->setNom_conjoint($d['nom_conjoint']);
$this->setAdresse_post($d['adresse_post']);
$this->setCode_postal($d['code_postal']);
$this->setObservation($d['observation']);
$this->setAdresse_geo($d['adresse_geo']);
$this->setAdresse_pro($d['adresse_pro']);
$this->setType_piece($d['type_piece']);
$this->setNum_piece($d['num_piece']);
$this->setDate_delivrance_piece($d['date_delivrance_piece']);
$this->setDate_fin_piece($d['date_fin_piece']);
$this->setPiece_authoite($d['piece_authoite']);
$this->setLieu_piece($d['lieu_piece']);
$this->setPays_residence($d['pays_residence']);
$this->setVille_residence($d['ville_residence']);
$this->setQuartier($d['quartier']);
$this->setPhone_number_1($d['phone_number_1']);
$this->setPhone_number_2($d['phone_number_2']);
$this->setPhoto($d['photo']);
$this->setEmail_1($d['email_1']);
$this->setEmail_2($d['email_2']);
$this->setLangue($d['langue']);
$this->setModalite($d['modalite']);
$this->setDate_relation($d['date_relation']);
$this->client =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->regime_mat;
                        }
                        
                    }
                    /**
                    * Get the value of nb_enfant
                    */ 
                    public function getNb_enfant($nb_enfant=null)
                    {
                        if ($nb_enfant != null && is_array($this->client) && count($this->client)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE nb_enfant = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$nb_enfant]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_client($d['id_client']);
$this->setType_client($d['type_client']);
$this->setCivilite($d['civilite']);
$this->setNom_client($d['nom_client']);
$this->setPrenom_client($d['prenom_client']);
$this->setNom_jeune_fille($d['nom_jeune_fille']);
$this->setDate_naissance($d['date_naissance']);
$this->setLieu_naissanc($d['lieu_naissanc']);
$this->setNationalite($d['nationalite']);
$this->setSituation_mat($d['situation_mat']);
$this->setRegime_mat($d['regime_mat']);
$this->setNb_enfant($d['nb_enfant']);
$this->setNom_conjoint($d['nom_conjoint']);
$this->setAdresse_post($d['adresse_post']);
$this->setCode_postal($d['code_postal']);
$this->setObservation($d['observation']);
$this->setAdresse_geo($d['adresse_geo']);
$this->setAdresse_pro($d['adresse_pro']);
$this->setType_piece($d['type_piece']);
$this->setNum_piece($d['num_piece']);
$this->setDate_delivrance_piece($d['date_delivrance_piece']);
$this->setDate_fin_piece($d['date_fin_piece']);
$this->setPiece_authoite($d['piece_authoite']);
$this->setLieu_piece($d['lieu_piece']);
$this->setPays_residence($d['pays_residence']);
$this->setVille_residence($d['ville_residence']);
$this->setQuartier($d['quartier']);
$this->setPhone_number_1($d['phone_number_1']);
$this->setPhone_number_2($d['phone_number_2']);
$this->setPhoto($d['photo']);
$this->setEmail_1($d['email_1']);
$this->setEmail_2($d['email_2']);
$this->setLangue($d['langue']);
$this->setModalite($d['modalite']);
$this->setDate_relation($d['date_relation']);
$this->client =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->nb_enfant;
                        }
                        
                    }
                    /**
                    * Get the value of nom_conjoint
                    */ 
                    public function getNom_conjoint($nom_conjoint=null)
                    {
                        if ($nom_conjoint != null && is_array($this->client) && count($this->client)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE nom_conjoint = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$nom_conjoint]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_client($d['id_client']);
$this->setType_client($d['type_client']);
$this->setCivilite($d['civilite']);
$this->setNom_client($d['nom_client']);
$this->setPrenom_client($d['prenom_client']);
$this->setNom_jeune_fille($d['nom_jeune_fille']);
$this->setDate_naissance($d['date_naissance']);
$this->setLieu_naissanc($d['lieu_naissanc']);
$this->setNationalite($d['nationalite']);
$this->setSituation_mat($d['situation_mat']);
$this->setRegime_mat($d['regime_mat']);
$this->setNb_enfant($d['nb_enfant']);
$this->setNom_conjoint($d['nom_conjoint']);
$this->setAdresse_post($d['adresse_post']);
$this->setCode_postal($d['code_postal']);
$this->setObservation($d['observation']);
$this->setAdresse_geo($d['adresse_geo']);
$this->setAdresse_pro($d['adresse_pro']);
$this->setType_piece($d['type_piece']);
$this->setNum_piece($d['num_piece']);
$this->setDate_delivrance_piece($d['date_delivrance_piece']);
$this->setDate_fin_piece($d['date_fin_piece']);
$this->setPiece_authoite($d['piece_authoite']);
$this->setLieu_piece($d['lieu_piece']);
$this->setPays_residence($d['pays_residence']);
$this->setVille_residence($d['ville_residence']);
$this->setQuartier($d['quartier']);
$this->setPhone_number_1($d['phone_number_1']);
$this->setPhone_number_2($d['phone_number_2']);
$this->setPhoto($d['photo']);
$this->setEmail_1($d['email_1']);
$this->setEmail_2($d['email_2']);
$this->setLangue($d['langue']);
$this->setModalite($d['modalite']);
$this->setDate_relation($d['date_relation']);
$this->client =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->nom_conjoint;
                        }
                        
                    }
                    /**
                    * Get the value of adresse_post
                    */ 
                    public function getAdresse_post($adresse_post=null)
                    {
                        if ($adresse_post != null && is_array($this->client) && count($this->client)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE adresse_post = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$adresse_post]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_client($d['id_client']);
$this->setType_client($d['type_client']);
$this->setCivilite($d['civilite']);
$this->setNom_client($d['nom_client']);
$this->setPrenom_client($d['prenom_client']);
$this->setNom_jeune_fille($d['nom_jeune_fille']);
$this->setDate_naissance($d['date_naissance']);
$this->setLieu_naissanc($d['lieu_naissanc']);
$this->setNationalite($d['nationalite']);
$this->setSituation_mat($d['situation_mat']);
$this->setRegime_mat($d['regime_mat']);
$this->setNb_enfant($d['nb_enfant']);
$this->setNom_conjoint($d['nom_conjoint']);
$this->setAdresse_post($d['adresse_post']);
$this->setCode_postal($d['code_postal']);
$this->setObservation($d['observation']);
$this->setAdresse_geo($d['adresse_geo']);
$this->setAdresse_pro($d['adresse_pro']);
$this->setType_piece($d['type_piece']);
$this->setNum_piece($d['num_piece']);
$this->setDate_delivrance_piece($d['date_delivrance_piece']);
$this->setDate_fin_piece($d['date_fin_piece']);
$this->setPiece_authoite($d['piece_authoite']);
$this->setLieu_piece($d['lieu_piece']);
$this->setPays_residence($d['pays_residence']);
$this->setVille_residence($d['ville_residence']);
$this->setQuartier($d['quartier']);
$this->setPhone_number_1($d['phone_number_1']);
$this->setPhone_number_2($d['phone_number_2']);
$this->setPhoto($d['photo']);
$this->setEmail_1($d['email_1']);
$this->setEmail_2($d['email_2']);
$this->setLangue($d['langue']);
$this->setModalite($d['modalite']);
$this->setDate_relation($d['date_relation']);
$this->client =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->adresse_post;
                        }
                        
                    }
                    /**
                    * Get the value of code_postal
                    */ 
                    public function getCode_postal($code_postal=null)
                    {
                        if ($code_postal != null && is_array($this->client) && count($this->client)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE code_postal = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$code_postal]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_client($d['id_client']);
$this->setType_client($d['type_client']);
$this->setCivilite($d['civilite']);
$this->setNom_client($d['nom_client']);
$this->setPrenom_client($d['prenom_client']);
$this->setNom_jeune_fille($d['nom_jeune_fille']);
$this->setDate_naissance($d['date_naissance']);
$this->setLieu_naissanc($d['lieu_naissanc']);
$this->setNationalite($d['nationalite']);
$this->setSituation_mat($d['situation_mat']);
$this->setRegime_mat($d['regime_mat']);
$this->setNb_enfant($d['nb_enfant']);
$this->setNom_conjoint($d['nom_conjoint']);
$this->setAdresse_post($d['adresse_post']);
$this->setCode_postal($d['code_postal']);
$this->setObservation($d['observation']);
$this->setAdresse_geo($d['adresse_geo']);
$this->setAdresse_pro($d['adresse_pro']);
$this->setType_piece($d['type_piece']);
$this->setNum_piece($d['num_piece']);
$this->setDate_delivrance_piece($d['date_delivrance_piece']);
$this->setDate_fin_piece($d['date_fin_piece']);
$this->setPiece_authoite($d['piece_authoite']);
$this->setLieu_piece($d['lieu_piece']);
$this->setPays_residence($d['pays_residence']);
$this->setVille_residence($d['ville_residence']);
$this->setQuartier($d['quartier']);
$this->setPhone_number_1($d['phone_number_1']);
$this->setPhone_number_2($d['phone_number_2']);
$this->setPhoto($d['photo']);
$this->setEmail_1($d['email_1']);
$this->setEmail_2($d['email_2']);
$this->setLangue($d['langue']);
$this->setModalite($d['modalite']);
$this->setDate_relation($d['date_relation']);
$this->client =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->code_postal;
                        }
                        
                    }
                    /**
                    * Get the value of observation
                    */ 
                    public function getObservation($observation=null)
                    {
                        if ($observation != null && is_array($this->client) && count($this->client)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE observation = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$observation]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_client($d['id_client']);
$this->setType_client($d['type_client']);
$this->setCivilite($d['civilite']);
$this->setNom_client($d['nom_client']);
$this->setPrenom_client($d['prenom_client']);
$this->setNom_jeune_fille($d['nom_jeune_fille']);
$this->setDate_naissance($d['date_naissance']);
$this->setLieu_naissanc($d['lieu_naissanc']);
$this->setNationalite($d['nationalite']);
$this->setSituation_mat($d['situation_mat']);
$this->setRegime_mat($d['regime_mat']);
$this->setNb_enfant($d['nb_enfant']);
$this->setNom_conjoint($d['nom_conjoint']);
$this->setAdresse_post($d['adresse_post']);
$this->setCode_postal($d['code_postal']);
$this->setObservation($d['observation']);
$this->setAdresse_geo($d['adresse_geo']);
$this->setAdresse_pro($d['adresse_pro']);
$this->setType_piece($d['type_piece']);
$this->setNum_piece($d['num_piece']);
$this->setDate_delivrance_piece($d['date_delivrance_piece']);
$this->setDate_fin_piece($d['date_fin_piece']);
$this->setPiece_authoite($d['piece_authoite']);
$this->setLieu_piece($d['lieu_piece']);
$this->setPays_residence($d['pays_residence']);
$this->setVille_residence($d['ville_residence']);
$this->setQuartier($d['quartier']);
$this->setPhone_number_1($d['phone_number_1']);
$this->setPhone_number_2($d['phone_number_2']);
$this->setPhoto($d['photo']);
$this->setEmail_1($d['email_1']);
$this->setEmail_2($d['email_2']);
$this->setLangue($d['langue']);
$this->setModalite($d['modalite']);
$this->setDate_relation($d['date_relation']);
$this->client =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->observation;
                        }
                        
                    }
                    /**
                    * Get the value of adresse_geo
                    */ 
                    public function getAdresse_geo($adresse_geo=null)
                    {
                        if ($adresse_geo != null && is_array($this->client) && count($this->client)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE adresse_geo = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$adresse_geo]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_client($d['id_client']);
$this->setType_client($d['type_client']);
$this->setCivilite($d['civilite']);
$this->setNom_client($d['nom_client']);
$this->setPrenom_client($d['prenom_client']);
$this->setNom_jeune_fille($d['nom_jeune_fille']);
$this->setDate_naissance($d['date_naissance']);
$this->setLieu_naissanc($d['lieu_naissanc']);
$this->setNationalite($d['nationalite']);
$this->setSituation_mat($d['situation_mat']);
$this->setRegime_mat($d['regime_mat']);
$this->setNb_enfant($d['nb_enfant']);
$this->setNom_conjoint($d['nom_conjoint']);
$this->setAdresse_post($d['adresse_post']);
$this->setCode_postal($d['code_postal']);
$this->setObservation($d['observation']);
$this->setAdresse_geo($d['adresse_geo']);
$this->setAdresse_pro($d['adresse_pro']);
$this->setType_piece($d['type_piece']);
$this->setNum_piece($d['num_piece']);
$this->setDate_delivrance_piece($d['date_delivrance_piece']);
$this->setDate_fin_piece($d['date_fin_piece']);
$this->setPiece_authoite($d['piece_authoite']);
$this->setLieu_piece($d['lieu_piece']);
$this->setPays_residence($d['pays_residence']);
$this->setVille_residence($d['ville_residence']);
$this->setQuartier($d['quartier']);
$this->setPhone_number_1($d['phone_number_1']);
$this->setPhone_number_2($d['phone_number_2']);
$this->setPhoto($d['photo']);
$this->setEmail_1($d['email_1']);
$this->setEmail_2($d['email_2']);
$this->setLangue($d['langue']);
$this->setModalite($d['modalite']);
$this->setDate_relation($d['date_relation']);
$this->client =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->adresse_geo;
                        }
                        
                    }
                    /**
                    * Get the value of adresse_pro
                    */ 
                    public function getAdresse_pro($adresse_pro=null)
                    {
                        if ($adresse_pro != null && is_array($this->client) && count($this->client)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE adresse_pro = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$adresse_pro]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_client($d['id_client']);
$this->setType_client($d['type_client']);
$this->setCivilite($d['civilite']);
$this->setNom_client($d['nom_client']);
$this->setPrenom_client($d['prenom_client']);
$this->setNom_jeune_fille($d['nom_jeune_fille']);
$this->setDate_naissance($d['date_naissance']);
$this->setLieu_naissanc($d['lieu_naissanc']);
$this->setNationalite($d['nationalite']);
$this->setSituation_mat($d['situation_mat']);
$this->setRegime_mat($d['regime_mat']);
$this->setNb_enfant($d['nb_enfant']);
$this->setNom_conjoint($d['nom_conjoint']);
$this->setAdresse_post($d['adresse_post']);
$this->setCode_postal($d['code_postal']);
$this->setObservation($d['observation']);
$this->setAdresse_geo($d['adresse_geo']);
$this->setAdresse_pro($d['adresse_pro']);
$this->setType_piece($d['type_piece']);
$this->setNum_piece($d['num_piece']);
$this->setDate_delivrance_piece($d['date_delivrance_piece']);
$this->setDate_fin_piece($d['date_fin_piece']);
$this->setPiece_authoite($d['piece_authoite']);
$this->setLieu_piece($d['lieu_piece']);
$this->setPays_residence($d['pays_residence']);
$this->setVille_residence($d['ville_residence']);
$this->setQuartier($d['quartier']);
$this->setPhone_number_1($d['phone_number_1']);
$this->setPhone_number_2($d['phone_number_2']);
$this->setPhoto($d['photo']);
$this->setEmail_1($d['email_1']);
$this->setEmail_2($d['email_2']);
$this->setLangue($d['langue']);
$this->setModalite($d['modalite']);
$this->setDate_relation($d['date_relation']);
$this->client =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->adresse_pro;
                        }
                        
                    }
                    /**
                    * Get the value of type_piece
                    */ 
                    public function getType_piece($type_piece=null)
                    {
                        if ($type_piece != null && is_array($this->client) && count($this->client)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE type_piece = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$type_piece]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_client($d['id_client']);
$this->setType_client($d['type_client']);
$this->setCivilite($d['civilite']);
$this->setNom_client($d['nom_client']);
$this->setPrenom_client($d['prenom_client']);
$this->setNom_jeune_fille($d['nom_jeune_fille']);
$this->setDate_naissance($d['date_naissance']);
$this->setLieu_naissanc($d['lieu_naissanc']);
$this->setNationalite($d['nationalite']);
$this->setSituation_mat($d['situation_mat']);
$this->setRegime_mat($d['regime_mat']);
$this->setNb_enfant($d['nb_enfant']);
$this->setNom_conjoint($d['nom_conjoint']);
$this->setAdresse_post($d['adresse_post']);
$this->setCode_postal($d['code_postal']);
$this->setObservation($d['observation']);
$this->setAdresse_geo($d['adresse_geo']);
$this->setAdresse_pro($d['adresse_pro']);
$this->setType_piece($d['type_piece']);
$this->setNum_piece($d['num_piece']);
$this->setDate_delivrance_piece($d['date_delivrance_piece']);
$this->setDate_fin_piece($d['date_fin_piece']);
$this->setPiece_authoite($d['piece_authoite']);
$this->setLieu_piece($d['lieu_piece']);
$this->setPays_residence($d['pays_residence']);
$this->setVille_residence($d['ville_residence']);
$this->setQuartier($d['quartier']);
$this->setPhone_number_1($d['phone_number_1']);
$this->setPhone_number_2($d['phone_number_2']);
$this->setPhoto($d['photo']);
$this->setEmail_1($d['email_1']);
$this->setEmail_2($d['email_2']);
$this->setLangue($d['langue']);
$this->setModalite($d['modalite']);
$this->setDate_relation($d['date_relation']);
$this->client =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->type_piece;
                        }
                        
                    }
                    /**
                    * Get the value of num_piece
                    */ 
                    public function getNum_piece($num_piece=null)
                    {
                        if ($num_piece != null && is_array($this->client) && count($this->client)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE num_piece = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$num_piece]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_client($d['id_client']);
$this->setType_client($d['type_client']);
$this->setCivilite($d['civilite']);
$this->setNom_client($d['nom_client']);
$this->setPrenom_client($d['prenom_client']);
$this->setNom_jeune_fille($d['nom_jeune_fille']);
$this->setDate_naissance($d['date_naissance']);
$this->setLieu_naissanc($d['lieu_naissanc']);
$this->setNationalite($d['nationalite']);
$this->setSituation_mat($d['situation_mat']);
$this->setRegime_mat($d['regime_mat']);
$this->setNb_enfant($d['nb_enfant']);
$this->setNom_conjoint($d['nom_conjoint']);
$this->setAdresse_post($d['adresse_post']);
$this->setCode_postal($d['code_postal']);
$this->setObservation($d['observation']);
$this->setAdresse_geo($d['adresse_geo']);
$this->setAdresse_pro($d['adresse_pro']);
$this->setType_piece($d['type_piece']);
$this->setNum_piece($d['num_piece']);
$this->setDate_delivrance_piece($d['date_delivrance_piece']);
$this->setDate_fin_piece($d['date_fin_piece']);
$this->setPiece_authoite($d['piece_authoite']);
$this->setLieu_piece($d['lieu_piece']);
$this->setPays_residence($d['pays_residence']);
$this->setVille_residence($d['ville_residence']);
$this->setQuartier($d['quartier']);
$this->setPhone_number_1($d['phone_number_1']);
$this->setPhone_number_2($d['phone_number_2']);
$this->setPhoto($d['photo']);
$this->setEmail_1($d['email_1']);
$this->setEmail_2($d['email_2']);
$this->setLangue($d['langue']);
$this->setModalite($d['modalite']);
$this->setDate_relation($d['date_relation']);
$this->client =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->num_piece;
                        }
                        
                    }
                    /**
                    * Get the value of date_delivrance_piece
                    */ 
                    public function getDate_delivrance_piece($date_delivrance_piece=null)
                    {
                        if ($date_delivrance_piece != null && is_array($this->client) && count($this->client)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE date_delivrance_piece = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$date_delivrance_piece]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_client($d['id_client']);
$this->setType_client($d['type_client']);
$this->setCivilite($d['civilite']);
$this->setNom_client($d['nom_client']);
$this->setPrenom_client($d['prenom_client']);
$this->setNom_jeune_fille($d['nom_jeune_fille']);
$this->setDate_naissance($d['date_naissance']);
$this->setLieu_naissanc($d['lieu_naissanc']);
$this->setNationalite($d['nationalite']);
$this->setSituation_mat($d['situation_mat']);
$this->setRegime_mat($d['regime_mat']);
$this->setNb_enfant($d['nb_enfant']);
$this->setNom_conjoint($d['nom_conjoint']);
$this->setAdresse_post($d['adresse_post']);
$this->setCode_postal($d['code_postal']);
$this->setObservation($d['observation']);
$this->setAdresse_geo($d['adresse_geo']);
$this->setAdresse_pro($d['adresse_pro']);
$this->setType_piece($d['type_piece']);
$this->setNum_piece($d['num_piece']);
$this->setDate_delivrance_piece($d['date_delivrance_piece']);
$this->setDate_fin_piece($d['date_fin_piece']);
$this->setPiece_authoite($d['piece_authoite']);
$this->setLieu_piece($d['lieu_piece']);
$this->setPays_residence($d['pays_residence']);
$this->setVille_residence($d['ville_residence']);
$this->setQuartier($d['quartier']);
$this->setPhone_number_1($d['phone_number_1']);
$this->setPhone_number_2($d['phone_number_2']);
$this->setPhoto($d['photo']);
$this->setEmail_1($d['email_1']);
$this->setEmail_2($d['email_2']);
$this->setLangue($d['langue']);
$this->setModalite($d['modalite']);
$this->setDate_relation($d['date_relation']);
$this->client =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->date_delivrance_piece;
                        }
                        
                    }
                    /**
                    * Get the value of date_fin_piece
                    */ 
                    public function getDate_fin_piece($date_fin_piece=null)
                    {
                        if ($date_fin_piece != null && is_array($this->client) && count($this->client)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE date_fin_piece = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$date_fin_piece]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_client($d['id_client']);
$this->setType_client($d['type_client']);
$this->setCivilite($d['civilite']);
$this->setNom_client($d['nom_client']);
$this->setPrenom_client($d['prenom_client']);
$this->setNom_jeune_fille($d['nom_jeune_fille']);
$this->setDate_naissance($d['date_naissance']);
$this->setLieu_naissanc($d['lieu_naissanc']);
$this->setNationalite($d['nationalite']);
$this->setSituation_mat($d['situation_mat']);
$this->setRegime_mat($d['regime_mat']);
$this->setNb_enfant($d['nb_enfant']);
$this->setNom_conjoint($d['nom_conjoint']);
$this->setAdresse_post($d['adresse_post']);
$this->setCode_postal($d['code_postal']);
$this->setObservation($d['observation']);
$this->setAdresse_geo($d['adresse_geo']);
$this->setAdresse_pro($d['adresse_pro']);
$this->setType_piece($d['type_piece']);
$this->setNum_piece($d['num_piece']);
$this->setDate_delivrance_piece($d['date_delivrance_piece']);
$this->setDate_fin_piece($d['date_fin_piece']);
$this->setPiece_authoite($d['piece_authoite']);
$this->setLieu_piece($d['lieu_piece']);
$this->setPays_residence($d['pays_residence']);
$this->setVille_residence($d['ville_residence']);
$this->setQuartier($d['quartier']);
$this->setPhone_number_1($d['phone_number_1']);
$this->setPhone_number_2($d['phone_number_2']);
$this->setPhoto($d['photo']);
$this->setEmail_1($d['email_1']);
$this->setEmail_2($d['email_2']);
$this->setLangue($d['langue']);
$this->setModalite($d['modalite']);
$this->setDate_relation($d['date_relation']);
$this->client =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->date_fin_piece;
                        }
                        
                    }
                    /**
                    * Get the value of piece_authoite
                    */ 
                    public function getPiece_authoite($piece_authoite=null)
                    {
                        if ($piece_authoite != null && is_array($this->client) && count($this->client)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE piece_authoite = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$piece_authoite]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_client($d['id_client']);
$this->setType_client($d['type_client']);
$this->setCivilite($d['civilite']);
$this->setNom_client($d['nom_client']);
$this->setPrenom_client($d['prenom_client']);
$this->setNom_jeune_fille($d['nom_jeune_fille']);
$this->setDate_naissance($d['date_naissance']);
$this->setLieu_naissanc($d['lieu_naissanc']);
$this->setNationalite($d['nationalite']);
$this->setSituation_mat($d['situation_mat']);
$this->setRegime_mat($d['regime_mat']);
$this->setNb_enfant($d['nb_enfant']);
$this->setNom_conjoint($d['nom_conjoint']);
$this->setAdresse_post($d['adresse_post']);
$this->setCode_postal($d['code_postal']);
$this->setObservation($d['observation']);
$this->setAdresse_geo($d['adresse_geo']);
$this->setAdresse_pro($d['adresse_pro']);
$this->setType_piece($d['type_piece']);
$this->setNum_piece($d['num_piece']);
$this->setDate_delivrance_piece($d['date_delivrance_piece']);
$this->setDate_fin_piece($d['date_fin_piece']);
$this->setPiece_authoite($d['piece_authoite']);
$this->setLieu_piece($d['lieu_piece']);
$this->setPays_residence($d['pays_residence']);
$this->setVille_residence($d['ville_residence']);
$this->setQuartier($d['quartier']);
$this->setPhone_number_1($d['phone_number_1']);
$this->setPhone_number_2($d['phone_number_2']);
$this->setPhoto($d['photo']);
$this->setEmail_1($d['email_1']);
$this->setEmail_2($d['email_2']);
$this->setLangue($d['langue']);
$this->setModalite($d['modalite']);
$this->setDate_relation($d['date_relation']);
$this->client =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->piece_authoite;
                        }
                        
                    }
                    /**
                    * Get the value of lieu_piece
                    */ 
                    public function getLieu_piece($lieu_piece=null)
                    {
                        if ($lieu_piece != null && is_array($this->client) && count($this->client)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE lieu_piece = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$lieu_piece]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_client($d['id_client']);
$this->setType_client($d['type_client']);
$this->setCivilite($d['civilite']);
$this->setNom_client($d['nom_client']);
$this->setPrenom_client($d['prenom_client']);
$this->setNom_jeune_fille($d['nom_jeune_fille']);
$this->setDate_naissance($d['date_naissance']);
$this->setLieu_naissanc($d['lieu_naissanc']);
$this->setNationalite($d['nationalite']);
$this->setSituation_mat($d['situation_mat']);
$this->setRegime_mat($d['regime_mat']);
$this->setNb_enfant($d['nb_enfant']);
$this->setNom_conjoint($d['nom_conjoint']);
$this->setAdresse_post($d['adresse_post']);
$this->setCode_postal($d['code_postal']);
$this->setObservation($d['observation']);
$this->setAdresse_geo($d['adresse_geo']);
$this->setAdresse_pro($d['adresse_pro']);
$this->setType_piece($d['type_piece']);
$this->setNum_piece($d['num_piece']);
$this->setDate_delivrance_piece($d['date_delivrance_piece']);
$this->setDate_fin_piece($d['date_fin_piece']);
$this->setPiece_authoite($d['piece_authoite']);
$this->setLieu_piece($d['lieu_piece']);
$this->setPays_residence($d['pays_residence']);
$this->setVille_residence($d['ville_residence']);
$this->setQuartier($d['quartier']);
$this->setPhone_number_1($d['phone_number_1']);
$this->setPhone_number_2($d['phone_number_2']);
$this->setPhoto($d['photo']);
$this->setEmail_1($d['email_1']);
$this->setEmail_2($d['email_2']);
$this->setLangue($d['langue']);
$this->setModalite($d['modalite']);
$this->setDate_relation($d['date_relation']);
$this->client =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->lieu_piece;
                        }
                        
                    }
                    /**
                    * Get the value of pays_residence
                    */ 
                    public function getPays_residence($pays_residence=null)
                    {
                        if ($pays_residence != null && is_array($this->client) && count($this->client)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE pays_residence = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$pays_residence]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_client($d['id_client']);
$this->setType_client($d['type_client']);
$this->setCivilite($d['civilite']);
$this->setNom_client($d['nom_client']);
$this->setPrenom_client($d['prenom_client']);
$this->setNom_jeune_fille($d['nom_jeune_fille']);
$this->setDate_naissance($d['date_naissance']);
$this->setLieu_naissanc($d['lieu_naissanc']);
$this->setNationalite($d['nationalite']);
$this->setSituation_mat($d['situation_mat']);
$this->setRegime_mat($d['regime_mat']);
$this->setNb_enfant($d['nb_enfant']);
$this->setNom_conjoint($d['nom_conjoint']);
$this->setAdresse_post($d['adresse_post']);
$this->setCode_postal($d['code_postal']);
$this->setObservation($d['observation']);
$this->setAdresse_geo($d['adresse_geo']);
$this->setAdresse_pro($d['adresse_pro']);
$this->setType_piece($d['type_piece']);
$this->setNum_piece($d['num_piece']);
$this->setDate_delivrance_piece($d['date_delivrance_piece']);
$this->setDate_fin_piece($d['date_fin_piece']);
$this->setPiece_authoite($d['piece_authoite']);
$this->setLieu_piece($d['lieu_piece']);
$this->setPays_residence($d['pays_residence']);
$this->setVille_residence($d['ville_residence']);
$this->setQuartier($d['quartier']);
$this->setPhone_number_1($d['phone_number_1']);
$this->setPhone_number_2($d['phone_number_2']);
$this->setPhoto($d['photo']);
$this->setEmail_1($d['email_1']);
$this->setEmail_2($d['email_2']);
$this->setLangue($d['langue']);
$this->setModalite($d['modalite']);
$this->setDate_relation($d['date_relation']);
$this->client =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->pays_residence;
                        }
                        
                    }
                    /**
                    * Get the value of ville_residence
                    */ 
                    public function getVille_residence($ville_residence=null)
                    {
                        if ($ville_residence != null && is_array($this->client) && count($this->client)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE ville_residence = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$ville_residence]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_client($d['id_client']);
$this->setType_client($d['type_client']);
$this->setCivilite($d['civilite']);
$this->setNom_client($d['nom_client']);
$this->setPrenom_client($d['prenom_client']);
$this->setNom_jeune_fille($d['nom_jeune_fille']);
$this->setDate_naissance($d['date_naissance']);
$this->setLieu_naissanc($d['lieu_naissanc']);
$this->setNationalite($d['nationalite']);
$this->setSituation_mat($d['situation_mat']);
$this->setRegime_mat($d['regime_mat']);
$this->setNb_enfant($d['nb_enfant']);
$this->setNom_conjoint($d['nom_conjoint']);
$this->setAdresse_post($d['adresse_post']);
$this->setCode_postal($d['code_postal']);
$this->setObservation($d['observation']);
$this->setAdresse_geo($d['adresse_geo']);
$this->setAdresse_pro($d['adresse_pro']);
$this->setType_piece($d['type_piece']);
$this->setNum_piece($d['num_piece']);
$this->setDate_delivrance_piece($d['date_delivrance_piece']);
$this->setDate_fin_piece($d['date_fin_piece']);
$this->setPiece_authoite($d['piece_authoite']);
$this->setLieu_piece($d['lieu_piece']);
$this->setPays_residence($d['pays_residence']);
$this->setVille_residence($d['ville_residence']);
$this->setQuartier($d['quartier']);
$this->setPhone_number_1($d['phone_number_1']);
$this->setPhone_number_2($d['phone_number_2']);
$this->setPhoto($d['photo']);
$this->setEmail_1($d['email_1']);
$this->setEmail_2($d['email_2']);
$this->setLangue($d['langue']);
$this->setModalite($d['modalite']);
$this->setDate_relation($d['date_relation']);
$this->client =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->ville_residence;
                        }
                        
                    }
                    /**
                    * Get the value of quartier
                    */ 
                    public function getQuartier($quartier=null)
                    {
                        if ($quartier != null && is_array($this->client) && count($this->client)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE quartier = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$quartier]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_client($d['id_client']);
$this->setType_client($d['type_client']);
$this->setCivilite($d['civilite']);
$this->setNom_client($d['nom_client']);
$this->setPrenom_client($d['prenom_client']);
$this->setNom_jeune_fille($d['nom_jeune_fille']);
$this->setDate_naissance($d['date_naissance']);
$this->setLieu_naissanc($d['lieu_naissanc']);
$this->setNationalite($d['nationalite']);
$this->setSituation_mat($d['situation_mat']);
$this->setRegime_mat($d['regime_mat']);
$this->setNb_enfant($d['nb_enfant']);
$this->setNom_conjoint($d['nom_conjoint']);
$this->setAdresse_post($d['adresse_post']);
$this->setCode_postal($d['code_postal']);
$this->setObservation($d['observation']);
$this->setAdresse_geo($d['adresse_geo']);
$this->setAdresse_pro($d['adresse_pro']);
$this->setType_piece($d['type_piece']);
$this->setNum_piece($d['num_piece']);
$this->setDate_delivrance_piece($d['date_delivrance_piece']);
$this->setDate_fin_piece($d['date_fin_piece']);
$this->setPiece_authoite($d['piece_authoite']);
$this->setLieu_piece($d['lieu_piece']);
$this->setPays_residence($d['pays_residence']);
$this->setVille_residence($d['ville_residence']);
$this->setQuartier($d['quartier']);
$this->setPhone_number_1($d['phone_number_1']);
$this->setPhone_number_2($d['phone_number_2']);
$this->setPhoto($d['photo']);
$this->setEmail_1($d['email_1']);
$this->setEmail_2($d['email_2']);
$this->setLangue($d['langue']);
$this->setModalite($d['modalite']);
$this->setDate_relation($d['date_relation']);
$this->client =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->quartier;
                        }
                        
                    }
                    /**
                    * Get the value of phone_number_1
                    */ 
                    public function getPhone_number_1($phone_number_1=null)
                    {
                        if ($phone_number_1 != null && is_array($this->client) && count($this->client)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE phone_number_1 = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$phone_number_1]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_client($d['id_client']);
$this->setType_client($d['type_client']);
$this->setCivilite($d['civilite']);
$this->setNom_client($d['nom_client']);
$this->setPrenom_client($d['prenom_client']);
$this->setNom_jeune_fille($d['nom_jeune_fille']);
$this->setDate_naissance($d['date_naissance']);
$this->setLieu_naissanc($d['lieu_naissanc']);
$this->setNationalite($d['nationalite']);
$this->setSituation_mat($d['situation_mat']);
$this->setRegime_mat($d['regime_mat']);
$this->setNb_enfant($d['nb_enfant']);
$this->setNom_conjoint($d['nom_conjoint']);
$this->setAdresse_post($d['adresse_post']);
$this->setCode_postal($d['code_postal']);
$this->setObservation($d['observation']);
$this->setAdresse_geo($d['adresse_geo']);
$this->setAdresse_pro($d['adresse_pro']);
$this->setType_piece($d['type_piece']);
$this->setNum_piece($d['num_piece']);
$this->setDate_delivrance_piece($d['date_delivrance_piece']);
$this->setDate_fin_piece($d['date_fin_piece']);
$this->setPiece_authoite($d['piece_authoite']);
$this->setLieu_piece($d['lieu_piece']);
$this->setPays_residence($d['pays_residence']);
$this->setVille_residence($d['ville_residence']);
$this->setQuartier($d['quartier']);
$this->setPhone_number_1($d['phone_number_1']);
$this->setPhone_number_2($d['phone_number_2']);
$this->setPhoto($d['photo']);
$this->setEmail_1($d['email_1']);
$this->setEmail_2($d['email_2']);
$this->setLangue($d['langue']);
$this->setModalite($d['modalite']);
$this->setDate_relation($d['date_relation']);
$this->client =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->phone_number_1;
                        }
                        
                    }
                    /**
                    * Get the value of phone_number_2
                    */ 
                    public function getPhone_number_2($phone_number_2=null)
                    {
                        if ($phone_number_2 != null && is_array($this->client) && count($this->client)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE phone_number_2 = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$phone_number_2]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_client($d['id_client']);
$this->setType_client($d['type_client']);
$this->setCivilite($d['civilite']);
$this->setNom_client($d['nom_client']);
$this->setPrenom_client($d['prenom_client']);
$this->setNom_jeune_fille($d['nom_jeune_fille']);
$this->setDate_naissance($d['date_naissance']);
$this->setLieu_naissanc($d['lieu_naissanc']);
$this->setNationalite($d['nationalite']);
$this->setSituation_mat($d['situation_mat']);
$this->setRegime_mat($d['regime_mat']);
$this->setNb_enfant($d['nb_enfant']);
$this->setNom_conjoint($d['nom_conjoint']);
$this->setAdresse_post($d['adresse_post']);
$this->setCode_postal($d['code_postal']);
$this->setObservation($d['observation']);
$this->setAdresse_geo($d['adresse_geo']);
$this->setAdresse_pro($d['adresse_pro']);
$this->setType_piece($d['type_piece']);
$this->setNum_piece($d['num_piece']);
$this->setDate_delivrance_piece($d['date_delivrance_piece']);
$this->setDate_fin_piece($d['date_fin_piece']);
$this->setPiece_authoite($d['piece_authoite']);
$this->setLieu_piece($d['lieu_piece']);
$this->setPays_residence($d['pays_residence']);
$this->setVille_residence($d['ville_residence']);
$this->setQuartier($d['quartier']);
$this->setPhone_number_1($d['phone_number_1']);
$this->setPhone_number_2($d['phone_number_2']);
$this->setPhoto($d['photo']);
$this->setEmail_1($d['email_1']);
$this->setEmail_2($d['email_2']);
$this->setLangue($d['langue']);
$this->setModalite($d['modalite']);
$this->setDate_relation($d['date_relation']);
$this->client =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->phone_number_2;
                        }
                        
                    }
                    /**
                    * Get the value of photo
                    */ 
                    public function getPhoto($photo=null)
                    {
                        if ($photo != null && is_array($this->client) && count($this->client)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE photo = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$photo]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_client($d['id_client']);
$this->setType_client($d['type_client']);
$this->setCivilite($d['civilite']);
$this->setNom_client($d['nom_client']);
$this->setPrenom_client($d['prenom_client']);
$this->setNom_jeune_fille($d['nom_jeune_fille']);
$this->setDate_naissance($d['date_naissance']);
$this->setLieu_naissanc($d['lieu_naissanc']);
$this->setNationalite($d['nationalite']);
$this->setSituation_mat($d['situation_mat']);
$this->setRegime_mat($d['regime_mat']);
$this->setNb_enfant($d['nb_enfant']);
$this->setNom_conjoint($d['nom_conjoint']);
$this->setAdresse_post($d['adresse_post']);
$this->setCode_postal($d['code_postal']);
$this->setObservation($d['observation']);
$this->setAdresse_geo($d['adresse_geo']);
$this->setAdresse_pro($d['adresse_pro']);
$this->setType_piece($d['type_piece']);
$this->setNum_piece($d['num_piece']);
$this->setDate_delivrance_piece($d['date_delivrance_piece']);
$this->setDate_fin_piece($d['date_fin_piece']);
$this->setPiece_authoite($d['piece_authoite']);
$this->setLieu_piece($d['lieu_piece']);
$this->setPays_residence($d['pays_residence']);
$this->setVille_residence($d['ville_residence']);
$this->setQuartier($d['quartier']);
$this->setPhone_number_1($d['phone_number_1']);
$this->setPhone_number_2($d['phone_number_2']);
$this->setPhoto($d['photo']);
$this->setEmail_1($d['email_1']);
$this->setEmail_2($d['email_2']);
$this->setLangue($d['langue']);
$this->setModalite($d['modalite']);
$this->setDate_relation($d['date_relation']);
$this->client =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->photo;
                        }
                        
                    }
                    /**
                    * Get the value of email_1
                    */ 
                    public function getEmail_1($email_1=null)
                    {
                        if ($email_1 != null && is_array($this->client) && count($this->client)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE email_1 = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$email_1]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_client($d['id_client']);
$this->setType_client($d['type_client']);
$this->setCivilite($d['civilite']);
$this->setNom_client($d['nom_client']);
$this->setPrenom_client($d['prenom_client']);
$this->setNom_jeune_fille($d['nom_jeune_fille']);
$this->setDate_naissance($d['date_naissance']);
$this->setLieu_naissanc($d['lieu_naissanc']);
$this->setNationalite($d['nationalite']);
$this->setSituation_mat($d['situation_mat']);
$this->setRegime_mat($d['regime_mat']);
$this->setNb_enfant($d['nb_enfant']);
$this->setNom_conjoint($d['nom_conjoint']);
$this->setAdresse_post($d['adresse_post']);
$this->setCode_postal($d['code_postal']);
$this->setObservation($d['observation']);
$this->setAdresse_geo($d['adresse_geo']);
$this->setAdresse_pro($d['adresse_pro']);
$this->setType_piece($d['type_piece']);
$this->setNum_piece($d['num_piece']);
$this->setDate_delivrance_piece($d['date_delivrance_piece']);
$this->setDate_fin_piece($d['date_fin_piece']);
$this->setPiece_authoite($d['piece_authoite']);
$this->setLieu_piece($d['lieu_piece']);
$this->setPays_residence($d['pays_residence']);
$this->setVille_residence($d['ville_residence']);
$this->setQuartier($d['quartier']);
$this->setPhone_number_1($d['phone_number_1']);
$this->setPhone_number_2($d['phone_number_2']);
$this->setPhoto($d['photo']);
$this->setEmail_1($d['email_1']);
$this->setEmail_2($d['email_2']);
$this->setLangue($d['langue']);
$this->setModalite($d['modalite']);
$this->setDate_relation($d['date_relation']);
$this->client =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->email_1;
                        }
                        
                    }
                    /**
                    * Get the value of email_2
                    */ 
                    public function getEmail_2($email_2=null)
                    {
                        if ($email_2 != null && is_array($this->client) && count($this->client)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE email_2 = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$email_2]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_client($d['id_client']);
$this->setType_client($d['type_client']);
$this->setCivilite($d['civilite']);
$this->setNom_client($d['nom_client']);
$this->setPrenom_client($d['prenom_client']);
$this->setNom_jeune_fille($d['nom_jeune_fille']);
$this->setDate_naissance($d['date_naissance']);
$this->setLieu_naissanc($d['lieu_naissanc']);
$this->setNationalite($d['nationalite']);
$this->setSituation_mat($d['situation_mat']);
$this->setRegime_mat($d['regime_mat']);
$this->setNb_enfant($d['nb_enfant']);
$this->setNom_conjoint($d['nom_conjoint']);
$this->setAdresse_post($d['adresse_post']);
$this->setCode_postal($d['code_postal']);
$this->setObservation($d['observation']);
$this->setAdresse_geo($d['adresse_geo']);
$this->setAdresse_pro($d['adresse_pro']);
$this->setType_piece($d['type_piece']);
$this->setNum_piece($d['num_piece']);
$this->setDate_delivrance_piece($d['date_delivrance_piece']);
$this->setDate_fin_piece($d['date_fin_piece']);
$this->setPiece_authoite($d['piece_authoite']);
$this->setLieu_piece($d['lieu_piece']);
$this->setPays_residence($d['pays_residence']);
$this->setVille_residence($d['ville_residence']);
$this->setQuartier($d['quartier']);
$this->setPhone_number_1($d['phone_number_1']);
$this->setPhone_number_2($d['phone_number_2']);
$this->setPhoto($d['photo']);
$this->setEmail_1($d['email_1']);
$this->setEmail_2($d['email_2']);
$this->setLangue($d['langue']);
$this->setModalite($d['modalite']);
$this->setDate_relation($d['date_relation']);
$this->client =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->email_2;
                        }
                        
                    }
                    /**
                    * Get the value of langue
                    */ 
                    public function getLangue($langue=null)
                    {
                        if ($langue != null && is_array($this->client) && count($this->client)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE langue = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$langue]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_client($d['id_client']);
$this->setType_client($d['type_client']);
$this->setCivilite($d['civilite']);
$this->setNom_client($d['nom_client']);
$this->setPrenom_client($d['prenom_client']);
$this->setNom_jeune_fille($d['nom_jeune_fille']);
$this->setDate_naissance($d['date_naissance']);
$this->setLieu_naissanc($d['lieu_naissanc']);
$this->setNationalite($d['nationalite']);
$this->setSituation_mat($d['situation_mat']);
$this->setRegime_mat($d['regime_mat']);
$this->setNb_enfant($d['nb_enfant']);
$this->setNom_conjoint($d['nom_conjoint']);
$this->setAdresse_post($d['adresse_post']);
$this->setCode_postal($d['code_postal']);
$this->setObservation($d['observation']);
$this->setAdresse_geo($d['adresse_geo']);
$this->setAdresse_pro($d['adresse_pro']);
$this->setType_piece($d['type_piece']);
$this->setNum_piece($d['num_piece']);
$this->setDate_delivrance_piece($d['date_delivrance_piece']);
$this->setDate_fin_piece($d['date_fin_piece']);
$this->setPiece_authoite($d['piece_authoite']);
$this->setLieu_piece($d['lieu_piece']);
$this->setPays_residence($d['pays_residence']);
$this->setVille_residence($d['ville_residence']);
$this->setQuartier($d['quartier']);
$this->setPhone_number_1($d['phone_number_1']);
$this->setPhone_number_2($d['phone_number_2']);
$this->setPhoto($d['photo']);
$this->setEmail_1($d['email_1']);
$this->setEmail_2($d['email_2']);
$this->setLangue($d['langue']);
$this->setModalite($d['modalite']);
$this->setDate_relation($d['date_relation']);
$this->client =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->langue;
                        }
                        
                    }
                    /**
                    * Get the value of modalite
                    */ 
                    public function getModalite($modalite=null)
                    {
                        if ($modalite != null && is_array($this->client) && count($this->client)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE modalite = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$modalite]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_client($d['id_client']);
$this->setType_client($d['type_client']);
$this->setCivilite($d['civilite']);
$this->setNom_client($d['nom_client']);
$this->setPrenom_client($d['prenom_client']);
$this->setNom_jeune_fille($d['nom_jeune_fille']);
$this->setDate_naissance($d['date_naissance']);
$this->setLieu_naissanc($d['lieu_naissanc']);
$this->setNationalite($d['nationalite']);
$this->setSituation_mat($d['situation_mat']);
$this->setRegime_mat($d['regime_mat']);
$this->setNb_enfant($d['nb_enfant']);
$this->setNom_conjoint($d['nom_conjoint']);
$this->setAdresse_post($d['adresse_post']);
$this->setCode_postal($d['code_postal']);
$this->setObservation($d['observation']);
$this->setAdresse_geo($d['adresse_geo']);
$this->setAdresse_pro($d['adresse_pro']);
$this->setType_piece($d['type_piece']);
$this->setNum_piece($d['num_piece']);
$this->setDate_delivrance_piece($d['date_delivrance_piece']);
$this->setDate_fin_piece($d['date_fin_piece']);
$this->setPiece_authoite($d['piece_authoite']);
$this->setLieu_piece($d['lieu_piece']);
$this->setPays_residence($d['pays_residence']);
$this->setVille_residence($d['ville_residence']);
$this->setQuartier($d['quartier']);
$this->setPhone_number_1($d['phone_number_1']);
$this->setPhone_number_2($d['phone_number_2']);
$this->setPhoto($d['photo']);
$this->setEmail_1($d['email_1']);
$this->setEmail_2($d['email_2']);
$this->setLangue($d['langue']);
$this->setModalite($d['modalite']);
$this->setDate_relation($d['date_relation']);
$this->client =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->modalite;
                        }
                        
                    }
                    /**
                    * Get the value of date_relation
                    */ 
                    public function getDate_relation($date_relation=null)
                    {
                        if ($date_relation != null && is_array($this->client) && count($this->client)!=0) {
                            $table_name = strtolower(get_class($this));
                            $query = "SELECT * FROM $table_name WHERE date_relation = ?";
                            $req = Manager::bdd()->prepare($query);
                            $req->execute([$date_relation]);
                            $data = "";
                            if ($data = $req->fetchAll(PDO::FETCH_ASSOC)) {
$d=$data[0];
$this->setId_client($d['id_client']);
$this->setType_client($d['type_client']);
$this->setCivilite($d['civilite']);
$this->setNom_client($d['nom_client']);
$this->setPrenom_client($d['prenom_client']);
$this->setNom_jeune_fille($d['nom_jeune_fille']);
$this->setDate_naissance($d['date_naissance']);
$this->setLieu_naissanc($d['lieu_naissanc']);
$this->setNationalite($d['nationalite']);
$this->setSituation_mat($d['situation_mat']);
$this->setRegime_mat($d['regime_mat']);
$this->setNb_enfant($d['nb_enfant']);
$this->setNom_conjoint($d['nom_conjoint']);
$this->setAdresse_post($d['adresse_post']);
$this->setCode_postal($d['code_postal']);
$this->setObservation($d['observation']);
$this->setAdresse_geo($d['adresse_geo']);
$this->setAdresse_pro($d['adresse_pro']);
$this->setType_piece($d['type_piece']);
$this->setNum_piece($d['num_piece']);
$this->setDate_delivrance_piece($d['date_delivrance_piece']);
$this->setDate_fin_piece($d['date_fin_piece']);
$this->setPiece_authoite($d['piece_authoite']);
$this->setLieu_piece($d['lieu_piece']);
$this->setPays_residence($d['pays_residence']);
$this->setVille_residence($d['ville_residence']);
$this->setQuartier($d['quartier']);
$this->setPhone_number_1($d['phone_number_1']);
$this->setPhone_number_2($d['phone_number_2']);
$this->setPhoto($d['photo']);
$this->setEmail_1($d['email_1']);
$this->setEmail_2($d['email_2']);
$this->setLangue($d['langue']);
$this->setModalite($d['modalite']);
$this->setDate_relation($d['date_relation']);
$this->client =$data; 
 return $this;
                                }
                            
                        } else {
                            return $this->date_relation;
                        }
                        
                    }


                    /**
                    * Set the value of id_client
                    *
                    * @return  self
                    */ 
                   public function setId_client($id_client)
                   {
                    $this->id_client = $id_client;
               
                       return $this;
                   }
                    /**
                    * Set the value of type_client
                    *
                    * @return  self
                    */ 
                   public function setType_client($type_client)
                   {
                    $this->type_client = $type_client;
               
                       return $this;
                   }
                    /**
                    * Set the value of civilite
                    *
                    * @return  self
                    */ 
                   public function setCivilite($civilite)
                   {
                    $this->civilite = $civilite;
               
                       return $this;
                   }
                    /**
                    * Set the value of nom_client
                    *
                    * @return  self
                    */ 
                   public function setNom_client($nom_client)
                   {
                    $this->nom_client = $nom_client;
               
                       return $this;
                   }
                    /**
                    * Set the value of prenom_client
                    *
                    * @return  self
                    */ 
                   public function setPrenom_client($prenom_client)
                   {
                    $this->prenom_client = $prenom_client;
               
                       return $this;
                   }
                    /**
                    * Set the value of nom_jeune_fille
                    *
                    * @return  self
                    */ 
                   public function setNom_jeune_fille($nom_jeune_fille)
                   {
                    $this->nom_jeune_fille = $nom_jeune_fille;
               
                       return $this;
                   }
                    /**
                    * Set the value of date_naissance
                    *
                    * @return  self
                    */ 
                   public function setDate_naissance($date_naissance)
                   {
                    $this->date_naissance = $date_naissance;
               
                       return $this;
                   }
                    /**
                    * Set the value of lieu_naissanc
                    *
                    * @return  self
                    */ 
                   public function setLieu_naissanc($lieu_naissanc)
                   {
                    $this->lieu_naissanc = $lieu_naissanc;
               
                       return $this;
                   }
                    /**
                    * Set the value of nationalite
                    *
                    * @return  self
                    */ 
                   public function setNationalite($nationalite)
                   {
                    $this->nationalite = $nationalite;
               
                       return $this;
                   }
                    /**
                    * Set the value of situation_mat
                    *
                    * @return  self
                    */ 
                   public function setSituation_mat($situation_mat)
                   {
                    $this->situation_mat = $situation_mat;
               
                       return $this;
                   }
                    /**
                    * Set the value of regime_mat
                    *
                    * @return  self
                    */ 
                   public function setRegime_mat($regime_mat)
                   {
                    $this->regime_mat = $regime_mat;
               
                       return $this;
                   }
                    /**
                    * Set the value of nb_enfant
                    *
                    * @return  self
                    */ 
                   public function setNb_enfant($nb_enfant)
                   {
                    $this->nb_enfant = $nb_enfant;
               
                       return $this;
                   }
                    /**
                    * Set the value of nom_conjoint
                    *
                    * @return  self
                    */ 
                   public function setNom_conjoint($nom_conjoint)
                   {
                    $this->nom_conjoint = $nom_conjoint;
               
                       return $this;
                   }
                    /**
                    * Set the value of adresse_post
                    *
                    * @return  self
                    */ 
                   public function setAdresse_post($adresse_post)
                   {
                    $this->adresse_post = $adresse_post;
               
                       return $this;
                   }
                    /**
                    * Set the value of code_postal
                    *
                    * @return  self
                    */ 
                   public function setCode_postal($code_postal)
                   {
                    $this->code_postal = $code_postal;
               
                       return $this;
                   }
                    /**
                    * Set the value of observation
                    *
                    * @return  self
                    */ 
                   public function setObservation($observation)
                   {
                    $this->observation = $observation;
               
                       return $this;
                   }
                    /**
                    * Set the value of adresse_geo
                    *
                    * @return  self
                    */ 
                   public function setAdresse_geo($adresse_geo)
                   {
                    $this->adresse_geo = $adresse_geo;
               
                       return $this;
                   }
                    /**
                    * Set the value of adresse_pro
                    *
                    * @return  self
                    */ 
                   public function setAdresse_pro($adresse_pro)
                   {
                    $this->adresse_pro = $adresse_pro;
               
                       return $this;
                   }
                    /**
                    * Set the value of type_piece
                    *
                    * @return  self
                    */ 
                   public function setType_piece($type_piece)
                   {
                    $this->type_piece = $type_piece;
               
                       return $this;
                   }
                    /**
                    * Set the value of num_piece
                    *
                    * @return  self
                    */ 
                   public function setNum_piece($num_piece)
                   {
                    $this->num_piece = $num_piece;
               
                       return $this;
                   }
                    /**
                    * Set the value of date_delivrance_piece
                    *
                    * @return  self
                    */ 
                   public function setDate_delivrance_piece($date_delivrance_piece)
                   {
                    $this->date_delivrance_piece = $date_delivrance_piece;
               
                       return $this;
                   }
                    /**
                    * Set the value of date_fin_piece
                    *
                    * @return  self
                    */ 
                   public function setDate_fin_piece($date_fin_piece)
                   {
                    $this->date_fin_piece = $date_fin_piece;
               
                       return $this;
                   }
                    /**
                    * Set the value of piece_authoite
                    *
                    * @return  self
                    */ 
                   public function setPiece_authoite($piece_authoite)
                   {
                    $this->piece_authoite = $piece_authoite;
               
                       return $this;
                   }
                    /**
                    * Set the value of lieu_piece
                    *
                    * @return  self
                    */ 
                   public function setLieu_piece($lieu_piece)
                   {
                    $this->lieu_piece = $lieu_piece;
               
                       return $this;
                   }
                    /**
                    * Set the value of pays_residence
                    *
                    * @return  self
                    */ 
                   public function setPays_residence($pays_residence)
                   {
                    $this->pays_residence = $pays_residence;
               
                       return $this;
                   }
                    /**
                    * Set the value of ville_residence
                    *
                    * @return  self
                    */ 
                   public function setVille_residence($ville_residence)
                   {
                    $this->ville_residence = $ville_residence;
               
                       return $this;
                   }
                    /**
                    * Set the value of quartier
                    *
                    * @return  self
                    */ 
                   public function setQuartier($quartier)
                   {
                    $this->quartier = $quartier;
               
                       return $this;
                   }
                    /**
                    * Set the value of phone_number_1
                    *
                    * @return  self
                    */ 
                   public function setPhone_number_1($phone_number_1)
                   {
                    $this->phone_number_1 = $phone_number_1;
               
                       return $this;
                   }
                    /**
                    * Set the value of phone_number_2
                    *
                    * @return  self
                    */ 
                   public function setPhone_number_2($phone_number_2)
                   {
                    $this->phone_number_2 = $phone_number_2;
               
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
                    * Set the value of email_1
                    *
                    * @return  self
                    */ 
                   public function setEmail_1($email_1)
                   {
                    $this->email_1 = $email_1;
               
                       return $this;
                   }
                    /**
                    * Set the value of email_2
                    *
                    * @return  self
                    */ 
                   public function setEmail_2($email_2)
                   {
                    $this->email_2 = $email_2;
               
                       return $this;
                   }
                    /**
                    * Set the value of langue
                    *
                    * @return  self
                    */ 
                   public function setLangue($langue)
                   {
                    $this->langue = $langue;
               
                       return $this;
                   }
                    /**
                    * Set the value of modalite
                    *
                    * @return  self
                    */ 
                   public function setModalite($modalite)
                   {
                    $this->modalite = $modalite;
               
                       return $this;
                   }
                    /**
                    * Set the value of date_relation
                    *
                    * @return  self
                    */ 
                   public function setDate_relation($date_relation)
                   {
                    $this->date_relation = $date_relation;
               
                       return $this;
                   }
}
