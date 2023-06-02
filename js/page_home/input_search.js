$(document).ready(function () {
  $("#barra-busqueda").submit(function (e) {
    e.preventDefault();
    let data_search = {
      data_input: $("#input-search").val(),
    };
    if (data_search.data_input == "") {
      alert("Valor requerido");
    } else {
      $.ajax({
        type: "POST",
        url: "../controllers/input_search.php",
        data: data_search,
        success: function (response) {
          let data = JSON.parse(response);
          data.forEach((element) => {
            $("#dataList").html(`
                  <tr>
                    <td id="doc_user">
                      ${element.doc_user}
                    </td>
                    <td id="nombre_user">
                      ${element.nombre_user}
                    </td>
                  </tr>
                `);
          });
        },
      });
    }
  });
});
