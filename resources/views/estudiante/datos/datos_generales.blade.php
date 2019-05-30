<link rel="shortcut icon" href="{{asset('logo.ico')}}">
@extends('layouts.plantilla_estudiante')
@section('title')
: Datos Generales
@endsection

@section('seccion')
  <h1 style="font-size: 2.0em; color: #000000;" align="center"> Datos Generales</h1>
<div class="container" id="font4">

</br>
  <form  validate enctype="multipart/form-data" data-toggle="validator" >
  <p style="font-size: 1.0em; color: #000000;"> Los Campos con un * son Obligatorios</p>
    <div class="form-row">

  <!--    <div class="form-group col-md-3" style="width: 2rem;" >
        <span style="color: #000000">* </span>
        <img class="image" src="image/foto.png" width="100px">
           <input type="file" accept="image/png, .jpeg, .jpg" required>
      </div>-->
      <div class="form-group col-md-3" id="labels">
        <label  for="matricula">Matricula</label>
        <input type="text" class="form-control" id="matricula"  value="{{$u->matricula}}" disabled>
      </div>

      <div class="form-group col-md-3" id="labels">
        <label for="semestre">Semestre</label>
        <input type="number" class="form-control" id="semestre" value="{{$u->semestre}}" disabled>
      </div>
      <div class="form-group col-md-3" id="labels">
        <label for="modalidad">Modalidad</label>
        <input type="text" class="form-control" id="modalidad" value="{{$u->modalidad}}" disabled>
      </div>
      <div class="form-group col-md-3" id="labels">
        <label for="estatus">Estatus</label>
        <input type="text" class="form-control" id="estatus" value="{{$u->estatus}}"disabled>
      </div>
    </div>

    <div class="form-row">

      <div class="form-group col-md-3" id="labels">
        <label for="nombre">Nombre(s)</label>
        <input type="text" class="form-control" id="nombre" value="{{ $u->nombre}}" disabled>
      </div>
      <div class="form-group col-md-3" id="labels">
        <label for="ap_pat">Apellido Paterno</label>
        <input type="text" class="form-control" id="ap_pat"  value="{{ $u->apellido_paterno}}" disabled>
      </div>
      <div class="form-group col-md-3" id="labels">
        <label for="ap_mat">Apellido Materno</label>
        <input type="text" class="form-control" id="ap_mat" value="{{ $u->apellido_materno}}" disabled>
      </div>
      <div class="form-group col-md-3" id="labels">
        <label for="fecha_nac">Fecha de Nacimiento</label>
        <input type="date" class="form-control" id="fecha_nac" value="{{ $u->fecha_nacimiento}}" disabled>
      </div>
    </div>

    <div class="form-row">
      <div class="form-group col-md-3" id="labels">
        <label for="ap_pat">CURP</label>
        <input type="text" class="form-control" id="curp" value="{{ $u->curp}}" disabled>
      </div>
      <div class="form-group col-md-3" id="labels">
        <label for="genero">Género</label>
        <input type="text" class="form-control" id="genero" value="{{ $u->genero}}" disabled>
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
      <input type="text"  id="especifica" placeholder="Especifica" value="<?php if(empty($l->nombre_lengua)){} else{ echo $l->nombre_lengua;} ?>"disabled class='inputText' required>
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
    <input type="text"  id="especifica_beca" value="" disabled class='inputBeca' required>
  </div>
    </div>

     <div class="form-group" id="labels">
      <br>
      <div class="col-xs-offset-2 col-xs-9" align="center">
          <input type="submit" class="btn btn-primary" name="agregar" value="Actualizar">
         <button type="button"  class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
      </div>
  </div>
    <br>

  </form>

</div>
</br>

  @endsection






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
