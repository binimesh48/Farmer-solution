<?php $__env->startSection('content'); ?>
<div class="container my-2">
  <div class="row mb-2">
    <div class="col">
      <h3>Weather Report</h3>
    </div>
    <a href="<?php echo e(route('admin.weather.create')); ?>" class="btn btn-primary">Add</a>
  </div>
  <div class="row">
    <div class="col-sm-12">
      <table class="table table-bordered">
        <thead>
          <td>ID</td>
          <td>Area</td>
          <td>Min Temp</td>
          <td>Max Temp</td>
          <td>Good for</td>
          <td>Detail</td>
        </thead>
        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $one): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
          <td><?php echo e($one->id); ?></td>
          <td><?php echo e($one->state->value); ?></td>
          <td><?php echo e($one->min_temp); ?></td>
          <td><?php echo e($one->max_temp); ?></td>
          <td><?php echo e($one->good_for); ?></td>
          <td>
            <a href="<?php echo e(route('admin.weather.edit', $one->id)); ?>" class="btn btn-sm btn-warning">Edit</a>
            <a href="<?php echo e(route('admin.weather.delete', $one->id)); ?>" class="btn btn-sm btn-danger">Delete</a>
          </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </table>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/nstack/Documents/Projects/final_year_projeccts/farmer/resources/views/admin/weather/index.blade.php ENDPATH**/ ?>