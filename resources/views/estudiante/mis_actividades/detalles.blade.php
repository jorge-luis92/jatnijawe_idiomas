
<div class="modal fade bd-example-modal-lg"  id="detalles_taller" tabindex="-1" role="dialog" aria-labelledby="detalles_mi" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="detalles_mi">NOMBRE DE TALLER: RUGBY</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="container" align="left">

            <div class="form-row">
              <div class="form-group col-md-12">
                <h6>TUTOR: {{ Auth::user()->name }}</h6>
                  </div>
                  <div class="form-group col-md-2">
                    <label for="calle_trabajo">CREDITOS</label>
                    <input type="text" class="form-control" id="calle_trabajo" placeholder="Calle" onKeyUp="this.value = this.value.toUpperCase();" disabled  required>
                  </div>
                  <div class="form-group col-md-3">
                    <label for="numero_trabajo">AREA</label>
                    <input type="text"  class="form-control" id="numero_trabajo" placeholder="Número" onKeyUp="this.value = this.value.toUpperCase();" disabled  required>
                  </div>
                  <div class="form-group col-md-3">
                    <label for="colonia_trabajo">FECHA DE INICIO</label>
                    <input type="date" class="form-control" id="colonia_trabajo" placeholder="Colonia" onKeyUp="this.value = this.value.toUpperCase();" disabled  required>
                  </div>
                  <div class="form-group col-md-3">
                    <label for="codigo_postal_trabajo">FECHA DE FIN</label>
                    <input type="date" class="form-control" id="codigo_postal_trabajo" placeholder="Código Postal" disabled  required>
                  </div>
           </div>

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
