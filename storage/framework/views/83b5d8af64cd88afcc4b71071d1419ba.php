<table class="table table-striped table-hover border">
    <thead class="table-dark">
        <tr>
            <th scope="col"></th>
            <th scope="col">Nome tag</th>
            <th scope="col">Q.ta articoli collegati</th>
            <th scope="col">Aggiorna</th>
            <th scope="col">Cancella</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $metaInfos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $metaInfo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <th scope="row"><?php echo e($metaInfo->id); ?></th>
                <td><?php echo e($metaInfo->name); ?></td>
                <td><?php echo e(count($metaInfo->articles)); ?></td>
                <?php if($metaType == 'tags'): ?>
                    <td>
                         <form action="<?php echo e(route('admin.editTag' , ['tag' => $metaInfo])); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('put'); ?>
                        <input type="text" name="name" placeholder="nuovo come tag" class="form-control w-50 d-inline">
                        <button type="submit" class="btn btn-info text-white">Aggiorna</button>
                    </form>
                 </td>
                   
                 <td>
                    <form action="<?php echo e(route('admin.deleteTag' , ['tag' => $metaInfo])); ?>" method="POST">
                   <?php echo csrf_field(); ?>
                   <?php echo method_field('delete'); ?>
                 
                   <button type="submit" class="btn btn-danger text-white">Elimina</button>
               </form>
               
               </td>
                <?php else: ?>

                <td>
                    <form action="<?php echo e(route('admin.editCategory' , ['category' => $metaInfo])); ?>" method="POST">
                   <?php echo csrf_field(); ?>
                   <?php echo method_field('put'); ?>
                   <input type="text" name="name" placeholder="Nuovo come categoria" class="form-control w-50 d-inline">
                   <button type="submit" class="btn btn-info text-white">Aggiorna</button>
               </form>
            </td>
              
            <td>
             <form action="<?php echo e(route('admin.editCategory' , ['category' => $metaInfo])); ?>" method="POST">
              <?php echo csrf_field(); ?>
              <?php echo method_field('delete'); ?>
            
              <button type="submit" class="btn btn-danger text-white">Elimina</button>
          </form>
          
          </td>
                <?php endif; ?>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table><?php /**PATH C:\laragon\www\progetto_post_Marletta_Damiano-main\resources\views/components/metainfo-table.blade.php ENDPATH**/ ?>