<?php $__env->startSection('content'); ?>
<div class="container my-2">
  <div class="row mb-2">
    <div class="col">
      <h3>Edit</h3>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-12 col-md-8 col-lg-9">
      <?php if(session()->has('status')): ?>
          <p class="alert alert-success"><?php echo e(session('status')); ?></p>
      <?php endif; ?>
      <form action="" method="post">
        <?php echo csrf_field(); ?>
        <div class="card">
          <div class="card-header">
            Add
          </div>
          <div class="card-body">
            <div class="form-group row">
              <label for="state" class="col-md-3 col-form-label text-md-left"><?php echo e(__('State Name')); ?></label>
              <div class="col-md-8">
                <input disabled value="<?php echo e($data->state->value); ?>" class="form-control">
              </div>
            </div>
            <div class="form-group row">
              <label for="min_temp" class="col-md-3 col-form-label text-md-left"><?php echo e(__('Min Temp')); ?></label>
              <div class="col-md-8">
                <input id="min_temp" type="number" class="form-control" value="<?php echo e($data->min_temp); ?>" name="min_temp" placeholder="20">
              </div>
            </div>
            <div class="form-group row">
              <label for="max_temp" class="col-md-3 col-form-label text-md-left"><?php echo e(__('Max Temp')); ?></label>
              <div class="col-md-8">
                <input id="max_temp" type="number" class="form-control" value="<?php echo e($data->max_temp); ?>" name="max_temp" placeholder="50">
              </div>
            </div>
            <div class="form-group row">
              <label for="good_for" class="col-md-3 col-form-label text-md-left"><?php echo e(__('Good For')); ?></label>
              <div class="col-md-8">
                <input id="good_for" type="text" class="form-control" value="<?php echo e($data->good_for); ?>" name="good_for" placeholder="rice, wheat, etc">
              </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/nstack/Documents/Projects/final_year_projeccts/farmer/resources/views/admin/weather/edit.blade.php ENDPATH**/ ?>