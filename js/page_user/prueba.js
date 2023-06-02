$(document).ready(function () {
  $("#btn-prueba").click(function (e) {
    $("#container-info").html(`
<div id="formulario-prueba">
  <h2 id="title_prueba">Prueba fase dos salud ocupacional</h2>
  <div id="preguntas">
    <div>
      <form id="myForm">
        <p id="pregunta">1-¿Qué es la salud ocupacional?</p>
          <div id="respuestas">
            <input type="radio" name="respuesta1" value="a"> a) La disciplina que estudia la relación entre el trabajo y la
            salud<br>
            <input type="radio" name="respuesta1" value="b"> b) El conjunto de prácticas para mantener el bienestar en el
            trabajo<br>
            <input type="radio" name="respuesta1" value="c"> c) La gestión de riesgos en el entorno laboral
            <input type="hidden" name="respuestaCorrecta1" value="a">
          </div>
        <br><br>
        <p id="pregunta">2-¿Cuál es el objetivo principal de la salud ocupacional?</p>
          <div id="respuestas">
            <input type="radio" name="respuesta2" value="a"> a) Prevenir accidentes en el lugar de trabajo<br>
            <input type="radio" name="respuesta2" value="b"> b) Promover la salud y el bienestar de los trabajadores<br>
            <input type="radio" name="respuesta2" value="c"> c) Cumplir con las regulaciones gubernamentales
            <input type="hidden" name="respuestaCorrecta2" value="b">
          </div>
        <br><br>
        <p id="pregunta">3-¿Cuál de las siguientes opciones no es un riesgo laboral?</p>
          <div id="respuestas">
            <input type="radio" name="respuesta3" value="a"> a) Exposición a sustancias químicas peligrosas<br>
            <input type="radio" name="respuesta3" value="b"> b) Ergonomía inadecuada<br>
            <input type="radio" name="respuesta3" value="c"> c) Realización de actividades físicas fuera del horario laboral
            <input type="hidden" name="respuestaCorrecta3" value="c">
          </div>
        <br><br>
        <p id="pregunta">4-¿Qué es un EPP?</p>
          <div id="respuestas">
            <input type="radio" name="respuesta4" value="a"> a) Equipo de Protección Personal<br>
            <input type="radio" name="respuesta4" value="b"> b) Equipo para Prevenir Perjuicios<br>
            <input type="radio" name="respuesta4" value="c"> c) Equipo para Prevenir Peligros
            <input type="hidden" name="respuestaCorrecta4" value="a">
          </div>
        <br><br>
        <p id="pregunta">5-¿Cuál de las siguientes medidas de seguridad no está relacionada con la salud ocupacional?</p>
          <div id="respuestas">
            <input type="radio" name="respuesta5" value="a"> a) Señalización de seguridad en el lugar de trabajo<br>
            <input type="radio" name="respuesta5" value="b"> b) Capacitación en primeros auxilios<br>
            <input type="radio" name="respuesta5" value="c"> c) Instalación de cámaras de seguridad
            <input type="hidden" name="respuestaCorrecta5" value="c">
          </div> 
        <br><br>
        <p id="pregunta">6-¿Qué es la ergonomía?</p>
          <div id="respuestas">
            <input type="radio" name="respuesta6" value="a"> a) El estudio de la relación entre los trabajadores y su
            entorno laboral<br>
            <input type="radio" name="respuesta6" value="b"> b) El diseño de productos y entornos adaptados a las
            necesidades humanas<br>
            <input type="radio" name="respuesta6" value="c"> c) La gestión de la calidad y la productividad en el trabajo
            <input type="hidden" name="respuestaCorrecta6" value="b">
          </div>
        <br><br>
        <p id="pregunta">7-¿Cuál de las siguientes acciones promueve la salud mental en el trabajo?</p>
          <div id="respuestas">
            <input type="radio" name="respuesta7" value="a"> a) Fomentar un ambiente laboral inclusivo y respetuoso<br>
            <input type="radio" name="respuesta7" value="b"> b) Establecer programas de ejercicio físico obligatorios<br>
            <input type="radio" name="respuesta7" value="c"> c) Aplicar sanciones disciplinarias estrictas
            <input type="hidden" name="respuestaCorrecta7" value="a">
          </div>
        <br><br>
        <p id="pregunta">8-¿Cuál de las siguientes opciones no es un síntoma común de estrés laboral?
        </p>
          <div id="respuestas">
            <input type="radio" name="respuesta8" value="a"> a) Fatiga crónica<br>
            <input type="radio" name="respuesta8" value="b"> b) Aumento de la motivación y productividad<br>
            <input type="radio" name="respuesta8" value="c"> c) Problemas de sueño y dificultades para concentrarse
            <input type="hidden" name="respuestaCorrecta8" value="b">
          </div>
        <br><br>
        <p id="pregunta">9-¿Qué es un comité de seguridad y salud en el trabajo?</p>
          <div id="respuestas">
            <input type="radio" name="respuesta9" value="a"> a) Un grupo de representantes de los trabajadores y empleadores
            que colaboran para mejorar las condiciones laborales<br>
            <input type="radio" name="respuesta9" value="b"> b) Una entidad gubernamental encargada de inspeccionar los
            lugares de trabajo<br>
            <input type="radio" name="respuesta9" value="c"> c) Un programa de capacitación en seguridad y salud para los
            empleados
            <input type="hidden" name="respuestaCorrecta9" value="a">
          </div>
        <br><br>
        <p id="pregunta">10-¿Cuál de las siguientes opciones no es un beneficio de implementar medidas de salud ocupacional en una
          empresa?</p>
          <div id="respuestas">
            <input type="radio" name="respuesta10" value="a"> a) Reducción de costos asociados a enfermedades y accidentes
            laborales<br>
            <input type="radio" name="respuesta10" value="b"> b) Aumento de la satisfacción y retención de los empleados<br>
            <input type="radio" name="respuesta10" value="c"> c) Disminución de la productividad y eficiencia en el trabajo
            <input type="hidden" name="respuestaCorrecta10" value="c">
          </div>
        <br><br>
        <button type="submit" id="btn_prueba" >Enviar</button>
      </form>
    </div>
  </div>
</div>
`);
    $("#myForm").submit(function (e) {
      e.preventDefault();
      var formData = $(this).serialize(); // serializar los datos del formulario
      $.ajax({
        type: "POST",
        url: "../controllers/question.php", // ruta a tu archivo PHP que procesa los datos del formulario
        data: formData, // datos del formulario serializados
        success: function (response) {

          if (response == "finalizada") {
            alert(response);
            window.location = "../index.php";
            location.reload();
          } else {
            alert(response);
            location.reload();
          }
        },
      });
    });
  });
});