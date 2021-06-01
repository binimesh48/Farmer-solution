<?php $__env->startSection('content'); ?>
<div class="container my-2" style="min-height: 70vh;">
  <h3 class="my-4"> <?php echo e($state->value); ?>'s Districts Weather</h3>
  <div class="row">
    <div class="col-sm-12 col-md-8 col-lg-9">
      <table class="table table-bordered">
        <thead>
          <td>Area</td>
          <td>Min Temp</td>
          <td>Max Temp</td>
          <td>Good for</td>
        </thead>
        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $one): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
          <td><?php echo e($one->state->value); ?></td>
          <td><?php echo e($one->min_temp); ?></td>
          <td><?php echo e($one->max_temp); ?></td>
          <td><?php echo e($one->good_for); ?></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </table>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/nstack/Documents/Projects/final_year_projeccts/farmer/resources/views/user/weather/district.blade.php ENDPATH**/ ?>