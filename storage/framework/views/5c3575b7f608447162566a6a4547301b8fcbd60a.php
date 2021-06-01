<?php $__env->startSection('content'); ?>
<div class="container my-4" style="min-height: 70vh;">
  <div class="row">
    <div class="col-lg-8 col-md-12">
      <h2 class="">Mandi</h2>
      <table class="table table-bordered mt-4 table-striped">
        <tr>
          <th>ID</th>
          <th>State Name</th>
          <th>Action</th>
        </tr>
        <?php $__currentLoopData = $state; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $one): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
          <td><?php echo e($one->id); ?></option>
          <td><?php echo e($one->value); ?></option>
          <td>
            <a href="<?php echo e(route('mandi.show', $one->id)); ?>">View</a>
          </option>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </table>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/nstack/Documents/Projects/final_year_projeccts/farmer/resources/views/user/mandi/index.blade.php ENDPATH**/ ?>