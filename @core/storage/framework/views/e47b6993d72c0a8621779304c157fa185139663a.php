<?php if(session()->has('msg')): ?>
    <div class="alert alert-<?php echo e(session('type')); ?>">
        <?php echo session('msg'); ?>

    </div>
<?php endif; ?>
<?php /**PATH /Users/snaptec/Desktop/snaptec/localhost/snaptec-last-server-file-with-api/@core/resources/views/components/flash-msg.blade.php ENDPATH**/ ?>