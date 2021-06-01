<?php $__env->startSection('content'); ?>
<div class="container my-4">
  <div class="d-flex justify-content-end mb-2">
    <a href="<?php echo e(route('admin.scheme.add')); ?>" class="btn btn-primary">Add Scheme</a>
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
      <th>Created By</th>
      <th>State</th>
      <th>Created On</th>
      <th>Action On</th>
    </tr>
    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $one): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <td><?php echo e($one->id); ?></td>
      <td><?php echo e($one->user->name); ?></td>
      <td><?php echo e($one->state->value); ?></td>
      <td><?php echo e($one->created_at); ?></td>
      <td>
        <a class="btn btn-sm btn-danger" href="<?php echo e(route('admin.scheme.destroy', $one->id)); ?>" onclick="event.preventDefault();
              document.getElementById('delete-form-<?php echo e($one->id); ?>').submit();">
          <?php echo e(__('Delete')); ?>

        </a>

        <form id="delete-form-<?php echo e($one->id); ?>" action="<?php echo e(route('admin.scheme.destroy', $one->id)); ?>" method="POST"
          class="d-none">
          <?php echo csrf_field(); ?>
          <?php echo method_field('DELETE'); ?>
        </form>
      </td>

    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/nstack/Documents/Projects/final_year_projeccts/farmer/resources/views/admin/scheme/home.blade.php ENDPATH**/ ?>