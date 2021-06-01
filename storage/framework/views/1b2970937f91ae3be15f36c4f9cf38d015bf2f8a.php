<?php $__env->startSection('content'); ?>
<div class="container my-4" style="min-height: 70vh;">
  <div class="row">
    <img src="/blog-image/<?php echo e($data->banner); ?>" alt="" class="w-100" style="max-height: 320px;    object-fit: cover;">
    <div class="col-sm-12 col-md-10 offset-md-1">
      <div class="card mt-4">
        <div class="card-body">
        <h2><?php echo e($data->title); ?></h2>
          <p class><?php echo $data->article; ?></p>
        </div>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/nstack/Documents/Projects/final_year_projeccts/farmer/resources/views/user/blog/view.blade.php ENDPATH**/ ?>