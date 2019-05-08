
<div class="modal fade bd-example-modal-lg"  id="datos_personales_dos" tabindex="-1" role="dialog" aria-labelledby="datos_personales" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="datos_personales">Datos Personales</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="container"  align="left" id="font3">
          </br>
    <form  validate enctype="multipart/form-data" data-toggle="validator">
      <p style="font-size: 1.0em; color: #000000;"> Los Campos con un * son Obligatorios</p>
      <div class="form-row">
        <div class="form-group col-md-12">
          <h6 align="left" style="color: #000000">Dirección Actual</h6>
            </div>
        <div class="form-group col-md-5">
          <label for="calle" style="color: #000000" align="left">Calle</label>
          <input type="text" class="form-control" id="calle" placeholder="Calle" onKeyUp="this.value = this.value.toUpperCase();" required>
        </div>
        <div class="form-group col-md-2">
          <label for="numero">Número</label>
          <input type="text"  class="form-control" id="numero" placeholder="Número" onKeyUp="this.value = this.value.toUpperCase();" required>
        </div>
        <div class="form-group col-md-5">
          <label for="colonia">Colonia</label>
          <input type="text" class="form-control" id="barrio" placeholder="Colonia" onKeyUp="this.value = this.value.toUpperCase();" required >
        </div>
        <div class="form-group col-md-3">
          <label for="codigo_postal">Código Postal</label>
          <input type="text" class="form-control" id="codigo_postal" placeholder="Código Postal" onKeyUp="this.value = this.value.toUpperCase();" required>
        </div>
        <div class="form-group col-md-5">
          <label for="ciudad">Ciudad</label>
          <input type="text" class="form-control" id="ciudad" placeholder="Ciudad" onKeyUp="this.value = this.value.toUpperCase();" required>
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-12">
          <h6 align="left" style="color: #000000">Contacto</h6>
            </div>
        <div class="form-group col-md-4">
          <label for="tel_local">Telefono Local</label>
            <input type="tel"  class="form-control" id="tel_celular" maxlength="10"  onkeypress="return numeros (event)"  placeholder="Formato a 7 digitos -- Ejemplo: 5115090"  pattern="([0-9]{7})">
        </div>
        <div class="form-group col-md-4">
          <label for="tel_celular">Celular</label>
          <input type="tel"  class="form-control" id="tel_celular" maxlength="10"  onkeypress="return numeros (event)"  placeholder="Formato a 10 digitos  -- Ejemplo: 9511234567"  pattern="([0-9]{3})([0-9]{7})" required>
        </div>
        <div class="form-group col-md-4">
          <label for="email">Correo Electrónico</label>
          <input type="email" class="form-control"  id="email" placeholder="Correo Electrónico" required>
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
    function habilita(){
        $(".inputText").removeAttr("disabled");
    }

    function deshabilita(){
        $(".inputText").attr("disabled","disabled");
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
