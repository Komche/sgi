<?php
$title = "Geste de secours";
ob_start();
?>
<div class="row">
  <?php
  $datas = Manager::getData('emergency_geste')['data'];
  foreach ($datas as $key => $value) {


    ?>
  <div class="col-md-6">
    <!-- Box Comment -->
    <div class="box box-widget">
      <div class="box-header with-border">
        <!-- /.user-block -->
        <div class="box-tools">
          <button type="button" class="btn btn-box-tool" data-toggle="tooltip" title="" data-original-title="Mark as read">
            <i class="fa fa-circle-o"></i></button>
          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
          </button>
          <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
        </div>
        <!-- /.box-tools -->
      </div>
      <!-- /.box-header -->
      <div class="box-body" >
        <img class="img-responsive pad" src="<?= Manager::getData('files', 'id', $value['files'])['data']['file_url']; ?>" alt="Photo">

        <p><?= $value['title'] ?></p>
      </div>
      <!-- /.box-body -->
      <div class="box-footer box-comments" >
        <?= $value['description'] ?>

      </div>
      <!-- /.box-footer -->

      <!-- /.box-footer -->
    </div>
    <!-- /.box -->
  </div>
  <?php } ?>
</div>
<?php
$content = ob_get_clean();
require('template.php');
?>