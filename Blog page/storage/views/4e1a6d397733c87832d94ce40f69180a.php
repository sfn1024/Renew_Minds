

<article class="bg-white flex flex-col shadow my-4">
    <!-- Article Image -->
    <a href="<?php echo e(route('view', $post)); ?>" class="hover:opacity-75">
        <img src="<?php echo e($post->getThumbnail()); ?>">
    </a>
    <div class="bg-white flex flex-col justify-start p-6">
        <?php $__currentLoopData = $post->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a href="#" class="text-blue-700 text-sm font-bold uppercase pb-4">
                <?php echo e($category->title); ?>

            </a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <a href="<?php echo e(route('view', $post)); ?>" class="text-3xl font-bold hover:text-gray-700 pb-4">
            <?php echo e($post->title); ?>

        </a>
        <p href="#" class="text-sm pb-3">
            By <a href="#" class="font-semibold hover:text-gray-800"><?php echo e($post->user->name); ?></a>, Published on
            <?php echo e($post->getFormattedDate()); ?>

        </p>
        <a href="<?php echo e(route('view', $post)); ?>" class="pb-6">
            <?php echo e($post->shortBody()); ?>

        </a>
        <a href="#" class="uppercase text-gray-800 hover:text-black">Continue Reading <i class="fas fa-arrow-right"></i></a>
    </div>
</article>
<?php /**PATH /var/www/html/resources/views/components/post-item.blade.php ENDPATH**/ ?>