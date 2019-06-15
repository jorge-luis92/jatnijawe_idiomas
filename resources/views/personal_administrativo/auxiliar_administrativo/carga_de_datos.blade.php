<link rel="shortcut icon" href="{{asset('/logo.ico')}}">
@extends('layouts.plantilla_auxadmin')
@section('title')
: Carga de Datos
@endsection

@section('seccion')
</br>
<div class="container" id="font2">
  <div class="col-md-12">
      <div class="box box-primary">
                      <div class="box-header">
                        <h3 class="box-title">Carga de Datos para Cuenta de Usuario(Estudiantes)</h3>
                      </div><!-- /.box-header -->



                    <form method="post"  action="cargar_datos_usuarios"  enctype="multipart/form-data" >
                     {{csrf_field()}}

       <input type="hidden" name="_token" id="_token"  value="<?= csrf_token(); ?>">

      <div class="box-body">



      <div class="form-group col-xs-12"  >
             <label>Agregar Archivo de Excel </label>
              <input name="excel" id="excel" type="file" accept=".xlsx, .xls, .csv"   class="archivo form-control" /><br /><br />
      </div>


      <div class="box-footer">
                          <button type="submit" class="btn btn-primary">Cargar Datos</button>
      </div>




      </div>

      </form>

      </div>

  </div>
</div>


  @endsection
