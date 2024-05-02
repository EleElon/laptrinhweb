

<?php $__env->startSection('content'); ?>
    <main class="login-form">
        <div class="container">
            <div class="row justify-content-center">
                <table>
                    <thead>
                        <tr>
                            <th>favorite_id</th>
                            <th>favorite_name</th>
                            <th>favorite_description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $favorities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $favorities): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <th><?php echo e($favorities->favorite_id); ?></th>
                                <th><?php echo e($favorities->favorite_name); ?></th>
                                <th><?php echo e($favorities->favorite_description); ?></th>
                                
                                
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Downloads\laptrinhweb\example-app\resources\views/listfavorities.blade.php ENDPATH**/ ?>