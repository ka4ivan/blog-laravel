<?php $__env->startSection('title__block'); ?>Edit message <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<h1>Edit message</h1>


<form action="<?php echo e(route('contact-update-submit', $data->id)); ?>" method="post">
    <?php echo csrf_field(); ?>
    <div class="form-group mb-3">
        <label for="name">Input name</label>
        <input type="text" name="name" id="name" placeholder="Your name" value="<?php echo e($data->name); ?>" class="form-control">
    </div>
    <div class="form-group mb-3">
        <label for="email">Input email</label>
        <input type="email" name="email" id="email" placeholder="Your email" value="<?php echo e($data->email); ?>" class="form-control">
    </div>
    <div class="form-group mb-3">
        <label for="title">Input title</label>
        <input type="text" name="title" id="title" placeholder="Your title" value="<?php echo e($data->title); ?>" class="form-control">
    </div>
    <div class="form-group mb-3">
        <label for="message">Message</label>
        <textarea name="message" id="message" class="form-control" placeholder="Your message"  cols="30" rows="10"><?php echo e($data->message); ?></textarea>
    </div>
    <button type="submit" class="btn btn-success">Save</button>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Programs\OSPanel\domains\firstLaravel\resources\views/update-message.blade.php ENDPATH**/ ?>