<?php
        //Pour la connexion à la base de donnée
        $this->config["host"] = 'localhost';
        $this->config["db_name"] = 'saroapp';
        $this->config["username"] = 'root';
        $this->config["password_"] = '';
$this->config["tables"] = ['actions','city','company','district','emergency_geste','engin','engin_tools','files','history_data','incident','module','module_role','national_group','plan','regional_group','rescue_center','roles','type_agent','users',];

$this->config['tables']['actions'] = ['id','name','description','action_url','module',];

$this->config['tables']['actions']['id'] = ['id'];

$this->config['tables']['city'] = ['id','label',];

$this->config['tables']['actions']['id'] = ['id'];$this->config['tables']['city']['id'] = ['id'];

$this->config['tables']['company'] = ['id','label','regional_group','city',];

$this->config['tables']['actions']['id'] = ['id'];$this->config['tables']['city']['id'] = ['id'];$this->config['tables']['company']['id'] = ['id'];

$this->config['tables']['district'] = ['id','label','city',];

$this->config['tables']['actions']['id'] = ['id'];$this->config['tables']['city']['id'] = ['id'];$this->config['tables']['company']['id'] = ['id'];$this->config['tables']['district']['id'] = ['id'];

$this->config['tables']['emergency_geste'] = ['id','title','description','youtube_url','files',];

$this->config['tables']['actions']['id'] = ['id'];$this->config['tables']['city']['id'] = ['id'];$this->config['tables']['company']['id'] = ['id'];$this->config['tables']['district']['id'] = ['id'];$this->config['tables']['emergency_geste']['id'] = ['id'];

$this->config['tables']['engin'] = ['id','label','registration_number','status','have_field',];

$this->config['tables']['actions']['id'] = ['id'];$this->config['tables']['city']['id'] = ['id'];$this->config['tables']['company']['id'] = ['id'];$this->config['tables']['district']['id'] = ['id'];$this->config['tables']['emergency_geste']['id'] = ['id'];$this->config['tables']['engin']['id'] = ['id'];

$this->config['tables']['engin_tools'] = ['id','label','engin',];

$this->config['tables']['actions']['id'] = ['id'];$this->config['tables']['city']['id'] = ['id'];$this->config['tables']['company']['id'] = ['id'];$this->config['tables']['district']['id'] = ['id'];$this->config['tables']['emergency_geste']['id'] = ['id'];$this->config['tables']['engin']['id'] = ['id'];$this->config['tables']['engin_tools']['id'] = ['id'];

$this->config['tables']['files'] = ['id','file_name','file_url','file_type','file_size',];

$this->config['tables']['actions']['id'] = ['id'];$this->config['tables']['city']['id'] = ['id'];$this->config['tables']['company']['id'] = ['id'];$this->config['tables']['district']['id'] = ['id'];$this->config['tables']['emergency_geste']['id'] = ['id'];$this->config['tables']['engin']['id'] = ['id'];$this->config['tables']['engin_tools']['id'] = ['id'];$this->config['tables']['files']['id'] = ['id'];

$this->config['tables']['history_data'] = ['id','created_by','created_at','action','table_name','table_id',];

$this->config['tables']['actions']['id'] = ['id'];$this->config['tables']['city']['id'] = ['id'];$this->config['tables']['company']['id'] = ['id'];$this->config['tables']['district']['id'] = ['id'];$this->config['tables']['emergency_geste']['id'] = ['id'];$this->config['tables']['engin']['id'] = ['id'];$this->config['tables']['engin_tools']['id'] = ['id'];$this->config['tables']['files']['id'] = ['id'];$this->config['tables']['history_data']['id'] = ['id'];

$this->config['tables']['incident'] = ['id','nature','gender','phone_number','object','district',];

$this->config['tables']['actions']['id'] = ['id'];$this->config['tables']['city']['id'] = ['id'];$this->config['tables']['company']['id'] = ['id'];$this->config['tables']['district']['id'] = ['id'];$this->config['tables']['emergency_geste']['id'] = ['id'];$this->config['tables']['engin']['id'] = ['id'];$this->config['tables']['engin_tools']['id'] = ['id'];$this->config['tables']['files']['id'] = ['id'];$this->config['tables']['history_data']['id'] = ['id'];$this->config['tables']['incident']['id'] = ['id'];

