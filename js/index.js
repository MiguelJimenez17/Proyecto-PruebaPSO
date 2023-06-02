$(document).ready(function () {
  class User {
    id_user;
    document_user;
    password_user;
    name_user;
    rol_user;
    constructor(document_user, password_user, name_user, rol_user) {
      this.document_user = document_user;
      this.password_user = password_user;
      this.name_user = name_user;
      this.rol_user = rol_user;
    }
    sign_in() {
      if (this.document_user !== "") {
        let dataDocumento = this.document_user;
        if (this.password_user !== "") {
          let dataPassword = this.password_user;
          if (dataDocumento !== "" && dataPassword !== "") {
            let data = {
              documento: dataDocumento,
              password: dataPassword,
            };
            $.ajax({
              type: "POST",
              url: "controllers/sign_in.php",
              data: data,
              success: function (response) {
                try {
                  if (response == "administrador") {
                    window.location = "view/page_home_admin.php";
                  }
                  if (response == "usuario") {
                    window.location = "view/page_home_usuario.php";
                  } 
                } catch (error) {
                  console.log(error);
                }
              },
            });
          }
        } else {
          let alerta = document.getElementById("alerta-contraseña");
          alerta.innerHTML = "Contraseña requerida";
          alerta.setAttribute("id", "alert");
        }
      } else {
        let alerta_doc = document.getElementById("alerta-documento");
        alerta_doc.innerHTML = "Numero de documento requerido";
        alerta_doc.setAttribute("id", "alert");
      }
    }
  }

  $("#form").submit(function (e) {
    e.preventDefault();
    let document_user = $("#input-document").val();
    let password_user = $("#input-password").val();
    let data = new User(document_user, password_user);
    data.sign_in();
  });


});
