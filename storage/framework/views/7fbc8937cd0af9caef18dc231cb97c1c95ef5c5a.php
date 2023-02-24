<?php $__env->startSection('title', 'Koleksiyon detay'); ?>
<?php $__env->startSection('head'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <section class="section single-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h6 class="pull-right mt-3">
                        <a href="<?php echo e(route('uif.collection')); ?>">Koleksiyonlarım</a></h6>

                    <div class="page-wrapper">
                        <?php echo $__env->make('uif.layouts.partials.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php echo $__env->make('uif.layouts.partials.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <h2 class='mb-3'>Koleksiyonum <?php echo e($favorite_collection->slug); ?></h2>
                        <table id="dtBasicExample" class="table" width="100%">
                            <?php if(count($collection_news)>0): ?>
                            <thead>
                            <tr>
                                <th class="th-sm">Haber Resim
                                </th>
                                <th class="th-sm">Haber Başlık
                                </th>
                                <th class="th-sm">Haber Tarihi
                                </th>
                                <th class="th-sm">İşlem
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $collection_news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $col_news): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><a href="<?php echo e(route('uif.news.detail', $col_news->news->slug)); ?>"><img width="100" src="<?php echo e($col_news->news->image!=null ? asset('uploads/news/' . $col_news->news->image) : 'https://via.placeholder.com/100?text=HaberResmi'); ?>"></a></td>
                                    <td><a href="<?php echo e(route('uif.news.detail', $col_news->news->slug)); ?>"><?php echo e($col_news->news->title); ?></a></td>
                                    <td><?php echo e(date('d/m/Y',strtotime($col_news->news->created_at))); ?></td>
                                    <td><a href="<?php echo e(route('uif.collection_news_delete',$col_news->news->id )); ?>" class="btn btn-danger">kaldır</a></td>

                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Haber Resim
                                </th>
                                <th>Haber Başlık
                                </th>
                                <th>Haber Tarihi
                                </th>
                                <th>İşlem
                                </th>
                            </tr>
                            </tfoot>
                            <?php else: ?>
                                <tr>
                                    <td colspan="5">Henüz koleksiyonda haber yok</td>
                                </tr>

                            <?php endif; ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('uif.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/haber.aytacipekel.com/resources/views/uif/collection_detail.blade.php ENDPATH**/ ?>