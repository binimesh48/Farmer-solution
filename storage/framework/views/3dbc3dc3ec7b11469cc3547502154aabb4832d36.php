<?php $__env->startSection('content'); ?>
<div class="container my-2" style="min-height: 70vh;">
  <div class="row my-4">
    <div class="col">
      <h3>Marketplace</h3>
    </div>
    <a href="<?php echo e(route('marketplace.create')); ?>" class="btn btn-primary">Start Selling</a>
  </div>
  <div class="row">
    <div class="col-sm-12 col-md-8 col-lg-9">
      <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $one): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="card mb-4">
        <div class="card-header">
          <div class="row">
            <div class="col-sm-6">
              <div class="d-flex justify-content-start mb-2">
                <?php echo e($one->name); ?>

              </div>
            </div>
            <div class="col-sm-6">
              <div class="d-flex justify-content-end mb-2">
                <div class="bg-dark text-white px-2 rounded">
                  <?php echo e($one->state->value); ?>

                </div>
              </div>
            </div>
          </div>
        </div>
        <img src="marketplace/<?php echo e($one->image); ?>" alt="<?php echo e($one->name); ?>" style="width: 100%;max-height: 320px;object-fit: cover;">
        <div class="card-body">
          <div>
            <span class="bg-warning text-dark p-2 rounded">
              Rs. <?php echo e($one->price); ?>

            </span>
            <div class="my-2">

            <?php echo e($one->summary); ?>

            </div>
          </div>
        </div>
        <div class="card-footer">
          <div class="d-flex justify-content-between">
            <div>
              <a href="<?php echo e(route('marketplace.show', $one->id)); ?>" class="btn btn-primary">See Buying Details</a>
            </div>
            <div>
              <?php if($one->user_id == $loggedInUserId): ?>
                <a href="<?php echo e(route('marketplace.delete', $one->id)); ?>" class="btn btn-danger">Delete</a>
              <?php else: ?>

              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/nstack/Documents/Projects/final_year_projeccts/farmer/resources/views/user/marketplace/index.blade.php ENDPATH**/ ?>