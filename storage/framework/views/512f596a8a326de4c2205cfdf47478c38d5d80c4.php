<!doctype html>
<html >
<head>
<title>Taller Rechazado</title>
</head>

<body >

</body>
<p><strong>Coordinación de Formación Integral<strong></p>
<p>De: Lic. Ana Edith López Cruz(Coordinadora de Formación Integral)
<p>Para:  <?php echo e($datos_correo->nombre); ?> <?php echo e($datos_correo->apellido_paterno); ?> <?php echo e($datos_correo->apellido_materno); ?> </p>
<p>Asunto:  <?php echo e($datos_recibidos['asunto']); ?> </p>
<p>Nombre del Taller:  <?php echo e($datos_taller->nombre_taller); ?> </p>
<p>Mensaje: <?php echo e($datos_recibidos['contenido']); ?></p>
</html>
<?php /**PATH C:\xampp\htdocs\segunda_version\jatnijawe\resources\views/mails/mensaje_rechazo.blade.php ENDPATH**/ ?>