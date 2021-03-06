<?php
$title = "Liste des projets" ;
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
              <th>Nom du projet</th>
              <th>Domaine</th>
              <th>Statut</th>
              <th>Besoin Tech</th>
              <th>Description</th>
              <th>Equipe</th>
              <th>Retenu</th>
              <th>Logo</th>
            </tr>
            <?php 
            $target = '';
            if ($_SERVER["SERVER_NAME"] == 'localhost') {
                $target = "http://localhost/SGI/";
            } else {
                $target = "http://SGI.org/";
            }
              $projet = new projet();
              $data = Manager::getDatas($projet)->all();
              //print_r($data);
              if ((is_array($data) || is_object($data)) && empty($data['message'])) {
                foreach ($data as $value) {
                  
                
            ?>
            <tr>
              <td><?= $value['nom_projet'] ?></td>
              <td><?= $value['domaine'] ?></td>
              <td><?= $value['statut'] ?></td>
              <td><?= $value['besoin_tech'] ?></td>
              <td><?= $value['description'] ?></td>
              <td><?= Manager::getDatas(new equipe())->getId_equipe($value['equipe'])->getNom_equipe() ?></td>
              <td><?= $value['etat_retenu'] ?></td>
              <td>
              <img width="50" src="<?= $target. Manager::getDatas(new files())->getId($value['file'])->getFile_url() ?>" class="img-circle" alt="Cinque Terre">
              
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