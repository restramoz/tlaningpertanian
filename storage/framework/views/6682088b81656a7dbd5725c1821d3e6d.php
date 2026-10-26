<?php $__env->startSection('title', $article->seo_title ?: $article->title); ?>
<?php $__env->startSection('meta_description', $article->meta_description ?: ($article->excerpt ?: Str::limit(strip_tags($article->content), 155))); ?>

<?php $__env->startPush('schema'); ?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Article",
  "headline": <?php echo e(json_encode($article->title)); ?>,
  "description": <?php echo e(json_encode($article->meta_description ?: $article->excerpt)); ?>,
  "datePublished": "<?php echo e(($article->published_at ?? $article->created_at)->toIso8601String()); ?>",
  "dateModified": "<?php echo e($article->updated_at->toIso8601String()); ?>",
  <?php if($article->featured_image): ?>
  "image": ["<?php echo e(url('/' . ltrim($article->featured_image, '/'))); ?>"],
  <?php endif; ?>
  "author": {
    "@type": "Organization",
    "name": "Tim Tlaning Pertanian"
  },
  "publisher": {
    "@type": "Organization",
    "name": "<?php echo e(config('app.name', 'Tlaning Pertanian')); ?>",
    "url": "<?php echo e(url('/')); ?>"
  }
}
</script>

<?php if(!empty($article->faqs) && is_array($article->faqs)): ?>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    <?php $__currentLoopData = $article->faqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    {
      "@type": "Question",
      "name": <?php echo e(json_encode($faq['q'] ?? '')); ?>,
      "acceptedAnswer": {
        "@type": "Answer",
        "text": <?php echo e(json_encode($faq['a'] ?? '')); ?>

      }
    }<?php echo e(!$loop->last ? ',' : ''); ?>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  ]
}
</script>
<?php endif; ?>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>

<nav class="bg-neutral-100 border-b border-neutral-200 py-3 text-xs text-dark-mahogany" aria-label="Breadcrumb">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <ol class="flex items-center flex-wrap gap-x-2 gap-y-1" itemscope itemtype="https://schema.org/BreadcrumbList">
            <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                <a href="<?php echo e(route('home')); ?>" class="hover:text-burnt-brick transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-safety-orange rounded" itemprop="item">
                    <span itemprop="name">Beranda</span>
                </a>
                <meta itemprop="position" content="1">
            </li>
            <li aria-hidden="true" class="text-neutral-400">/</li>
            <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                <a href="<?php echo e(route('articles.index')); ?>" class="hover:text-burnt-brick transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-safety-orange rounded" itemprop="item">
                    <span itemprop="name">Artikel</span>
                </a>
                <meta itemprop="position" content="2">
            </li>
            <li aria-hidden="true" class="text-neutral-400">/</li>
            <li class="text-industry-black font-semibold truncate max-w-xs" aria-current="page"><?php echo e($article->title); ?></li>
        </ol>
    </div>
</nav>


