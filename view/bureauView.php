<?php
$title = "Ajouter un bureau";
ob_start();
?>
<div class="row">
  <div class="col-md-12">
    <!-- general form elements -->
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title"><?= $title ?></h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->
      <form role="form" method="post" enctype="multipart/form-data">
        <div class="box-body">
          <div class="form-group">
            <label for="libellebureau">Titre du bureau</label>
            <input type="text" required class="form-control" id="libellebureau" name="libellebureau" placeholder="Veuillez entrer le titre du bureau">
          </div>
          <div class="form-group">
            <label>Type de bureau</label>
            <select class="form-control" id="typebureau" name="typebureau">
              <option value="BEN">BEN</option>
              <option value="Section">Section</option>
              <option value="Sous section">Sous section</option>
              <option value="Commission">Commission</option>
            </select>
          </div>
          <div class="form-group">
            <label>Bureau</label>
            <select class="form-control" id="sub_bureau" name="sub_bureau">
              <?php
              $bureu = new bureau();
              $data = Manager::getDatas($bureu)->all();
              if (is_array($data) || is_object($data)) {
                foreach ($data as $value) {
                  if(empty($data['message'])):

              ?>
                  <option value="<?= $value['idBureau'] ?>"><?= $value['libellebureau'] ?></option>
              <?php
                  
                  else :
                    echo(`<option value="null"></option>`);
                  endif;
                }
              } else {
                Manager::messages('Aucune donnée trouvé', 'alert-warning');
              }
              ?>
            </select>
          </div>
          <div class="form-group">
            <label>Ville</label>
            <select class="form-control" id="idVille" name="idVille">
              <?php
              $ville = new ville();
              $data = Manager::getDatas($ville)->all();
              if (is_array($data) || is_object($data)) {
                foreach ($data as $value) {


              ?>
                  <option value="<?= $value['idVille'] ?>"><?= $value['nomVille'] ?></option>
              <?php
                }
              } else {
                Manager::messages('Aucune donnée trouvé', 'alert-warning');
              }
              ?>
            </select>
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
  <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title"><?=$title ?></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tbody><tr>
                  <th>Titre de Bureau</th>
                  <th>Type de Bureau</th>
                  <th>Ville</th>
                  <th>Action</th>
                </tr>
                <?php 
                  $bureau = new bureau();
                  $data = Manager::getDatas($bureau)->all();
                  if (is_array($data) || is_object($data)) {
                    foreach ($data as $value) {
                      
                   
                ?>
                <tr>
                  <td><?= $value['libellebureau'] ?></td>
                  <td><?= $value['typebureau'] ?></td>
                  <td><?= Manager::getDatas(new ville())->getIdVille($value['idVille'])->getNomVille() ?></td>
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