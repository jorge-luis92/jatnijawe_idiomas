
<div class="modal fade bd-example-modal-lg"  id="datos_laborales_tres" tabindex="-1" role="dialog" aria-labelledby="datos_laborales" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="datos_laborales">Datos Laborales</h5>
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
      <div class="radio col-md-12">
        <label style="color: #000000">* ¿Tienes alguna actividad laboral durante la semana?</label>

       <input type="radio" id="si_actividad" name="actividad" value="si_actividad" onclick="sitrabaja()" required  >
       <label for="si_actividad" style="color: #000000">Si</label>

       <input type="radio" id="no_actividad" name="actividad" value="no_actividad" onclick="notrabaja()" required >
       <label for="no_actividad" style="color: #000000">No</label>
       </div>
       <div class="form-group col-md-12">
         <h6>Horario</h6>
           </div>
        <div class="form-group col-md-2">
          <label for="tel_celular">Entrada</label>
          <input type="time"class="form-control" id="entrada" disabled  required>
        </div>
        <div class="form-group col-md-2">
          <label for="salida">Salida</label>
          <input type="time" class="form-control"  id="salida" disabled  required >
        </div>
        <div class="form-group col-md-5">
          <label for="lugar_trabajo">Lugar de Trabajo</label>
          <input type="text" class="form-control" placeholder="Nombre" id="lugar_trabajo" onKeyUp="this.value = this.value.toUpperCase();" disabled  required>
        </div>
        <div class="form-group col-md-2">
          <label for="puesto">Puesto</label>
          <input type="text" class="form-control"  id="puesto" placeholder="Puesto" onKeyUp="this.value = this.value.toUpperCase();" disabled  required >
        </div>
        <div class="form-group col-md-5">
          <label for="jornada">Jornada Laboral</label>
            <select name="comunidad" required disabled class="form-control">
          <option value="">Seleccione una opción</option>
          <option value="1">LUNES A VIERNES</option>
          <option value="2">FINES DE SEMANA</option>
          <option value="3">ENTRE SEMANA</option>

  </select>

</select>

        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-12">
          <h6>Dirección Trabajo</h6>
            </div>
            <div class="form-group col-md-5">
              <label for="calle_trabajo">Calle</label>
              <input type="text" class="form-control" id="calle_trabajo" placeholder="Calle" onKeyUp="this.value = this.value.toUpperCase();" disabled  required>
            </div>
            <div class="form-group col-md-2">
              <label for="numero_trabajo">Número</label>
              <input type="text"  class="form-control" id="numero_trabajo" placeholder="Número" onKeyUp="this.value = this.value.toUpperCase();" disabled  required>
            </div>
            <div class="form-group col-md-5">
              <label for="colonia_trabajo">Colonia</label>
              <input type="text" class="form-control" id="colonia_trabajo" placeholder="Colonia" onKeyUp="this.value = this.value.toUpperCase();" disabled  required>
            </div>
            <div class="form-group col-md-2">
              <label for="codigo_postal_trabajo">Código Postal</label>
              <input type="text" class="form-control" id="codigo_postal_trabajo" placeholder="Código Postal" disabled  required>
            </div>
            <div class="form-group col-md-4">
              <label for="ciudad_trabajo">Ciudad</label>
              <input type="text" class="form-control" id="ciudad" placeholder="Ciudad" disabled  onKeyUp="this.value = this.value.toUpperCase();" required>
              </div>
              <div class="form-group col-md-5">
                <label for="tel_trabajo">Telefono</label>
                <input type="tel" class="form-control" id="tel_trabajo" maxlength="10"  onkeypress="return numeros (event)"  placeholder="Formato a 10 digitos  -- Ejemplo: 9511234567"  pattern="([0-9]{3})([0-9]{7})" disabled required>
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
    function sitrabaja(){
        $(".form-control").removeAttr("disabled");
    }

    function notrabaja(){
        $(".form-control").attr("disabled","disabled");
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
<?php /**PATH C:\xampp\htdocs\jatnijawe\resources\views/estudiante\datos/datos_laborales.blade.php ENDPATH**/ ?>