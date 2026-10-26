<?php $__env->startSection('title', $program['meta_title']); ?>
<?php $__env->startSection('meta_description', $program['meta_description']); ?>
<?php $__env->startSection('wa_message', $program['wa_message']); ?>

<?php $__env->startSection('content'); ?>
    <!-- BREADCRUMB NAVIGATION -->
    <div class="bg-neutral-100 border-b border-neutral-200">
        <?php if (isset($component)) { $__componentOriginale19f62b34dfe0bfdf95075badcb45bc2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale19f62b34dfe0bfdf95075badcb45bc2 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.breadcrumb','data' => ['items' => [
            ['label' => $program['category_label'] ?? 'Layanan', 'url' => route('home') . (($program['category'] ?? '') === 'service' ? '#jasa' : '#pelatihan')],
            ['label' => $program['title'], 'url' => null],
        ]]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('breadcrumb'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['items' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute([
            ['label' => $program['category_label'] ?? 'Layanan', 'url' => route('home') . (($program['category'] ?? '') === 'service' ? '#jasa' : '#pelatihan')],
            ['label' => $program['title'], 'url' => null],
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

    <!-- HERO SECTION (DARK SURFACE) -->
    <section class="relative bg-industry-black text-white overflow-hidden border-b border-dark-mahogany" aria-labelledby="program-hero-heading">
        <!-- Industrial Grid Pattern Accent -->
        <div class="absolute inset-0 opacity-10 pointer-events-none" aria-hidden="true">
            <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <pattern id="program-grid-pattern" width="40" height="40" patternUnits="userSpaceOnUse">
                        <path d="M 40 0 L 0 0 0 40" fill="none" stroke="#FFFFFF" stroke-width="1" />
                    </pattern>
                </defs>
                <rect width="100%" height="100%" fill="url(#program-grid-pattern)" />
            </svg>
        </div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 sm:py-16 lg:py-20">
            <div class="max-w-3xl">
                <!-- Program Badge -->
                <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-burnt-brick border border-burnt-brick/80 text-white text-xs sm:text-sm font-semibold mb-5 shadow-sm">
                    <span class="w-2 h-2 rounded-full bg-safety-orange animate-pulse"></span>
                    <span><?php echo e($program['badge']); ?></span>
                </div>

                <!-- Main Heading - Responsive with clamp() -->
                <h1 id="program-hero-heading" class="font-extrabold tracking-tight text-white leading-tight uppercase text-[clamp(1.75rem,4.5vw,2.5rem)] sm:text-[clamp(2rem,5vw,3rem)] lg:text-[clamp(2.25rem,4.5vw,3.5rem)]">
                    <?php echo e($program['hero_heading']); ?> <span class="text-safety-orange"><?php echo e($program['hero_highlight']); ?></span>
                </h1>

                <!-- Subheading -->
                <p class="mt-5 text-sm sm:text-base lg:text-lg text-neutral-200 leading-relaxed max-w-2xl">
                    <?php echo e($program['hero_subheading']); ?>

                </p>

                <!-- Action Buttons - Full width on mobile -->
                <div class="mt-7 flex flex-col sm:flex-row gap-3 sm:gap-4 w-full">
                    <?php if (isset($component)) { $__componentOriginal5c9f603904931bf81a0c683c92c7b6cc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5c9f603904931bf81a0c683c92c7b6cc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.wa-cta','data' => ['variant' => 'primary','size' => 'lg','message' => $program['wa_message'],'label' => 'Konsultasi ' . explode('(', $program['title'])[0],'class' => 'w-full sm:w-auto shadow-md bg-safety-orange hover:bg-burnt-brick text-industry-black hover:text-white font-bold']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('wa-cta'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['variant' => 'primary','size' => 'lg','message' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($program['wa_message']),'label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('Konsultasi ' . explode('(', $program['title'])[0]),'class' => 'w-full sm:w-auto shadow-md bg-safety-orange hover:bg-burnt-brick text-industry-black hover:text-white font-bold']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button','data' => ['href' => '#informasi-resmi','variant' => 'outline','size' => 'lg','class' => 'w-full sm:w-auto text-white border-2 border-neutral-400 hover:bg-neutral-800']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => '#informasi-resmi','variant' => 'outline','size' => 'lg','class' => 'w-full sm:w-auto text-white border-2 border-neutral-400 hover:bg-neutral-800']); ?>
                        Rincian &amp; Persyaratan
                     <?php echo $__env->renderComponent(); ?>
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

                <!-- Key Attributes Bar - More compact on mobile -->
                <div class="mt-8 pt-6 border-t border-neutral-800 grid grid-cols-2 gap-4 sm:gap-6">
                    <div class="min-w-0">
                        <div class="text-[10px] sm:text-xs font-semibold uppercase tracking-wider text-neutral-400">Kategori</div>
                        <div class="text-base sm:text-lg font-extrabold text-safety-orange mt-0.5 truncate"><?php echo e($program['level']); ?></div>
                    </div>
                    <div class="min-w-0">
                        <div class="text-[10px] sm:text-xs font-semibold uppercase tracking-wider text-neutral-400">Sektor</div>
                        <div class="text-base sm:text-lg font-extrabold text-white mt-0.5">Pertanian &amp; Agribisnis</div>
                    </div>
                    <div class="min-w-0">
                        <div class="text-[10px] sm:text-xs font-semibold uppercase tracking-wider text-neutral-400">Sifat Program</div>
                        <div class="text-base sm:text-lg font-extrabold text-safety-orange mt-0.5">Skema Kompetensi</div>
                    </div>
                    <div class="min-w-0">
                        <div class="text-[10px] sm:text-xs font-semibold uppercase tracking-wider text-neutral-400">Penyelenggara</div>
                        <div class="text-base sm:text-lg font-extrabold text-white mt-0.5 truncate"><?php echo e($program['lsp'] ?? 'Perlu konfirmasi'); ?></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 1: PENGENALAN & SASARAN PESERTA (LIGHT SURFACE) -->
    <section id="pengenalan" class="py-14 sm:py-20 bg-white border-b border-neutral-200" aria-labelledby="pengenalan-heading">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-14 items-start">
                <!-- Left: Intro Narrative -->
                <div class="lg:col-span-7 space-y-6">
                    <div class="inline-flex items-center gap-2">
                        <span class="text-xs sm:text-sm font-bold uppercase tracking-wider text-burnt-brick bg-neutral-100 border border-burnt-brick/20 px-3 py-1 rounded-full">
                            Tujuan &amp; Ruang Lingkup
                        </span>
                    </div>
                    <h2 id="pengenalan-heading" class="text-2xl sm:text-3xl font-extrabold text-industry-black tracking-tight">
                        Mengenal Lebih Dekat <?php echo e($program['title']); ?>

                    </h2>
                    <p class="text-base sm:text-lg text-dark-mahogany leading-relaxed">
                        <?php echo e($program['introduction']); ?>

                    </p>
                    <div class="p-5 rounded-xl bg-neutral-50 border border-neutral-200 shadow-sm">
                        <div class="flex items-start gap-3.5">
                            <div class="w-9 h-9 rounded-lg bg-burnt-brick/10 text-burnt-brick flex items-center justify-center shrink-0 mt-0.5">
                                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div class="text-sm text-dark-mahogany leading-relaxed">
                                <span class="font-bold text-industry-black block mb-0.5">Catatan Kepatuhan</span>
                                Program bersifat pembinaan kompetensi. Kewajiban regulasi keselamatan kerja di tempat kerja berlaku secara umum; rujukan regulasi spesifik dikonfirmasi kepada pihak yang berwenang tanpa ditegaskan di sini.
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right: Target Audience Card -->
                <div class="lg:col-span-5">
                    <div class="bg-neutral-50 rounded-2xl border border-neutral-200 p-6 sm:p-8 shadow-sm">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-10 h-10 rounded-lg bg-burnt-brick/10 text-burnt-brick flex items-center justify-center font-bold">
                                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold text-industry-black">Sasaran &amp; Sektor Terkait</h3>
                                <p class="text-xs text-neutral-600">Profil yang relevan untuk program ini</p>
                            </div>
                        </div>

                        <ul class="space-y-3.5" role="list">
                            <?php $__currentLoopData = $program['target_audience']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $audience): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li class="flex items-start gap-3 text-sm text-dark-mahogany">
                                    <svg class="w-5 h-5 text-burnt-brick shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span><?php echo e($audience); ?></span>
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>

                        <div class="mt-6 pt-6 border-t border-neutral-200">
                            <?php if (isset($component)) { $__componentOriginal5c9f603904931bf81a0c683c92c7b6cc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5c9f603904931bf81a0c683c92c7b6cc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.wa-cta','data' => ['variant' => 'secondary','size' => 'sm','message' => $program['wa_message'],'label' => 'Konsultasikan Kebutuhan Anda','class' => 'w-full justify-center']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('wa-cta'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['variant' => 'secondary','size' => 'sm','message' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($program['wa_message']),'label' => 'Konsultasikan Kebutuhan Anda','class' => 'w-full justify-center']); ?>
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
            </div>
        </div>
    </section>

    <!-- SECTION 2: RUANG LINGKUP & TANGGUNG JAWAB (LIGHT SURFACE) -->
    <section id="tanggung-jawab" class="py-14 sm:py-20 bg-neutral-50 border-b border-neutral-200" aria-labelledby="tanggung-jawab-heading">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mb-12">
                <span class="text-xs sm:text-sm font-bold uppercase tracking-wider text-burnt-brick bg-white border border-burnt-brick/20 px-3 py-1 rounded-full shadow-xs">
                    Ruang Lingkup Teknis
                </span>
                <h2 id="tanggung-jawab-heading" class="mt-3 text-2xl sm:text-3xl font-extrabold text-industry-black tracking-tight">
                    Kompetensi &amp; Output Kerja
                </h2>
                <p class="mt-4 text-base text-dark-mahogany leading-relaxed">
                    Gambaran komprehensif mengenai ruang lingkup pelaksanaan teknis dan kepatuhan yang dihasilkan melalui layanan <?php echo e($program['title']); ?>.
                </p>
            </div>

            <!-- Deliverables Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <?php $__currentLoopData = $program['roles_and_responsibilities']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="flex flex-col bg-white rounded-xl border border-neutral-200 p-6 shadow-sm hover:shadow-md transition">
                        <div class="w-8 h-8 rounded-lg bg-burnt-brick/10 text-burnt-brick flex items-center justify-center font-bold text-sm mb-4">
                            <?php echo e($index + 1); ?>

                        </div>
                        <h3 class="text-base font-bold text-industry-black mb-2">
                            <?php echo e($item['title']); ?>

                        </h3>
                        <p class="text-sm text-dark-mahogany leading-relaxed flex-1">
                            <?php echo e($item['description']); ?>

                        </p>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            <!-- Regulatory Advisory Note -->
            <div class="mt-10 p-6 rounded-2xl bg-white border border-neutral-200 shadow-sm text-dark-mahogany">
                <div class="flex items-start gap-3.5">
                    <svg class="w-6 h-6 text-burnt-brick shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                    </svg>
                    <div class="text-sm space-y-1">
                        <h4 class="font-bold text-industry-black">Perhatian: Kepatuhan Administratif &amp; Verifikasi Resmi</h4>
                        <p class="text-dark-mahogany leading-relaxed">
                            Penyusunan dokumen teknis dan kepesertaan sertifikasi disesuaikan dengan izin usaha (NIB/KBLI) serta regulasi spesifik sektor industri. Calon peserta atau badan usaha dianjurkan mengonfirmasikan data awal fasilitas kepada tim konsultan kami sebelum memulai proses formal.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 3: INFORMASI PELAKSANAAN & TRANSPARANSI DATA (LIGHT SURFACE) -->
    <section id="informasi-resmi" class="py-14 sm:py-20 bg-white border-b border-neutral-200" aria-labelledby="informasi-heading">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mb-12">
                <span class="text-xs sm:text-sm font-bold uppercase tracking-wider text-burnt-brick bg-neutral-100 border border-burnt-brick/20 px-3 py-1 rounded-full">
                    Transparansi Layanan
                </span>
                <h2 id="informasi-heading" class="mt-3 text-2xl sm:text-3xl font-extrabold text-industry-black tracking-tight">
                    Informasi Penyelenggaraan &amp; Pelaksanaan
                </h2>
                <p class="mt-4 text-base text-dark-mahogany leading-relaxed">
                    Kami berkomitmen menyajikan informasi faktual tanpa mengklaim jadwal fiktif atau biaya tanpa konfirmasi resmi. Seluruh rincian diverifikasi langsung melalui tim konsultan kami.
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
                <!-- Left: Verified Parameters Grid -->
                <div class="lg:col-span-7 space-y-4">
                    <div class="bg-white rounded-2xl border border-neutral-200 overflow-hidden shadow-sm divide-y divide-neutral-200">
                        <?php $__currentLoopData = $program['training_info']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $info): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="p-5 sm:p-6 flex flex-col sm:flex-row sm:items-start justify-between gap-3">
                                <div class="sm:w-1/3">
                                    <span class="text-xs font-bold uppercase tracking-wider text-industry-black block mb-1">
                                        <?php echo e($info['label']); ?>

                                    </span>
                                    <span class="inline-flex items-center px-2.5 py-1 rounded-md text-xs font-semibold bg-neutral-100 text-dark-mahogany border border-neutral-200">
                                        <?php echo e($info['status']); ?>

                                    </span>
                                </div>
                                <div class="sm:w-2/3">
                                    <p class="text-sm text-dark-mahogany leading-relaxed">
                                        <?php echo e($info['detail']); ?>

                                    </p>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>

                    <!-- Transparency Disclaimer Card -->
                    <div class="p-5 rounded-xl bg-neutral-50 border border-neutral-200 text-xs text-dark-mahogany leading-relaxed space-y-2">
                        <div class="flex items-center gap-2 font-bold text-industry-black text-sm">
                            <svg class="w-4 h-4 text-burnt-brick" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span>Komitmen Keterbukaan Informasi Kami</span>
                        </div>
                        <p>
                            Kami tidak menampilkan estimasi biaya fiktif atau klaim akreditasi sepihak. Hubungi tim kami untuk mendapatkan penawaran tertulis formal sebelum registrasi.
                        </p>
                    </div>
                </div>

                <!-- Right: Competency Topics Preview & CTA Card -->
                <div class="lg:col-span-5 space-y-6">
                    <div class="bg-neutral-50 rounded-2xl border border-neutral-200 p-6 sm:p-8 shadow-sm">
                        <h3 class="text-lg font-bold text-industry-black mb-2">
                            Pokok Materi &amp; Tahapan Kerja
                        </h3>
                        <p class="text-xs text-neutral-600 mb-5 leading-relaxed">
                            Cakupan materi mengacu pada struktur skema kompetensi yang tersedia:
                        </p>

                        <ul class="space-y-3 mb-6" role="list">
                            <?php $__currentLoopData = $program['curriculum_topics']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $topic): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li class="flex items-start gap-2.5 text-xs sm:text-sm text-dark-mahogany">
                                    <svg class="w-4 h-4 text-burnt-brick shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                                    </svg>
                                    <span><?php echo e($topic); ?></span>
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>

                        <div class="pt-5 border-t border-neutral-200">
                            <?php if (isset($component)) { $__componentOriginal5c9f603904931bf81a0c683c92c7b6cc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5c9f603904931bf81a0c683c92c7b6cc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.wa-cta','data' => ['variant' => 'primary','size' => 'md','message' => $program['wa_message'],'label' => 'Minta Proposal Resmi via WhatsApp','class' => 'w-full justify-center bg-safety-orange hover:bg-burnt-brick text-industry-black hover:text-white font-bold']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('wa-cta'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['variant' => 'primary','size' => 'md','message' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($program['wa_message']),'label' => 'Minta Proposal Resmi via WhatsApp','class' => 'w-full justify-center bg-safety-orange hover:bg-burnt-brick text-industry-black hover:text-white font-bold']); ?>
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
            </div>
        </div>
    </section>

    <!-- SECTION 4: LAYANAN TERKAIT LAINNYA -->
    <?php if(!empty($otherPrograms)): ?>
    <section id="program-lain" class="py-14 sm:py-20 bg-neutral-50 border-b border-neutral-200" aria-labelledby="program-lain-heading">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-12">
                <span class="text-xs sm:text-sm font-bold uppercase tracking-wider text-burnt-brick bg-white border border-burnt-brick/20 px-3 py-1 rounded-full shadow-xs">
                    Layanan Terkait
                </span>
                <h2 id="program-lain-heading" class="mt-3 text-2xl sm:text-3xl font-extrabold text-industry-black tracking-tight">
                    Skema Kompetensi Terkait Lainnya
                </h2>
                <p class="mt-4 text-base text-dark-mahogany">
                    Bandingkan skema kompetensi dan layanan konsultasi lainnya untuk menemukan yang paling sesuai dengan kebutuhan Anda.
                </p>
            </div>

            <!-- Other Programs Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <?php $__currentLoopData = array_slice($otherPrograms, 0, 3); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $other): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="flex flex-col bg-white rounded-2xl border border-neutral-200 p-6 shadow-sm hover:shadow-md transition-shadow">
                        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-neutral-100 border border-neutral-200 text-burnt-brick text-xs font-bold w-fit mb-4">
                            <span><?php echo e($other['level']); ?></span>
                        </div>
                        <h3 class="text-lg font-bold text-industry-black mb-2">
                            <?php echo e($other['title']); ?>

                        </h3>
                        <p class="text-sm text-dark-mahogany leading-relaxed mb-6 flex-1">
                            <?php echo e(Str::limit($other['introduction'], 120)); ?>

                        </p>
                        <div class="pt-4 border-t border-neutral-100">
                            <?php if (isset($component)) { $__componentOriginald0f1fd2689e4bb7060122a5b91fe8561 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button','data' => ['href' => route('program.show', $other['slug']),'variant' => 'secondary','size' => 'sm','class' => 'w-full justify-center']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('program.show', $other['slug'])),'variant' => 'secondary','size' => 'sm','class' => 'w-full justify-center']); ?>
                                Lihat Detail &rarr;
                             <?php echo $__env->renderComponent(); ?>
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
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <!-- SECTION 5: FAQ KHUSUS PROGRAM -->
    <section id="faq" class="py-14 sm:py-20 bg-white border-b border-neutral-200" aria-labelledby="faq-heading">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-12">
                <span class="text-xs sm:text-sm font-bold uppercase tracking-wider text-burnt-brick bg-neutral-100 border border-burnt-brick/20 px-3 py-1 rounded-full">
                    Tanya Jawab
                </span>
                <h2 id="faq-heading" class="mt-3 text-2xl sm:text-3xl font-extrabold text-industry-black tracking-tight">
                    Pertanyaan Umum Seputar <?php echo e($program['title']); ?>

                </h2>
                <p class="mt-4 text-base text-dark-mahogany">
                    Jawaban faktual untuk pertanyaan yang sering diajukan mengenai layanan ini.
                </p>
            </div>

            <div class="space-y-4">
                <?php $__currentLoopData = $program['faqs']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <details class="group bg-white rounded-xl border border-neutral-200 p-5 sm:p-6 shadow-sm transition-all duration-150 open:border-burnt-brick">
                        <summary class="flex items-center justify-between gap-4 font-bold text-industry-black text-base sm:text-lg cursor-pointer list-none focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-safety-orange rounded">
                            <span><?php echo e($faq['question']); ?></span>
                            <span class="w-7 h-7 rounded-full bg-neutral-100 flex items-center justify-center shrink-0 group-open:rotate-180 transition-transform duration-200 text-neutral-600">
                                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                            </span>
                        </summary>
                        <div class="mt-4 pt-4 border-t border-neutral-200 text-sm sm:text-base text-dark-mahogany leading-relaxed">
                            <?php echo e($faq['answer']); ?>

                        </div>
                    </details>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>

    <!-- SECTION 6: FINAL CONVERSION & KONSULTASI (DARK SURFACE) -->
    <section id="konsultasi" class="py-16 sm:py-24 bg-industry-black text-white relative overflow-hidden" aria-labelledby="konsultasi-heading">
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="max-w-3xl mx-auto">
                <span class="text-xs sm:text-sm font-bold uppercase tracking-wider text-safety-orange bg-dark-mahogany border border-burnt-brick px-3.5 py-1.5 rounded-full inline-block mb-6">
                    Layanan Konsultasi Responsif
                </span>
                <h2 id="konsultasi-heading" class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-white tracking-tight uppercase">
                    Konsultasikan Layanan <span class="text-safety-orange"><?php echo e($program['title']); ?></span> Anda
                </h2>
                <p class="mt-4 text-base sm:text-lg text-neutral-200 leading-relaxed">
                    Dapatkan kejelasan jadwal pelaksanaan terdekat, review data teknis awal, dan penawaran proposal resmi dari konsultan kami.
                </p>

                <div class="mt-7 flex flex-col sm:flex-row items-center justify-center gap-3 sm:gap-4 w-full">
                    <?php if (isset($component)) { $__componentOriginal5c9f603904931bf81a0c683c92c7b6cc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5c9f603904931bf81a0c683c92c7b6cc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.wa-cta','data' => ['variant' => 'primary','size' => 'lg','message' => $program['wa_message'],'label' => 'Hubungi Tim Konsultan','class' => 'w-full sm:w-auto shadow-lg bg-safety-orange hover:bg-burnt-brick text-industry-black hover:text-white font-bold']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('wa-cta'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['variant' => 'primary','size' => 'lg','message' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($program['wa_message']),'label' => 'Hubungi Tim Konsultan','class' => 'w-full sm:w-auto shadow-lg bg-safety-orange hover:bg-burnt-brick text-industry-black hover:text-white font-bold']); ?>
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
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('home')),'variant' => 'outline','size' => 'lg','class' => 'w-full sm:w-auto text-white border-2 border-neutral-400 hover:bg-neutral-800']); ?>
                        Kembali ke Beranda
                     <?php echo $__env->renderComponent(); ?>
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

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /root/tlaningpertanian/resources/views/programs/show.blade.php ENDPATH**/ ?>