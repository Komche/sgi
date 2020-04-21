<?php
        //Pour la connexion à la base de donnée
        $this->config["host"] = 'localhost';
        $this->config["db_name"] = 'coronackathon';
        $this->config["username"] = 'root';
        $this->config["password_"] = '';
$this->config["tables"] = ['actions','files','membre','module','module_role','roles','type_agent','users','ville',];

$this->config['tables']['actions'] = ['id','name','description','action_url','module',];

$this->config['tables']['actions']['id'] = ['id'];

$this->config['tables']['files'] = ['id','file_name','file_url','file_type','file_size',];

$this->config['tables']['actions']['id'] = ['id'];$this->config['tables']['files']['id'] = ['id'];

$this->config['tables']['membre'] = ['id_membre','matricule','nom','prenom','adresse','numero','photo',];

$this->config['tables']['actions']['id'] = ['id'];$this->config['tables']['files']['id'] = ['id'];$this->config['tables']['membre']['id'] = ['id_membre'];

$this->config['tables']['module'] = ['id','name','icon','description','action_url','sub_module',];

$this->config['tables']['actions']['id'] = ['id'];$this->config['tables']['files']['id'] = ['id'];$this->config['tables']['membre']['id'] = ['id_membre'];$this->config['tables']['module']['id'] = ['id'];

$this->config['tables']['module_role'] = ['id','role_id','module',];

$this->config['tables']['actions']['id'] = ['id'];$this->config['tables']['files']['id'] = ['id'];$this->config['tables']['membre']['id'] = ['id_membre'];$this->config['tables']['module']['id'] = ['id'];$this->config['tables']['module_role']['id'] = ['id'];

$this->config['tables']['roles'] = ['id','name','description',];

$this->config['tables']['actions']['id'] = ['id'];$this->config['tables']['files']['id'] = ['id'];$this->config['tables']['membre']['id'] = ['id_membre'];$this->config['tables']['module']['id'] = ['id'];$this->config['tables']['module_role']['id'] = ['id'];$this->config['tables']['roles']['id'] = ['id'];

$this->config['tables']['type_agent'] = ['id','label',];

$this->config['tables']['actions']['id'] = ['id'];$this->config['tables']['files']['id'] = ['id'];$this->config['tables']['membre']['id'] = ['id_membre'];$this->config['tables']['module']['id'] = ['id'];$this->config['tables']['module_role']['id'] = ['id'];$this->config['tables']['roles']['id'] = ['id'];$this->config['tables']['type_agent']['id'] = ['id'];

$this->config['tables']['users'] = ['id','first_name','last_name','matricule','phone_number','casern','type_agent','created_at','updated_at','photo','role','status','password_',];

$this->config['tables']['actions']['id'] = ['id'];$this->config['tables']['files']['id'] = ['id'];$this->config['tables']['membre']['id'] = ['id_membre'];$this->config['tables']['module']['id'] = ['id'];$this->config['tables']['module_role']['id'] = ['id'];$this->config['tables']['roles']['id'] = ['id'];$this->config['tables']['type_agent']['id'] = ['id'];$this->config['tables']['users']['id'] = ['id'];

$this->config['tables']['ville'] = ['idVille','nomVille',];

$this->config['tables']['actions']['id'] = ['id'];$this->config['tables']['files']['id'] = ['id'];$this->config['tables']['membre']['id'] = ['id_membre'];$this->config['tables']['module']['id'] = ['id'];$this->config['tables']['module_role']['id'] = ['id'];$this->config['tables']['roles']['id'] = ['id'];$this->config['tables']['type_agent']['id'] = ['id'];$this->config['tables']['users']['id'] = ['id'];$this->config['tables']['ville']['id'] = ['idVille'];
