

<?php $__env->startSection('content'); ?>
    <main class="login-form">
        <div class="container">
            <div class="row justify-content-center">
                <table>
                    <thead>
                        <tr>
                            <th>post_id</th>
                            <th>user_id</th>
                            <th>post_name</th>
                            <th>post_description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $posts): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <th><?php echo e($posts->post_id); ?></th>
                                <th><?php echo e($posts->user_id); ?></th>
                                <th><?php echo e($posts->post_name); ?></th>
                                <th><?php echo e($posts->post_description); ?></th>
                                
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Downloads\laptrinhweb\example-app\resources\views/listPost.blade.php ENDPATH**/ ?>