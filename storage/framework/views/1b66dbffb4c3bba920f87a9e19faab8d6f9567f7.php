<?php $__env->startSection('content'); ?>
<img src="/marketplace/<?php echo e($data->image); ?>" alt="" class="w-100" style="max-height: 420px;    object-fit: cover;">
<div class="container my-4" style="min-height: 70vh;">
  <div class="row">
    <div class="col-sm-12 col-md-9">
      <div class="card">
        <div class="card-header">
          Product Description
        </div>
        <div class="card-body">
        <h2><?php echo e($data->name); ?></h2>
       
          <?php echo $data->article; ?>


          <span class="bg-primary text-light p-2 rounded">
            Rs. <?php echo e($data->price); ?>

          </span>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card">
        <div class="card-header">
          Seller Info
        </div>
        <div class="card-body p-0">
          <table class="table table-striped table-bordered mb-0">
            <tr>
              <td>Name</td>
              <td><?php echo e($data->user->name); ?></td>
            </tr>
            <tr>
              <td>Phone</td>
              <td><?php echo e($data->user->phone); ?></td>
            </tr>
            <tr>
              <td>Email</td>
              <td><?php echo e($data->user->email); ?></td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/nstack/Documents/Projects/final_year_projeccts/farmer/resources/views/user/marketplace/view.blade.php ENDPATH**/ ?>