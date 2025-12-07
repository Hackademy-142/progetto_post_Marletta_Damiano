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
                Titolo : <?php echo e($article->title); ?>

            </h1>
    </div>
    
    <div class="container my-5">
        <div class="row justify-content-center">
          
            <div class="col-12 col-md-8 ">
                <img src="<?php echo e(Storage::url($article->image)); ?>" alt="" class="omg-fluid my-3">
                <div class="text-center">
                    <h2><?php echo e($article->subtitle); ?></h2>
                    <div class="my-3 text-muted fst-italic">
                        <p>Redatto da <?php echo e($article->user->name); ?> il <?php echo e($article->created_at->format('d/m/y')); ?></p>
                    </div>
                </div>
                <hr>
                <p><?php echo e($article->body); ?></p>
                    <?php if(Auth::user() && Auth::user()->is_revisor): ?>
                <div class="text-center">
                    <a href="<?php echo e(route('article.index')); ?>" class="btn btn-info text-white my-5">Torna indietro</a>
                </div>

                <div class="d-flex justify-content-between">
                    
              
                    <form action="<?php echo e(route('revisor.acceptedArticle' , compact('article'))); ?>" method="POST">
                       
                        <?php echo csrf_field(); ?>
                        <button class="btn btn-success text-white">Accetta articolo</button>
                    </form>
                    
                    <form action="<?php echo e(route('revisor.rejectArticle' , compact('article'))); ?>" method="POST">
                        <?php echo csrf_field(); ?>

                        <button class="btn btn-danger text-white">Rifiuta articolo</button>
                    </form>
                    
                 <?php endif; ?>
               
                 
                </div>
                
            </div>
      
        </div>
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
<?php endif; ?><?php /**PATH C:\laragon\www\progetto_post_Marletta_Damiano-main\resources\views/article/show.blade.php ENDPATH**/ ?>