host = $(location).attr('hostname');
protocol = $(location).attr('protocol');
folder = '';
if (host == 'localhost') {
    folder = '/coronackathon_admin';
} else {
    folder = '/admin';
}
myurl = protocol + '//' + host + folder + '/api/object/';
var $_GET = {};
document.location.search.replace(/\??(?:([^=]+)=([^&]*)&?)/g, function () {
    function decode(s) {
        return decodeURIComponent(s.split("+").join(" "));
    }

    $_GET[decode(arguments[1])] = decode(arguments[2]);
});
getPermission();
getNote3();
// $(document).on('submit', "form", function () {
//     showPleaseWait();
//     var data = $(this).serializeObject();
//     var form_data = JSON.stringify(data);
//     console.log(data);

//     $.ajax({
//         url: myurl + "note",
//         type: "POST",
//         contentType: 'application/json',
//         dataType: "json",
//         data: form_data,
//         success: function (result) {
//             console.log(result);
//             getNote2(data.projet, $id_parent);
//             hidePleaseWait();

//         },
//         error: function (xhr, resp, text) {
//             // show error to console
//             console.log(xhr, resp, text);

//         }
//     });

//     return false;
// });

$('.btn-note').on('click', function () {
    $my_id = $(this).attr('id');
    $id = $("#" + $my_id).next().attr('id');
    $id_parent = $("#" + $my_id).parent().attr('id');
    console.log($id, $id_parent, $my_id);
    $("#" + $my_id).next().toggle();

    $("#" + $id).on('submit', function (e) {
        e.preventDefault();
        var form = $(this);

        form.parsley().validate();

        if (form.parsley().isValid()) {
            showPleaseWait();
            var data = $(this).serializeObject();
            var form_data = JSON.stringify(data);
            console.log(data);

            $.ajax({
                url: myurl + "note",
                type: "POST",
                contentType: 'application/json',
                dataType: "json",
                data: form_data,
                success: function (result) {
                    console.log(result);
                    getNote2(data.projet, $id_parent);
                    hidePleaseWait();

                },
                error: function (xhr, resp, text) {
                    // show error to console
                    console.log(xhr, resp, text);

                }
            });
            //alert('valid');
        }
    });


});
$('.btn-note-edit').on('click', function () {
    $my_id = $(this).attr('id');
    $idp = $(this).attr('data-id');
    id_projet = $("#" + $my_id).attr('data-id');
    $id_res = "note-res" + $("#" + $my_id).attr('data-id');
    $id_form = "form-note" + $("#" + $my_id).attr('data-id');
    console.log($("#" + $my_id).next().attr('id'), "#" + $my_id);
    $("#" + $id_res).toggle();
    $("#" + $id_form).toggle();

    $("#" + $id_form).on('submit', function (e) {
        e.preventDefault();
        var form = $(this);

        form.parsley().validate();

        if (form.parsley().isValid()) {
            showPleaseWait();
            var data = $(this).serializeObject();
            var form_data = JSON.stringify(data);
            
            console.log(form_data, $idp+" hh");
            $.ajax({
                url: myurl + "note/projet/" + $idp,
                type: "PUT",
                contentType: 'application/json',
                dataType: "json",
                data: form_data,
                success: function (result) {
                    console.log(result);
                    hidePleaseWait();
                    getNote(id_projet, $id_res, $idp);
                    $("#" + $id_res).toggle();
                    $("#" + $id_form).toggle();

                },
                error: function (xhr, resp, text) {
                    // show error to console
                    console.log(xhr, resp, text);

                }
            });
            //alert('valid');
        }
    });
});


$('input:checkbox.module_is_checked').each(function (i, v) {
    $mr = getDataWith2Param('module_role', 'module', $(v).val(), 'role_id', $_GET['role']);

    $mr.done(function ($mr) {
        if (!$mr.error) {
            $(v).attr('checked', true);
        }
    });

    $mr.fail(function ($mr) {
        $(v).attr('checked', false);

    });
});


function showPleaseWait() {
    if (document.querySelector("#pleaseWaitDialog") == null) {
        var modalLoading = `<div class="modal" id="pleaseWaitDialog" data-backdrop="static" data-keyboard="false" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Patientez svp...</h4>
                    </div>
                    <div class="modal-body">
                        <div class="progress">
                          <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar"
                          aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:100%; height: 40px">
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>`;
        $(document.body).append(modalLoading);
    }
    $("#pleaseWaitDialog").modal("show");
}

/**
 * Hides "Please wait" overlay. See function showPleaseWait().
 */
function hidePleaseWait() {
    $("#pleaseWaitDialog").modal("hide");
}

