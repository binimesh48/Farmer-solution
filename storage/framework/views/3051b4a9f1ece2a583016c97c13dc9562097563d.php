<?php $__env->startSection('content'); ?>
<div class="container my-4">
  <h2 class="my-4">Contact</h2>
  <table class="table table-bordered table-striped">
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Email</th>
      <th>Phone</th>
      <th>Reason</th>
      <th>Message</th>
    </tr>
    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $one): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
        <td><?php echo e($one->id); ?></td>
        <td><?php echo e($one->name); ?></td>
        <td><?php echo e($one->email); ?></td>
        <td><?php echo e($one->phone); ?></td>
        <td><?php echo e($one->reason); ?></td>
        <td><?php echo e($one->message); ?></td>
      </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/nstack/Documents/Projects/final_year_projeccts/farmer/resources/views/admin/contact/index.blade.php ENDPATH**/ ?>