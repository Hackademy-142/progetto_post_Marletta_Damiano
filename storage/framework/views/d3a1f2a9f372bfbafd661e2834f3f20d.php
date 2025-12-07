<table class="table table-striped table-hover border">
    <thead>
        <tr>
            <th scope="col"></th>
            <th scope="col">Nome</th>
            <th scope="col">Email</th>
            <th scope="col">Azioni</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $roleRequests; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td scope="row"><?php echo e($user->id); ?></td>
                <td><?php echo e($user->name); ?></td>
                <td><?php echo e($user->email); ?></td>
                <td>
                    <?php switch($role):
                        case ('amministratore'): ?>
                            <form action="<?php echo e(route('admin.setAdmin' , compact('user'))); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('patch'); ?>
                            <button type="submit" class="btn btn-info text-white">Attiva <?php echo e($role); ?></button>
                            </form>
                            
                            <?php break; ?>
                        <?php case ('revisore'): ?>
                        <form action="<?php echo e(route('admin.setRevisor' , compact('user'))); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('patch'); ?>
                            <button type="submit" class="btn btn-info text-white">Attiva <?php echo e($role); ?></button>
                            </form>
                            <?php break; ?>

                            <?php case ('redattore'): ?>
                            <form action="<?php echo e(route('admin.setWriter' , compact('user'))); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('patch'); ?>
                                <button type="submit" class="btn btn-info text-white">Attiva <?php echo e($role); ?></button>
                                </form>
                                <?php break; ?>
                        
                            
                    <?php endswitch; ?>
                    
                </td>
            </tr>
            
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table><?php /**PATH C:\laragon\www\progetto_post_Marletta_Damiano-main\resources\views/components/requests-table.blade.php ENDPATH**/ ?>