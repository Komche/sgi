<?php 
    $title = "Inscription";
    ob_start();
?>
<div class="row">
    <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Ouvrir / Fermer</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post">
              <div class="box-body">
                <div class="form-group">
                    <?php $data = Manager::getData('inscription', 'id_inscription', 1)['data']['etat'] ?>
                    <input id="checkbox_etat" type="checkbox" <?= ($data=='Oui') ? 'checked' : '' ?> data-toggle="toggle" data-onstyle="success" data-offstyle="danger" name="etat">
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
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