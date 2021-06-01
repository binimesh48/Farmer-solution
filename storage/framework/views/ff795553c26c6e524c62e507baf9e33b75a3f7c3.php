<?php $__env->startSection('content'); ?>
<div class="container my-4" style="min-height: 70vh;">
  <div class="row">
    <div class="col-lg-12 col-md-12">
      <h2 class=" pt-4 ">Mandi in <?php echo e($state->value); ?></h2>
      <table class="table table-bordered mt-4 table-striped">
        <tr>
          <th>District</th>
          <th>Name</th>
          <th>Address</th>
          <th>Phone</th>
        </tr>
        <?php $__currentLoopData = $mandi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $one): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
          <td><?php echo e($one->area->value); ?></option>
            <td><?php echo e($one->name); ?></option>
          <td><?php echo e($one->address); ?></option>
          <td><?php echo e($one->phone); ?></option>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </table>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/nstack/Documents/Projects/final_year_projeccts/farmer/resources/views/user/mandi/view.blade.php ENDPATH**/ ?>