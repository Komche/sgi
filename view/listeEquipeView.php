<?php
$title = "Liste des Equipes";
ob_start();
?>
<div>
    <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border">
                <i class="fa  fa-key"></i>
                <h3 class="box-title"><b><?= $title?></b></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <table class="table table-bordered">
            <tbody>
            <tr>
              <th>Nom</th>
              <th>Region</th>
              <!--<th>Pays</th>-->
              <th>Membres</th>
            </tr>
            <?php 
              $equipe = new equipe();
              $data = Manager::getDatas($equipe)->all();
              //print_r($data);
              if ((is_array($data) || is_object($data)) && empty($data['message'])) {
                foreach ($data as $value) {
                  
                
            ?>
            <tr>
              <td><?= $value['nom_equipe'] ?></td>
              <td><?= Manager::getDatas(new region())->getId_region($value['region'])->getNom_region() ?></td>
              <!--<td><?//= Manager::getDatas(new pays())->getId_pays($value['pays'])->getNom_pays() ?></td>-->
              <td><?= Manager::Count('candidat', 'equipe', $value['id_equipe'])['total'] ?></td>
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
        </div>
    </div>
</div>

<?php
$content = ob_get_clean();
require('template.php');
?>