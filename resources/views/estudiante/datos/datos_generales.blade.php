<div class="modal fade bd-example-modal-lg"  id="datos_generales_uno" tabindex="-1" role="dialog" aria-labelledby="datos_generales" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="datos_generales">Datos Generales</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="container" style="background-color: #F6CEF5;"align="left" id="font3">
          </br>
    <form  validate enctype="multipart/form-data" data-toggle="validator">
  <p style="font-size: 1.0em; color: #000000;"> Los Campos con un * son Obligatorios</p>
      <div class="form-row">

        <div class="form-group col-md-3" style="width: 4rem;" >
          <img class="card-img-top" src="image/foto.png" alt="Card image cap">
             <input type="file" accept="image/png, .jpeg, .jpg" required>
        </div>
        <div class="form-group col-md-3" id="labels">
          <label  for="matricula">Matricula</label>
          <input type="text" class="form-control" id="matricula" placeholder="Matricula"  disabled>
        </div>
        <div class="form-group col-md-2" id="labels">
          <label for="semestre">Semestre</label>
          <input type="number" class="form-control" id="semestre" placeholder="Semestre" disabled>
        </div>
        <div class="form-group col-md-2" id="labels">
          <label for="modalidad">Modalidad</label>
          <input type="text" class="form-control" id="modalidad" placeholder="Modalidad" disabled>
        </div>
        <div class="form-group col-md-2" id="labels">
          <label for="estatus">Estatus</label>
          <input type="text" class="form-control" id="estatus" placeholder="Estatus" disabled>
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-3" id="labels">
          <label for="nombre">Nombre(s)</label>
          <input type="text" class="form-control" id="nombre" placeholder="Nombre(s)" disabled>
        </div>
        <div class="form-group col-md-3" id="labels">
          <label for="ap_pat">Apellido Paterno</label>
          <input type="text" class="form-control" id="ap_pat" placeholder="Apellido Paterno" disabled>
        </div>
        <div class="form-group col-md-3" id="labels">
          <label for="ap_mat">Apellido Materno</label>
          <input type="text" class="form-control" id="ap_mat" placeholder="Apellido Materno" disabled>
        </div>
        <div class="form-group col-md-3" id="labels">
          <label for="fecha_nac">Fecha de Nacimiento</label>
          <input type="date" class="form-control" id="fecha_nac" placeholder="Fecha de Nacimiento" disabled>
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-3" id="labels">
          <label for="ap_pat">CURP</label>
          <input type="text" class="form-control" id="curp" placeholder="CURP" disabled>
        </div>
        <div class="form-group col-md-3" id="labels">
          <label for="genero">Género</label>
          <input type="text" class="form-control" id="genero" placeholder="Género" disabled>
        </div>
        <div class="radio col-md-3" id="labels">
          <label>* ¿Hablante de alguna Lengua?</label>
        <div align="left">

         <input type="radio" id="si_lengua" name="lengua" value="si_lengua" onclick="checar()" required >
         <label for="si_actividad">Si</label>

         <input type="radio" id="no_lengua" name="lengua" value="no_lengua" onclick="nochecar()" required>
         <label for="no_actividad">No</label>
       </div>

         </div>
      <div class="form-group col-md-2" id="labels">
        <label for="especifica">Especifica</label>
      </br>
        <input type="text"  id="especifica" placeholder="Especifica" disabled class='inputText' required>
      </div>

      <div class="radio col-md-3" id="labels">
        <label>* ¿Cuentas con alguna BECA?</label>
      <div align="left">

       <input type="radio" id="si_beca" name="beca" value="si_beca" onclick="checar_beca()" required >
       <label for="si_beca">Si</label>

       <input type="radio" id="no_beca" name="beca" value="no_beca" onclick="nochecar_beca()" required>
       <label for="no_beca">No</label>
     </div>

       </div>
    <div class="form-group col-md-3" id="labels">
      <label for="especifica">Especifica</label>
    </br>
      <input type="text"  id="especifica_beca" placeholder="Especifica" disabled class='inputBeca' required>
    </div>
      </div>

       <div class="form-group" id="labels">
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
    function checar(){
        $(".inputText").removeAttr("disabled");
    }

    function nochecar(){
        $(".inputText").attr("disabled","disabled");
    }
</script>

<script language="JavaScript">
    function checar_beca(){
        $(".inputBeca").removeAttr("disabled");
    }

    function nochecar_beca(){
        $(".inputBeca").attr("disabled","disabled");
    }
</script>
