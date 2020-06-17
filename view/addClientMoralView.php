<?php
$title = "Ajouter une personne morale";
$datas = "";
$src = "";
if (!empty($_GET['modif']) && ctype_digit($_GET['modif'])) {
  $title = "Modifier un utilisateur";
  $datas = Manager::getData("users", "id", $_GET['modif'])['data'];
  $src = Manager::getData("files", "id", $datas['photo'])['data']['file_url'];
}

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
        <div class="box-body row">
          <div class="form-group col-lg-4 col-sm-12">
            <label for="type_client">type client</label>
            <select class="form-control"  class="form-control"  name="type_client" id="type_client">
              <option value="personne physique">Personne physique</option>
              <option value="personne morale">Personne morale</option>
            </select>

          </div>
          <div class="form-group col-lg-4 col-sm-12">
            <label for="civilite">Civilité</label>
            <select class="form-control"  class="form-control"  name="civilite" id="civilite">
              <option value="Monsieur">Monsieur</option>
              <option value="Madame">Madame</option>
            </select>

          </div>
          <div class="form-group col-lg-4 col-sm-12">
            <label for="nom_client">nom</label>
            <input value="" type="text" required class="form-control" id="nom_client" name="nom_client" placeholder="Veuillez entrer nom_client">
          </div>
          <div class="form-group col-lg-4 col-sm-12">
            <label for="prenom_client">prenom</label>
            <input value="" type="text" required class="form-control" id="prenom_client" name="prenom_client" placeholder="Veuillez entrer prenom_client">
          </div>
          <div class="form-group col-lg-4 col-sm-12">
            <label for="nom_jeune_fille">nom de fille</label>
            <input value="" type="text" required class="form-control" id="nom_jeune_fille" name="nom_jeune_fille" placeholder="Veuillez entrer nom_jeune_fille">
          </div>
          <div class="form-group col-lg-4 col-sm-12">
            <label for="date_naissance">date de naissance</label>
            <input value="" type="date" required class="form-control" id="date_naissance" name="date_naissance" placeholder="Veuillez entrer date_naissance">
          </div>
          <div class="form-group col-lg-4 col-sm-12">
            <label for="lieu_naissanc">lieu de naissance</label>
            <input value="" type="text" required class="form-control" id="lieu_naissanc" name="lieu_naissanc" placeholder="Veuillez entrer lieu_naissanc">
          </div>
          <div class="form-group col-lg-4 col-sm-12">
            <label for="nationalite">nationalite</label>
            <input value="" type="text" required class="form-control" id="nationalite" name="nationalite" placeholder="Veuillez entrer nationalite">
          </div>
          <div class="form-group col-lg-4 col-sm-12">
            <label for="situation_mat">situation matrimoniale</label>
            <input value="" type="text" required class="form-control" id="situation_mat" name="situation_mat" placeholder="Veuillez entrer situation_mat">
          </div>
          <div class="form-group col-lg-4 col-sm-12">
            <label for="regime_mat">regime matrimoniale</label>
            <input value="" type="text" required class="form-control" id="regime_mat" name="regime_mat" placeholder="Veuillez entrer regime_mat">
          </div>
          <div class="form-group col-lg-4 col-sm-12">
            <label for="nb_enfant">nombre d'enfant</label>
            <input value="" type="text" required class="form-control" id="nb_enfant" name="nb_enfant" placeholder="Veuillez entrer nb_enfant">
          </div>
          <div class="form-group col-lg-4 col-sm-12">
            <label for="nom_conjoint">nom du conjoint(e)</label>
            <input value="" type="text" required class="form-control" id="nom_conjoint" name="nom_conjoint" placeholder="Veuillez entrer nom_conjoint">
          </div>
          <div class="form-group col-lg-4 col-sm-12">
            <label for="adresse_post">adresse postale</label>
            <input value="" type="text" required class="form-control" id="adresse_post" name="adresse_post" placeholder="Veuillez entrer adresse_post">
          </div>
          <div class="form-group col-lg-4 col-sm-12">
            <label for="code_postal">code postale</label>
            <input value="" type="text" required class="form-control" id="code_postal" name="code_postal" placeholder="Veuillez entrer code_postal">
          </div>
          <div class="form-group col-lg-4 col-sm-12">
            <label for="observation">observation</label>
            <input value="" type="text" required class="form-control" id="observation" name="observation" placeholder="Veuillez entrer observation">
          </div>
          <div class="form-group col-lg-4 col-sm-12">
            <label for="adresse_geo">adresse geographique</label>
            <input value="" type="text" required class="form-control" id="adresse_geo" name="adresse_geo" placeholder="Veuillez entrer adresse_geo">
          </div>
          <div class="form-group col-lg-4 col-sm-12">
            <label for="adresse_pro">adresse professionel</label>
            <input value="" type="text" required class="form-control" id="adresse_pro" name="adresse_pro" placeholder="Veuillez entrer adresse_pro">
          </div>
          <div class="form-group col-lg-4 col-sm-12">
            <label for="type_piece">type de piece</label>
            <select class="form-control"  name="type_piece" id="type_piece">
              <option value="Carte d'identité nationale">Carte d'identité nationale</option>
              <option value="Permis de conduire">Permis de conduire</option>
            </select>
          </div>
          <div class="form-group col-lg-4 col-sm-12">
            <label for="num_piece">numero de piece</label>
            <input value="" type="text" required class="form-control" id="num_piece" name="num_piece" placeholder="Veuillez entrer num_piece">
          </div>
          <div class="form-group col-lg-4 col-sm-12">
            <label for="date_delivrance_piece">date de delivrance de la piece</label>
            <input value="" type="date" required class="form-control" id="date_delivrance_piece" name="date_delivrance_piece" placeholder="Veuillez entrer date_delivrance_piece">
          </div>
          <div class="form-group col-lg-4 col-sm-12">
            <label for="date_fin_piece">date d'expiration de piece</label>
            <input value="" type="date" required class="form-control" id="date_fin_piece" name="date_fin_piece" placeholder="Veuillez entrer date_fin_piece">
          </div>
          <div class="form-group col-lg-4 col-sm-12">
            <label for="piece_authoite">authorite de delivrance de la piece</label>
            <input value="" type="text" required class="form-control" id="piece_authoite" name="piece_authoite" placeholder="Veuillez entrer piece_authoite">
          </div>
          <div class="form-group col-lg-4 col-sm-12">
            <label for="lieu_piece">lieu_piece</label>
            <input value="" type="text" required class="form-control" id="lieu_piece" name="lieu_piece" placeholder="Veuillez entrer lieu_piece">
          </div>
          <div class="form-group col-lg-4 col-sm-12">
            <label for="pays_residence">pays de residence</label>
            <select class="form-control"  name="pays_residence" id="pays_residence">
              <?php
              $sql = "SELECT * FROM pays";
              $data = Manager::getMultiplesRecords($sql);
              foreach ($data as $key => $value) {
              
              ?>
              <option value="<?= $value['id'] ?>"><?= $value['name'] ?></option>
            <?php } ?>
            </select>
          </div>
          <div class="form-group col-lg-4 col-sm-12">
            <label for="ville_residence">ville de residence</label>
            <select class="form-control"  name="ville_residence" id="ville_residence">
              <?php
              $sql = "SELECT * FROM ville";
              $data = Manager::getMultiplesRecords($sql);
              foreach ($data as $key => $value) {
              
              ?>
              <option value="<?= $value['id_region'] ?>"><?= $value['nom_region'] ?></option>
              <?php } ?>
            </select>
          </div>
          <div class="form-group col-lg-4 col-sm-12">
            <label for="quartier">quartier</label>
            <input value="" type="text" required class="form-control" id="quartier" name="quartier" placeholder="Veuillez entrer quartier">
          </div>
          <div class="form-group col-lg-4 col-sm-12">
            <label for="phone_number_1">N° de téléphone 1</label>
            <input value="" type="text" required class="form-control" id="phone_number_1" name="phone_number_1" placeholder="Veuillez entrer phone_number_1">
          </div>
          <div class="form-group col-lg-4 col-sm-12">
            <label for="phone_number_2">N° de téléphone 2</label>
            <input value="" type="text" required class="form-control" id="phone_number_2" name="phone_number_2" placeholder="Veuillez entrer phone_number_2">
          </div>

        </div>
        <div class="form-group col-lg-4 col-sm-12">
          <label for="email_1">email 1</label>
          <input value="" type="text" required class="form-control" id="email_1" name="email_1" placeholder="Veuillez entrer email_1">
        </div>
        <div class="form-group col-lg-4 col-sm-12">
          <label for="email_2">email 2</label>
          <input value="" type="text" required class="form-control" id="email_2" name="email_2" placeholder="Veuillez entrer email_2">
        </div>
        <div class="form-group col-lg-4 col-sm-12">
          <label for="langue">langue</label>
          <select name="langue" id="langue" class="form-control">
          <?php
              $sql = "SELECT * FROM langue";
              $data = Manager::getMultiplesRecords($sql);
              foreach ($data as $key => $value) {
              
              ?>
              <option value="<?= $value['id_langue'] ?>"><?= $value['libelle_langue'] ?></option>
              <?php } ?>
          </select>
        </div>
        <div class="form-group col-lg-4 col-sm-12">
          <label for="modalite">modalite</label>
          <input value="" type="text" required class="form-control" id="modalite" name="modalite" placeholder="Veuillez entrer modalite">
        </div>
        <div class="form-group col-lg-4 col-sm-12">
          <label for="date_relation">date d'entré en relation</label>
          <input value="" type="date" required class="form-control" id="date_relation" name="date_relation" placeholder="Veuillez entrer date_relation">
        </div>

        <div class="form-group col-lg-4 col-sm-12">
          <label for="photo">photo</label>
          <div class="form-group col-lg-4 col-sm-12" style="text-align: center;">
            <img src="http://via.placeholder.com/150x150" id="profile_img" style="height: 100px; border-radius: 50%" alt="">
            <!-- hidden file input to trigger with JQuery  -->
            <input type="file" name="photo" id="profile_input" value="" style="display: none;">
          </div>
        </div>
        <!-- /.box-body -->

        <div class="box-footer">
          <button type="submit" class="btn btn-primary">Valider</button>
          <p></p>
          <?php
          if (!empty($_SESSION['messages'])) {
            if ($_SESSION['messages']['code'] == 1) {
              echo Manager::messages($_SESSION['messages']['message'], 'alert-success');
            } else {
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