<?php
$title = "Liste des projets";
ob_start();
?>
<style>
  .card {
    /* position: absolute;
    top: 50%;
    left: 50%; */
    transform: translate(-4%, -4%);
    width: 300px;
    min-height: 400px;
    background: #fff;
    box-shadow: 0 20px 50px rgba(0, 0, 0, .1);
    border-radius: 10px;
    transition: 0.5s;
  }

  .card:hover {
    box-shadow: 0 30px 70px rgba(0, 0, 0, .2);
  }

  .card .box {
    position: absolute;
    top: 50%;
    left: 0;
    transform: translateY(-50%);
    text-align: center;
    padding: 20px;
    box-sizing: border-box;
    width: 100%;
  }

  .card .box .img {
    width: 120px;
    height: 120px;
    margin: 0 auto;
    border-radius: 50%;
    overflow: hidden;
  }

  .card .box .img img {
    width: 100%;
    height: 100%;
  }

  .card .box h2 {
    font-size: 20px;
    color: #262626;
    margin: 20px auto;
  }

  .card .box h2 span {
    font-size: 14px;
    background: #e91e63;
    color: #fff;
    display: inline-block;
    padding: 4px 10px;
    border-radius: 15px;
  }

  .card .box p {
    color: #262626;
  }

  .card .box span {
    display: inline-flex;
  }

  .card .box ul {
    margin: 0;
    padding: 0;
  }

  .card .box ul li {
    list-style: none;
    float: left;
  }

  .card .box ul li a {
    display: block;
    color: #aaa;
    margin: 0 10px;
    font-size: 20px;
    transition: 0.5s;
    text-align: center;
  }

  .card .box ul li:hover a {
    color: #e91e63;
    transform: rotateY(360deg);
  }
