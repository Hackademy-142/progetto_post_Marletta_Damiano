<table class="table table-striped table-hover border">
    <thead class="table-dark">
        <tr>
            <th scope="col"></th>
            <th scope="col">Titolo</th>
            <th scope="col">Sottotitolo</th>
            <th scope="col">Redattore</th>
            <th scope="col">Azioni</th>
        </tr>
    </thead>

    <tbody>
        <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <th scope="row"><?php echo e($article->id); ?></th>
                <td><?php echo e($article->title); ?></td>
                <td><?php echo e($article->subtitle); ?></td>
                <td><?php echo e($article->user->name); ?></td>
                <td>
                    <?php if(is_null($article->is_accepted)): ?>
                        <a href="<?php echo e(route('article.show' , compact('article'))); ?>" class="btn btn-info text-white">Leggi l'articolo</a>
                    <?php else: ?>
                        <form action="<?php echo e(route('revisor.undoArticle' , compact('article'))); ?>" method="POST">
                            <?php echo csrf_field(); ?>  
                             <button class="btn btn-info text-white">Riporta in revisione</button>
                        </form>
                     
                    <?php endif; ?>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table><?php /**PATH C:\laragon\www\progetto_post_Marletta_Damiano-main\resources\views/components/articles-table.blade.php ENDPATH**/ ?>