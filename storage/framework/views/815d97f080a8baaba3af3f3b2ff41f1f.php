<?php $__env->startSection('title', 'Artikel & Panduan Pertanian'); ?>
<?php $__env->startSection('meta_description', 'Kumpulan artikel edukatif, panduan teknis, dan referensi seputar skema kompetensi serta program pelatihan pertanian.'); ?>

<?php $__env->startSection('content'); ?>

<section class="py-14 lg:py-20 bg-industry-black text-white border-b border-dark-mahogany">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl space-y-5">
            <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-burnt-brick border border-burnt-brick/80 text-white text-xs font-bold uppercase tracking-wider shadow-sm">
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                Edukasi &amp; Literasi Pertanian
            </span>
            <h1 class="font-extrabold text-3xl sm:text-4xl lg:text-5xl text-white leading-tight">
                Artikel &amp; Panduan
                <span class="text-safety-orange">Pertanian &amp; Agribisnis</span>
            </h1>
            <p class="text-base text-neutral-200 leading-relaxed max-w-2xl">
                Referensi skema kompetensi, praktik kerja pertanian, dan panduan program pelatihan untuk kebutuhan usaha dan mitra agribisnis.
            </p>
        </div>
    </div>
</section>


<section class="py-14 bg-neutral-50" aria-label="Daftar artikel">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php $__empty_1 = true; $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <article class="bg-white rounded-2xl border border-neutral-200 shadow-sm overflow-hidden flex flex-col hover:shadow-md hover:border-burnt-brick transition-all duration-200">
                    <div class="flex-grow">
                        <?php if($article->featured_image): ?>
                            <a href="<?php echo e(route('articles.show', $article->slug)); ?>" class="block aspect-video overflow-hidden bg-neutral-100" tabindex="-1" aria-hidden="true">
                                <img
                                    src="/<?php echo e(ltrim($article->featured_image, '/')); ?>"
                                    alt="<?php echo e($article->title); ?>"
                                    class="card-image w-full h-full hover:scale-105 transition-transform duration-300"
                                    loading="lazy"
                                    width="600" height="400"
                                >
                            </a>
                        <?php else: ?>
                            <div class="h-32 bg-gradient-to-br from-neutral-100 to-neutral-200 flex items-center justify-center" aria-hidden="true">
                                <svg class="w-10 h-10 text-neutral-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 2L3 7v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V7l-9-5z"/></svg>
                            </div>
                        <?php endif; ?>

                        <div class="p-6 space-y-3">
                            <div class="flex items-center justify-between text-[11px] text-neutral-500">
                                <time datetime="<?php echo e(($article->published_at ?? $article->created_at)->toDateString()); ?>">
                                    <?php echo e(($article->published_at ?? $article->created_at)->format('d M Y')); ?>

                                </time>
                                <?php if($article->target_city_slug): ?>
                                    <span class="px-2 py-0.5 rounded-full bg-neutral-100 border border-neutral-200 text-dark-mahogany font-semibold">
                                        <?php echo e(ucwords(str_replace('-', ' ', $article->target_city_slug))); ?>

                                    </span>
                                <?php endif; ?>
                            </div>

                            <h2 class="font-bold text-lg text-industry-black leading-snug hover:text-burnt-brick transition-colors">
                                <a href="<?php echo e(route('articles.show', $article->slug)); ?>" class="focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-safety-orange rounded">
                                    <?php echo e($article->title); ?>

                                </a>
                            </h2>

                            <?php if($article->excerpt): ?>
                                <p class="text-sm text-dark-mahogany leading-relaxed line-clamp-3">
                                    <?php echo e($article->excerpt); ?>

                                </p>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="px-6 pb-6 mt-auto">
                        <a href="<?php echo e(route('articles.show', $article->slug)); ?>" class="inline-flex items-center gap-1.5 text-xs font-bold text-burnt-brick hover:text-safety-orange transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-safety-orange rounded">
                            <span>Baca Selengkapnya</span>
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </a>
                    </div>
                </article>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <div class="col-span-3 py-20 text-center space-y-4">
                    <div class="w-16 h-16 mx-auto rounded-full bg-neutral-100 flex items-center justify-center" aria-hidden="true">
                        <svg class="w-8 h-8 text-neutral-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                    </div>
                    <p class="font-bold text-industry-black">Belum ada artikel yang diterbitkan.</p>
                    <p class="text-sm text-dark-mahogany">Artikel dan panduan terkini seputar skema kompetensi dan pertanian akan segera hadir.</p>
                    <a href="<?php echo e(route('home')); ?>" class="inline-flex items-center gap-1.5 px-5 py-2.5 rounded-lg bg-safety-orange hover:bg-burnt-brick text-industry-black hover:text-white font-bold text-sm transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-safety-orange">
                        &larr; Kembali ke Beranda
                    </a>
                </div>
            <?php endif; ?>
        </div>

        <?php if($articles->hasPages()): ?>
            <div class="mt-12">
                <?php echo e($articles->links()); ?>

            </div>
        <?php endif; ?>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /root/tlaningpertanian/resources/views/articles/index.blade.php ENDPATH**/ ?>