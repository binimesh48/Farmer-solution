<?php $__env->startSection('content'); ?>
<div class="container my-4">
  <div class="row">
    <div class="col-md-10 col-lg-8 col-sm-12">
      <?php if(session()->has('status')): ?>
      <p class="alert alert-success"><?php echo e(session('status')); ?></p>
      <?php endif; ?>
      <form action="<?php echo e(route('admin.area.store', $for)); ?>" method="post">
        <?php echo csrf_field(); ?>
        <input type="hidden" name="for" value="<?php echo e($for); ?>">
        <?php if($for == "state"): ?>
        <input type="hidden" name="state" value="NULL">
        <?php else: ?>
        <input type="hidden" name="state" value="<?php echo e($state->id); ?>">
        <?php endif; ?>
        <div class="card">
          <div class="card-header">Add Area Scheme</div>
          <div class="card-body">
            <?php if($for != "state"): ?>
            <div class="form-group row">
              <label for="state" class="col-md-3 col-form-label text-md-left"><?php echo e(__('State Name')); ?></label>
              <div class="col-md-8">

                <input id="state-name" type="text" class="form-control <?php $__errorArgs = ['area'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                  name="state-name" value="<?php echo e($state->value); ?>" readonly>
              </div>
            </div>
            <?php endif; ?>
            <div class="form-group row">
              <label for="area" class="col-md-3 col-form-label text-md-left"><?php echo e(__('Name')); ?></label>

              <div class="col-md-8">
                <input id="area" type="text" class="form-control <?php $__errorArgs = ['area'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="area"
                  value="<?php echo e(old('area')); ?>" required>

                <?php $__errorArgs = ['area'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="invalid-feedback" role="alert">
                  <strong><?php echo e($message); ?></strong>
                </span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Save</button>
          </div>
        </div>
      </form>

      <table class="table table-bordered mt-4 table-striped">
        <tr>
          <th>ID</th>
          <th>Belong to</th>
          <th>District Name</th>
        </tr>
        <?php if($for != "state"): ?>
        <?php $__currentLoopData = $districts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $one): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
          <td><?php echo e($one->id); ?></option>
          <td><?php echo e($state->value); ?></option>
          <td><?php echo e($one->value); ?></option>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
      </table>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/nstack/Documents/Projects/final_year_projeccts/farmer/resources/views/admin/area/add.blade.php ENDPATH**/ ?>