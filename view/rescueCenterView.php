<?php 
    $title = "Centre de secours";
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
                  <label for="label">Nom du centre de secours</label>
                  <input type="text" required class="form-control" id="label" name="label" placeholder="Le nom du center de sécours">
                </div>
                <div class="form-group">
                  <label>Compagnie</label>
                  <select class="form-control" id="company" name="company">
                  <?php 
                  $data = Manager::getData('company');
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

    
    </div>
<?php 
    $content = ob_get_clean();
    require('template.php');
?>