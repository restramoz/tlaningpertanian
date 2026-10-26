<header class="sticky top-0 z-30 bg-industry-black/95 backdrop-blur-md border-b border-dark-mahogany/80 shadow-md">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">
            <!-- Brand Logo -->
            <a href="<?php echo e(route('home')); ?>" class="group flex items-center gap-3.5 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-safety-orange focus-visible:ring-offset-2 focus-visible:ring-offset-industry-black rounded-lg p-1 transition-transform" aria-label="Tlaning Pertanian - Beranda">
                <div class="w-11 h-11 rounded-lg bg-burnt-brick border border-burnt-brick/80 flex items-center justify-center text-white shadow-inner group-hover:border-safety-orange transition-colors">
                    <!-- Sprout / Agricultural Growth SVG -->
                    <svg class="w-6 h-6 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="M7 20h10"/>
                        <path d="M12 20c0-7 1-10 5-13"/>
                        <path d="M12 20c0-5-1-8-5-10"/>
                        <path d="M17 7c2.5 0 4-1.5 4-4-2.5 0-4 1.5-4 4z"/>
                        <path d="M7 10c2 0 3.5-1 3.5-3.5C8.5 6.5 7 8 7 10z"/>
                    </svg>
                </div>
                <div class="flex flex-col">
                    <span class="text-base sm:text-lg font-bold tracking-tight text-white group-hover:text-safety-orange transition-colors">
                        <span class="text-safety-orange">Tlaning Pertanian</span>
                    </span>
                    <span class="text-xs text-neutral-300 font-medium tracking-wide">
                        Pelatihan &amp; Skema Kompetensi Agribisnis
                    </span>
                </div>
            </a>

            <!-- Desktop Navigation -->
            <nav class="hidden lg:flex items-center gap-7" role="navigation" aria-label="Navigasi Utama Desktop">
                <a href="<?php echo e(route('home')); ?>#pelatihan" class="text-sm font-semibold text-neutral-200 hover:text-safety-orange transition-colors py-1 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-safety-orange rounded">
                    Pelatihan
                </a>
                <a href="<?php echo e(route('home')); ?>#keunggulan" class="text-sm font-semibold text-neutral-200 hover:text-safety-orange transition-colors py-1 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-safety-orange rounded">
                    Keunggulan
                </a>
                <a href="<?php echo e(route('home')); ?>#faq" class="text-sm font-semibold text-neutral-200 hover:text-safety-orange transition-colors py-1 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-safety-orange rounded">
                    FAQ
                </a>
                <a href="<?php echo e(route('articles.index')); ?>" class="text-sm font-semibold text-neutral-200 hover:text-safety-orange transition-colors py-1 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-safety-orange rounded">
                    Artikel
                </a>
                <a href="<?php echo e(route('home')); ?>#wilayah" class="text-sm font-semibold text-neutral-200 hover:text-safety-orange transition-colors py-1 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-safety-orange rounded">
                    Wilayah
                </a>
            </nav>

            <!-- CTA Actions (Desktop) -->
            <div class="hidden sm:flex items-center gap-3">
                <?php if (isset($component)) { $__componentOriginal5c9f603904931bf81a0c683c92c7b6cc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5c9f603904931bf81a0c683c92c7b6cc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.wa-cta','data' => ['variant' => 'primary','size' => 'sm','label' => 'Konsultasi WhatsApp','class' => 'bg-safety-orange hover:bg-burnt-brick text-industry-black hover:text-white font-bold']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('wa-cta'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['variant' => 'primary','size' => 'sm','label' => 'Konsultasi WhatsApp','class' => 'bg-safety-orange hover:bg-burnt-brick text-industry-black hover:text-white font-bold']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5c9f603904931bf81a0c683c92c7b6cc)): ?>
<?php $attributes = $__attributesOriginal5c9f603904931bf81a0c683c92c7b6cc; ?>
<?php unset($__attributesOriginal5c9f603904931bf81a0c683c92c7b6cc); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5c9f603904931bf81a0c683c92c7b6cc)): ?>
<?php $component = $__componentOriginal5c9f603904931bf81a0c683c92c7b6cc; ?>
<?php unset($__componentOriginal5c9f603904931bf81a0c683c92c7b6cc); ?>
<?php endif; ?>
            </div>

            <!-- Mobile Menu Toggle Button -->
            <div class="flex lg:hidden items-center gap-2">
                <button type="button"
                        id="mobile-nav-toggle"
                        aria-controls="mobile-nav-drawer"
                        aria-expanded="false"
                        aria-label="Buka menu navigasi utama"
                        class="p-2.5 rounded-lg text-white hover:text-safety-orange hover:bg-dark-mahogany border border-neutral-700 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-safety-orange">
                    <!-- Icon Hamburger -->
                    <svg id="icon-menu-open" class="w-6 h-6 block" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <!-- Icon Close -->
                    <svg id="icon-menu-close" class="w-6 h-6 hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Navigation Drawer -->
    <div id="mobile-nav-drawer"
         class="hidden lg:hidden bg-industry-black border-b border-dark-mahogany px-4 pt-2 pb-6 transition-all"
         role="navigation"
         aria-label="Navigasi Utama Seluler">
        <div class="flex flex-col space-y-3 pt-2">
            <a href="<?php echo e(route('home')); ?>#pelatihan" class="mobile-nav-link text-base font-semibold text-neutral-200 hover:text-safety-orange hover:bg-dark-mahogany px-3 py-2.5 rounded-md focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-safety-orange">
                Pelatihan
            </a>
            <a href="<?php echo e(route('home')); ?>#keunggulan" class="mobile-nav-link text-base font-semibold text-neutral-200 hover:text-safety-orange hover:bg-dark-mahogany px-3 py-2.5 rounded-md focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-safety-orange">
                Keunggulan
            </a>
            <a href="<?php echo e(route('home')); ?>#faq" class="mobile-nav-link text-base font-semibold text-neutral-200 hover:text-safety-orange hover:bg-dark-mahogany px-3 py-2.5 rounded-md focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-safety-orange">
                FAQ
            </a>
            <a href="<?php echo e(route('articles.index')); ?>" class="mobile-nav-link text-base font-semibold text-neutral-200 hover:text-safety-orange hover:bg-dark-mahogany px-3 py-2.5 rounded-md focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-safety-orange">
                Artikel
            </a>
            <a href="<?php echo e(route('home')); ?>#wilayah" class="mobile-nav-link text-base font-semibold text-neutral-200 hover:text-safety-orange hover:bg-dark-mahogany px-3 py-2.5 rounded-md focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-safety-orange">
                Wilayah
            </a>
            <div class="pt-3 border-t border-dark-mahogany">
                <?php if (isset($component)) { $__componentOriginal5c9f603904931bf81a0c683c92c7b6cc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5c9f603904931bf81a0c683c92c7b6cc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.wa-cta','data' => ['variant' => 'primary','size' => 'md','class' => 'w-full justify-center bg-safety-orange hover:bg-burnt-brick text-industry-black hover:text-white font-bold','label' => 'Konsultasi Cepat via WhatsApp']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('wa-cta'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['variant' => 'primary','size' => 'md','class' => 'w-full justify-center bg-safety-orange hover:bg-burnt-brick text-industry-black hover:text-white font-bold','label' => 'Konsultasi Cepat via WhatsApp']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5c9f603904931bf81a0c683c92c7b6cc)): ?>
<?php $attributes = $__attributesOriginal5c9f603904931bf81a0c683c92c7b6cc; ?>
<?php unset($__attributesOriginal5c9f603904931bf81a0c683c92c7b6cc); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5c9f603904931bf81a0c683c92c7b6cc)): ?>
<?php $component = $__componentOriginal5c9f603904931bf81a0c683c92c7b6cc; ?>
<?php unset($__componentOriginal5c9f603904931bf81a0c683c92c7b6cc); ?>
<?php endif; ?>
            </div>
        </div>
    </div>
