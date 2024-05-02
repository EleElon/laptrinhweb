


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
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo $messi->id; ?></td>
                            <td><?php echo $messi->name; ?></td>
                            <td><?php echo $messi->email; ?></td>
                            <td><?php echo $messi->soThich; ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Downloads\laptrinhweb\example-app\resources\views/crud_user/read.blade.php ENDPATH**/ ?>