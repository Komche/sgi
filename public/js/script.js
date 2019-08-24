var $_GET = {};
document.location.search.replace(/\??(?:([^=]+)=([^&]*)&?)/g, function () {
    function decode(s) {
        return decodeURIComponent(s.split("+").join(" "));
    }

    $_GET[decode(arguments[1])] = decode(arguments[2]);
});

function addTableRow() {
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
            <div style="display:none" class="form-group">
                <input required class="form-control" id="module" name="module" value="`+$_GET['module']+`" placeholder="description du module">
            </div>
            </td>
            <td>
            <button type="button" onclick="addData('actions')" class="btn btn-primary">
                <i class="fa  fa-check-square"></i>
                Valider
            </button>
            </td>
  </tr>`;
  if (!$("#addPermission").length) {
    $('#table_permission').append($tr);
  }
}