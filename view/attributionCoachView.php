<?php
$title = "Attribution de coach aux projets" ;
ob_start();
?>
<div class="row">
  <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title"><?=$title ?></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tbody>
                <tr>
                  <th>Equipe</th>
                  <th>Nom du projet</th>
                  <th>Domaine</th>
                  <th>Description</th>
                  <th>Logo</th>
                  <th>Coach</th>
                  <th>Action</th>
                </tr>
                <?php 
                $target = '';
                if ($_SERVER["SERVER_NAME"] == 'localhost') {
                    $target = "http://localhost/Coronackathon/";
                } else {
                    $target = "http://coronackathon.org/";
                }
                    $data = Manager::getData('projet', 'etat_retenu', 'Oui', true)['data'];
                  //$projet = new projet();
                  //$data = Manager::getDatas($projet)->all();
                  //print_r($data);
                  if ((is_array($data) || is_object($data))) {
                    foreach ($data as $value) {
                      $equipe = Manager::getDatas(new equipe())->getId_equipe($value['equipe']);
                      $equipe_nom = $equipe->getNom_equipe();
                      $equipe_user = $equipe->getUser();

                      //var_dump($value);
                      //die();
                   
                ?>
                <tr>
                  <td><?= $equipe_nom ?></td>
                  <td><?= $value['nom_projet'] ?></td>
                  <td><?= $value['domaine'] ?></td>
                  <td><?= limit_text($value['description'], 30) ?></td>
                  <td>
                  <img width="50" src="<?= $target. Manager::getDatas(new files())->getId($value['file'])->getFile_url() ?>" class="img-circle" alt="Cinque Terre">
                  </td>
                  <td><?= ($equipe_user!=NULL) ? (Manager::getDatas(new users())->getId($equipe_user)->getFirst_name()) : 'Pas de coach'?></td>
                  <td>
                    <a href="index.php?action=<?= ($equipe_user===NULL) ? "coach&equipe=".$value['equipe'] : "attributionCoach" ?>" class="btn btn-primary">
                      <i class="fa fa-<?= ($equipe_user===NULL) ? 'plus' : 'thumbs-o-up' ?>"></i> 
                    </a>
                    </td>
                </tr>
                <?php 
                   }
                  }else {
                    Manager::messages('Aucune donnée trouvé', 'alert-warning');
                  }
                ?>
              </tbody>
            </table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              </ul>
            </div>
          </div>
      </div>
</div>
<?php
$content = ob_get_clean();
require('template.php');
?>