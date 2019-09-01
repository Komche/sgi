<?php
$title = "Geste de secours";
ob_start();
?>
<div class="row">

  <div id="gallery">
    <section>
      <div class="container">
        <div class="row">
          <?php
          $i=0;
          $datas = Manager::getDatas('plan');
          foreach ($datas as $key => $value) {

            $i++;
            ?>
            <div class="col-md-8 col-sm-12 co-xs-12 gal-item">
              <div class="box">
                <a title="<?= $value['title'] ?>" class="link-gallery">
                  <img class="img-gallery modal-img" src="<?= Manager::getData('files', 'id', $value['file'])['file_url']; ?>">
                </a>
              </div>
            </div>
            <?php 
              if ($i%2==0) {
                echo('<!--</div>-->
            <!--<div class="row">-->');
              }
            ?>
            
          <?php } ?>
        </div>
      </div>
    </section>
    <!-- Modal -->
    <div id="myModal" class="modal">
      <!-- Boton para cerrar el modal -->
      <span class="close">×</span>
      <!-- Imagen a mostrar -->
      <span class="zoom" id="img-zoom" style="position: relative; overflow: hidden;">
        <img class="modal-content" id="img01">
      </span>
      <!-- Descripcion de la imagen -->
      <div id="caption">hola</div>
    </div>
  </div>

</div>
<?php
$content = ob_get_clean();
require('template.php');
?>