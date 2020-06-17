
<div class="form-group">
            <label for="nom">nom</label>
            <input value="" type="text" required class="form-control" id="nom" name="nom" placeholder="Veuillez entrer nom">
          </div><div class="form-group">
            <label for="prenom">prenom</label>
            <input value="" type="text" required class="form-control" id="prenom" name="prenom" placeholder="Veuillez entrer prenom">
          </div><div class="form-group">
            <label for="datenaissance">datenaissance</label>
            <input value="" type="text" required class="form-control" id="datenaissance" name="datenaissance" placeholder="Veuillez entrer datenaissance">
          </div><div class="form-group">
            <label for="lieunaiss">lieunaiss</label>
            <input value="" type="text" required class="form-control" id="lieunaiss" name="lieunaiss" placeholder="Veuillez entrer lieunaiss">
          </div><div class="form-group">
            <label for="nationalite">nationalite</label>
            <input value="" type="text" required class="form-control" id="nationalite" name="nationalite" placeholder="Veuillez entrer nationalite">
          </div><div class="form-group">
            <label for="civilite">civilite</label>
            <input value="" type="text" required class="form-control" id="civilite" name="civilite" placeholder="Veuillez entrer civilite">
          </div><div class="form-group">
            <label for="nbrenfant">nbrenfant</label>
            <input value="" type="text" required class="form-control" id="nbrenfant" name="nbrenfant" placeholder="Veuillez entrer nbrenfant">
          </div><div class="form-group">
            <label for="nomconjoint">nomconjoint</label>
            <input value="" type="text" required class="form-control" id="nomconjoint" name="nomconjoint" placeholder="Veuillez entrer nomconjoint">
          </div><div class="form-group">
            <label for="situationmatrinoniale">situationmatrinoniale</label>
            <input value="" type="text" required class="form-control" id="situationmatrinoniale" name="situationmatrinoniale" placeholder="Veuillez entrer situationmatrinoniale">
          </div><div class="form-group">
            <label for="regimematrinomial">regimematrinomial</label>
            <input value="" type="text" required class="form-control" id="regimematrinomial" name="regimematrinomial" placeholder="Veuillez entrer regimematrinomial">
          </div><div class="form-group">
            <label for="adrpostal">adrpostal</label>
            <input value="" type="text" required class="form-control" id="adrpostal" name="adrpostal" placeholder="Veuillez entrer adrpostal">
          </div><div class="form-group">
            <label for="codepostal">codepostal</label>
            <input value="" type="text" required class="form-control" id="codepostal" name="codepostal" placeholder="Veuillez entrer codepostal">
          </div><div class="form-group">
            <label for="adrgeo">adrgeo</label>
            <input value="" type="text" required class="form-control" id="adrgeo" name="adrgeo" placeholder="Veuillez entrer adrgeo">
          </div><div class="form-group">
            <label for="adrpro">adrpro</label>
            <input value="" type="text" required class="form-control" id="adrpro" name="adrpro" placeholder="Veuillez entrer adrpro">
          </div><div class="form-group">
            <label for="tel1">tel1</label>
            <input value="" type="text" required class="form-control" id="tel1" name="tel1" placeholder="Veuillez entrer tel1">
          </div><div class="form-group">
            <label for="tel2">tel2</label>
            <input value="" type="text" required class="form-control" id="tel2" name="tel2" placeholder="Veuillez entrer tel2">
          </div><div class="form-group">
            <label for="tel3">tel3</label>
            <input value="" type="text" required class="form-control" id="tel3" name="tel3" placeholder="Veuillez entrer tel3">
          </div><div class="form-group">
            <label for="telfixe">telfixe</label>
            <input value="" type="text" required class="form-control" id="telfixe" name="telfixe" placeholder="Veuillez entrer telfixe">
          </div><div class="form-group">
            <label for="fax">fax</label>
            <input value="" type="text" required class="form-control" id="fax" name="fax" placeholder="Veuillez entrer fax">
          </div><div class="form-group">
            <label for="email1">email1</label>
            <input value="" type="text" required class="form-control" id="email1" name="email1" placeholder="Veuillez entrer email1">
          </div><div class="form-group">
            <label for="email2">email2</label>
            <input value="" type="text" required class="form-control" id="email2" name="email2" placeholder="Veuillez entrer email2">
          </div><div class="form-group">
            <label for="resident">resident</label>
            <input value="" type="text" required class="form-control" id="resident" name="resident" placeholder="Veuillez entrer resident">
          </div><div class="form-group">
            <label for="zoneresidence">zoneresidence</label>
            <input value="" type="text" required class="form-control" id="zoneresidence" name="zoneresidence" placeholder="Veuillez entrer zoneresidence">
          </div><div class="form-group">
            <label for="observation">observation</label>
            <input value="" type="text" required class="form-control" id="observation" name="observation" placeholder="Veuillez entrer observation">
          </div><div class="form-group">
            <label for="signature">signature</label>
            <input value="" type="text" required class="form-control" id="signature" name="signature" placeholder="Veuillez entrer signature">
          </div><div class="form-group">
            <label for="modalite">modalite</label>
            <input value="" type="text" required class="form-control" id="modalite" name="modalite" placeholder="Veuillez entrer modalite">
          </div><div class="form-group">
            <label for="daterelation">daterelation</label>
            <input value="" type="text" required class="form-control" id="daterelation" name="daterelation" placeholder="Veuillez entrer daterelation">
          </div><div class="form-group">
            <label for="nomjeunefille">nomjeunefille</label>
            <input value="" type="text" required class="form-control" id="nomjeunefille" name="nomjeunefille" placeholder="Veuillez entrer nomjeunefille">
          </div><div class="form-group">
            <label for="photo">photo</label>
            <input value="" type="text" required class="form-control" id="photo" name="photo" placeholder="Veuillez entrer photo">
          </div><div class="form-group col-lg-4 col-sm-12">
                    <label for="pays">pays</label>
                    <select class="form-control"  name="pays" id="pays">
                      <?php
                      $sql = "SELECT * FROM pays";
                      $data = Manager::getMultiplesRecords($sql);
                      foreach ($data as $key => $value) {
                      
                      ?>
                      <option value="<?= $value['idpays'] ?>"><?= $value['libellepays'] ?></option>
                    <?php } ?>
                    </select>
                  </div><div class="form-group col-lg-4 col-sm-12">
                    <label for="langue">langue</label>
                    <select class="form-control"  name="langue" id="langue">
                      <?php
                      $sql = "SELECT * FROM pays";
                      $data = Manager::getMultiplesRecords($sql);
                      foreach ($data as $key => $value) {
                      
                      ?>
                      <option value="<?= $value['idlangue'] ?>"><?= $value['libellelangue'] ?></option>
                    <?php } ?>
                    </select>
                  </div><div class="form-group col-lg-4 col-sm-12">
                    <label for="piece">piece</label>
                    <select class="form-control"  name="piece" id="piece">
                      <?php
                      $sql = "SELECT * FROM pays";
                      $data = Manager::getMultiplesRecords($sql);
                      foreach ($data as $key => $value) {
                      
                      ?>
                      <option value="<?= $value['idpiece'] ?>"><?= $value['libellepiece'] ?></option>
                    <?php } ?>
                    </select>
                  </div>
                  <div class="form-group col-lg-4 col-sm-12">
                    <label for="societe">societe</label>
                    <select class="form-control"  name="societe" id="societe">
                      <?php
                      $sql = "SELECT * FROM pays";
                      $data = Manager::getMultiplesRecords($sql);
                      foreach ($data as $key => $value) {
                      
                      ?>
                      <option value="<?= $value['idsociete'] ?>"><?= $value['libellesociete'] ?></option>
                    <?php } ?>
                    </select>
                  </div>
