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
                Bentornato, revisore
            </h1>
    </div>

   <?php if(session('message')): ?>
        <div class="alert alert-success text-center">
            <?php echo e(session('message')); ?>

        </div>
       
   <?php endif; ?>
        <div class="container my-5">
            <row class="justify-content-center">
                <div class="col-12">
                    <h2>Articoli da revisionare</h2>
                    <?php if (isset($component)) { $__componentOriginal3bc6476d9787264571a3adc7ba99c175 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3bc6476d9787264571a3adc7ba99c175 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.articles-table','data' => ['articles' => $unrevisionedArticles]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('articles-table'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['articles' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($unrevisionedArticles)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3bc6476d9787264571a3adc7ba99c175)): ?>
<?php $attributes = $__attributesOriginal3bc6476d9787264571a3adc7ba99c175; ?>
<?php unset($__attributesOriginal3bc6476d9787264571a3adc7ba99c175); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3bc6476d9787264571a3adc7ba99c175)): ?>
<?php $component = $__componentOriginal3bc6476d9787264571a3adc7ba99c175; ?>
<?php unset($__componentOriginal3bc6476d9787264571a3adc7ba99c175); ?>
<?php endif; ?>
                </div>
            </row>
        </div>

        <div class="container my-5">
            <row class="justify-content-center">
                <div class="col-12">
                    <h2>Articoli pubblicati</h2>
                    <?php if (isset($component)) { $__componentOriginal3bc6476d9787264571a3adc7ba99c175 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3bc6476d9787264571a3adc7ba99c175 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.articles-table','data' => ['articles' => $acceptedArticles]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('articles-table'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['articles' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($acceptedArticles)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3bc6476d9787264571a3adc7ba99c175)): ?>
<?php $attributes = $__attributesOriginal3bc6476d9787264571a3adc7ba99c175; ?>
<?php unset($__attributesOriginal3bc6476d9787264571a3adc7ba99c175); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3bc6476d9787264571a3adc7ba99c175)): ?>
<?php $component = $__componentOriginal3bc6476d9787264571a3adc7ba99c175; ?>
<?php unset($__componentOriginal3bc6476d9787264571a3adc7ba99c175); ?>
<?php endif; ?>
                </div>
            </row>
        </div>

        <div class="container my-5">
            <row class="justify-content-center">
                <div class="col-12">
                    <h2>Articoli respinti</h2>
                    <?php if (isset($component)) { $__componentOriginal3bc6476d9787264571a3adc7ba99c175 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3bc6476d9787264571a3adc7ba99c175 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.articles-table','data' => ['articles' => $rejectedArticles]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('articles-table'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['articles' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($rejectedArticles)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3bc6476d9787264571a3adc7ba99c175)): ?>
<?php $attributes = $__attributesOriginal3bc6476d9787264571a3adc7ba99c175; ?>
<?php unset($__attributesOriginal3bc6476d9787264571a3adc7ba99c175); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3bc6476d9787264571a3adc7ba99c175)): ?>
<?php $component = $__componentOriginal3bc6476d9787264571a3adc7ba99c175; ?>
<?php unset($__componentOriginal3bc6476d9787264571a3adc7ba99c175); ?>
<?php endif; ?>
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
<?php endif; ?><?php /**PATH C:\laragon\www\progetto_post_Marletta_Damiano-main\resources\views/revisor/dashboard.blade.php ENDPATH**/ ?>