<article class="py-12 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <header class="space-y-5 mb-8">
            <div class="flex items-center gap-2 flex-wrap">
                <span class="px-3 py-1 rounded-full text-xs font-bold bg-neutral-100 text-burnt-brick border border-burnt-brick/20 uppercase tracking-wider">
                    Skema Kompetensi
                </span>
                <?php if($targetCity): ?>
                    <a
                        href="<?php echo e(route('regional.city', $targetCity['slug'])); ?>"
                        class="px-3 py-1 rounded-full text-xs font-bold bg-neutral-100 text-dark-mahogany hover:text-burnt-brick border border-neutral-200 transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-safety-orange"
                    >
                        Wilayah <?php echo e($targetCity['name']); ?>

                    </a>
                <?php endif; ?>
            </div>

            <h1 class="font-extrabold text-2xl sm:text-4xl text-industry-black leading-tight">
                <?php echo e($article->title); ?>

            </h1>

            <div class="flex flex-wrap items-center gap-3 text-xs text-neutral-500 border-b border-neutral-200 pb-5">
                <time datetime="<?php echo e(($article->published_at ?? $article->created_at)->toDateString()); ?>">
                    Diterbitkan: <strong class="text-dark-mahogany"><?php echo e(($article->published_at ?? $article->created_at)->format('d F Y')); ?></strong>
                </time>
                <span aria-hidden="true">&bull;</span>
                <span>Oleh: <strong class="text-dark-mahogany">Tim Tlaning Pertanian</strong></span>
            </div>

            <?php if($article->excerpt): ?>
                <p class="text-sm sm:text-base text-dark-mahogany leading-relaxed bg-neutral-50 p-5 rounded-r-xl border-l-4 border-safety-orange">
                    <?php echo e($article->excerpt); ?>

                </p>
            <?php endif; ?>
        </header>

        
        <?php if($article->featured_image): ?>
            <div class="mb-10 rounded-2xl overflow-hidden border border-neutral-200 shadow-sm bg-neutral-100">
                <img
                    src="/<?php echo e(ltrim($article->featured_image, '/')); ?>"
                    alt="<?php echo e($article->title); ?>"
                    class="article-featured-image w-full"
                    loading="eager"
                >
            </div>
        <?php endif; ?>

        <style>
            .article-content {
                width: 100%;
                max-width: 100%;
                min-width: 0;
                overflow-wrap: anywhere;
            }
            .article-content .article-table-scroll {
                display: block;
                width: 100%;
                max-width: 100%;
                min-width: 0;
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
                margin: 1rem 0;
            }
            .article-content .article-table-scroll table {
                width: max-content;
                min-width: 600px;
                max-width: none;
                border-collapse: collapse;
                table-layout: auto;
            }
            .article-content .article-table-scroll th,
            .article-content .article-table-scroll td {
                border: 1px solid #E2EAE2;
                padding: 8px 10px;
                text-align: left;
                vertical-align: top;
                white-space: normal;
                overflow-wrap: anywhere;
            }
            .article-content .article-table-scroll th {
                background: #F0F5F0;
                font-weight: 700;
                color: #1F2937;
            }
        </style>

        
        <div class="article-content prose prose-stone max-w-none text-sm sm:text-base leading-relaxed text-dark-mahogany
                    prose-headings:font-bold prose-headings:text-industry-black
                    prose-h2:text-xl prose-h2:mt-8 prose-h3:text-lg prose-h3:mt-6
                    prose-a:text-burnt-brick prose-a:no-underline hover:prose-a:underline hover:prose-a:text-safety-orange
                    prose-strong:text-industry-black
                    prose-blockquote:border-safety-orange prose-blockquote:bg-neutral-50 prose-blockquote:rounded-r-xl prose-blockquote:py-1 prose-blockquote:text-dark-mahogany
                    prose-ul:space-y-1 prose-ol:space-y-1
                    prose-table:w-full prose-table:border-collapse prose-table:text-sm
                    prose-th:border prose-th:border-neutral-200 prose-th:bg-neutral-100 prose-th:px-3 prose-th:py-2 prose-th:text-left
                    prose-td:border prose-td:border-neutral-200 prose-td:px-3 prose-td:py-2 prose-td:align-top">
            <?php echo $article->content; ?>

        </div>

        <script>
            document.querySelectorAll('.article-content table').forEach(function (table) {
                if (table.parentElement.classList.contains('article-table-scroll')) return;

                const wrapper = document.createElement('div');
                wrapper.className = 'article-table-scroll';
                table.parentNode.insertBefore(wrapper, table);
                wrapper.appendChild(table);
            });
        </script>

        
        <?php if(!empty($article->faqs) && is_array($article->faqs)): ?>
            <div class="mt-12 pt-8 border-t border-neutral-200 space-y-4">
                <h2 class="font-extrabold text-xl text-industry-black">
                    Pertanyaan Umum (FAQ)
                </h2>
                <div class="space-y-3" role="list">
                    <?php $__currentLoopData = $article->faqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <details
                            class="group bg-white border border-neutral-200 rounded-xl overflow-hidden shadow-xs"
                            <?php if($loop->first): ?> open <?php endif; ?>
                        >
                            <summary class="flex items-center justify-between px-5 py-4 font-bold text-sm text-industry-black cursor-pointer select-none list-none hover:bg-neutral-50 transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-safety-orange">
                                <span><?php echo e($faq['q'] ?? ''); ?></span>
                                <svg class="w-4 h-4 text-burnt-brick shrink-0 ml-3 transition-transform group-open:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </summary>
                            <div class="px-5 pb-5 pt-2 text-sm text-dark-mahogany leading-relaxed">
                                <?php echo e($faq['a'] ?? ''); ?>

                            </div>
                        </details>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        <?php endif; ?>

        
        <div class="mt-12 p-6 sm:p-8 rounded-2xl bg-industry-black text-white space-y-4 shadow-lg border border-dark-mahogany">
            <span class="inline-block px-3 py-1 rounded-full bg-dark-mahogany text-safety-orange text-[11px] font-bold uppercase tracking-wider border border-burnt-brick/40">
                Skema Kompetensi Pertanian
            </span>
            <h3 class="font-extrabold text-xl sm:text-2xl text-white">
                Konsultasikan Kebutuhan Program Pertanian Anda
            </h3>
            <p class="text-sm text-neutral-200 leading-relaxed max-w-2xl">
                Dapatkan informasi mengenai skema kompetensi, unit pelatihan, dan saran program yang sesuai melalui WhatsApp.
            </p>
            <div class="pt-2 flex flex-wrap gap-3">
                <?php if (isset($component)) { $__componentOriginal5c9f603904931bf81a0c683c92c7b6cc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5c9f603904931bf81a0c683c92c7b6cc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.wa-cta','data' => ['variant' => 'primary','size' => 'md','label' => 'Konsultasi Program Sekarang','class' => 'bg-safety-orange hover:bg-burnt-brick text-industry-black hover:text-white font-bold shadow-md']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('wa-cta'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['variant' => 'primary','size' => 'md','label' => 'Konsultasi Program Sekarang','class' => 'bg-safety-orange hover:bg-burnt-brick text-industry-black hover:text-white font-bold shadow-md']); ?>
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
                <a href="<?php echo e(route('articles.index')); ?>" class="inline-flex items-center gap-2 px-5 py-2.5 rounded-lg border-2 border-neutral-400 text-white hover:bg-neutral-800 text-sm font-bold transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-safety-orange">
                    &larr; Lihat Artikel Lainnya
                </a>
            </div>
        </div>

        
        
        
        <?php if(! str_contains((string) $article->content, 'article-consultation-numbers') && ! str_contains((string) $article->content, 'wa.me/628118500177')): ?>
            <?php if (isset($component)) { $__componentOriginalfb07261861930b4dee19091225405992 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalfb07261861930b4dee19091225405992 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.contact-numbers','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('contact-numbers'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalfb07261861930b4dee19091225405992)): ?>
<?php $attributes = $__attributesOriginalfb07261861930b4dee19091225405992; ?>
<?php unset($__attributesOriginalfb07261861930b4dee19091225405992); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfb07261861930b4dee19091225405992)): ?>
<?php $component = $__componentOriginalfb07261861930b4dee19091225405992; ?>
<?php unset($__componentOriginalfb07261861930b4dee19091225405992); ?>
<?php endif; ?>
        <?php endif; ?>
    </div>
