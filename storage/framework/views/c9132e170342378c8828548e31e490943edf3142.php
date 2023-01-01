<?php $__env->startSection('title', 'Abone Yönetimi'); ?>

<?php $__env->startSection('head'); ?>
    <link rel="stylesheet" type="text/css" href="/management/assets/css/vendors/datatables.css">
    <link rel="stylesheet" type="text/css" href="/management/assets/css/vendors/owlcarousel.css">
    <link rel="stylesheet" type="text/css" href="/management/assets/css/vendors/rating.css">
<?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>

    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-6">
                        <h3>Aboneler</h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo e(route('management.index')); ?>"><i
                                        data-feather="home"></i></a></li>
                            <li class="breadcrumb-item active">Aboneler</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <?php echo $__env->make('management.layouts.partials.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('management.layouts.partials.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive product-table">
                                <table class="display" id="tblTable">
                                    <thead>
                                    <tr>
                                        <th>İD</th>
                                        <th>Email</th>
                                        <th>Ayarlar</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php if(count($list) == 0): ?>
                                        <tr>
                                            <td colspan="3" class="text-center">Kayıt bulunamadı!</td>
                                        </tr>
                                    <?php endif; ?>
                                    <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $entry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td>#<?php echo e($entry->id); ?></td>
                                            <td>
                                                <span><?php echo e($entry->email); ?></span>
                                            </td>
                                            <td>
                                                <a data-toggle="modal" data-target="#delete-<?php echo e($entry->id); ?>"
                                                   class="btn btn-danger " type="button">Sil
                                                </a>
                                            </td>
                                            <div class="modal  mt-5 mb-0" id="delete-<?php echo e($entry->id); ?>" tabindex="-1"
                                                 role="dialog"
                                                 aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog mt-0 mb-0" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Abone Sil</h5>
                                                            <button class="btn-close" type="button"
                                                                    data-dismiss="modal"
                                                                    aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Aboneyi silmek istediğinize emin misiniz?</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button class="btn btn-primary" type="button"
                                                                    data-dismiss="modal">Kapat
                                                            </button>

                                                            <a href="<?php echo e(route('management.subscriber.delete', $entry->id)); ?>"
                                                               onclick="event.preventDefault();
                        document.getElementById('delete').submit();"
                                                               class="btn btn-secondary" >Sil

                                                            </a>
                                                            <form id="delete"
                                                                  action="<?php echo e(route('management.subscriber.delete', $entry->id)); ?>"
                                                                  method="POST" style="display: none;">
                                                                <?php echo csrf_field(); ?>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>



<?php $__env->startSection('js'); ?>
    <script src="/management/assets/js/datatable/datatables/jquery.dataTables.min.js"></script>
    <script src="/management/assets/js/rating/jquery.barrating.js"></script>
    <script src="/management/assets/js/rating/rating-script.js"></script>
    <script src="/management/assets/js/owlcarousel/owl.carousel.js"></script>
    <script src="/management/assets/js/ecommerce.js"></script>
    <script src="/management/assets/js/product-list-custom.js"></script>
    <script src="/management/assets/js/tooltip-init.js"></script>
    <script src="/management/assets/js/product-tab.js"></script>
    <script src="/management/assets/js/main.js"></script>
    <script src="/management/assets/js/touchspin/vendors.min.js"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('management.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/aytacipekel/haber.aytacipekel.com/resources/views/management/subscriber/subscriber.blade.php ENDPATH**/ ?>