<footer class="bg-industry-black text-white border-t border-dark-mahogany" role="contentinfo" aria-label="Informasi Kaki Halaman">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-12 pb-24 sm:py-12 lg:py-16">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
            <!-- Col 1: Identity -->
            <div class="space-y-4">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-lg bg-burnt-brick border border-burnt-brick/80 flex items-center justify-center text-white shadow-inner">
                        <svg class="w-6 h-6 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M7 20h10"/>
                            <path d="M12 20c0-7 1-10 5-13"/>
                            <path d="M12 20c0-5-1-8-5-10"/>
                            <path d="M17 7c2.5 0 4-1.5 4-4-2.5 0-4 1.5-4 4z"/>
                            <path d="M7 10c2 0 3.5-1 3.5-3.5C8.5 6.5 7 8 7 10z"/>
                        </svg>
                    </div>
                    <span class="text-base font-bold text-white tracking-tight">
                        <span class="text-safety-orange">Tlaning Pertanian</span>
                    </span>
                </div>
                <p class="text-sm text-neutral-300 leading-relaxed">
                    Portal informasi pelatihan dan skema kompetensi pertanian: rincian program, unit kompetensi, dan layanan konsultasi untuk kebutuhan pertanian dan agribisnis.
                </p>
                <div class="pt-1">
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
            </div>

            <!-- Col 2: Program & Layanan -->
            <div class="space-y-4">
                <h3 class="text-xs font-bold text-safety-orange uppercase tracking-wider">
                    Skema Kompetensi
                </h3>
                <?php
                    $footerSchemes = array_slice(app(\App\Services\SchemeService::class)->all(), 0, 3, true);
                ?>
                <ul class="space-y-2 text-xs sm:text-sm text-neutral-200" role="list">
                    <?php $__currentLoopData = $footerSchemes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slug => $scheme): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li>
                            <a href="<?php echo e(route('program.show', $slug)); ?>" class="hover:text-safety-orange transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-safety-orange rounded">
                                <?php echo e($scheme['title']); ?>

                            </a>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <li>
                        <a href="<?php echo e(route('articles.index')); ?>" class="hover:text-safety-orange transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-safety-orange rounded">
                            Artikel &amp; Panduan
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Bottom bar -->
        <div class="mt-12 pt-8 border-t border-dark-mahogany/80 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-neutral-400">
            <p>
                &copy; <?php echo e(date('Y')); ?> Tlaning Pertanian. Seluruh hak cipta dilindungi.
            </p>
            <p class="text-neutral-400">
                Acuan materi pembahasan bersifat umum; status penyelenggaraan menunggu verifikasi. Peta wilayah menampilkan konteks administratif jangkauan layanan.
            </p>
        </div>
    </div>
</footer>
<?php /**PATH /root/tlaningpertanian/resources/views/components/footer.blade.php ENDPATH**/ ?>