<?php $__env->startSection('content'); ?>
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Reksa Danas</h1>
                </div>
                <div class="col-sm-6">
                    <a class="btn btn-primary float-right"
                       href="<?php echo e(route('reksaDanas.create')); ?>">
                        Add New
                    </a>
                    <a class="btn btn-primary float-right"
                       href="<?php echo e(route('reksaDanas.index',['download'=>'pdf'])); ?>">
                        Generate Report
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        <?php echo $__env->make('flash::message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="clearfix"></div>

        <div class="card">
            <div class="card-body p-0">
                <?php echo $__env->make('reksa_danas.table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <div class="card-footer clearfix">
                    <div class="float-right">
                        <?php echo $__env->make('adminlte-templates::common.paginate', ['records' => $reksaDanas], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                </div>
            </div>

        </div>
    </div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\sahas\OneDrive\Documents\Kuliah\SI\ProjectSI\resources\views/reksa_danas/index.blade.php ENDPATH**/ ?>