function addPermissionRole(chec) {
    $data = "role_id=" + $_GET['role'] + "&module=" + $(chec).val();
    //$data = JSON.stringify($($data).serializeObject());
    $mr = getDataWith2Param('module_role', 'module', $(chec).val(), 'role_id', $_GET['role']);
    console.log($data, $mr, "ci");
    if ($(chec).prop('checked') == true) {
        $mr.done(function ($mr) {
            if ($mr.error) {
                console.log($mr, $mr.error);
                $.ajax({
                    url: myurl + "module_role",
                    type: "POST",
                    contentType: 'application/x-www-form-urlencoded',
                    dataType: "json",
                    data: $data,
                    success: function (result) {
                        console.log(result);
                    },
                    error: function (xhr, resp, text) {
                        // show error to console
                        console.log(xhr, resp, text);
                    }
                });
            }
        });

        $mr.fail(function ($mr) {
            console.log($mr, $mr.error);
            $.ajax({
                url: myurl + "module_role",
                type: "POST",
                contentType: 'application/x-www-form-urlencoded',
                dataType: "json",
                data: $data,
                success: function (result) {
                    console.log(result);
                },
                error: function (xhr, resp, text) {
                    // show error to console
                    console.log(xhr, resp, text);
                }
            });
        });
    } else {
        deleteDataWith2Param('module_role', 'module', $(chec).val(), 'role_id', $_GET['role']);
    }
}

function getModuleRole() {

}

function getPermission() {
    console.log("perm");

    $permision = getDatas('module', 'sub_module', $_GET['module']);
    //console.log("module", $permision);

    $permision.done(function ($permision) {
        if (!$permision.error) {
            $data = '';
            $permision = $permision.data;
            $.each($permision, function (i, v) {
                $data += `
                <tr>
                <td>` + v.name + `</td>
                <td>` + v.description + `</td>
                <td>
                  <a class="btn btn-primary">
                    <i class="fa fa-edit"></i>
                  </a>
                </td>
              </tr>
                `;
            });
            $('#body_permission').html($data);
        }
    });
}

function getNote($projet, $id, $idp) {
    //console.log("perm");

    console.log("projet", $projet);
    $note = getData('note', 'projet', $projet);
    form_data = JSON.stringify({"etat_retenu" : "Oui"});
    console.log(form_data,  $idp);
    
    $note.done(function ($note) {
        if (!$note.error) {
            $data = '';
            $note = $note.data;
            $total = Number($note.faisabilite) + Number($note.apport) + Number($note.originalite) + Number($note.viabilite);
            if ($total>=10) {
                $.ajax({
                    url: myurl + "projet/id_projet/" + $idp,
                    type: "PUT",
                    contentType: 'application/json',
                    dataType: "json",
                    data: form_data,
                    success: function (result) {
                        console.log(result);
                        getNote3();
    
                    },
                    error: function (xhr, resp, text) {
                        // show error to console
                        console.log(xhr, resp, text);
    
                    }
                });
            }
            $data += `<a href="#">Faisabilité: ` + $note.faisabilite + `/5</a>
            <a href="#">Apport: ` + $note.apport + `/5</a>
            <a href="#">Originalité: ` + $note.originalite + `/5</a>
            <a href="#">Viabilité: ` + $note.viabilite + `/5</a>
            <a href="#"><b>Total: ` + $total + `/20</b></a>`;
            $('#' + $id).html($data);
        }
    });
}