$this->config['tables']['module'] = ['id','name','icon','description',];

$this->config['tables']['actions']['id'] = ['id'];$this->config['tables']['city']['id'] = ['id'];$this->config['tables']['company']['id'] = ['id'];$this->config['tables']['district']['id'] = ['id'];$this->config['tables']['emergency_geste']['id'] = ['id'];$this->config['tables']['engin']['id'] = ['id'];$this->config['tables']['engin_tools']['id'] = ['id'];$this->config['tables']['files']['id'] = ['id'];$this->config['tables']['history_data']['id'] = ['id'];$this->config['tables']['incident']['id'] = ['id'];$this->config['tables']['module']['id'] = ['id'];

$this->config['tables']['module_role'] = ['id','role_id','module',];

$this->config['tables']['actions']['id'] = ['id'];$this->config['tables']['city']['id'] = ['id'];$this->config['tables']['company']['id'] = ['id'];$this->config['tables']['district']['id'] = ['id'];$this->config['tables']['emergency_geste']['id'] = ['id'];$this->config['tables']['engin']['id'] = ['id'];$this->config['tables']['engin_tools']['id'] = ['id'];$this->config['tables']['files']['id'] = ['id'];$this->config['tables']['history_data']['id'] = ['id'];$this->config['tables']['incident']['id'] = ['id'];$this->config['tables']['module']['id'] = ['id'];$this->config['tables']['module_role']['id'] = ['id'];

$this->config['tables']['national_group'] = ['id','label',];

$this->config['tables']['actions']['id'] = ['id'];$this->config['tables']['city']['id'] = ['id'];$this->config['tables']['company']['id'] = ['id'];$this->config['tables']['district']['id'] = ['id'];$this->config['tables']['emergency_geste']['id'] = ['id'];$this->config['tables']['engin']['id'] = ['id'];$this->config['tables']['engin_tools']['id'] = ['id'];$this->config['tables']['files']['id'] = ['id'];$this->config['tables']['history_data']['id'] = ['id'];$this->config['tables']['incident']['id'] = ['id'];$this->config['tables']['module']['id'] = ['id'];$this->config['tables']['module_role']['id'] = ['id'];$this->config['tables']['national_group']['id'] = ['id'];

$this->config['tables']['plan'] = ['id','title','file',];

$this->config['tables']['actions']['id'] = ['id'];$this->config['tables']['city']['id'] = ['id'];$this->config['tables']['company']['id'] = ['id'];$this->config['tables']['district']['id'] = ['id'];$this->config['tables']['emergency_geste']['id'] = ['id'];$this->config['tables']['engin']['id'] = ['id'];$this->config['tables']['engin_tools']['id'] = ['id'];$this->config['tables']['files']['id'] = ['id'];$this->config['tables']['history_data']['id'] = ['id'];$this->config['tables']['incident']['id'] = ['id'];$this->config['tables']['module']['id'] = ['id'];$this->config['tables']['module_role']['id'] = ['id'];$this->config['tables']['national_group']['id'] = ['id'];$this->config['tables']['plan']['id'] = ['id'];

$this->config['tables']['regional_group'] = ['id','label','national_group','city',];

$this->config['tables']['actions']['id'] = ['id'];$this->config['tables']['city']['id'] = ['id'];$this->config['tables']['company']['id'] = ['id'];$this->config['tables']['district']['id'] = ['id'];$this->config['tables']['emergency_geste']['id'] = ['id'];$this->config['tables']['engin']['id'] = ['id'];$this->config['tables']['engin_tools']['id'] = ['id'];$this->config['tables']['files']['id'] = ['id'];$this->config['tables']['history_data']['id'] = ['id'];$this->config['tables']['incident']['id'] = ['id'];$this->config['tables']['module']['id'] = ['id'];$this->config['tables']['module_role']['id'] = ['id'];$this->config['tables']['national_group']['id'] = ['id'];$this->config['tables']['plan']['id'] = ['id'];$this->config['tables']['regional_group']['id'] = ['id'];

$this->config['tables']['rescue_center'] = ['id','label','company','city',];

