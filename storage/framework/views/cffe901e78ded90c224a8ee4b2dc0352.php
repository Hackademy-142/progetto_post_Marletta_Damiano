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
               Inserisci un articolo
            </h1>
            <div class="container my-5">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-8">
                        <?php if($errors->any()): ?>

                        <div class="alert alert-danger">
                            <ul>
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>

                        <?php endif; ?>
                        <form action="<?php echo e(route('article.store')); ?>" method="post" class="card p-5 shadow" enctype="multipart/form-data">
                                 <?php echo csrf_field(); ?>
                               <div class="row ">
                                    <div class="mb-3 col-6">
                                        <label for="title" class="form-label">Titolo:</label>
                                        <input type="text" name="title" class="form-control" id="title" value="<?php echo e(old('title')); ?>">
                                    </div>
                                    
                                    <div class="mb-3 col-6">
                                        <label for="title" class="form-label">Sottotitolo:</label>
                                        <input type="text" name="subtitle" class="form-control" id="subtitle" value="<?php echo e(old('subtitle')); ?>">
                                    </div>
                                </div>

                                <div class="row mb-2">
                                    <div class="mb-3 col-6">
                                        <label for="image" class="form-label">Tags</label>
                                        <input  name="tags" class="form-control" id="tags" value="<?php echo e(old('tags')); ?>" >
                                        <span class="small fst-italic">Dividi ogni tag con una virgola</span>
                                    </div>

                                    <div class="mb-3 col-6">
                                        <label for="tags" class="form-label">immagine:</label>
                                        <input type="file" name="image" class="form-control" id="image" >
                                    </div>
                                </div>
                             

                                
                                <div class="mb-5">
                                    <label for="category" class="form-label">Categoria:</label>
                                    <select  name="category" id="category" class="form-control text-capitalize">
                                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="body" class="form-label">Corpo del testo:</label>
                                    <textarea  name="body" class="form-control" id="body" cols="30" rows="7" ><?php echo e(old('body')); ?></textarea>
                                </div>
                                <div class="mt-2 d-flex justify-content-center">
                                    <button class="btn btn-info text-white ">Inserisci un articolo</button>
                                </div>

                        </form>

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
<?php endif; ?><?php /**PATH C:\laragon\www\progetto_post_Marletta_Damiano-main\resources\views/article/create.blade.php ENDPATH**/ ?>