function getNote2($projet, $id) {
    //console.log("perm");

    console.log("projet", $projet);
    $note = getData('note', 'projet', $projet);

    $note.done(function ($note) {
        if (!$note.error) {
            $data = '';
            $note = $note.data;
            $total = Number($note.faisabilite) + Number($note.apport) + Number($note.originalite) + Number($note.viabilite);
            $data += `
            <li><button id="btn-note-edit-` + $note.projet + `" data-id="` + $note.projet + `" type="button" title="Modifier une note" class="btn btn-note-edit btn-primary center-block"><i class="fa fa-pencil"></i></button></li>
            <br>
            <li id="note-res` + $note.projet + `"><a href="#">Faisabilité: ` + $note.faisabilite + `/5</a>
            <a href="#">Apport: ` + $note.apport + `/5</a>
            <a href="#">Originalité: ` + $note.originalite + `/5</a>
            <a href="#">Viabilité: ` + $note.viabilite + `/5</a>
            <a href="#"><b>Total: ` + $total + `/20</b></a>
            </li>
            <form id="form-note` + $note.projet + `" style="display: none" data-parsley-validate action="" method="post" class="form-horizontal">
                            <li>
                              <div class="form-group">
                                <label for="faisabilite" class="col-lg-4 control-label">Faisabilité: </label>
                                <div class="col-lg-8">
                                  <input type="number" value="` + $note.faisabilite + `" data-parsley-min="0" data-parsley-max="5" data-parsley-required="true" class="form-control" id="faisabilite" name="faisabilite" placeholder="Faisabilité">
                                </div>
                              </div>
                            </li>
                            <li>
                              <div class="form-group">
                                <label for="apport" class="col-lg-4 control-label">Apport: </label>
                                <div class="col-lg-8">
                                  <input type="number" value="` + $note.apport + `" data-parsley-min="0" data-parsley-max="5" data-parsley-required="true" class="form-control" id="apport" name="apport" placeholder="Apport">
                                </div>
                              </div>
                            </li>
                            <li>
                              <div class="form-group">
                                <label for="originalite" class="col-lg-4 control-label">Originalité: </label>
                                <div class="col-lg-8">
                                  <input type="number" value="` + $note.originalite + `" data-parsley-min="0" data-parsley-max="5" data-parsley-required="true" class="form-control" id="originalite" name="originalite" placeholder="Originalité">
                                </div>
                              </div>
                            </li>
                            <li>
                              <div class="form-group">
                                <label for="viabilite" class="col-lg-4 control-label">Viabilité: </label>
                                <div class="col-lg-8">
                                  <input type="number" value="` + $note.viabilite + `" data-parsley-min="0" data-parsley-max="5" data-parsley-required="true" class="form-control" id="viabilite" name="viabilite" placeholder="Viabilité">
                                  <input type="hidden" value="` + $note.projet + `" data-parsley-required="true" class="form-control" id="projet" name="projet" placeholder="">
                                </div>
                              </div>
                            </li>
                            <li>
                              <button type="submit" class="btn btn-primary">Valider</button>
                            </li>
                          </form>
            `;
            $('#' + $id).html($data);
        }
    });
}

function getNote3() {
    //console.log("perm");


    console.log("projet", myurl + "custom");
    $note = $.ajax({
        url: myurl + "custom",
        type: "GET",
        contentType: 'application/json',
        dataType: "json",
        error: function (xhr, resp, text) {
            // show error to console
            console.log(xhr, resp, text);
        }
    });

    $note.done(function ($note) {
        console.log($note);

        $target = "";
        if (host == "localhost") {
            $target = "http://localhost/Coronackathon/";
        } else {
            $target = "http://coronackathon.org/";
        }
        if (!$note.error) {
            $data = '';
            $note = $note.data;
            $.each($note, function (i, $v) {
                $total = Number($v.faisabilite) + Number($v.apport) + Number($v.originalite) + Number($v.viabilite);
                $data += `
            <div class="col-md-6">
            <div style="margin-bottom: 100px; margin-top: 100px" class="card">
              <div class="box">
                <div class="img">
                  <img src="` + $target + $v.file_url + `">
                </div>
                <h2>` + $v.nom_projet + `<br><span>` + $v.domaine + `</span></h2>
                <p> ` + $v.description + `</p>
                <span>
                  <ul id="">
                    <li id="note-res` + $v.projet + `">
                    <a href="#">Faisabilité: ` + $v.faisabilite + `/5</a>
                    <a href="#">Apport: ` + $v.apport + `/5</a>
                    <a href="#">Originalité: ` + $v.originalite + `/5</a>
                    <a href="#">Viabilité: ` + $v.viabilite + `/5</a>
                    <a href="#"><b>Total: ` + $total + `/20</b></a>
                    </li>
                    </ul>
                  </span>
                </div>
              </div>
            </div>
            
            `;
            });

            $('#menu1').html($data);
        }
    });
}

function setActionUrl(name) {
    arrName = name.split(' ', 2);
    name = arrName[0] + "-" + arrName[1];
    name = name.toLowerCase();
    return name;
}

function addData(table) {
    var go;
    var data = $('#add_permission').serializeObject();
    data.action_url = setActionUrl(data.name);
    var form_data = JSON.stringify(data);

    go = canContinue(data);
    console.log(form_data, $('#add_permission'));
    if (go) {
        $.ajax({
            url: myurl + table,
            type: "POST",
            contentType: 'application/json',
            dataType: "json",
            data: form_data,
            success: function (result) {
                console.log(result);

                getPermission();
            },
            error: function (xhr, resp, text) {
                // show error to console
                console.log(xhr, resp, text);
            }
        });
    }
}

