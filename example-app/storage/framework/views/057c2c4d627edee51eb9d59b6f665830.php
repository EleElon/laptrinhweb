

<?php $__env->startSection('content'); ?>
    <main class="login-form">
        <div class="container">
            <div class="row justify-content-center">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>soThich</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <th><?php echo $user->id; ?></th>
                                <th><?php echo $user->name; ?></th>
                                <th><?php echo $user->email; ?></th>
                                <th><?php echo $user->soThich; ?></th>
                                <th>
                                    <a href="<?php echo e(route('user.readUser', ['id' => $user->id])); ?>">View</a> |
                                    <a href="<?php echo e(route('user.updateUser', ['id' => $user->id])); ?>">Edit</a> |
                                    <a href="<?php echo e(route('user.deleteUser', ['id' => $user->id])); ?>">Delete</a>
                                </th>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\GitHub\laptrinhweb\example-app\resources\views/crud_user/list.blade.php ENDPATH**/ ?>