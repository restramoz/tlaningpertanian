<?php $__env->startSection('robots', 'noindex, follow'); ?>

<?php $__env->startSection('title', 'Skema Kompetensi Pertanian — Kecamatan ' . $district['name'] . ', ' . $district['city_name']); ?>
<?php $__env->startSection('meta_description', 'Halaman referensi wilayah administratif Kecamatan ' . $district['name'] . ' di ' . $district['city_name'] . '. Konsultasi skema kompetensi pertanian tersedia melalui WhatsApp.'); ?>
<?php $__env->startSection('wa_message', $waMessage); ?>

<?php $__env->startSection('content'); ?>
<noscript>
    <style>.scheme-extra[hidden]{display:block!important;}</style>
</noscript>
    
    <div class="bg-neutral-100 border-b border-neutral-200">
        <?php if (isset($component)) { $__componentOriginale19f62b34dfe0bfdf95075badcb45bc2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale19f62b34dfe0bfdf95075badcb45bc2 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.breadcrumb','data' => ['items' => [
            ['label' => 'Wilayah', 'url' => null],
            ['label' => $district['province'], 'url' => route('regional.province', $district['province_slug'])],
            ['label' => $district['city_name'], 'url' => route('regional.city', $district['city_slug'])],
            ['label' => $district['name'], 'url' => null],
        ]]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('breadcrumb'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['items' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute([
            ['label' => 'Wilayah', 'url' => null],
            ['label' => $district['province'], 'url' => route('regional.province', $district['province_slug'])],
            ['label' => $district['city_name'], 'url' => route('regional.city', $district['city_slug'])],
            ['label' => $district['name'], 'url' => null],
        ])]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale19f62b34dfe0bfdf95075badcb45bc2)): ?>
