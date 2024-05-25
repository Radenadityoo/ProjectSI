<div class="table-responsive">
    <table class="table" id="reksaDanas-table">
        <thead>
            <tr>
                <th>Namard</th>
                <th>Jenis</th>
                <th>Nav</th>
                <th>Aum</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $reksaDanas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reksaDana): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($reksaDana->NamaRD); ?></td>
                    <td><?php echo e($reksaDana->Jenis); ?></td>
                    <td><?php echo e($reksaDana->NAV); ?></td>
                    <td><?php echo e($reksaDana->AUM); ?></td>
                    <td width="120">
                        <?php echo Form::open(['route' => ['reksaDanas.destroy', $reksaDana->id], 'method' => 'delete']); ?>

                        <div class='btn-group'>
                            <a href="<?php echo e(route('reksaDanas.show', [$reksaDana->id])); ?>" class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="<?php echo e(route('reksaDanas.edit', [$reksaDana->id])); ?>" class='btn btn-default btn-xs'>
                                <i class="far fa-edit"></i>
                            </a>
                            <?php echo Form::button('<i class="far fa-trash-alt"></i>', [
                                'type' => 'submit',
                                'class' => 'btn btn-danger btn-xs',
                                'onclick' => "return confirm('Are you sure?')",
                            ]); ?>

                        </div>
                        <?php echo Form::close(); ?>

                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php /**PATH C:\Users\sahas\OneDrive\Documents\Kuliah\SI\ProjectSI\resources\views/reksa_danas/table.blade.php ENDPATH**/ ?>