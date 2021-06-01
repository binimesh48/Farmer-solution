<?php $__env->startSection('content'); ?>
<div class="container my-4" style="min-height: 70vh;">
  <?php if(auth()->guard()->guest()): ?>
  <h3 class="mb-2">Blog</h3>
  <?php endif; ?>
  <?php if(auth()->guard()->check()): ?>
  <div class="d-flex justify-content-between mb-2">
    <h3 class="mb-2">Blog</h3>
    <a href="<?php echo e(route('blog.create')); ?>" class="btn btn-primary mr-2">Add Blog</a>
  </div>
  <?php endif; ?>
  <div class="row">
    <div class="col-sm-12 col-md-10 col-lg-8">
      <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $one): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="card mb-4">
        <div class="card-header">
          <div class="row">
            <div class="col-sm-6">
              <div class="d-flex justify-content-start mb-2">
                <?php echo e($one->title); ?>

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
        <img src="https://kj1bcdn.b-cdn.net/media/14173/pm-modi.jpg" alt="" class="w-100"
          style="max-height: 320px;    object-fit: cover;">
        <div class="card-body">
          <p class><?php echo e($one->summary); ?></p>
        </div>
        <div class="card-footer">
          <div class="d-flex justify-content-between">
              <div>
                <a href="<?php echo e(route('blog.show', $one->id)); ?>" class="btn btn-primary btn-sm px-4">Read</a>
              </div>
              <div>
                <?php if($one->user_id ==  $loggedInUserId): ?>
                <a href="<?php echo e(route('user.blog.delete', $one->id)); ?>" class="btn btn-sm btn-danger">Delete</a>
              <?php else: ?>
                <?php echo e($one->user->name); ?>

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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/nstack/Documents/Projects/final_year_projeccts/farmer/resources/views/user/blog/index.blade.php ENDPATH**/ ?>