function addNote() {
    var go;
    var data = $('#add_permission').serializeObject();
    data.action_url = setActionUrl(data.name);
    var form_data = JSON.stringify(data);

    go = canContinue(data);
    console.log(form_data, $('#add_permission'));
    if (go) {
        $.ajax({
            url: myurl + table,
            type: "POST",
            contentType: 'application/json',
            dataType: "json",
            data: form_data,
            success: function (result) {
                console.log(result);

                getPermission();
            },
            error: function (xhr, resp, text) {
                // show error to console
                console.log(xhr, resp, text);
            }
        });
    }
}

function getData(table, field, value) {
    return $.ajax({
        url: myurl + table + '/' + field + '/' + value,
        type: "GET",
        contentType: 'application/json',
        dataType: "json",
        error: function (xhr, resp, text) {
            // show error to console
            console.log(xhr, resp, text);
        }
    });
}

function getDatas(table, field = null, value = null) {
    console.log(myurl + table + '/' + field + '/' + value + '/?s');

    if (field != null, value != null) {
        return $.ajax({
            url: myurl + table + '/' + field + '/' + value + '/?s',
            type: "GET",
            contentType: 'application/json',
            dataType: "json",
            error: function (xhr, resp, text) {
                // show error to console
                console.log(xhr, resp);
                console.log(text, "entexte");

            }
        });
    } else {
        return $.ajax({
            url: myurl + table,
            type: "GET",
            contentType: 'application/json',
            dataType: "json",
            error: function (xhr, resp, text) {
                // show error to console
                console.log(xhr, resp, text);
            }
        });
    }
}

function getDataWith2Param(table, field, value, $field2, $value2) {
    console.log(myurl + table + '/' + field + '/' + value + "/?prop=" + $field2 + "&val=" + $value2);

    return $.ajax({
        url: myurl + table + '/' + field + '/' + value + "/?prop=" + $field2 + "&val=" + $value2,
        type: "GET",
        contentType: 'application/json',
        dataType: "json",
        error: function (xhr, resp, text) {
            // show error to console
            console.log(xhr, resp, text);
        }
    });
}

function deleteData(table, field, value) {
    return $.ajax({
        url: myurl + table + '/' + field + '/' + value,
        type: "DELETE",
        contentType: 'application/json',
        dataType: "json",
        error: function (xhr, resp, text) {
            // show error to console
            console.log(xhr, resp, text);
        }
    });
}

function deleteDataWith2Param(table, field, value, $field2, $value2) {
    return $.ajax({
        url: myurl + table + '/' + field + '/' + value + "/?prop=" + $field2 + "&val=" + $value2,
        type: "DELETE",
        contentType: 'application/json',
        dataType: "json",
        error: function (xhr, resp, text) {
            // show error to console
            console.log(xhr, resp, text);
        }
    });
}

function addTablRow() {
    $tr = `<tr id="addPermission">
    <form >
            <td>
            <div class="form-group">
                <input type="text" required class="form-control" id="name" name="name" placeholder="Le nom du module">
            </div>
            </td>
            <td>
            <div class="form-group">
                <input required class="form-control" id="description" name="description" placeholder="description du module">
            </div>
            </td>
            <td>
            <button type="button" onclick="addData('action')" class="btn btn-primary">
                <i class="fa  fa-check-square"></i>
                Valider
            </button>
            </td>
  </tr>`;
    if (!$("#addPermission").length) {
        $('#table_permission').append($tr);
    }
}

function canContinue(data) {
    var go;
    $.each(data, function (i, valueOfElement) {
        if (data[i] == '') {
            go = 'yes';
            $('#danger_content').text('');
            $('#danger_content').append('<p>Tout les champs doivent être rensignés</p>');
            $('#modal-danger').modal('show');
        }
    });
    if (go == 'yes') {
        return false;
    } else {
        return true;
    }
}

$('#checkbox_etat').on('change', function () {
    $my_etat = $(this).val();
    showPleaseWait();
    console.log(myurl + "inscription/id_inscription/1",$(this).prop('checked'));
    if($(this).prop('checked') == false){
        $data = JSON.stringify({"etat":"Non"});
        $.ajax({
            url: myurl + "inscription/id_inscription/1",
            type: "PUT",
            contentType: 'application/json',
            dataType: "json",
            data: $data,
            success: function (result) {
                console.log(result);
                hidePleaseWait();
                
            },
            error: function (xhr, resp, text) {
                // show error to console
                console.log(xhr, resp, text);
                
            }
        });
    } else{
        $data = JSON.stringify({"etat":"Oui"})
        $.ajax({
            url: myurl + "inscription/id_inscription/1",
            type: "PUT",
            contentType: 'application/json',
            dataType: "json",
            data: $data,
            success: function (result) {
                console.log(result);  
                hidePleaseWait();              
            },
            error: function (xhr, resp, text) {
                // show error to console
                console.log(xhr, resp, text);
                
            }
        });
    }
});