</article>


<?php if($relatedArticles->isNotEmpty()): ?>
<section class="py-12 bg-neutral-50 border-t border-neutral-200" aria-label="Artikel terkait">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="font-extrabold text-xl text-industry-black mb-6">
            Artikel Lainnya
        </h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <?php $__currentLoopData = $relatedArticles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <article class="bg-white rounded-2xl border border-neutral-200 p-5 space-y-2.5 flex flex-col justify-between shadow-sm hover:shadow-md hover:border-burnt-brick transition-all">
                    <div>
                        <time class="text-[10px] text-neutral-500 block" datetime="<?php echo e(($rel->published_at ?? $rel->created_at)->toDateString()); ?>">
                            <?php echo e(($rel->published_at ?? $rel->created_at)->format('d M Y')); ?>

                        </time>
                        <h3 class="font-bold text-sm text-industry-black hover:text-burnt-brick line-clamp-2 mt-1 transition-colors">
                            <a href="<?php echo e(route('articles.show', $rel->slug)); ?>" class="focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-safety-orange rounded">
                                <?php echo e($rel->title); ?>

                            </a>
                        </h3>
                        <?php if($rel->excerpt): ?>
                            <p class="text-xs text-dark-mahogany line-clamp-2 mt-1">
                                <?php echo e($rel->excerpt); ?>

                            </p>
                        <?php endif; ?>
                    </div>
                    <a href="<?php echo e(route('articles.show', $rel->slug)); ?>" class="text-xs font-bold text-burnt-brick hover:text-safety-orange pt-2 inline-flex items-center gap-1 transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-safety-orange rounded">
                        <span>Baca Artikel &rarr;</span>
                    </a>
                </article>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /root/tlaningpertanian/resources/views/articles/show.blade.php ENDPATH**/ ?>