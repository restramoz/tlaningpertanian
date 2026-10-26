<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'items' => [],
]));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter(([
    'items' => [],
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<nav aria-label="Breadcrumb" class="py-3 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto">
    <ol class="flex items-center flex-wrap gap-2 text-xs sm:text-sm text-dark-mahogany" itemscope itemtype="https://schema.org/BreadcrumbList">
        <li class="inline-flex items-center" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
            <a href="<?php echo e(route('home')); ?>" class="hover:text-burnt-brick transition-colors inline-flex items-center gap-1.5 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-safety-orange rounded py-0.5" itemprop="item">
                <svg class="w-4 h-4 shrink-0 text-burnt-brick" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                </svg>
                <span itemprop="name" class="font-medium">Beranda</span>
            </a>
            <meta itemprop="position" content="1" />
        </li>

        <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li class="flex items-center gap-2" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                <svg class="w-3.5 h-3.5 text-neutral-400 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                </svg>
                <?php if(!empty($item['url']) && !$loop->last): ?>
                    <a href="<?php echo e($item['url']); ?>" class="hover:text-burnt-brick transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-safety-orange rounded py-0.5 text-dark-mahogany font-medium" itemprop="item">
                        <span itemprop="name"><?php echo e($item['label']); ?></span>
                    </a>
                <?php elseif($loop->last): ?>
                    <span class="text-industry-black font-bold truncate max-w-[240px] sm:max-w-none" aria-current="page" itemprop="name">
                        <?php echo e($item['label']); ?>

                    </span>
                <?php else: ?>
                    <span class="text-dark-mahogany truncate max-w-[240px] sm:max-w-none" itemprop="name">
                        <?php echo e($item['label']); ?>

                    </span>
                <?php endif; ?>
                <meta itemprop="position" content="<?php echo e($index + 2); ?>" />
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ol>
</nav>
<?php /**PATH /root/tlaningpertanian/resources/views/components/breadcrumb.blade.php ENDPATH**/ ?>