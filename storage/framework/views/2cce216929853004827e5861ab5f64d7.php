<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'citySlug' => null,
    'districtSlug' => null,
    'regionName' => null,
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
    'citySlug' => null,
    'districtSlug' => null,
    'regionName' => null,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<?php
    $regionalService = resolve(\App\Services\RegionalService::class);

    $queryParts = [];
    $resolvedName = null;
    $level = 'unknown';

    if (!empty($districtSlug) && !empty($citySlug)) {
        // District level: find district with its city context
        $district = $regionalService->findDistrict((string) $districtSlug, (string) $citySlug);
        if ($district) {
            $level = 'district';
            $resolvedName = $district['name']; // District name
            $queryParts[] = $district['name'];
            $queryParts[] = $district['city_name']; // City name (e.g., "Kabupaten Malang" or "Kota Surabaya")
            $queryParts[] = $district['province'];  // Province name
        }
    } elseif (!empty($citySlug)) {
        // City level: find city with its province
        $city = $regionalService->findCity((string) $citySlug);
        if ($city) {
            $level = 'city';
            $resolvedName = $city['name'];
            $queryParts[] = $city['name'];          // City name (e.g., "Kabupaten Malang")
            $queryParts[] = $city['province'];      // Province name
        }
    }

    // Fallback to provided regionName if resolution failed
    $displayName = $resolvedName ?? $regionName ?? 'Wilayah';
    $queryParts[] = 'Indonesia';

    $mapId = 'regional-map-' . md5((string) $citySlug . '/' . (string) $districtSlug);
    $mapsQuery = implode(', ', $queryParts);
    $mapsEmbedUrl = 'https://maps.google.com/maps?q=' . urlencode($mapsQuery) . '&output=embed';
    $mapsLinkUrl = 'https://www.google.com/maps/search/?api=1&query=' . urlencode($mapsQuery);
?>

<section class="py-12 bg-dark-mahogany border-b border-dark-mahogany" aria-labelledby="<?php echo e($mapId); ?>-heading">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mb-6">
            <span class="text-xs font-bold uppercase tracking-wider text-burnt-brick bg-dark-mahogany px-3 py-1 rounded-full border border-burnt-brick/20">
                Peta Wilayah
            </span>
            <h2 id="<?php echo e($mapId); ?>-heading" class="text-xl sm:text-2xl font-extrabold text-burnt-brick mt-2">
                Konteks Administratif <?php echo e($displayName); ?>

            </h2>
            <p class="text-sm text-safety-orange mt-2 leading-relaxed">
                Peta menampilkan konteks administratif <strong class="text-burnt-brick"><?php echo e($displayName); ?></strong>.
                <?php if($level === 'district'): ?>
                    Kecamatan <strong class="text-burnt-brick"><?php echo e($resolvedName); ?></strong>, <?php echo e($queryParts[1] ?? ''); ?>, <?php echo e($queryParts[2] ?? ''); ?>.
                <?php elseif($level === 'city'): ?>
                    <?php echo e($resolvedName); ?>, <?php echo e($queryParts[1] ?? ''); ?>.
                <?php endif; ?>
                Titik pada peta menunjukkan pusat administratif wilayah dan <strong class="text-burnt-brick">bukan lokasi kantor atau tempat pelaksanaan program terkonfirmasi</strong>.
            </p>
        </div>

        <?php if($resolvedName): ?>
            <div class="relative rounded-2xl overflow-hidden border border-dark-mahogany shadow-sm bg-dark-mahogany">
                <div class="aspect-video w-full">
                    <iframe
                        id="<?php echo e($mapId); ?>"
                        title="Peta <?php echo e($displayName); ?>"
                        src="<?php echo e($mapsEmbedUrl); ?>"
                        style="border:0; width:100%; height:100%;"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"
                        role="application"
                        aria-label="Peta lokasi <?php echo e($mapsQuery); ?>">
                    </iframe>
                </div>
            </div>

            <div class="mt-3 flex flex-wrap items-center justify-between gap-2 text-xs text-safety-orange">
                <span>Query: <?php echo e($mapsQuery); ?></span>
                <a
                    href="<?php echo e($mapsLinkUrl); ?>"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="inline-flex items-center gap-1.5 text-burnt-brick hover:text-burnt-brick font-medium transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-burnt-brick rounded"
                    aria-label="Buka <?php echo e($mapsQuery); ?> di Google Maps di tab baru"
                >
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                    </svg>
                    <span>Buka di Google Maps</span>
                </a>
            </div>
        <?php else: ?>
            <div class="rounded-2xl border border-dark-mahogany bg-dark-mahogany p-6 text-sm text-safety-orange" role="status">
                <div class="flex items-start gap-3">
                    <svg class="w-5 h-5 text-burnt-brick shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <div>
                        <p class="font-bold text-burnt-brick">Data Wilayah Tidak Ditemukan</p>
                        <p class="mt-1 text-safety-orange">
                            Tidak dapat memetakan <?php echo e($regionName ?? 'wilayah ini'); ?> ke data administratif BPS.
                            Pelaksanaan pelatihan tetap dapat dikoordinasikan melalui konsultasi resmi WhatsApp.
                        </p>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section><?php /**PATH /root/tlaningpertanian/resources/views/components/regional-map.blade.php ENDPATH**/ ?>