$this->config['tables']['actions']['id'] = ['id'];$this->config['tables']['city']['id'] = ['id'];$this->config['tables']['company']['id'] = ['id'];$this->config['tables']['district']['id'] = ['id'];$this->config['tables']['emergency_geste']['id'] = ['id'];$this->config['tables']['engin']['id'] = ['id'];$this->config['tables']['engin_tools']['id'] = ['id'];$this->config['tables']['files']['id'] = ['id'];$this->config['tables']['history_data']['id'] = ['id'];$this->config['tables']['incident']['id'] = ['id'];$this->config['tables']['module']['id'] = ['id'];$this->config['tables']['module_role']['id'] = ['id'];$this->config['tables']['national_group']['id'] = ['id'];$this->config['tables']['plan']['id'] = ['id'];$this->config['tables']['regional_group']['id'] = ['id'];$this->config['tables']['rescue_center']['id'] = ['id'];

$this->config['tables']['roles'] = ['id','name','description',];

$this->config['tables']['actions']['id'] = ['id'];$this->config['tables']['city']['id'] = ['id'];$this->config['tables']['company']['id'] = ['id'];$this->config['tables']['district']['id'] = ['id'];$this->config['tables']['emergency_geste']['id'] = ['id'];$this->config['tables']['engin']['id'] = ['id'];$this->config['tables']['engin_tools']['id'] = ['id'];$this->config['tables']['files']['id'] = ['id'];$this->config['tables']['history_data']['id'] = ['id'];$this->config['tables']['incident']['id'] = ['id'];$this->config['tables']['module']['id'] = ['id'];$this->config['tables']['module_role']['id'] = ['id'];$this->config['tables']['national_group']['id'] = ['id'];$this->config['tables']['plan']['id'] = ['id'];$this->config['tables']['regional_group']['id'] = ['id'];$this->config['tables']['rescue_center']['id'] = ['id'];$this->config['tables']['roles']['id'] = ['id'];

$this->config['tables']['type_agent'] = ['id','label',];

$this->config['tables']['actions']['id'] = ['id'];$this->config['tables']['city']['id'] = ['id'];$this->config['tables']['company']['id'] = ['id'];$this->config['tables']['district']['id'] = ['id'];$this->config['tables']['emergency_geste']['id'] = ['id'];$this->config['tables']['engin']['id'] = ['id'];$this->config['tables']['engin_tools']['id'] = ['id'];$this->config['tables']['files']['id'] = ['id'];$this->config['tables']['history_data']['id'] = ['id'];$this->config['tables']['incident']['id'] = ['id'];$this->config['tables']['module']['id'] = ['id'];$this->config['tables']['module_role']['id'] = ['id'];$this->config['tables']['national_group']['id'] = ['id'];$this->config['tables']['plan']['id'] = ['id'];$this->config['tables']['regional_group']['id'] = ['id'];$this->config['tables']['rescue_center']['id'] = ['id'];$this->config['tables']['roles']['id'] = ['id'];$this->config['tables']['type_agent']['id'] = ['id'];

$this->config['tables']['users'] = ['id','first_name','last_name','matricule','phone_number','casern','type_agent','created_at','updated_at','photo','role','status','password_',];

$this->config['tables']['actions']['id'] = ['id'];$this->config['tables']['city']['id'] = ['id'];$this->config['tables']['company']['id'] = ['id'];$this->config['tables']['district']['id'] = ['id'];$this->config['tables']['emergency_geste']['id'] = ['id'];$this->config['tables']['engin']['id'] = ['id'];$this->config['tables']['engin_tools']['id'] = ['id'];$this->config['tables']['files']['id'] = ['id'];$this->config['tables']['history_data']['id'] = ['id'];$this->config['tables']['incident']['id'] = ['id'];$this->config['tables']['module']['id'] = ['id'];$this->config['tables']['module_role']['id'] = ['id'];$this->config['tables']['national_group']['id'] = ['id'];$this->config['tables']['plan']['id'] = ['id'];$this->config['tables']['regional_group']['id'] = ['id'];$this->config['tables']['rescue_center']['id'] = ['id'];$this->config['tables']['roles']['id'] = ['id'];$this->config['tables']['type_agent']['id'] = ['id'];$this->config['tables']['users']['id'] = ['id'];
