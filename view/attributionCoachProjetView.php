<?php
$title = "Attribution de coach à l'équipe/projet";
$equipe = 1;
if (isset($_GET['equipe'])) extract($_GET);
ob_start();
?>
<div class="row">

  <div class="col-md-12">
    <div class="box">
      <div class="box-header with-border">
        <i class="fa  fa-key"></i>
        <h3 class="box-title"><b><?= Manager::getData('projet', 'equipe', $equipe)['data']['nom_projet'] . ' / ' . Manager::getData('equipe', 'id_equipe', $equipe)['data']['nom_equipe']?></b></h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <form action="">
          <table id="table_coach" class="table table-bordered">
            <thead>
              <tr>
                <th>Nom et Prénoms</th>
                <th>Domaine</th>
                <th>Profil</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody id="body_coach">
            </tbody>
            <?php
            $data = Manager::getData('users', 'role', 7 , true)['data'];
            if (is_array($data) || is_object($data)) {
              foreach ($data as $value) {
                ?>
                <tr>
                  <td><?= $value['first_name'] . ' ' . $value['last_name'] ?></td>
                  <td><?= $value['domaine'] ?></td>
                  <td><?= $value['profil'] ?></td>
                  <td>
                    <div class="form-group">
                          <div class="col-sm-offset-2 col-sm-10">
                            <div class="checkbox">
                              <label>
                                <input class="coach_is_checked" onchange="addCoachEquipe(this)" value="<?= $value['id'] ?>" type="checkbox"> coacher l'équipe
                              </label>
                            </div>
                          </div>
                        </div>
                  </td>
                </tr>
            <?php
              }
            } else {
              Manager::messages('Aucune donnée trouvé', 'alert-warning');
            }
            ?>
            </tbody>
          </table>
        </form>
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