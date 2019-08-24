
var $_GET = {};
document.location.search.replace(/\??(?:([^=]+)=([^&]*)&?)/g, function () {
    function decode(s) {
        return decodeURIComponent(s.split("+").join(" "));
    }

    $_GET[decode(arguments[1])] = decode(arguments[2]);
});
getPermission();    
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
    })


}
function addData(table) {
    var go;
        var form_data = JSON.stringify($('#add_permission').serializeObject());
        var data = $('#add_permission').serializeObject();
        go = canContinue(data);
        console.log(form_data, $('#add_permission'));
        if (go) {
            $.ajax({
                url: "http://localhost/saroapp/api/object/"+table,
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
        url: 'http://localhost/saroapp/api/object/'+table+'/'+field+'/' + value,
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
            url: 'http://localhost/saroapp/api/object/'+table+'/'+field+'/' + value+'/?s',
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
            url: 'http://localhost/saroapp/api/object/'+table,
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