<?php $attributes = $__attributesOriginale19f62b34dfe0bfdf95075badcb45bc2; ?>
<?php unset($__attributesOriginale19f62b34dfe0bfdf95075badcb45bc2); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale19f62b34dfe0bfdf95075badcb45bc2)): ?>
<?php $component = $__componentOriginale19f62b34dfe0bfdf95075badcb45bc2; ?>
<?php unset($__componentOriginale19f62b34dfe0bfdf95075badcb45bc2); ?>
<?php endif; ?>
    </div>

    
    <section class="relative bg-industry-black text-white overflow-hidden border-b border-dark-mahogany" aria-labelledby="dist-hero-heading">
        <div class="absolute inset-0 opacity-10 pointer-events-none" aria-hidden="true">
            <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg">
                <defs><pattern id="grid-d" width="40" height="40" patternUnits="userSpaceOnUse"><path d="M 40 0 L 0 0 0 40" fill="none" stroke="#FFF" stroke-width="1"/></pattern></defs>
                <rect width="100%" height="100%" fill="url(#grid-d)" />
            </svg>
        </div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 sm:py-14">
            <div class="max-w-3xl">
                <!-- Mobile hero image - Responsive with aspect-ratio -->
                <div class="lg:hidden mb-4 -mx-4 sm:-mx-6 lg:-mx-8">
                    <img src="<?php echo e(asset('images/home/hero.webp')); ?>" alt="Aktivitas pertanian di Kecamatan <?php echo e($district['name']); ?>" width="1600" height="900" loading="eager" fetchpriority="high" decoding="async" class="hero-image-mobile w-full object-cover object-center rounded-xl" />
                </div>
                <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-burnt-brick border border-burnt-brick/80 text-white text-xs sm:text-sm font-semibold mb-5 shadow-sm">
                    <span class="w-2 h-2 rounded-full bg-safety-orange animate-pulse"></span>
                    Halaman Referensi Wilayah
                </div>
                <h1 id="dist-hero-heading" class="text-2xl sm:text-3xl lg:text-4xl font-extrabold tracking-tight text-white leading-tight uppercase">
                    Skema Kompetensi Pertanian – <span class="text-safety-orange">Kec. <?php echo e($district['name']); ?></span>
                </h1>
                <p class="mt-4 text-base text-neutral-200 leading-relaxed">
                    Halaman ini adalah halaman referensi wilayah untuk <strong class="text-white">Kecamatan <?php echo e($district['name']); ?></strong>, <a href="<?php echo e(route('regional.city', $district['city_slug'])); ?>" class="text-safety-orange hover:underline font-semibold"><?php echo e($district['city_name']); ?></a>, Provinsi <?php echo e($district['province']); ?>.
                    Untuk konsultasi skema kompetensi pertanian, hubungi kami melalui WhatsApp.
                </p>
                <div class="mt-5 w-full sm:w-auto">
                    <?php if (isset($component)) { $__componentOriginal5c9f603904931bf81a0c683c92c7b6cc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5c9f603904931bf81a0c683c92c7b6cc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.wa-cta','data' => ['variant' => 'primary','size' => 'md','message' => $waMessage,'label' => 'Konsultasi via WhatsApp','class' => 'w-full bg-safety-orange hover:bg-burnt-brick text-industry-black hover:text-white font-bold']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('wa-cta'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['variant' => 'primary','size' => 'md','message' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($waMessage),'label' => 'Konsultasi via WhatsApp','class' => 'w-full bg-safety-orange hover:bg-burnt-brick text-industry-black hover:text-white font-bold']); ?>
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
    </section>

    
    <section class="py-8 bg-neutral-50 border-b border-neutral-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-start gap-4">
                <svg class="w-5 h-5 text-burnt-brick shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <p class="text-sm text-dark-mahogany leading-relaxed">
                    Halaman ini menyediakan informasi awal tingkat kecamatan. Penyelenggaraan pelatihan tatap muka dan in-house training dikonfirmasi langsung melalui konsultasi WhatsApp.
                </p>
            </div>
        </div>
    </section>

    
    <section class="py-14 sm:py-20 bg-white border-b border-neutral-200" aria-labelledby="dist-program-heading">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 id="dist-program-heading" class="font-extrabold text-industry-black mb-6 text-[clamp(1.25rem,4vw,1.5rem)] sm:text-[clamp(1.5rem,4.5vw,1.75rem)]">Skema Kompetensi Pertanian</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <?php $__currentLoopData = $programs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php $extra = $loop->iteration > 6; ?>
                <a href="<?php echo e(route('city.program.detail', ['city' => $district['city_slug'], 'program' => $prog['slug']])); ?>" class="group flex flex-col bg-white rounded-xl border border-neutral-200 hover:border-burnt-brick hover:shadow-md transition-all overflow-hidden focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-burnt-brick <?php echo e($extra ? 'scheme-extra' : ''); ?>" <?php if($extra): ?> hidden <?php endif; ?>>
                    <div class="h-1.5 bg-safety-orange"></div>
                    <div class="p-6 flex-1 flex flex-col">
                        <div class="text-xs font-bold uppercase tracking-wider text-burnt-brick mb-1"><?php echo e($prog['category_label'] ?? 'Layanan'); ?></div>
                        <h3 class="text-base font-bold text-industry-black mb-2 group-hover:text-burnt-brick transition-colors"><?php echo e($prog['title']); ?></h3>
                        <p class="text-xs text-dark-mahogany flex-1 leading-relaxed line-clamp-3"><?php echo e($prog['hero_subheading']); ?></p>
                        <div class="mt-4 pt-4 border-t border-neutral-100 text-xs font-bold text-burnt-brick flex items-center justify-between">
                            <span>Detail Layanan</span>
                            <span>&rarr;</span>
                        </div>
                    </div>
                </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            <div class="mt-10 text-center">
                <button type="button" class="js-show-all inline-flex items-center justify-center px-6 py-3 text-sm font-bold text-white bg-burnt-brick hover:bg-leaf rounded-lg focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-burnt-brick transition-colors" aria-expanded="false" data-extra-count="<?php echo e(max(0, count($programs) - 6)); ?>">
                    Lihat Semua Skema
                </button>
                <p class="mt-3 text-xs text-dark-mahogany">
                    Menampilkan 6 dari <?php echo e(count($programs)); ?> skema. Saat diperluas, seluruh <?php echo e(count($programs)); ?> skema tampil; pilih tombol yang sama untuk menampilkan lebih sedikit.
                </p>
            </div>
        </div>
    </section>

    
    <?php if(isset($district['sibling_districts']) && count($district['sibling_districts']) > 0): ?>
    <section class="py-10 bg-neutral-50 border-b border-neutral-200" aria-labelledby="dist-sibling-heading">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 id="dist-sibling-heading" class="font-bold text-industry-black mb-4 text-[clamp(1rem,3.5vw,1.125rem)] sm:text-[clamp(1.125rem,4vw,1.25rem)]">
                Kecamatan Lain di <?php echo e($district['city_name']); ?>

            </h2>
            <div class="flex flex-wrap gap-2">
                <?php $__currentLoopData = array_slice($district['sibling_districts'], 0, 12); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sib): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="<?php echo e(route('regional.district', [$district['city_slug'], $sib['slug']])); ?>" class="inline-flex px-3 py-1.5 rounded-full bg-white border border-neutral-200 hover:border-burnt-brick text-sm text-dark-mahogany hover:text-burnt-brick transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-burnt-brick">
                    <?php echo e($sib['name']); ?>

                </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <a href="<?php echo e(route('regional.city', $district['city_slug'])); ?>" class="inline-flex px-3 py-1.5 rounded-full bg-white border border-burnt-brick text-sm font-semibold text-burnt-brick hover:bg-neutral-100 transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-burnt-brick">
                    Lihat semua kecamatan <?php echo e($district['city_name']); ?> &rarr;
                </a>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <?php if (isset($component)) { $__componentOriginal956b692d49e4c297961687ca74442fd3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal956b692d49e4c297961687ca74442fd3 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.regional-map','data' => ['citySlug' => $district['city_slug'],'districtSlug' => $district['slug'],'regionName' => 'Kecamatan ' . $district['name']]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('regional-map'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['citySlug' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($district['city_slug']),'districtSlug' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($district['slug']),'regionName' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('Kecamatan ' . $district['name'])]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal956b692d49e4c297961687ca74442fd3)): ?>
<?php $attributes = $__attributesOriginal956b692d49e4c297961687ca74442fd3; ?>
<?php unset($__attributesOriginal956b692d49e4c297961687ca74442fd3); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal956b692d49e4c297961687ca74442fd3)): ?>
<?php $component = $__componentOriginal956b692d49e4c297961687ca74442fd3; ?>
<?php unset($__componentOriginal956b692d49e4c297961687ca74442fd3); ?>
<?php endif; ?>

    
    <?php if(isset($articles) && count($articles) > 0): ?>
    <section id="artikel" class="py-14 sm:py-20 bg-white border-b border-neutral-200" aria-labelledby="dist-article-heading">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 id="dist-article-heading" class="text-xl font-extrabold text-industry-black mb-2">
                Artikel &amp; Panduan di Kecamatan <?php echo e($district['name']); ?>

            </h2>
            <p class="text-sm text-dark-mahogany mb-8">Kumpulan artikel edukatif terkait skema kompetensi dan pertanian untuk wilayah <?php echo e($district['city_name']); ?>.</p>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $art): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="<?php echo e(route('articles.show', $art->slug)); ?>" class="group flex flex-col bg-white rounded-xl border border-neutral-200 hover:border-burnt-brick hover:shadow-md transition-all overflow-hidden focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-burnt-brick">
                    
                    <?php if($art->featured_image): ?>
                        <div class="relative overflow-hidden bg-neutral-100 aspect-video max-h-[240px]">
                            <img
                                src="/<?php echo e(ltrim($art->featured_image, '/')); ?>"
                                alt="<?php echo e($art->title); ?>"
                                class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-300"
                                loading="lazy"
                            >
                        </div>
                    <?php else: ?>
                        <div class="aspect-video bg-gradient-to-br from-neutral-100 to-neutral-200 flex items-center justify-center">
                            <svg class="w-10 h-10 text-neutral-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                        </div>
                    <?php endif; ?>
                    <div class="p-6 flex-1 flex flex-col">
                        <h3 class="text-base font-bold text-industry-black mb-2 group-hover:text-burnt-brick transition-colors line-clamp-2"><?php echo e($art->title); ?></h3>
                        <p class="text-xs text-dark-mahogany flex-1 leading-relaxed line-clamp-3"><?php echo e($art->excerpt); ?></p>
                        <div class="mt-4 pt-4 border-t border-neutral-100 text-xs font-bold text-burnt-brick flex items-center justify-between">
                            <span>Baca Selengkapnya</span>
                            <span>&rarr;</span>
                        </div>
                    </div>
                </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>
    <?php endif; ?>

    
    <section class="py-14 sm:py-20 bg-industry-black text-white" aria-labelledby="dist-cta-heading">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="max-w-2xl mx-auto">
                <h2 id="dist-cta-heading" class="text-xl sm:text-2xl font-extrabold uppercase tracking-tight">
                    Konsultasi via WhatsApp<br><span class="text-safety-orange">Kecamatan <?php echo e($district['name']); ?></span>
                </h2>
                <p class="mt-4 text-sm text-neutral-200 leading-relaxed">
                    Hubungi kami untuk informasi skema kompetensi, halaman program, atau kebutuhan konsultasi pertanian.
                </p>
                <div class="mt-5 flex flex-col sm:flex-row items-center justify-center gap-3 sm:gap-4 w-full">
                    <?php if (isset($component)) { $__componentOriginal5c9f603904931bf81a0c683c92c7b6cc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5c9f603904931bf81a0c683c92c7b6cc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.wa-cta','data' => ['variant' => 'primary','size' => 'lg','message' => $waMessage,'label' => 'Konsultasi Sekarang','class' => 'w-full sm:w-auto bg-safety-orange hover:bg-burnt-brick text-industry-black hover:text-white font-bold shadow-lg']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('wa-cta'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['variant' => 'primary','size' => 'lg','message' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($waMessage),'label' => 'Konsultasi Sekarang','class' => 'w-full sm:w-auto bg-safety-orange hover:bg-burnt-brick text-industry-black hover:text-white font-bold shadow-lg']); ?>
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
                    <?php if (isset($component)) { $__componentOriginald0f1fd2689e4bb7060122a5b91fe8561 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button','data' => ['href' => route('regional.city', $district['city_slug']),'variant' => 'outline','size' => 'lg','class' => 'w-full sm:w-auto text-white border-2 border-neutral-400 hover:bg-neutral-800']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('regional.city', $district['city_slug'])),'variant' => 'outline','size' => 'lg','class' => 'w-full sm:w-auto text-white border-2 border-neutral-400 hover:bg-neutral-800']); ?><?php echo e($district['city_name']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561)): ?>
<?php $attributes = $__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561; ?>
<?php unset($__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald0f1fd2689e4bb7060122a5b91fe8561)): ?>
<?php $component = $__componentOriginald0f1fd2689e4bb7060122a5b91fe8561; ?>
<?php unset($__componentOriginald0f1fd2689e4bb7060122a5b91fe8561); ?>
<?php endif; ?>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /root/tlaningpertanian/resources/views/regional/district.blade.php ENDPATH**/ ?>