<?php $__env->startSection('content'); ?>
<div class="container my-4" style="min-height: 70vh;">
  <h3 class="mb-2">Scheme</h3>
  <div class="row">
    <div class="col-sm-12 col-md-10 col-lg-8">
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
        <img src="/govt-scheme/<?php echo e($one->banner); ?>" alt="" class="w-100"
          style="max-height: 320px;    object-fit: cover;">
        <div class="card-body">
          <p class><?php echo e($one->details); ?></p>
        </div>
        <div class="card-footer">
          <div class="d-flex">
         
            <div>
              <a href="<?php echo e(route('scheme.user.show', $one->id)); ?>" class="btn btn-primary">Read more</a>
            </div>
          </div>
        </div>

      </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/nstack/Documents/Projects/final_year_projeccts/farmer/resources/views/user/scheme/home.blade.php ENDPATH**/ ?>