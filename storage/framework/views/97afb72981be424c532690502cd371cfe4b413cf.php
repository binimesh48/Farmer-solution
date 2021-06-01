<?php $__env->startSection('content'); ?>
<div class="container my-4">
  <div class="d-flex justify-content-end mb-2">
    <a href="<?php echo e(route('admin.area.create','state')); ?>" class="btn btn-primary mr-2">Add State</a>
  </div>

  <?php if(session()->has('error')): ?>
  <p class="alert alert-danger"><?php echo e(session('error')); ?></p>
  <?php endif; ?>
  <?php if(session()->has('status')): ?>
  <p class="alert alert-success"><?php echo e(session('status')); ?></p>
  <?php endif; ?>

  <table class="table table-bordered table-striped">
    <tr>
      <th>ID</th>
      <th>State</th>
      <th>Created By</th>
      <th>Created On</th>
      <th>Action</th>
    </tr>
    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $one): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <td><?php echo e($one->id); ?></td>
      <td><?php echo e($one->value); ?></td>
      <td><?php echo e($one->user->name); ?></td>
      <td><?php echo e($one->created_at); ?></td>
      <td>
        <a href="<?php echo e(route('admin.mandi.create',$one->id)); ?>" class="btn btn-secondary btn-sm">
          Add Mandi
        </a>
      </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/nstack/Documents/Projects/final_year_projeccts/farmer/resources/views/admin/mandi/index.blade.php ENDPATH**/ ?>