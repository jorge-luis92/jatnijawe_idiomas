@extends('layouts.plantillaperfil')

@section('title')
@endsection

@section('seccion')
  <div class="container" id="font2" >
    </br>
    <div class="form-row">
      <div class="form-group  col-md-12">
            <a href={{ route('login_admin')}} class="btn btn-primary" role="button" aria-pressed="true">ADMINISTRATIVOS</a>
      </div>

 </br>

 <div class="form-group col-md-6" align="center">
        <a href={{ route('login')}} class="btn btn-primary" role="button" aria-pressed="true">ESTUDIANTES</a>
      </div>
      <div class="form-group col-md-6" align="center">
    <a href={{ route('login_tallerista')}} class="btn btn-primary" role="button" aria-pressed="true">TALLERISTAS</a>
    </div>

</br>
</br>
</br>
</br>

</div>
<div class="nota">
<p style="Times New Roman, Times, serif, cursive; color: blue;"><span style="color: red;">NOTA: </span> Seleccione su <span style="color: #190707;">Usuario</span> de acuerdo al Rol que desempeña en la Facultad de Idiomas </p>
</div>
</div>

  @endsection
