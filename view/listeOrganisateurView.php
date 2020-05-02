<?php
$title = Manager::getDatas(new roles())->getId($_GET['role'])->getName() ;
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
                  <th>Nom & prénom</th>
                  <th>Email</th>
                  <th>Téléphone</th>
                  <th>Profile</th>
                  <th>Image</th>
                </tr>
                <?php 
                  $users = new users();
                  $data = Manager::getDatas($users)->getRole($_GET['role'])->all();
                  //print_r($data);
                  if ((is_array($data) || is_object($data)) && empty($data['message'])) {
                    foreach ($data as $value) {
                      
                   
                ?>
                <tr>
                  <td><?= $value['last_name'] . ' ' . $value['first_name'] ?></td>
                  <td><?= $value['email'] ?></td>
                  <td><?= $value['phone_number'] ?></td>
                  <?php
                    if ($_GET['role']==7) {
                     ?>
                     <td><?= $value['profil'] ?></td>
                     <?php
                    } else {
                      ?>
                      <td><?= Manager::getDatas(new type_agent())->getId($value['type_agent'])->getLabel() ?></td>
                      <?php
                    }
                    
                  ?>
                  <td>
                  <img width="50" src="<?= Manager::getDatas(new files())->getId($value['photo'])->getFile_url() ?>" class="img-circle" alt="Cinque Terre">
                  
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