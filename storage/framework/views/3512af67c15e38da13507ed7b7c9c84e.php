<?php $__env->startSection('title__block'); ?>Home page <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <h1>Home page</h1>
    <p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi aperiam fugiat id nostrum odit quam sit? Accusamus, ad, consequuntur corporis ea illo nemo numquam obcaecati quia, reprehenderit repudiandae totam veritatis?</span><span>Accusantium ad architecto explicabo fuga molestias quaerat. Alias amet aperiam beatae dolorem eaque id laboriosam necessitatibus porro, possimus praesentium, quidem recusandae rem sed similique, temporibus tenetur veritatis? Esse, officiis ut.</span><span>Ab alias aliquid atque culpa exercitationem, facilis fugiat laudantium libero, maiores necessitatibus possimus ratione repellendus tempora temporibus ut veniam vero voluptate. Beatae, corporis eos explicabo molestias pariatur quidem saepe voluptatum.</span></p>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('aside'); ?>
    <?php echo \Illuminate\View\Factory::parentPlaceholder('aside'); ?>
    <p>Some text</p>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Programs\OSPanel\domains\firstLaravel\resources\views/home.blade.php ENDPATH**/ ?>