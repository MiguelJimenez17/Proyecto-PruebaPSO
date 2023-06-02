$(document).ready(function () {
  class Aspirante {
    constructor(
      type_asp,
      document_asp,
      password_asp,
      name_asp,
      roll_asp,
      puntaje_asp
    ) {
      this.type_asp = type_asp;
      this.document_asp = document_asp;
      this.password_asp = password_asp;
      this.name_asp = name_asp;
      this.roll_asp = roll_asp;
      this.puntaje_asp = puntaje_asp;
    }

    create_asp() {
      if (this.type_asp == "Tipo de documento") {
        alert("Elija un tipo de documento");
      } else {
        let type_document = this.type_asp;
        let document_asp = this.document_asp;
        let name_asp = this.name_asp;
        if (type_document == "" || document_asp == "" || name_asp == "") {
          alert("Todos los campos son obligatorios");
        } else {
          let dataAsp = {
            typeDocumentAsp: this.type_asp,
            documentAsp: this.document_asp,
            passwordAsp: this.password_asp,
            name_asp: this.name_asp,
            rollAsp: this.roll_asp,
            puntajeAsp: this.puntaje_asp,
          };
          $.ajax({
            type: "POST",
            url: "../controllers/new_asp.php",
            data: dataAsp,
            success: function (response) {
              alert(response);
              location.reload();
            },
          });
        }
      }
    }
  }

  //validar campos del formulario

  function dataFormAsp() {
    $("#form-new-asp").submit(function (e) {
      e.preventDefault();

      // se obtiene  los valores de cada campo del formulario
      let option_doc = $("#option-document").val();
      let document_asp = $("#document-asp").val();
      let password_asp = $("#document-asp").val();
      let name_asp = $("#name-asp").val();
      let roll_asp = $("#roll-asp").val();
      let puntaje_asp = $("#puntaje-asp").val();

      // este bloque de codigo guarad toda la informacion en un nuevo objeto
      const aspirante = new Aspirante(
        option_doc,
        document_asp,
        password_asp,
        name_asp,
        roll_asp,
        puntaje_asp
      );
      //luego se llama el metodo para crear el nuevo aspirante
      aspirante.create_asp();
    });
  }
  dataFormAsp();
});
