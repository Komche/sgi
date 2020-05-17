<?php
$title = "Détail du projet";
//$equipe = 1;
if (isset($_GET['projet'])) extract($_GET);
ob_start();
?>
<div>
    <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border">
                <i class="fa  fa-key"></i>
                <h3 class="box-title"><b><?= Manager::getData('projet', 'id_projet', $projet)['data']['nom_projet']?></b></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="table_candidats" class="table table-bordered">
                    <thead>

                    </thead>
                    <tbody>
                    <?php
                    $target = '';
                    if ($_SERVER["SERVER_NAME"] == 'localhost') {
                        $target = "http://localhost/Coronackathon/";
                    } else {
                        $target = "http://coronackathon.org/";
                    }
                    $data = Manager::getData('projet', 'id_projet', $projet, true)['data'];
                    
                      foreach ($data as $key => $value) {;?>
                        <tr>
                            <th>Logo</th>
                            <td><img width="100" src="<?= $target. Manager::getDatas(new files())->getId($value['file'])->getFile_url() ?>" class="img-circle" alt="Logo| <?= $value['nom_projet']?>"/></td>
                        </tr>
                        <tr>
                            <th>Nom</th>
                            <td><?= $value['nom_projet']?></td>
                        </tr>
                        <tr >
                            <th>Domaine</th>
                            <td><?= $value['domaine']?></td>
                        </tr>
                        <tr>
                            <th>Description</th>
                            <td><?= $value['description']?></td>
                        </tr>
                        <tr>
                            <th>Solution</th>
                            <td><?= $value['solution']?></td>
                        </tr>
                        <tr>
                            <th>Statut</th>
                            <td><?= $value['statut']?></td>
                        </tr>
                        <tr>
                            <th>Besoin Technique</th>
                            <td><?= $value['besoin_tech']?></td>
                        </tr>
                        <tr>
                            <th>Equipe</th>
                            <td><?= (Manager::getDatas(new equipe())->getId_equipe($value['equipe'])->getNom_equipe())?></td>
                        </tr>
                      <?php } ?>
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