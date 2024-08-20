<?php $__env->startSection('title', 'Login - Mister Quiz'); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <h2>Login</h2>
    <form method="POST" action="<?php echo e(route('login')); ?>">
        <?php echo csrf_field(); ?>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required autofocus>
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div>
            <button type="submit">Login</button>
        </div>
    </form>
    <p>Don't have an account? <a href="<?php echo e(route('register')); ?>">Register here</a></p>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /mnt/c/Users/kamal/Desktop/mister_quiz/resources/views/auth/login.blade.php ENDPATH**/ ?>