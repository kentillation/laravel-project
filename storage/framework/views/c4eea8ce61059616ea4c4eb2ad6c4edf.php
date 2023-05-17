<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="<?php echo asset('storage/css/style.css') ?>" />
</head>
<body>
    <div class="header">
        <nav>
            <ul>
                <li>
                    <a href="<?php echo e(route('about')); ?>">About</a>
                </li>
                <li>
                    <a href="<?php echo e(route('blog')); ?>">Blog</a>
                </li>
                <li>
                    <a href="<?php echo e(route('contact')); ?>">Contact</a>
                </li>
            </ul>
        </nav>
    </div>
    <?php echo $__env->yieldContent('content'); ?>
</body>
</html><?php /**PATH C:\Users\NOLITC17\Documents\Kent\Activities\Laravel\first-project\resources\views/layout.blade.php ENDPATH**/ ?>