<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mister Quiz - Home</title>
</head>
<body>
    <h1>Welcome to Mister Quiz</h1>
    
    <?php if(auth()->guard()->check()): ?>
        <a href="<?php echo e(route('profile')); ?>">Profile</a>
        <form action="<?php echo e(route('logout')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <button type="submit">Logout</button>
        </form>
    <?php else: ?>
        <a href="<?php echo e(route('login')); ?>">Login</a>
    <?php endif; ?>

    <a href="<?php echo e(route('leaderboard')); ?>">Leaderboard</a>
    <a href="<?php echo e(route('quiz.start')); ?>">Start Quiz</a>
</body>
</html><?php /**PATH /mnt/c/Users/kamal/Desktop/mister_quiz/resources/views/home.blade.php ENDPATH**/ ?>