<?php 
    $title = "Utilisateurs";
    ob_start();
?>
    <div class="row">

        <div class="col-md-6">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title"><?= $title ?></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tbody><tr>
                  <th style="width: 10px">Nom</th>
                  <th>Prénom</th>
                  <th>Matricule</th>
                  <th>N° de téléphone</th>
                  <th>Casern</th>
                  <th>Type agent</th>
                  <th>Action</th>
                </tr>
                <?php 
                  $data = Manager::getDatas('roles');
                  if (is_array($data) || is_object($data)) {
                    foreach ($data as $value) {
                      
                   
                ?>
                <tr>
                  <td><?= $value['name'] ?></td>
                  <td><?= $value['description'] ?></td>
                  <td>
                    <a class="btn btn-primary">
                      <i class="fa fa-edit"></i>
                    </a>
                    <a href="index.php?action=module&role=<?= $value['id'] ?>" class="btn btn-primary">
                      <i class="fa fa-plus"></i> 
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