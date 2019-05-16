
<div class="modal fade bd-example-modal-lg"  id="datos_medicos_cuatro" tabindex="-1" role="dialog" aria-labelledby="datos_medicos" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="datos_medicos">Datos Médicos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="container" align="left" id="font3">
          </br>
    <form  validate enctype="multipart/form-data" data-toggle="validator">
      <p style="font-size: 1.0em; color: #000000;"> Los Campos con un * son Obligatorios</p>
      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="sangre">Tipo de Sangre</label>
          <input type="text" class="form-control" id="sangre" placeholder="Tipo de Sangre" required>
        </div>
        <div class="form-group col-md-4">
          <label for="tutor">En caso de emergencia llamar a: </label>
          <input type="text" class="form-control" id="tutor" placeholder="Nombre" required>
        </div>
        <div class="form-group col-md-4">
          <label for="parentesco">Parentesco</label>
          <input type="text" class="form-control" id="parentesco" placeholder="Parentesco" required>
        </div>
      </div>
        <div class="form-row">
        <div class="form-group col-md-5">
          <label for="tel_emergencia">Teléfono</label>
          <input type="tel" maxlength="10"class="form-control" onkeypress="return numeros (event)" id="tel_emergencia" placeholder="Teléfono de Emergencia" required>
        </div>
      </div>
        <div class="radio col-md-12">
          <label>¿Sufres alguna Alergia?</label>

         <input type="radio" id="si_alergia" name="alergias" value="si_alergia" onclick="habilita_alergia()" required >
         <label for="si_actividad">Si</label>

         <input type="radio" id="no_alergia" name="alergias" value="no_alergia" onclick="deshabilita_alergia()" required>
         <label for="no_actividad">No</label>
         </div>

          <div class="form-row">
         <div class="form-group col-md-4">
           <label for="nombre_alergia">Nombre Alergia</label>
           <input type="text" class="inputAlergia" id="nombre_alergia" placeholder="Nombre de Alergia" disabled>
         </div>
         <div class="form-group col-md-4">
           <label for="descripcion_alergia">Descripción</label>
            <textarea class="inputAlergia" id="descripcion_alergia" placeholder="Descripción Alergia" disabled></textarea>
         </div>
         <div class="form-group col-md-4">
           <label for="indicacion_alergia">Indicaciones</label>
           <textarea class="inputAlergia" id="indicacion_alergia" placeholder="Indicaciones Alergia" disabled></textarea>
         </div>
         </div>

         <div class="radio col-md-12">
           <label>¿Sufres alguna Enfermedad?</label>
          <input type="radio" id="si_enfermedad" name="enfermedades" value="si_enfermedad" onclick="habilita_enfermedad()" required>
          <label for="si_enfermedad">Si</label>

          <input type="radio" id="no_enfermedad" name="enfermedades" value="no_enfermedad" onclick="deshabilita_enfermedad()" required>
          <label for="si_enfermedad">No</label>
          </div>

          <div class="form-row">
          <div class="form-group col-md-4">
            <label for="nombre_enfermedad">Nombre Enfermedad</label>
            <input type="text" class="inputEnfermedad" id="nombre_enfermedad" placeholder="Nombre Enfermedad" disabled required>
          </div>
          <div class="form-group col-md-4">
            <label for="descripcion_enfermedad">Descripción</label>
            <textarea class="inputEnfermedad" id="descripción" placeholder="Descripción Enfermedad" disabled required ></textarea>
                  </div>
          <div class="form-group col-md-4">
            <label for="indicacion_enfermedad">Indicaciones</label>
            <textarea class="inputEnfermedad" id="indicacion_enfermedad" placeholder="Indicaciones Enfermedad" disabled required></textarea>
          </div>
      </div>
      <div class="form-group">
       <br>
       <div class="col-xs-offset-2 col-xs-9" align="center">
           <input type="submit" class="btn btn-primary" name="agregar" value="Actualizar">
          <button type="button"  class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
       </div>
   </div>
</form>
</div>
      </div>
    </div>
  </div>
</div>

<script language="JavaScript">
    function habilita_alergia(){
        $(".inputAlergia").removeAttr("disabled");
    }

    function deshabilita_alergia(){
        $(".inputAlergia").attr("disabled","disabled");
    }
</script>

<script language="JavaScript">
    function habilita_enfermedad(){
        $(".inputEnfermedad").removeAttr("disabled");
    }

    function deshabilita_enfermedad(){
        $(".inputEnfermedad").attr("disabled","disabled");
    }
</script>


<script>
function numeros(e){
 key = e.keyCode || e.which;
 tecla = String.fromCharCode(key).toLowerCase();
 letras = " 0123456789";
 especiales = [8,37,39,46];

 tecla_especial = false
 for(var i in especiales){
if(key == especiales[i]){
  tecla_especial = true;
  break;
     }
 }

 if(letras.indexOf(tecla)==-1 && !tecla_especial)
     return false;
}
</script>
<?php /**PATH C:\xampp\htdocs\jatnijawe\resources\views/estudiante\datos/datos_medicos.blade.php ENDPATH**/ ?>