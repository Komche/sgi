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
                  <th>Nom</th>
                  <th>Prénom</th>
                  <th>Date de naissance</th>
                  <th>Lieu de naissance</th>
                  <th>Situation matrimonial</th>
                  <th>Adresse postal</th>
                  <th>Photo</th>
                  <th>Action</th>
                </tr>
                <?php 
                $target = '';
                if ($_SERVER["SERVER_NAME"] == 'localhost') {
                    $target = "http://localhost/sgi/";
                } else {
                    $target = "http://SGI.org/";
                }

                // $sql = "SELECT * FROM client, langue, pays, ville WHERE ";
                  $client = new client();
                  $data = Manager::getDatas($client)->all();
                  //print_r($data);
                  if ((is_array($data) || is_object($data)) && empty($data['message'])) {
                    foreach ($data as $value) {
                      
                   
                ?>
                <tr>
                  <td><?= $value['nom_client'] ?></td>
                  <td><?= $value['prenom_client'] ?></td>
                  <td><?= $value['date_naissance'] ?></td>
                  <td><?= $value['lieu_naissanc'] ?></td>
                  <td><?= limit_text($value['situation_mat'], 30) ?></td>
                  <td><?= $value['adresse_post'] ?></td>
                  <td>
                  <img width="50" src="<?= $target. Manager::getDatas(new files())->getId($value['photo'])->getFile_url() ?>" class="img-circle" alt="Cinque Terre">
                  
                  </td>
                  <td>
                    <form action="" method="post"><button type="submit" name="equipe" value="<?= $value['equipe']?>" class="btn btn-info"><i class="fa fa-edit"></i></button></form>
                    <br>
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