</style>
<div class="row">

  <div class="container">
    <ul class="nav nav-tabs" role="tablist">
      <li class="nav-item active">
        <a class="nav-link active" data-toggle="tab" href="#home">Tout les projets</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#menu1">Projet retenu</a>
      </li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
      <div id="home" class="container tab-pane active"><br>
        <div class="row">
          <?php
          $i = 0;
          $target = '';
          if ($_SERVER["SERVER_NAME"] == 'localhost') {
            $target = "http://localhost/Coronackathon/";
          } else {
            $target = "http://coronackathon.org/";
          }
          $sql = "SELECT * FROM projet p, equipe e, region r, files f WHERE 
        p.equipe = e.id_equipe AND e.region = r.id_region AND f.id = p.file";
          $data = Manager::getMultiplesRecords($sql);
          if (is_array($data) || is_object($data)) {
            foreach ($data as $key => $value) {


          ?>

              <div class="col-md-6">
                <div style="margin-bottom: 100px; margin-top: 100px" class="card">
                  <div class="box">
                    <div class="img">
                      <img src="<?= $target . $value['file_url'] ?>">
                    </div>
                    <h2><?= $value['nom_projet'] ?><br><span><?= $value['domaine'] ?></span></h2>
                    <p> <?= $value['description'] ?></p>
                    <span>
                      <ul id="ul<?= $value['id_projet'] ?>">
                        <?php

                        $sql = "SELECT * FROM note WHERE projet=?";
                        $data = Manager::getSingleRecords($sql, [$value['id_projet']]);
                        if (is_array($data) || is_object($data)) {


                        ?>
                          <li><button id="btn-note-edit-<?= $data['projet'] ?>" data-id="<?= $data['projet'] ?>" type="button" title="Modifier une note" class="btn btn-note-edit btn-primary center-block"><i class="fa fa-pencil"></i></button></li>
                          <br>
                          <li id="note-res<?= $data['projet'] ?>">
                            <a href="#">Faisabilité: <?= $data['faisabilite']."/5" ?></a>
                            <a href="#">Apport: <?= $data['apport']."/5" ?></a>
                            <a href="#">Originalité: <?= $data['originalite']."/5" ?></a>
                            <a href="#">Viabilité: <?= $data['viabilite']."/5" ?></a>
                            <a href="#"><b>Total: <?= $data['viabilite']+$data['faisabilite']+$data['apport']+$data['originalite']."/20" ?></b></a>
                          </li>
                          <form id="form-note<?= $data['projet'] ?>" style="display: none" method="post" class="form-horizontal">
                            <li>
                              <div class="form-group">
                                <label for="faisabilite" class="col-lg-4 control-label">Faisabilité: </label>
                                <div class="col-lg-8">
                                  <input type="number" value="<?= $data['faisabilite'] ?>" data-parsley-min="0" data-parsley-max="5" data-parsley-required="true" class="form-control" id="faisabilite" name="faisabilite" placeholder="Faisabilité">
                                </div>
                              </div>
                            </li>
                            <li>
                              <div class="form-group">
                                <label for="apport" class="col-lg-4 control-label">Apport: </label>
                                <div class="col-lg-8">
                                  <input type="number" value="<?= $data['apport'] ?>" data-parsley-min="0" data-parsley-max="5" data-parsley-required="true" class="form-control" id="apport" name="apport" placeholder="Apport">
                                </div>
                              </div>
                            </li>
                            <li>
                              <div class="form-group">
                                <label for="originalite" class="col-lg-4 control-label">Originalité: </label>
                                <div class="col-lg-8">
                                  <input type="number" value="<?= $data['originalite'] ?>" data-parsley-min="0" data-parsley-max="5" data-parsley-required="true" class="form-control" id="originalite" name="originalite" placeholder="Originalité">
                                </div>
                              </div>
                            </li>
                            <li>
                              <div class="form-group">
                                <label for="viabilite" class="col-lg-4 control-label">Viabilité: </label>
                                <div class="col-lg-8">
                                  <input type="number" value="<?= $data['viabilite'] ?>" data-parsley-min="0" data-parsley-max="5" data-parsley-required="true" class="form-control" id="viabilite" name="viabilite" placeholder="Viabilité">
                                  <input type="hidden" value="<?= $data['projet'] ?>" data-parsley-required="true" class="form-control" id="projet" name="projet" placeholder="">
                                </div>
                              </div>
                            </li>
                            <li>
                              <button type="submit" class="btn btn-primary">Valider</button>
                            </li>
                          </form>
                        <?php } else {
                          $i++;
                        ?>
                          <button id="btn-note-<?= $value['id_projet'] ?>" type="button" title="Ajouter une note" class="btn btn-note btn-primary"><i class="fa fa-plus"></i></button>
                          <form id="form-note<?= $i ?>" style="display: none" data-parsley-validate action="" method="post" class="form-horizontal">
                            <li>
                              <div class="form-group">
                                <label for="faisabilite" class="col-lg-4 control-label">Faisabilité: </label>
                                <div class="col-lg-8">
                                  <input type="number" data-parsley-min="0" data-parsley-max="5" data-parsley-required="true" class="form-control" id="faisabilite" name="faisabilite" placeholder="Faisabilité">
                                </div>
                              </div>
                            </li>
                            <li>
                              <div class="form-group">
                                <label for="apport" class="col-lg-4 control-label">Apport: </label>
                                <div class="col-lg-8">
                                  <input type="number" data-parsley-min="0" data-parsley-max="5" data-parsley-required="true" class="form-control" id="apport" name="apport" placeholder="Apport">
                                </div>
                              </div>
                            </li>
                            <li>
                              <div class="form-group">
                                <label for="originalite" class="col-lg-4 control-label">Originalité: </label>
                                <div class="col-lg-8">
                                  <input type="number" data-parsley-min="0" data-parsley-max="5" data-parsley-required="true" class="form-control" id="originalite" name="originalite" placeholder="Originalité">
                                </div>
                              </div>
                            </li>
                            <li>
                              <div class="form-group">
                                <label for="viabilite" class="col-lg-4 control-label">Viabilité: </label>
                                <div class="col-lg-8">
                                  <input type="number" data-parsley-min="0" data-parsley-max="5" data-parsley-required="true" class="form-control" id="viabilite" name="viabilite" placeholder="Viabilité">
                                  <input type="hidden" value="<?= $value['id_projet'] ?>" data-parsley-required="true" class="form-control" id="projet" name="projet" placeholder="">
                                </div>
                              </div>
                            </li>
                            <li>
                              <button type="submit" class="btn btn-primary">Valider</button>
                            </li>
                            <!-- <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li> -->
                          </form>
                        <?php } ?>
                      </ul>
                    </span>
                  </div>
                </div>
              </div>

          <?php
            }
          }
          ?>
        </div>
      </div>
      <div id="menu1" class="container tab-pane fade"><br>
        <h3>Menu 1</h3>
        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      </div>
    </div>
  </div>
</div>
<?php
$content = ob_get_clean();
require('template.php');
?>