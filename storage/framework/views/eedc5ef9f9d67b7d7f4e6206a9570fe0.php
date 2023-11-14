<?php $__env->startSection('content'); ?>
<?php if (isset($component)) { $__componentOriginal7c061f8dc4557e9f20f18d106f4ce740 = $component; } ?>
<?php $component = BladeUIKit\Components\Forms\Form::resolve(['action' => ''.e(route('login')).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(BladeUIKit\Components\Forms\Form::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="row border bg-white shadow-lg box-area">
            <h2 class="text-center d-flex justify-content-center">Sikebas</h2>
            <div class="col-md-6 d-flex rounded-4 justify-content-center align-items-center flex-column left-box" style="background-color: green; opacity: 95%;">
                <div class="featured-image mb-1">
                    <img src="<?php echo e(asset('assets/logo.png')); ?>" class="img-fluid mx-auto" style="width: 200px !important; height: auto !important;" />
                </div>
                <button type="submit" class="text-white fs-3" style="font-family: 'Courier New', Courier, monospace; font-weight: 600; background-color: transparent; border: transparent;">Masuk</button>
            </div>
            <div class="col-md-6 right-box">
                <div id="bulet1"></div>
                <div class="row align-items-center mt-4">
                    <div class="mb-3 mt-5">
                        <input type="text" name="username" class="form-control form-control-lg bg-light fs-6" value="<?php echo e(old('username')); ?>" placeholder="Username">
                        <?php if (isset($component)) { $__componentOriginal707dea7de1c7458f7cce7e91286e1e95 = $component; } ?>
<?php $component = BladeUIKit\Components\Forms\Error::resolve(['field' => 'username'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(BladeUIKit\Components\Forms\Error::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mt-2 text-end']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal707dea7de1c7458f7cce7e91286e1e95)): ?>
<?php $component = $__componentOriginal707dea7de1c7458f7cce7e91286e1e95; ?>
<?php unset($__componentOriginal707dea7de1c7458f7cce7e91286e1e95); ?>
<?php endif; ?>
                    </div>
                    <div class="mb-5">
                        <input type="password" name="password" class="form-control form-control-lg bg-light fs-6" placeholder="Password">
                        <?php if (isset($component)) { $__componentOriginal707dea7de1c7458f7cce7e91286e1e95 = $component; } ?>
<?php $component = BladeUIKit\Components\Forms\Error::resolve(['field' => 'password'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(BladeUIKit\Components\Forms\Error::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mt-2 text-end']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal707dea7de1c7458f7cce7e91286e1e95)): ?>
<?php $component = $__componentOriginal707dea7de1c7458f7cce7e91286e1e95; ?>
<?php unset($__componentOriginal707dea7de1c7458f7cce7e91286e1e95); ?>
<?php endif; ?>
                    </div>
                </div>
                <div id="bulet2"></div>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7c061f8dc4557e9f20f18d106f4ce740)): ?>
<?php $component = $__componentOriginal7c061f8dc4557e9f20f18d106f4ce740; ?>
<?php unset($__componentOriginal7c061f8dc4557e9f20f18d106f4ce740); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\website\SiKebas\resources\views/auth/login.blade.php ENDPATH**/ ?>