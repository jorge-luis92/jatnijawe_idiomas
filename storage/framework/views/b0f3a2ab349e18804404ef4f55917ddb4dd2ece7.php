<?php if($message = Session::get('success')): ?>
<div class="alert alert-success alert-block">
	<button type="button" class="close" data-dismiss="alert">×</button>
        <strong><?php echo e($message); ?></strong>
</div>
<?php endif; ?>


<?php if($message = Session::get('error')): ?>
<div class="alert alert-danger alert-block">
	<button type="button" class="close" data-dismiss="alert">×</button>
        <strong><?php echo e($message); ?></strong>
</div>
<?php endif; ?>


<?php if($message = Session::get('warning')): ?>
<div class="alert alert-warning alert-block">
	<button type="button" class="close" data-dismiss="alert">×</button>
	<strong><?php echo e($message); ?></strong>
</div>
<?php endif; ?>


<?php if($message = Session::get('info')): ?>
<div class="alert alert-info alert-block">
	<button type="button" class="close" data-dismiss="alert">×</button>
	<strong><?php echo e($message); ?></strong>
</div>
<?php endif; ?>


<?php if($errors->any()): ?>
<div class="alert alert-danger alert-block">
	<button type="button" class="close" data-dismiss="alert">×</button>
   Verifique los datos
</div>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\segunda_version\jatnijawe\resources\views/flash-message.blade.php ENDPATH**/ ?>