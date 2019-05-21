<link rel="shortcut icon" href="<?php echo e(asset('logo.ico')); ?>">

<?php $__env->startSection('title'); ?>
: Mis Talleres
<?php $__env->stopSection(); ?>

<?php $__env->startSection('seccion'); ?>
<!--<h1 style="font-size: 3.5em; color: #000000; font-family: Medium;" align="center">"JATWEB"</h1>-->
  <h2 style="font-size: 1.7em; color: #000000;" align="center">TALLERES</h2>


<div class="container" id="font2">
  </br>

<div class="table-responsive">
  <table class="table table-bordered table-info" style="color: #000000;" >
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">CURSO</th>
        <th scope="col">ESTATUS</th>
        <th colspan="2" >ACCIONES</th>
      </tr>
    </thead>
    <tbody>

      <tr>
        <th scope="row">1</th>
        <td>RUGBY</td>
        <td>ACTIVO</td>
        <td><a data-toggle="modal" href="#detalles_taller">DETALLES</a></td>
        <td><a href="pdfs" target="_blank">DESCARGAR LISTA</a></td>
      </tr>

    </tbody>
  </table>

</div>

<div class="modal fade"  tabindex="-1" role="dialog"  id="detalles_taller"  aria-labelledby="detalles_mi" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content" style="width: 26rem; background-color: #cda434;">
      <div class="modal-header">
        <h5 class="modal-title" id="detalles_mi" style="color: #FFFFFF">Info de Taller</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="container" align="left">
            <div class="card" >
      <div class="card-body">
        <h5 class="card-title">Nombre del Taller: RUGBY</h5>
        <h6 class="card-subtitle mb-2 text-muted">Tutor: <?php echo e(Auth::user()->name); ?></h6>
        <p class="card-text">Area: Cultural</p>
        <p>Fecha de Inicio: 02/03/2019</p>
        <p>Fecha de Terminación: 11/07/2019 </p>
      </div>
    </div>
   </div>
</div>
      </div>
    </div>
  </div>
</div>


  <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.plantilla_estudiante', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\jatnijawe\resources\views/estudiante\mis_actividades/mis_talleres.blade.php ENDPATH**/ ?>