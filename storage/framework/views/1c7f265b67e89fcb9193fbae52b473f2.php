<?php if (isset($component)) { $__componentOriginal23a33f287873b564aaf305a1526eada4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal23a33f287873b564aaf305a1526eada4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="container-fluid-p-5 bg-info text-center text-white">
        <div class="row justify-content-center"></div>
            <h1 class="display-1">
                Bentornato, amministratore
            </h1>
    </div>

   <?php if(session('message')): ?>
        <div class="alert alert-success text-center">
            <?php echo e(session('message')); ?>

        </div>
       
   <?php endif; ?>
     <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
     <?php endif; ?>
        </div>
        <div class="container my-5">
            <row class="justify-content-center">
                <div class="col-12">
                    <h2>Richiesta per ruolo amministratore</h2>
                    <?php if (isset($component)) { $__componentOriginal7cdc29ad3bf02a0ffaaef457d7447d29 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7cdc29ad3bf02a0ffaaef457d7447d29 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.requests-table','data' => ['roleRequests' => $adminRequests,'role' => 'amministratore']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('requests-table'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['roleRequests' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($adminRequests),'role' => 'amministratore']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7cdc29ad3bf02a0ffaaef457d7447d29)): ?>
<?php $attributes = $__attributesOriginal7cdc29ad3bf02a0ffaaef457d7447d29; ?>
<?php unset($__attributesOriginal7cdc29ad3bf02a0ffaaef457d7447d29); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7cdc29ad3bf02a0ffaaef457d7447d29)): ?>
<?php $component = $__componentOriginal7cdc29ad3bf02a0ffaaef457d7447d29; ?>
<?php unset($__componentOriginal7cdc29ad3bf02a0ffaaef457d7447d29); ?>
<?php endif; ?>
                </div>
            </row>
        </div>

        <div class="container my-5">
            <row class="justify-content-center">
                <div class="col-12">
                    <h2>Richiesta per ruolo revisore</h2>
                    <?php if (isset($component)) { $__componentOriginal7cdc29ad3bf02a0ffaaef457d7447d29 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7cdc29ad3bf02a0ffaaef457d7447d29 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.requests-table','data' => ['roleRequests' => $revisorRequests,'role' => 'revisore']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('requests-table'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['roleRequests' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($revisorRequests),'role' => 'revisore']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7cdc29ad3bf02a0ffaaef457d7447d29)): ?>
<?php $attributes = $__attributesOriginal7cdc29ad3bf02a0ffaaef457d7447d29; ?>
<?php unset($__attributesOriginal7cdc29ad3bf02a0ffaaef457d7447d29); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7cdc29ad3bf02a0ffaaef457d7447d29)): ?>
<?php $component = $__componentOriginal7cdc29ad3bf02a0ffaaef457d7447d29; ?>
<?php unset($__componentOriginal7cdc29ad3bf02a0ffaaef457d7447d29); ?>
<?php endif; ?>
                </div>
            </row>
        </div>

        <div class="container my-5">
            <row class="justify-content-center">
                <div class="col-12">
                    <h2>Richiesta per ruolo redattore</h2>
                    <?php if (isset($component)) { $__componentOriginal7cdc29ad3bf02a0ffaaef457d7447d29 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7cdc29ad3bf02a0ffaaef457d7447d29 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.requests-table','data' => ['roleRequests' => $writerRequests,'role' => 'redattore']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('requests-table'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['roleRequests' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($writerRequests),'role' => 'redattore']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7cdc29ad3bf02a0ffaaef457d7447d29)): ?>
<?php $attributes = $__attributesOriginal7cdc29ad3bf02a0ffaaef457d7447d29; ?>
<?php unset($__attributesOriginal7cdc29ad3bf02a0ffaaef457d7447d29); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7cdc29ad3bf02a0ffaaef457d7447d29)): ?>
<?php $component = $__componentOriginal7cdc29ad3bf02a0ffaaef457d7447d29; ?>
<?php unset($__componentOriginal7cdc29ad3bf02a0ffaaef457d7447d29); ?>
<?php endif; ?>
                </div>
            </row>
        </div>

        <div class="container my-5">
            <row class="justify-content-center">
                <div class="col-12">
                    <h2>I tag della piattaforma</h2>
                    <?php if (isset($component)) { $__componentOriginal778b063696017211e45108a2fb095992 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal778b063696017211e45108a2fb095992 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.metainfo-table','data' => ['metaInfos' => $tags,'metaType' => 'tags']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('metainfo-table'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['metaInfos' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($tags),'metaType' => 'tags']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal778b063696017211e45108a2fb095992)): ?>
<?php $attributes = $__attributesOriginal778b063696017211e45108a2fb095992; ?>
<?php unset($__attributesOriginal778b063696017211e45108a2fb095992); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal778b063696017211e45108a2fb095992)): ?>
<?php $component = $__componentOriginal778b063696017211e45108a2fb095992; ?>
<?php unset($__componentOriginal778b063696017211e45108a2fb095992); ?>
<?php endif; ?>
                </div>
            </row>
        </div>

        
        <div class="container my-5">
            <row class="justify-content-center">
                <div class="col-12">
                    <h2>Le categorie della piattaforma</h2>
                    <?php if (isset($component)) { $__componentOriginal778b063696017211e45108a2fb095992 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal778b063696017211e45108a2fb095992 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.metainfo-table','data' => ['metaInfos' => $categories,'metaType' => 'categories']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('metainfo-table'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['metaInfos' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($categories),'metaType' => 'categories']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal778b063696017211e45108a2fb095992)): ?>
<?php $attributes = $__attributesOriginal778b063696017211e45108a2fb095992; ?>
<?php unset($__attributesOriginal778b063696017211e45108a2fb095992); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal778b063696017211e45108a2fb095992)): ?>
<?php $component = $__componentOriginal778b063696017211e45108a2fb095992; ?>
<?php unset($__componentOriginal778b063696017211e45108a2fb095992); ?>
<?php endif; ?>
                    <form action="<?php echo e(route('admin.storeCategory')); ?>" class="d-flex" method="POST">
                        <?php echo csrf_field(); ?>
                        <input type="text" name="name" class="form-control me-2" placeholder="Inserisci una nuova categoria">
                        <button type="submit" class="btn btn-success text-white">Aggiungi</button>
                    </form>
                </div>
            </row>
        </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $attributes = $__attributesOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__attributesOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $component = $__componentOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__componentOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?><?php /**PATH C:\laragon\www\progetto_post_Marletta_Damiano-main\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>