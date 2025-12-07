<div class="card" >
     <img src="<?php echo e(Storage::url($image)); ?>" style="max-height: 15rem" alt="" class="card-img-top">
    <div class="card-body">
        <h5 class="card-title"><?php echo e($title); ?></h5>
        <p class="card-text"><?php echo e($subtitle); ?></p>
        <?php if($category): ?>
            <a href="<?php echo e($urlCategory); ?>" class="small text-muted d-flex justify-content-center align-items-center"><?php echo e($category); ?></a>
      
        <?php else: ?>
            <p class="small text-muted st-italic text-capitalize">
                Non categorizzato

            </p>
        <?php endif; ?>
        

          <p class="small fst-italic text-capitalize">
            <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                #<?php echo e($tag->name); ?>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </p>
    </div>
    <div class="card-footer text-muted d-flex justify-content-center align-items-center">
        Redatto il <?php echo e($data); ?> da <?php echo e($user); ?>


    </div>         <a href="<?php echo e($url); ?>" style="width: -webkit-fill-available;" class="btn btn-info text-white">Leggi</a>

    
 
</div> 
<?php /**PATH C:\laragon\www\progetto_post_Marletta_Damiano-main\resources\views/components/card.blade.php ENDPATH**/ ?>