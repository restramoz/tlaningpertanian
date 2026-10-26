<?php $__env->startSection('title', 'Skema Kompetensi Pertanian Provinsi ' . $province['name'] . ' — Konsultasi Resmi'); ?>
<?php $__env->startSection('meta_description', 'Informasi skema kompetensi dan program pelatihan pertanian untuk wilayah Provinsi ' . $province['name'] . '.'); ?>
<?php $__env->startSection('wa_message', $waMessage); ?>

<?php $__env->startSection('content'); ?>
    
    <div class="bg-neutral-100 border-b border-neutral-200">
        <?php if (isset($component)) { $__componentOriginale19f62b34dfe0bfdf95075badcb45bc2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale19f62b34dfe0bfdf95075badcb45bc2 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.breadcrumb','data' => ['items' => [
            ['label' => 'Wilayah', 'url' => null],
            ['label' => $province['name'], 'url' => null],
        ]]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('breadcrumb'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['items' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute([
            ['label' => 'Wilayah', 'url' => null],
            ['label' => $province['name'], 'url' => null],
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

    
    <section class="relative bg-industry-black text-white overflow-hidden border-b border-dark-mahogany" aria-labelledby="prov-hero-heading">
        <div class="absolute inset-0 opacity-10 pointer-events-none" aria-hidden="true">
            <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg">
                <defs><pattern id="grid-p" width="40" height="40" patternUnits="userSpaceOnUse"><path d="M 40 0 L 0 0 0 40" fill="none" stroke="#FFF" stroke-width="1"/></pattern></defs>
                <rect width="100%" height="100%" fill="url(#grid-p)" />
            </svg>
        </div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 sm:py-16 lg:py-20">
            <div class="max-w-3xl">
                <!-- Mobile hero image - Responsive with aspect-ratio -->
                <div class="lg:hidden mb-5 -mx-4 sm:-mx-6 lg:-mx-8">
                    <img src="<?php echo e(asset('images/home/hero.webp')); ?>" alt="Aktivitas pertanian di Provinsi <?php echo e($province['name']); ?>" width="1600" height="900" loading="eager" fetchpriority="high" decoding="async" class="hero-image-mobile w-full object-cover object-center rounded-xl" />
                </div>
                <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-burnt-brick border border-burnt-brick/80 text-white text-xs sm:text-sm font-semibold mb-5 shadow-sm">
                    <span class="w-2 h-2 rounded-full bg-safety-orange animate-pulse"></span>
                    Informasi Skema &amp; Layanan Konsultasi
                </div>
                <h1 id="prov-hero-heading" class="font-extrabold tracking-tight text-white leading-tight uppercase text-[clamp(1.75rem,4.5vw,2.5rem)] sm:text-[clamp(2rem,5vw,3rem)] lg:text-[clamp(2.25rem,4.5vw,3.5rem)]">
                    Skema Kompetensi<br><span class="text-safety-orange">Pertanian Provinsi <?php echo e($province['name']); ?></span>
                </h1>
                <p class="mt-6 text-base sm:text-lg text-neutral-200 leading-relaxed">
                    Pusat informasi skema kompetensi dan program pelatihan pertanian untuk badan usaha, fasilitas produksi, dan mitra agribisnis di <strong class="text-white">Provinsi <?php echo e($province['name']); ?></strong>.
                </p>
                <div class="mt-7 flex flex-col sm:flex-row gap-3 sm:gap-4 w-full">
                    <?php if (isset($component)) { $__componentOriginal5c9f603904931bf81a0c683c92c7b6cc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5c9f603904931bf81a0c683c92c7b6cc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.wa-cta','data' => ['variant' => 'primary','size' => 'lg','message' => $waMessage,'label' => 'Konsultasi Wilayah '.e($province['name']).'','class' => 'w-full sm:w-auto bg-safety-orange hover:bg-burnt-brick text-industry-black hover:text-white font-bold shadow-lg']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('wa-cta'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['variant' => 'primary','size' => 'lg','message' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($waMessage),'label' => 'Konsultasi Wilayah '.e($province['name']).'','class' => 'w-full sm:w-auto bg-safety-orange hover:bg-burnt-brick text-industry-black hover:text-white font-bold shadow-lg']); ?>
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
                <div class="mt-8 pt-6 border-t border-neutral-800 grid grid-cols-2 gap-4 sm:gap-6">
                    <div class="min-w-0"><div class="text-[10px] sm:text-xs text-neutral-400 uppercase tracking-wider">Pulau</div><div class="text-sm sm:text-base font-extrabold text-white mt-0.5"><?php echo e($province['island']); ?></div></div>
                    <div class="min-w-0"><div class="text-[10px] sm:text-xs text-neutral-400 uppercase tracking-wider">Kab/Kota</div><div class="text-sm sm:text-base font-extrabold text-safety-orange mt-0.5"><?php echo e($province['total_cities']); ?></div></div>
                    <div class="min-w-0"><div class="text-[10px] sm:text-xs text-neutral-400 uppercase tracking-wider">Layanan</div><div class="text-sm sm:text-base font-extrabold text-white mt-0.5"><?php echo e(count($programs)); ?> Skema</div></div>
                    <div class="min-w-0"><div class="text-[10px] sm:text-xs text-neutral-400 uppercase tracking-wider">Lingkup</div><div class="text-sm sm:text-base font-extrabold text-safety-orange mt-0.5">Pertanian &amp; Agribisnis</div></div>
                </div>
            </div>
        </div>
    </section>

    
    <section class="py-10 bg-neutral-50 border-b border-neutral-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-start gap-4">
                <svg class="w-6 h-6 text-burnt-brick shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                </svg>
                <p class="text-sm text-dark-mahogany leading-relaxed">
                    <strong class="text-industry-black">Catatan penting:</strong> Halaman ini adalah portal informasi dan konsultasi program. Penyelenggaraan pelatihan tatap muka, in-house training di kota/kabupaten dalam Provinsi <?php echo e($province['name']); ?>, jadwal batch, dan persyaratan administrasi dikoordinasikan secara langsung melalui tim konsultan kami.
                </p>
            </div>
        </div>
    </section>

    
    <section id="program" class="py-14 sm:py-20 bg-white border-b border-neutral-200" aria-labelledby="prov-program-heading">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mb-10">
                <span class="text-xs font-bold uppercase tracking-wider text-burnt-brick bg-neutral-100 px-3 py-1 rounded-full border border-burnt-brick/20">Layanan Unggulan</span>
                <h2 id="prov-program-heading" class="mt-3 font-extrabold text-industry-black tracking-tight text-[clamp(1.5rem,4vw,2rem)] sm:text-[clamp(1.75rem,4.5vw,2.25rem)]">
                    Skema Kompetensi &amp; Layanan di <?php echo e($province['name']); ?>

                </h2>
                <p class="mt-3 text-sm sm:text-base text-dark-mahogany">Pilih skema kompetensi atau layanan konsultasi sesuai kebutuhan organisasi Anda.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <?php $__currentLoopData = $programs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="<?php echo e(route('program.show', $prog['slug'])); ?>" class="group flex flex-col bg-white rounded-xl border border-neutral-200 hover:border-burnt-brick hover:shadow-md transition-all overflow-hidden focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-burnt-brick">
                    <div class="h-1.5 bg-safety-orange"></div>
                    <div class="p-6 flex-1 flex flex-col">
                        <div class="text-xs font-bold uppercase tracking-wider text-burnt-brick mb-1"><?php echo e($prog['category_label'] ?? 'Layanan'); ?></div>
                        <h3 class="text-lg font-bold text-industry-black mb-2 group-hover:text-burnt-brick transition-colors"><?php echo e($prog['title']); ?></h3>
                        <p class="text-xs sm:text-sm text-dark-mahogany flex-1 leading-relaxed line-clamp-3"><?php echo e($prog['hero_subheading']); ?></p>
                        <div class="mt-4 pt-4 border-t border-neutral-100 text-xs font-bold text-burnt-brick flex items-center justify-between">
                            <span>Rincian Program</span>
                            <span>&rarr;</span>
                        </div>
                    </div>
                </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>

    
    <?php if(count($province['cities']) > 0): ?>
    <section id="kota" class="py-14 sm:py-20 bg-neutral-50 border-b border-neutral-200" aria-labelledby="prov-kota-heading">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 id="prov-kota-heading" class="text-2xl font-extrabold text-industry-black mb-8">
                Kabupaten &amp; Kota di Provinsi <?php echo e($province['name']); ?>

            </h2>
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-3">
                <?php $__currentLoopData = $province['cities']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="<?php echo e(route('regional.city', $c['slug'])); ?>" class="block px-3 py-2.5 rounded-lg bg-white border border-neutral-200 hover:border-burnt-brick hover:bg-neutral-100 text-sm font-medium text-dark-mahogany hover:text-burnt-brick transition-colors truncate focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-burnt-brick">
                    <?php echo e($c['name']); ?>

                </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>
    <?php endif; ?>

    
    <section id="faq" class="py-14 sm:py-20 bg-white border-b border-neutral-200" aria-labelledby="prov-faq-heading">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <span class="text-xs font-bold uppercase tracking-wider text-burnt-brick bg-neutral-100 px-3 py-1 rounded-full border border-burnt-brick/20">Tanya Jawab</span>
                <h2 id="prov-faq-heading" class="mt-3 text-2xl font-extrabold text-industry-black tracking-tight">FAQ: Skema Kompetensi di <?php echo e($province['name']); ?></h2>
            </div>
            <div class="space-y-4">
                <?php $__currentLoopData = [
                    [
                        'q' => 'Apakah skema kompetensi dan layanan konsultasi tersedia untuk wilayah Provinsi ' . $province['name'] . '?',
                        'a' => 'Ya, halaman ini menyajikan seluruh skema kompetensi pertanian yang tersedia, dan layanan konsultasi dapat dikonfirmasi untuk kota dan kabupaten di Provinsi ' . $province['name'] . '.',
                    ],
                    [
                        'q' => 'Skema kompetensi apa saja yang tersedia?',
                        'a' => 'Daftar skema kompetensi pertanian yang lengkap tersedia pada bagian katalog di halaman ini, beserta unit kompetensi masing-masing. Rincian dijelaskan pada halaman program setiap skema.',
                    ],
                    [
                        'q' => 'Bagaimana cara pengajuan konsultasi untuk kebutuhan di ' . $province['name'] . '?',
                        'a' => 'Hubungi tim kami melalui WhatsApp. Kebutuhan skema, profil kegiatan usaha, dan persyaratan administrasi akan didiskusikan terlebih dahulu sebelum proposal resmi disiapkan.',
                    ],
                ]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <details class="group bg-white rounded-xl border border-neutral-200 p-5 sm:p-6 open:border-burnt-brick shadow-xs">
                    <summary class="flex justify-between items-center gap-4 font-bold text-industry-black cursor-pointer list-none focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-burnt-brick rounded">
                        <span><?php echo e($faq['q']); ?></span>
                        <span class="w-7 h-7 rounded-full bg-neutral-100 flex items-center justify-center shrink-0 group-open:rotate-180 transition-transform">
                            <svg class="w-4 h-4 text-burnt-brick" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
                        </span>
                    </summary>
                    <p class="mt-4 pt-4 border-t border-neutral-100 text-sm text-dark-mahogany leading-relaxed"><?php echo e($faq['a']); ?></p>
                </details>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>

    
    <section class="py-16 sm:py-24 bg-industry-black text-white" aria-labelledby="prov-cta-heading">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="max-w-3xl mx-auto">
                <h2 id="prov-cta-heading" class="text-2xl sm:text-3xl font-extrabold uppercase tracking-tight">
                    Konsultasi Program Pertanian<br><span class="text-safety-orange">Provinsi <?php echo e($province['name']); ?></span>
                </h2>
                <p class="mt-4 text-base text-neutral-200 leading-relaxed">
                    Hubungi kami untuk informasi skema kompetensi, halaman program, atau kebutuhan konsultasi di Provinsi <?php echo e($province['name']); ?>.
                </p>
                <div class="mt-7 flex flex-col sm:flex-row items-center justify-center gap-3 sm:gap-4 w-full">
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button','data' => ['href' => route('home'),'variant' => 'outline','size' => 'lg','class' => 'w-full sm:w-auto text-white border-2 border-neutral-400 hover:bg-neutral-800']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('home')),'variant' => 'outline','size' => 'lg','class' => 'w-full sm:w-auto text-white border-2 border-neutral-400 hover:bg-neutral-800']); ?>Kembali ke Beranda <?php echo $__env->renderComponent(); ?>
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

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /root/tlaningpertanian/resources/views/regional/province.blade.php ENDPATH**/ ?>