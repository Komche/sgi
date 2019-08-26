<?php 
    $title = "Groupement régional";
    ob_start();
?>
    <div class="row">
    <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><?=$title ?></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label for="label">Nom du groupement</label>
                  <input type="text" required class="form-control" id="label" name="label" placeholder="Le nom du rôle">
                </div>
                <div class="form-group">
                  <label>Groupement National</label>
                  <select class="form-control" id="national_group" name="national_group">
                  <?php 
                  $data = Manager::getDatas('national_group');
                  if (is_array($data) || is_object($data)) {
                    foreach ($data as $value) {
                      
                   
                ?>
                <option value="<?= $value['id'] ?>"><?= $value['label'] ?></option>
                <?php 
                   }
                  }else {
                     Manager::messages('Aucune donnée trouvé', 'alert-warning');
                  }
                ?>
              </select>
              </div>
              <div class="form-group">
                  <label>Ville</label>
                  <select class="form-control" id="city" name="city">
                  <?php 
                  $data = Manager::getDatas('city');
                  if (is_array($data) || is_object($data)) {
                    foreach ($data as $value) {
                      
                   
                ?>
                <option value="<?= $value['id'] ?>"><?= $value['label'] ?></option>
                <?php 
                   }
                  }else {
                     Manager::messages('Aucune donnée trouvé', 'alert-warning');
                  }
                ?>
              </select>
              </div>
              </div>

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Valider</button>
                <p></p>
                <?php 
                if (isset($_SESSION['messages'])) {
                  echo Manager::messages($_SESSION['messages'], 'alert-danger');
                }
              ?>
              </div>
            </form>
          </div>
    </div>

    <div class="col-md-6">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title"><?=$title ?></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tbody><tr>
                  <th>Groupement régional</th>
                  <th>Groupement National</th>
                  <th>Ville</th>
                  <th>Action</th>
                </tr>
                <?php 
                  $data = Manager::getDatas('regional_group');
                  if (is_array($data) || is_object($data)) {
                    foreach ($data as $value) {
                      
                   
                ?>
                <tr>
                  <td><?= $value['label'] ?></td>
                  <td><?= Manager::getData('national_group', 'id', $value['national_group'])['label'] ?></td>
                  <td><?= Manager::getData('city', 'id', $value['city'])['label'] ?></td>
                  <td>
                    <a class="btn btn-primary">
                      <i class="fa fa-edit"></i>
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