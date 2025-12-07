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
                Lavora con noi
            </h1>
    </div>

    <div class="container my-5">
        <div class="row justify-content-center align-items-center border rounded p-2 shadow">

            <div class="col-12 col-md-6">
                <h2>Lavora come amministratore</h2>
                <p>Aiutaci a gestire il sito entrando a far parte del nostro team come amministratore</p>
                <h2>Lavora come revisore</h2>
                <p>Aiutaci a gestire il sito entrando a far parte del nostro team come revisore</p>
                <h2>Lavora come redattore</h2>
                <p>Aiutaci a gestire il sito entrando a far parte del nostro team come redattore</p>
                       
            </div>

            <div class="col-12 col-md-6">
                <?php if($errors->any()): ?>
                    <div class="alert alert-danger">
                        <ul>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($errors); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                <?php endif; ?>

                <form action="<?php echo e(route('careers.submit')); ?>" method="POST" class="p-5">
                    <?php echo csrf_field(); ?>
                    <div class="mb-3">
                        <label for="role" class="form-label">Per quale ruolo ti stai candidando?</label>
                        <select name="role" id="role" class="form-control">
                            <option value="">Scegli qui</option>
                            <option value="admin">Amministratore</option>
                            <option value="revisor">Revisore</option>
                            <option value="writer">Redattore</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Emai</label>
                        <input type="email" name="email" class="form-control" id="email" value="<?php echo e(old('email') ??
                        Auth::user()->email); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Parlaci di te</label>
                        <textarea name="message" id="message" cols="30" rows="7" class="form-control">
                            <?php echo e(old('message')); ?>

                        </textarea>
                    </div>
                    <div class="mt-2">
                        <button class="btn btn-info text-white">Invia la tua canditatura</button>
                    </div>
                </form>
                
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
<?php endif; ?><?php /**PATH C:\laragon\www\progetto_post_Marletta_Damiano-main\resources\views/careers.blade.php ENDPATH**/ ?>