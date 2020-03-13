<?php
        //Pour la connexion à la base de donnée
        $this->config["host"] = 'localhost';
        $this->config["db_name"] = 'baseaemn';
        $this->config["username"] = 'root';
        $this->config["password_"] = '';
$this->config["tables"] = ['actions','appartenir','bureau','bureauCommission','commission','etablissement','membre','module','module_role','roles','type_agent','users','ville',];

$this->config['tables']['actions'] = ['id','name','description','action_url','module',];

$this->config['tables']['actions']['id'] = ['id'];

$this->config['tables']['appartenir'] = ['membre','etablissement','exercice',];

$this->config['tables']['actions']['id'] = ['id'];$this->config['tables']['appartenir']['id'] = ['membre'];

$this->config['tables']['bureau'] = ['idBureau','libellebureau','typebureau','poste','idRegion',];

$this->config['tables']['actions']['id'] = ['id'];$this->config['tables']['appartenir']['id'] = ['membre'];$this->config['tables']['bureau']['id'] = ['idBureau'];

$this->config['tables']['bureauCommission'] = ['bureau','commission','exercice',];

$this->config['tables']['actions']['id'] = ['id'];$this->config['tables']['appartenir']['id'] = ['membre'];$this->config['tables']['bureau']['id'] = ['idBureau'];$this->config['tables']['bureauCommission']['id'] = ['bureau'];

$this->config['tables']['commission'] = ['idCommission','nomCommission',];

$this->config['tables']['actions']['id'] = ['id'];$this->config['tables']['appartenir']['id'] = ['membre'];$this->config['tables']['bureau']['id'] = ['idBureau'];$this->config['tables']['bureauCommission']['id'] = ['bureau'];$this->config['tables']['commission']['id'] = ['idCommission'];

$this->config['tables']['etablissement'] = ['idEtablissement','nom','adresse','filiere',];

$this->config['tables']['actions']['id'] = ['id'];$this->config['tables']['appartenir']['id'] = ['membre'];$this->config['tables']['bureau']['id'] = ['idBureau'];$this->config['tables']['bureauCommission']['id'] = ['bureau'];$this->config['tables']['commission']['id'] = ['idCommission'];$this->config['tables']['etablissement']['id'] = ['idEtablissement'];

$this->config['tables']['membre'] = ['matricule','nom','prenom','adresse','numero','photo','typeMembre','etablissement','commission',];

$this->config['tables']['actions']['id'] = ['id'];$this->config['tables']['appartenir']['id'] = ['membre'];$this->config['tables']['bureau']['id'] = ['idBureau'];$this->config['tables']['bureauCommission']['id'] = ['bureau'];$this->config['tables']['commission']['id'] = ['idCommission'];$this->config['tables']['etablissement']['id'] = ['idEtablissement'];$this->config['tables']['membre']['id'] = ['matricule'];

$this->config['tables']['module'] = ['id','name','icon','description','action_url','sub_module',];

$this->config['tables']['actions']['id'] = ['id'];$this->config['tables']['appartenir']['id'] = ['membre'];$this->config['tables']['bureau']['id'] = ['idBureau'];$this->config['tables']['bureauCommission']['id'] = ['bureau'];$this->config['tables']['commission']['id'] = ['idCommission'];$this->config['tables']['etablissement']['id'] = ['idEtablissement'];$this->config['tables']['membre']['id'] = ['matricule'];$this->config['tables']['module']['id'] = ['id'];

$this->config['tables']['module_role'] = ['id','role_id','module',];

$this->config['tables']['actions']['id'] = ['id'];$this->config['tables']['appartenir']['id'] = ['membre'];$this->config['tables']['bureau']['id'] = ['idBureau'];$this->config['tables']['bureauCommission']['id'] = ['bureau'];$this->config['tables']['commission']['id'] = ['idCommission'];$this->config['tables']['etablissement']['id'] = ['idEtablissement'];$this->config['tables']['membre']['id'] = ['matricule'];$this->config['tables']['module']['id'] = ['id'];$this->config['tables']['module_role']['id'] = ['id'];

$this->config['tables']['roles'] = ['id','name','description',];

$this->config['tables']['actions']['id'] = ['id'];$this->config['tables']['appartenir']['id'] = ['membre'];$this->config['tables']['bureau']['id'] = ['idBureau'];$this->config['tables']['bureauCommission']['id'] = ['bureau'];$this->config['tables']['commission']['id'] = ['idCommission'];$this->config['tables']['etablissement']['id'] = ['idEtablissement'];$this->config['tables']['membre']['id'] = ['matricule'];$this->config['tables']['module']['id'] = ['id'];$this->config['tables']['module_role']['id'] = ['id'];$this->config['tables']['roles']['id'] = ['id'];

$this->config['tables']['type_agent'] = ['id','label',];

$this->config['tables']['actions']['id'] = ['id'];$this->config['tables']['appartenir']['id'] = ['membre'];$this->config['tables']['bureau']['id'] = ['idBureau'];$this->config['tables']['bureauCommission']['id'] = ['bureau'];$this->config['tables']['commission']['id'] = ['idCommission'];$this->config['tables']['etablissement']['id'] = ['idEtablissement'];$this->config['tables']['membre']['id'] = ['matricule'];$this->config['tables']['module']['id'] = ['id'];$this->config['tables']['module_role']['id'] = ['id'];$this->config['tables']['roles']['id'] = ['id'];$this->config['tables']['type_agent']['id'] = ['id'];

$this->config['tables']['users'] = ['id','first_name','last_name','matricule','phone_number','casern','type_agent','created_at','updated_at','photo','role','status','password_',];

$this->config['tables']['actions']['id'] = ['id'];$this->config['tables']['appartenir']['id'] = ['membre'];$this->config['tables']['bureau']['id'] = ['idBureau'];$this->config['tables']['bureauCommission']['id'] = ['bureau'];$this->config['tables']['commission']['id'] = ['idCommission'];$this->config['tables']['etablissement']['id'] = ['idEtablissement'];$this->config['tables']['membre']['id'] = ['matricule'];$this->config['tables']['module']['id'] = ['id'];$this->config['tables']['module_role']['id'] = ['id'];$this->config['tables']['roles']['id'] = ['id'];$this->config['tables']['type_agent']['id'] = ['id'];$this->config['tables']['users']['id'] = ['id'];

$this->config['tables']['ville'] = ['idRegion','nomRegion',];

$this->config['tables']['actions']['id'] = ['id'];$this->config['tables']['appartenir']['id'] = ['membre'];$this->config['tables']['bureau']['id'] = ['idBureau'];$this->config['tables']['bureauCommission']['id'] = ['bureau'];$this->config['tables']['commission']['id'] = ['idCommission'];$this->config['tables']['etablissement']['id'] = ['idEtablissement'];$this->config['tables']['membre']['id'] = ['matricule'];$this->config['tables']['module']['id'] = ['id'];$this->config['tables']['module_role']['id'] = ['id'];$this->config['tables']['roles']['id'] = ['id'];$this->config['tables']['type_agent']['id'] = ['id'];$this->config['tables']['users']['id'] = ['id'];$this->config['tables']['ville']['id'] = ['idRegion'];
