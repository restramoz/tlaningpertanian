<?php $__env->startSection('title', 'Manajemen Artikel — Admin'); ?>

<?php $__env->startSection('content'); ?>
<div class="space-y-6">
    <!-- Header -->
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
        <div>
            <h1 class="text-2xl font-extrabold text-navy-950 tracking-tight">
                Manajemen Artikel
            </h1>
            <p class="text-xs text-concrete-500">
                Kelola artikel edukasi pertanian
            </p>
        </div>
        <a href="<?php echo e(route('admin.articles.create')); ?>" class="px-4 py-2.5 rounded-lg bg-safety-500 hover:bg-safety-600 text-navy-950 font-bold text-xs shadow-sm inline-flex items-center gap-1.5 transition">
            <span>+ Buat Artikel Baru</span>
        </a>
    </div>

    <!-- Filters -->
    <div class="bg-white p-4 rounded-xl border border-concrete-200 shadow-sm">
        <form method="GET" action="<?php echo e(route('admin.articles.index')); ?>" class="grid grid-cols-1 sm:grid-cols-12 gap-3 items-center">
            <div class="sm:col-span-6">
                <input
                    type="text"
                    name="q"
                    value="<?php echo e(request('q')); ?>"
                    placeholder="Cari judul, slug, atau kota..."
                    class="w-full px-3.5 py-2 text-xs rounded-lg border border-concrete-300 bg-concrete-50 focus:bg-white focus:outline-none focus:ring-2 focus:ring-safety-500"
                >
            </div>
            <div class="sm:col-span-4">
                <select name="status" class="w-full px-3.5 py-2 text-xs rounded-lg border border-concrete-300 bg-concrete-50 focus:bg-white focus:outline-none focus:ring-2 focus:ring-safety-500">
                    <option value="">Semua Status</option>
                    <option value="draft" <?php echo e(request('status') === 'draft' ? 'selected' : ''); ?>>Draft</option>
                    <option value="published" <?php echo e(request('status') === 'published' ? 'selected' : ''); ?>>Published</option>
                </select>
            </div>
            <div class="sm:col-span-2 flex gap-2">
                <button type="submit" class="w-full px-4 py-2 bg-navy-950 hover:bg-navy-900 text-white text-xs font-bold rounded-lg transition cursor-pointer">
                    Filter
                </button>
                <?php if(request()->hasAny(['q', 'status'])): ?>
                    <a href="<?php echo e(route('admin.articles.index')); ?>" class="px-3 py-2 bg-concrete-100 text-concrete-700 hover:bg-concrete-200 text-xs font-semibold rounded-lg transition flex items-center justify-center">
                        Reset
                    </a>
                <?php endif; ?>
            </div>
        </form>
    </div>

    <!-- Table -->
    <div class="bg-white rounded-xl border border-concrete-200 shadow-sm overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left text-xs text-concrete-800">
                <thead class="bg-concrete-50 border-b border-concrete-200 text-[11px] font-bold text-concrete-600 uppercase tracking-wider">
                    <tr>
                        <th class="py-3 px-4">Artikel</th>
                        <th class="py-3 px-4">Wilayah Target</th>
                        <th class="py-3 px-4">Status</th>
                        <th class="py-3 px-4">Tanggal Buat</th>
                        <th class="py-3 px-4 text-right">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-concrete-100">
                    <?php $__empty_1 = true; $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr class="hover:bg-concrete-50/80 transition">
                            <td class="py-3.5 px-4 max-w-md">
                                <div class="font-bold text-sm text-navy-950 mb-0.5">
                                    <?php echo e($article->title); ?>

                                </div>
                                <div class="text-[11px] text-concrete-500 font-mono">
                                    /artikel/<?php echo e($article->slug); ?>

                                </div>
                            </td>
                            <td class="py-3.5 px-4 whitespace-nowrap">
                                <?php if($article->target_city_slug): ?>
                                    <span class="px-2.5 py-1 rounded-full text-[10px] font-bold bg-navy-100 text-navy-900">
                                        <?php echo e($article->target_city_slug); ?>

                                    </span>
                                <?php else: ?>
                                    <span class="text-[11px] text-concrete-400">Nasional / Global</span>
                                <?php endif; ?>
                            </td>
                            <td class="py-3.5 px-4 whitespace-nowrap">
                                <?php if($article->status === 'published'): ?>
                                    <span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-[10px] font-bold bg-emerald-50 text-emerald-700 border border-emerald-200">
                                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-600"></span>
                                        Published
                                    </span>
                                <?php else: ?>
                                    <span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-[10px] font-bold bg-amber-50 text-amber-700 border border-amber-200">
                                        <span class="w-1.5 h-1.5 rounded-full bg-amber-600"></span>
                                        Draft
                                    </span>
                                <?php endif; ?>
                            </td>
                            <td class="py-3.5 px-4 whitespace-nowrap text-concrete-500">
                                <?php echo e($article->created_at->format('d M Y, H:i')); ?>

                            </td>
                            <td class="py-3.5 px-4 whitespace-nowrap text-right">
                                <div class="inline-flex items-center gap-2">
                                    <?php if($article->status === 'published'): ?>
                                        <a href="<?php echo e(route('articles.show', $article->slug)); ?>" target="_blank" class="px-2.5 py-1 text-[11px] font-semibold text-sky-700 hover:bg-sky-50 rounded-lg transition" title="Lihat di publik">
                                            Lihat
                                        </a>
                                    <?php endif; ?>
                                    <a href="<?php echo e(route('admin.articles.edit', $article->id)); ?>" class="px-2.5 py-1 text-[11px] font-semibold text-navy-800 hover:bg-concrete-100 rounded-lg transition">
                                        Edit
                                    </a>
                                    <form method="POST" action="<?php echo e(route('admin.articles.destroy', $article->id)); ?>" onsubmit="return confirm('Apakah Anda yakin ingin menghapus artikel ini?');" class="inline">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" class="px-2.5 py-1 text-[11px] font-semibold text-red-600 hover:bg-red-50 rounded-lg transition cursor-pointer">
                                            Hapus
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td colspan="5" class="py-12 text-center text-concrete-500">
                                <div class="max-w-xs mx-auto space-y-3">
                                    <p class="text-sm">Belum ada artikel yang tersimpan.</p>
                                    <a href="<?php echo e(route('admin.articles.create')); ?>" class="px-4 py-2 rounded-lg bg-safety-500 hover:bg-safety-600 text-navy-950 font-bold text-xs inline-block">
                                        Buat Artikel Pertama
                                    </a>
                                </div>
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>

        <?php if($articles->hasPages()): ?>
            <div class="p-4 border-t border-concrete-200">
                <?php echo e($articles->links()); ?>

            </div>
        <?php endif; ?>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /root/tlaningpertanian/resources/views/admin/articles/index.blade.php ENDPATH**/ ?>