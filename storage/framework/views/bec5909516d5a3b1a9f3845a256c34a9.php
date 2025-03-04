<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel 11 Crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                Laravel 11 CRUD system
                <a href="/add/user" class="btn btn-success btn-sm float-end">Add New</a>
            </div>
            <?php if(Session::has('success')): ?>
            <span class="alert alert-success p-2"><?php echo e(Session::get('success')); ?></span>
        <?php endif; ?>
        <?php if(Session::has('fail')): ?>
            <span class="alert alert-danger p-2"><?php echo e(Session::get('fail')); ?></span>
        <?php endif; ?>
            <div class="card-body">
                <table class="table table-sm table-stripped table-bordered">
                    <thead>
                        <th>S/N</th>
                        <th>Full name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Registration Date</th>
                        <th>Last Update</th>
                        <th colspan="2">Action</th>
                    </thead>
                    <tbody>
                        <?php if(count($all_users)>0): ?>
                            
                            <?php $__currentLoopData = $all_users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            
                            
                            <tr>
                                <td><?php echo e($loop->iteration); ?></td>
                                <td><?php echo e($item->name); ?></td>
                                <td><?php echo e($item->email); ?></td>
                                <td><?php echo e($item->phone_number); ?></td>
                                <td><?php echo e($item->created_at); ?></td>
                                <td><?php echo e($item->updated_at); ?></td>
                                <td>
                                <a href="/edit/<?php echo e($item->id); ?>" class="btn btn-primary btn-sm">Edit</a>
                                </td>
                                <td>
                                <a href="/delete/<?php echo e($item->id); ?>" class="btn btn-danger btn-sm">Delete</a>
                                </td>

                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="8">No User Found!</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
                
            </div>
        </div>
    </div>
</body>
</html><?php /**PATH F:\Framework_Laravel\proyecto001\resources\views/users.blade.php ENDPATH**/ ?>