</header>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const toggleBtn = document.getElementById('mobile-nav-toggle');
        const drawer = document.getElementById('mobile-nav-drawer');
        const openIcon = document.getElementById('icon-menu-open');
        const closeIcon = document.getElementById('icon-menu-close');
        const mobileLinks = document.querySelectorAll('.mobile-nav-link');

        if (toggleBtn && drawer) {
            toggleBtn.addEventListener('click', function () {
                const isExpanded = toggleBtn.getAttribute('aria-expanded') === 'true';
                toggleBtn.setAttribute('aria-expanded', !isExpanded);
                drawer.classList.toggle('hidden');
                openIcon.classList.toggle('hidden');
                closeIcon.classList.toggle('hidden');
                toggleBtn.setAttribute('aria-label', isExpanded ? 'Buka menu navigasi utama' : 'Tutup menu navigasi utama');
            });

            mobileLinks.forEach(function (link) {
                link.addEventListener('click', function () {
                    drawer.classList.add('hidden');
                    openIcon.classList.remove('hidden');
                    closeIcon.classList.add('hidden');
                    toggleBtn.setAttribute('aria-expanded', 'false');
                });
            });
        }
    });
</script>
<?php /**PATH /root/tlaningpertanian/resources/views/components/header.blade.php ENDPATH**/ ?>