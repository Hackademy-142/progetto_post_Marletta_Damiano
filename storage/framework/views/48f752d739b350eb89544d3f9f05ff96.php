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
                Accedi
            </h1>
    </div>
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

<form class="card p-5 shadow" action="<?php echo e(route ('login')); ?>" method="POST">
                <?php echo csrf_field(); ?>
  

  <div class="mb-3">
    <label for="email" class="form-label">email</label>
    <input type="email" name="email" class="form-control" id="email" value="<?php echo e(old( 'email' )); ?>">
    
  </div>

  <div class="mb-3">
    <label for="password" class="form-label">password</label>
    <input type="password" name="password" class="form-control" id="password" value="<?php echo e(old( 'password' )); ?>">
    
  </div>

  <div class="mb-3">
   <button class="btn bg-info text-white" type="submit">accedi</button>
   <p class="small mt-2">Non sei registrato? <a href="<?php echo e(route('register')); ?>">Clicca qui </a></p>
  </div>


<form>  
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
<?php endif; ?>
<?php /**PATH C:\laragon\www\progetto_post_Marletta_Damiano-main\resources\views/auth/login.blade.php ENDPATH**/ ?>