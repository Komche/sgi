host = $(location).attr('hostname');
protocol = $(location).attr('protocol');
folder = '';
if (host == 'localhost') {
    folder = '/saroapp';
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
$('input:checkbox.module_is_checked').each( function (i, v) {
    $mr = getDataWith2Param('module_role', 'module',$(v).val(), 'role_id', $_GET['role']);
    
    $mr.done(function ($mr) {
        if (!$mr.error) {            
            $(v).attr('checked', true);
        }
    });

    $mr.fail(function ($mr) {
        $(v).attr('checked', false);
        
    });
});

function addPermissionRole(chec) {
    $data = "role_id="+$_GET['role']+"&module="+$(chec).val();
    //$data = JSON.stringify($($data).serializeObject());
    $mr = getDataWith2Param('module_role', 'module', $(chec).val(), 'role_id', $_GET['role'])
    console.log($data, $mr);
    if ($(chec).prop('checked')==true) {
        $mr.done(function ($mr) {
            if ($mr.error) {
                console.log($mr, $mr.error);
                $.ajax({
                    url: myurl+"module_role",
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
                url: myurl+"module_role",
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
    $permision = getDatas('actions', 'module', $_GET['module']);
    $permision.done(function ($permision) {
        if (!$permision.error) {
            $data ='';
            $permision = $permision.data;
            $.each($permision, function (i, v) {
                $data += `
                <tr>
                <td>`+v.name+`</td>
                <td>`+v.description+`</td>
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

function setActionUrl(name) {
    arrName = name.split(' ', 2);    
    name = arrName[0]+"-"+arrName[1];
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
            url: myurl+table,
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
        url: myurl+table+'/'+field+'/' + value,
        type: "GET",
        contentType: 'application/json',
        dataType: "json",
        error: function (xhr, resp, text) {
            // show error to console
            console.log(xhr, resp, text);
        }
    })
}

function getDatas(table, field=null, value=null) {
    if (field!=null, value!=null) {
    return $.ajax({
            url: myurl+table+'/'+field+'/' + value+'/?s',
            type: "GET",
            contentType: 'application/json',
            dataType: "json",
            error: function (xhr, resp, text) {
                // show error to console
                console.log(xhr, resp, text);
            }
        });
    } else {
        return $.ajax({
            url: myurl+table,
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
        url: myurl+table+'/'+field+'/' + value+"/?prop="+$field2+"&val="+$value2,
        type: "GET",
        contentType: 'application/json',
        dataType: "json",
        error: function (xhr, resp, text) {
            // show error to console
            console.log(xhr, resp, text);
        }
    })
}

function deleteData(table, field, value) {
    return $.ajax({
        url: myurl+table+'/'+field+'/' + value,
        type: "DELETE",
        contentType: 'application/json',
        dataType: "json",
        error: function (xhr, resp, text) {
            // show error to console
            console.log(xhr, resp, text);
        }
    });
}

function deleteDataWith2Param(table, field, value, $field2, $value2)  {
    return $.ajax({
        url: myurl+table+'/'+field+'/' + value+"/?prop="+$field2+"&val="+$value2,
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