<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>" class="h-full bg-white text-dark-mahogany antialiased">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php if (! empty(trim($__env->yieldContent('title')))): ?><?php echo $__env->yieldContent('title'); ?> — <?php endif; ?><?php echo e(config('app.name', 'Tlaning Pertanian')); ?></title>
    <meta name="description" content="<?php echo $__env->yieldContent('meta_description', 'Portal pelatihan dan skema kompetensi pertanian. Informasi program pelatihan pertanian dan layanan konsultasi.'); ?>">

    <!-- Canonical URL -->
    <link rel="canonical" href="<?php echo e(url()->current()); ?>">

    <!-- Open Graph / Meta -->
    <meta property="og:title" content="<?php if (! empty(trim($__env->yieldContent('title')))): ?><?php echo $__env->yieldContent('title'); ?> — <?php endif; ?><?php echo e(config('app.name', 'Tlaning Pertanian')); ?>">
    <meta property="og:description" content="<?php echo $__env->yieldContent('meta_description', 'Informasi pelatihan dan skema kompetensi pertanian serta layanan konsultasi di Indonesia.'); ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo e(url()->current()); ?>">

    <!-- Theme Color -->
    <meta name="theme-color" content="#0F5132">

    <!-- Styles & Scripts via Vite -->
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>

    <?php if (! empty(trim($__env->yieldContent('robots')))): ?>
    <meta name="robots" content="<?php echo $__env->yieldContent('robots'); ?>">
    <?php endif; ?>

    <?php echo $__env->yieldPushContent('schema'); ?>
    <?php echo $__env->yieldPushContent('styles'); ?>
</head>
<body class="min-h-full flex flex-col bg-white text-dark-mahogany antialiased selection:bg-safety-orange selection:text-industry-black">
    <!-- Accessible Skip Link -->
    <a href="#main-content" class="sr-only focus:not-sr-only focus:fixed focus:top-4 focus:left-4 z-50 bg-safety-orange text-industry-black font-bold px-4 py-2 rounded-md shadow-lg outline-none ring-2 ring-industry-black">
        Lewati ke konten utama
    </a>

    <!-- Site Header -->
    <?php if (isset($component)) { $__componentOriginalfd1f218809a441e923395fcbf03e4272 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalfd1f218809a441e923395fcbf03e4272 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.header','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalfd1f218809a441e923395fcbf03e4272)): ?>
<?php $attributes = $__attributesOriginalfd1f218809a441e923395fcbf03e4272; ?>
<?php unset($__attributesOriginalfd1f218809a441e923395fcbf03e4272); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfd1f218809a441e923395fcbf03e4272)): ?>
<?php $component = $__componentOriginalfd1f218809a441e923395fcbf03e4272; ?>
<?php unset($__componentOriginalfd1f218809a441e923395fcbf03e4272); ?>
<?php endif; ?>

    <!-- Main Content Landmark -->
    <main id="main-content" class="flex-grow focus:outline-none" tabindex="-1">
        <?php if(isset($slot)): ?>
            <?php echo e($slot); ?>

        <?php else: ?>
            <?php echo $__env->yieldContent('content'); ?>
        <?php endif; ?>
    </main>

    <!-- Site Footer -->
    <?php if (isset($component)) { $__componentOriginal8a8716efb3c62a45938aca52e78e0322 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8a8716efb3c62a45938aca52e78e0322 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.footer','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8a8716efb3c62a45938aca52e78e0322)): ?>
<?php $attributes = $__attributesOriginal8a8716efb3c62a45938aca52e78e0322; ?>
<?php unset($__attributesOriginal8a8716efb3c62a45938aca52e78e0322); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8a8716efb3c62a45938aca52e78e0322)): ?>
<?php $component = $__componentOriginal8a8716efb3c62a45938aca52e78e0322; ?>
<?php unset($__componentOriginal8a8716efb3c62a45938aca52e78e0322); ?>
<?php endif; ?>

    <!-- Floating WhatsApp CTA -->
    <?php if (isset($component)) { $__componentOriginalae1ce0abf25f4237d6620af00488900d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalae1ce0abf25f4237d6620af00488900d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.wa-float','data' => ['message' => View::hasSection('wa_message') ? View::getSection('wa_message') : null]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('wa-float'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['message' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(View::hasSection('wa_message') ? View::getSection('wa_message') : null)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalae1ce0abf25f4237d6620af00488900d)): ?>
<?php $attributes = $__attributesOriginalae1ce0abf25f4237d6620af00488900d; ?>
<?php unset($__attributesOriginalae1ce0abf25f4237d6620af00488900d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalae1ce0abf25f4237d6620af00488900d)): ?>
<?php $component = $__componentOriginalae1ce0abf25f4237d6620af00488900d; ?>
<?php unset($__componentOriginalae1ce0abf25f4237d6620af00488900d); ?>
<?php endif; ?>
</body>
</html><?php /**PATH /root/tlaningpertanian/resources/views/layouts/app.blade.php ENDPATH**/ ?>