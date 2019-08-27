<?php
$title = "Utilisateurs";
ob_start();
?>
<div class="row">
  <div class="box">
    <div class="box-header">
      <h3 class="box-title"><?= $title ?></h3>
    </div>
    <!-- /.box-header -->
    
    <div class="box-body">
      <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
        <!--<div class="row">
          <div class="col-sm-6">
            <div class="dataTables_length" id="example1_length"><label>Show <select name="example1_length" aria-controls="example1" class="form-control input-sm">
                  <option value="10">10</option>
                  <option value="25">25</option>
                  <option value="50">50</option>
                  <option value="100">100</option>
                </select> entries</label></div>
          </div>
          <div class="col-sm-6">
            <div id="example1_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="example1"></label></div>
          </div>
        </div>-->
        <div class="row">
          <div class="col-sm-12">
            <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
              <thead>
                <tr role="row">
                  <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 182.467px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Nom & Prénom</th>
                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 155.9px;" aria-label="Engine version: activate to sort column ascending">Matricule</th>
                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 110.883px;" aria-label="CSS grade: activate to sort column ascending">N° de téléphone</th>
                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 110.883px;" aria-label="CSS grade: activate to sort column ascending">Casern</th>
                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 110.883px;" aria-label="CSS grade: activate to sort column ascending">Type agent</th>
                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 110.883px;" aria-label="CSS grade: activate to sort column ascending">Rôle</th>
                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 110.883px;" aria-label="CSS grade: activate to sort column ascending">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $i = 0;
                $data = Manager::getDatas('users');
                if (is_array($data) || is_object($data)) {
                  foreach ($data as $value) {
                    $i++;
                    if ($i % 2 == 0) :
                      ?>

                <tr role="row" class="odd">
                  <td class="sorting_1"><?= $value['last_name'] . ' ' . $value['first_name'] ?></td>
                  <td><?= $value['matricule'] ?></td>
                  <td><?= $value['phone_number'] ?></td>
                  <td><?= Manager::getData('rescue_center', 'id', $value['casern'])['label'] ?></td>
                  <td><?= Manager::getData('type_agent', 'id', $value['type_agent'])['label'] ?></td>
                  <td><?= Manager::getData('roles', 'id', $value['role'])['name'] ?></td>
                  <td>A</td>
                </tr>
                <?php else : ?>
                <tr role="row" class="even">
                  <td class="sorting_1"><?= $value['last_name'] . ' ' . $value['first_name'] ?></td>
                  <td><?= $value['matricule'] ?></td>
                  <td><?= $value['phone_number'] ?></td>
                  <td><?= Manager::getData('rescue_center', 'id', $value['casern'])['label'] ?></td>
                  <td><?= Manager::getData('type_agent', 'id', $value['type_agent'])['label'] ?></td>
                  <td><?= Manager::getData('roles', 'id', $value['role'])['name'] ?></td>
                  <td>A</td>
                </tr>
                <?php endif; ?>
                <?php
                  }
                } else {
                  Manager::messages('Aucune donnée trouvé', 'alert-warning');
                }
                ?>
              </tbody>
              <tfoot>
                <tr>
                  <th rowspan="1" colspan="1">Nom et Prénom</th>
                  <th rowspan="1" colspan="1">Matricule</th>
                  <th rowspan="1" colspan="1">N° de téléphone</th>
                  <th rowspan="1" colspan="1">Casern</th>
                  <th rowspan="1" colspan="1">Type agent</th>
                  <th rowspan="1" colspan="1">Rôle</th>
                  <th rowspan="1" colspan="1">Action</th>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
        <!--<div class="row">
          <div class="col-sm-5">
            <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div>
          </div>
          <div class="col-sm-7">
            <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
              <ul class="pagination">
                <li class="paginate_button previous disabled" id="example1_previous"><a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0">Previous</a></li>
                <li class="paginate_button active"><a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0">1</a></li>
                <li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0">2</a></li>
                <li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0">3</a></li>
                <li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="4" tabindex="0">4</a></li>
                <li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="5" tabindex="0">5</a></li>
                <li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="6" tabindex="0">6</a></li>
                <li class="paginate_button next" id="example1_next"><a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0">Next</a></li>
              </ul>
            </div>
          </div>
        </div>-->
      </div>
    </div>
    <!-- /.box-body -->
  </div>
</div>
<?php
$content = ob_get_clean();
require('template.php');
?>