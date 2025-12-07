<table class="table table-striped table-hover border">
    <thead class="table-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Titolo</th>
            <th scope="col">Sottotitolo</th>
            <th scope="col">Categoria</th>
            <th scope="col">Tags</th>
            <th scope="col">Creato il</th>
            <th scope="col">Azioni</th>
            

        </tr>
    </thead>

    <tbody>
        <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <th scope="row"><?php echo e($article->id); ?></th>
                <td><?php echo e($article->title); ?></td>
                <td><?php echo e($article->subtitle); ?></td>
                <td><?php echo e($article->category->name ?? 'Non categorizzato'); ?></td>
                  <td>
                    <?php $__currentLoopData = $article->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php echo e($tag->name); ?>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </td>  
                  <td><?php echo e(date_format($article->created_at,"m/d/Y ")); ?></td> 
                <td>
                     <a href="<?php echo e(route('article.show' , compact('article'))); ?>" class="btn btn-info text-white">Leggi l'articolo</a> 
                    <a href="<?php echo e(route('article.edit' , compact('article'))); ?>"  class="btn btn-warning text-white">Modifica l'articolo</a>
                    <form action="<?php echo e(route('article.destroy' , compact('article'))); ?>" method="POST" class="d-inline">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('delete'); ?>
                        <button type="submit" class="btn btn-danger">Elimina articolo</button>
                    </form>
                </td>
            </tr>     

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table><?php /**PATH C:\laragon\www\progetto_post_Marletta_Damiano-main\resources\views/components/writer-articles-table.blade.php ENDPATH**/ ?>