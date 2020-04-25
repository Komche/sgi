<?php 
    $title = "Ajouter un utilisateur";
    ob_start();
?>
    <div class="row">
    <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><?=$title ?></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label for="first_name">Nom</label>
                  <input type="text" required class="form-control" id="first_name" name="first_name" placeholder="Veuillez entrer le nom de l'utilisateur">
                </div>
                <div class="form-group">
                  <label for="last_name">Prénom</label>
                  <input type="text" required class="form-control" id="last_name" name="last_name" placeholder="Veuillez entrer le prénom de l'utilisateur">
                </div>
                <!-- <div class="form-group">
                  <label for="matricule">Matricule</label>
                  <input type="tel" required class="form-control" id="matricule" name="matricule" placeholder="Veuillez entrer le matricule">
                </div> -->
                <div class="form-group">
                  <label for="phone_number">N° de téléphone</label>
                  <input type="tel"  class="form-control" id="phone_number" name="phone_number" placeholder="Veuillez entrer le N° de téléphone de l'utilisateur">
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="Veuillez entrer l'adresse mail">
                </div>
                <!-- <div class="form-group">
                  <label>Centre de sécours</label>
                  <select class="form-control" id="casern" name="casern">
                  <?php 
                  //$data = Manager::getData('rescue_center')['data'];
                  //Manager::showError($data);
                  // if (is_array($data) || is_object($data)) {
                  //   foreach ($data as $value) {
                      
                   
                ?>
                <option value="<?= $value['id'] ?>"><?= $value['label'] ?></option>
                <?php 
                  //  }
                  // }else {
                  //    Manager::messages('Aucune donnée trouvé', 'alert-warning');
                  // // }
                ?>
              </select>
              </div> -->
              <div class="form-group">
                  <label>Profile</label>
                  <select class="form-control" id="type_agent" name="type_agent">
                  <?php 
                  $data = Manager::getData('type_agent')['data'];
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
                  <label>Rôle</label>
                  <select class="form-control" id="role" name="role">
                  <?php 
                  $data = Manager::getData('roles')['data'];
                  if (is_array($data) || is_object($data)) {
                    foreach ($data as $value) {
                      
                   
                ?>
                <option value="<?= $value['id'] ?>"><?= $value['name'] ?></option>
                <?php 
                   }
                  }else {
                     Manager::messages('Aucune donnée trouvé', 'alert-warning');
                  }
                ?>
              </select>
              </div>
              <div class="form-group" style="text-align: center;">
                    <img src="http://via.placeholder.com/150x150" id="profile_img" style="height: 100px; border-radius: 50%" alt="">
                    <!-- hidden file input to trigger with JQuery  -->
                    <input type="file" name="profile_picture" id="profile_input" value="" style="display: none;">
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Valider</button>
                <p></p>
                <?php 
                if (!empty($_SESSION['messages'])) {
                  if ($_SESSION['messages']['code']==1) {
                    echo Manager::messages($_SESSION['messages']['message'], 'alert-success');
                  }else {
                    echo Manager::messages($_SESSION['messages']['message'], 'alert-danger');
                  }
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