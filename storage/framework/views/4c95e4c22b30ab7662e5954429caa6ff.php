<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">Edit User</div>
        <?php if(Session::has('fail')): ?>
            <span class="alert alert-danger p-2"><?php echo e(Session::get('fail')); ?></span>
        <?php endif; ?>
        
        <div class="card-body">
                <form action="<?php echo e(route('EditUser')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="user_id" id="" value="<?php echo e($user->id); ?>">
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Full Name</label>
                        <input type="text" name="full_name" value="<?php echo e($user->name); ?>" class="form-control" id="formGroupExampleInput" placeholder="Enter Full Name">
                        <?php $__errorArgs = ['full_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="text-danger"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Email</label>
                        <input type="email" name="email" value="<?php echo e($user->email); ?>" class="form-control" id="formGroupExampleInput2" placeholder="Enter Email">
                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="text-danger"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Phone Number</label>
                        <input type="text" name="phone_number" value="<?php echo e($user->phone_number); ?>" class="form-control" id="formGroupExampleInput2" placeholder="Enter Phone Number">
                        <?php $__errorArgs = ['phone_number'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="text-danger"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                   

                    <button type="submit" class="btn btn-primary">Save</button>


                </form>
            </div>
        </div>
    </div>
</body>
</html><?php /**PATH F:\Framework_Laravel\proyecto001\resources\views/edit-user.blade.php ENDPATH**/ ?>