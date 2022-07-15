<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><?php echo e(('Star')); ?></div>

                    <div class="card-body">
                        <?php if(Session::get('success')): ?>
                            <div class="alert alert-success" role="alert">
                                <?php echo e(Session::get('success')); ?>

                            </div>
                        <?php endif; ?>

                        <h3>Добро пожаловать!</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OpenServer\domains\laravel\laravel\resources\views/dashboard.blade.php ENDPATH**/ ?>