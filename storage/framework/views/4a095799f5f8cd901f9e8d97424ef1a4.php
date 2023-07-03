<?php $__env->startSection('title__block'); ?>Contact <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<h1>Contact</h1>


<form action="<?php echo e(route('contact-form')); ?>" method="post">
    <?php echo csrf_field(); ?>
    <div class="form-group mb-3">
        <label for="name">Input name</label>
        <input type="text" name="name" id="name" placeholder="Your name" class="form-control">
    </div>
    <div class="form-group mb-3">
        <label for="email">Input email</label>
        <input type="email" name="email" id="email" placeholder="Your email" class="form-control">
    </div>
    <div class="form-group mb-3">
        <label for="title">Input title</label>
        <input type="text" name="title" id="title" placeholder="Your title" class="form-control">
    </div>
    <div class="form-group mb-3">
        <label for="message">Message</label>
        <textarea name="message" id="message" class="form-control" placeholder="Your message" cols="30" rows="10"></textarea>
    </div>

    <button type="submit" class="btn btn-success">Send</button>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Programs\OSPanel\domains\firstLaravel\resources\views/contact.blade.php ENDPATH**/ ?>