<?php $__env->startSection('title__block'); ?>Messages <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <h1>Messages</h1>
    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $el): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="alert alert-info">
            <h3><?php echo e($el->title); ?></h3>
            <p><?php echo e($el->email); ?></p>
            <p><small><?php echo e($el->created_at); ?></small></p>
            <a href="<?php echo e(route('contact-data-one', $el->id)); ?>"><button class="btn btn-warning">See full</button></a>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Programs\OSPanel\domains\firstLaravel\resources\views/messages.blade.php ENDPATH**/ ?>