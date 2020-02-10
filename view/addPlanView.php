<?php
$title = "Ajouter un geste de sécours";
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
            <label for="title">Titre</label>
            <input type="text" required class="form-control" id="title" name="title" placeholder="Le nom du rôle">
          </div>

        <div class="form-group">
          <label for="files">Image du plan</label>
          <input type="file" required class="form-control" id="file" name="file" placeholder="Sélctionner l'image">
        </div>
        <!-- /.box-body -->

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