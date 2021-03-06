<?php 
    $title = "Compagnie";
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
                  <label for="label">Nom de la compagnie</label>
                  <input type="text" required class="form-control" id="label" name="label" placeholder="Le nom de la compagnie">
                </div>
                <div class="form-group">
                  <label>Groupement Régional</label>
                  <select class="form-control" id="regional_group" name="regional_group">
                  <?php 
                  $data = Manager::getData('regional_group');
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
                  $data = Manager::getData('city');
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
                  <th>Compagnie</th>
                  <th>Groupement Régional</th>
                  <th>Ville</th>
                  <th>Action</th>
                </tr>
                <?php 
                  $data = Manager::getData('company');
                  if (is_array($data) || is_object($data)) {
                    foreach ($data as $value) {
                      
                   
                ?>
                <tr>
                  <td><?= $value['label'] ?></td>
                  <td><?= Manager::getData('regional_group', 'id', $value['regional_group'])['label'] ?></td>
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