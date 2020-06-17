<?php
        //Pour la connexion à la base de donnée
        $this->config["host"] = 'localhost';
        $this->config["db_name"] = 'sgi';
        $this->config["username"] = 'root';
        $this->config["password_"] = '';
$this->config["tables"] = ['client','files','module','module_role','pays','region','roles','type_agent','users','ville',];

$this->config['tables']['client'] = ['id_client','type_client','nom_client','prenom_client','nom_jeune_fille','date_naissance','lieu_naissanc','nationalite','situation_mat','regime_mat','nb_enfant','nom_conjoint','adresse_post','code_postal','observation','adresse_geo','adresse_pro','type_piece','num_piece','date_delivrance_piece','date_fin_piece','piece_authoite','lieu_piece','pays_residence','ville_residence','quartier','phone_number_1','phone_number_2','photo','email_1','email_2','langue','modalite','date_relation',];

$this->config['tables']['client']['id'] = ['id_client'];

$this->config['tables']['files'] = ['id','file_name','file_url','file_type','file_size',];

$this->config['tables']['client']['id'] = ['id_client'];$this->config['tables']['files']['id'] = ['id'];

$this->config['tables']['module'] = ['id','name','icon','description','action_url','sub_module',];

$this->config['tables']['client']['id'] = ['id_client'];$this->config['tables']['files']['id'] = ['id'];$this->config['tables']['module']['id'] = ['id'];

$this->config['tables']['module_role'] = ['id','role_id','module',];

$this->config['tables']['client']['id'] = ['id_client'];$this->config['tables']['files']['id'] = ['id'];$this->config['tables']['module']['id'] = ['id'];$this->config['tables']['module_role']['id'] = ['id'];

$this->config['tables']['pays'] = ['id','name',];

$this->config['tables']['client']['id'] = ['id_client'];$this->config['tables']['files']['id'] = ['id'];$this->config['tables']['module']['id'] = ['id'];$this->config['tables']['module_role']['id'] = ['id'];$this->config['tables']['pays']['id'] = ['id'];

$this->config['tables']['region'] = ['id_region','nom_region',];

$this->config['tables']['client']['id'] = ['id_client'];$this->config['tables']['files']['id'] = ['id'];$this->config['tables']['module']['id'] = ['id'];$this->config['tables']['module_role']['id'] = ['id'];$this->config['tables']['pays']['id'] = ['id'];$this->config['tables']['region']['id'] = ['id_region'];

$this->config['tables']['roles'] = ['id','name','description',];

$this->config['tables']['client']['id'] = ['id_client'];$this->config['tables']['files']['id'] = ['id'];$this->config['tables']['module']['id'] = ['id'];$this->config['tables']['module_role']['id'] = ['id'];$this->config['tables']['pays']['id'] = ['id'];$this->config['tables']['region']['id'] = ['id_region'];$this->config['tables']['roles']['id'] = ['id'];

$this->config['tables']['type_agent'] = ['id','label',];

$this->config['tables']['client']['id'] = ['id_client'];$this->config['tables']['files']['id'] = ['id'];$this->config['tables']['module']['id'] = ['id'];$this->config['tables']['module_role']['id'] = ['id'];$this->config['tables']['pays']['id'] = ['id'];$this->config['tables']['region']['id'] = ['id_region'];$this->config['tables']['roles']['id'] = ['id'];$this->config['tables']['type_agent']['id'] = ['id'];

$this->config['tables']['users'] = ['id','first_name','last_name','matricule','phone_number','email','type_agent','created_at','updated_at','photo','role','status','domaine','region','password_','profil',];

$this->config['tables']['client']['id'] = ['id_client'];$this->config['tables']['files']['id'] = ['id'];$this->config['tables']['module']['id'] = ['id'];$this->config['tables']['module_role']['id'] = ['id'];$this->config['tables']['pays']['id'] = ['id'];$this->config['tables']['region']['id'] = ['id_region'];$this->config['tables']['roles']['id'] = ['id'];$this->config['tables']['type_agent']['id'] = ['id'];$this->config['tables']['users']['id'] = ['id'];

$this->config['tables']['ville'] = ['id_region','nom_region',];

$this->config['tables']['client']['id'] = ['id_client'];$this->config['tables']['files']['id'] = ['id'];$this->config['tables']['module']['id'] = ['id'];$this->config['tables']['module_role']['id'] = ['id'];$this->config['tables']['pays']['id'] = ['id'];$this->config['tables']['region']['id'] = ['id_region'];$this->config['tables']['roles']['id'] = ['id'];$this->config['tables']['type_agent']['id'] = ['id'];$this->config['tables']['users']['id'] = ['id'];$this->config['tables']['ville']['id'] = ['id_region'];
