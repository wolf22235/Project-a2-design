<?php $__env->startSection('content'); ?>
    <div class="login-form">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Вход</div>
                        <div class="card-body">

                            <?php if(Session::get('success')): ?>
                                <div class="alert alert-success" role="alert">
                                    <?php echo e(Session::get('success')); ?>

                                </div>
                            <?php endif; ?>

                            <form action="<?php echo e(route('login.post')); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <div class="form-group row">
                                    <label for="email_address" class="col-md-4 col-form-label text-md-right">Почта</label>
                                    <div class="col-md-6">
                                        <input type="text" id="email_address" class="form-control" name="email" required />
                                        <?php if($errors->has('email')): ?>
                                            <span class="text-danger"><?php echo e($errors->first('email')); ?></span>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">Пароль</label>
                                    <div class="col-md-6">
                                        <input type="password" id="password" class="form-control" name="password" required />
                                        <?php if($errors->has('password')): ?>
                                            <span class="text-danger"><?php echo e($errors->first('password')); ?></span>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-6 offset-md-4">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="remember"> Запомнить меня
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Войти
                                    </button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OpenServer\domains\laravel\laravel\resources\views/auth/login.blade.php ENDPATH**/ ?>