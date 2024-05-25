<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        @page  {
            margin: 2cm;
        }

        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
            line-height: 1.4;
        }

        .table-responsive {
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 10px;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        thead th {
            background-color: #f2f2f2;
            font-weight: bold;
        }

        tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tbody tr:hover {
            background-color: #e9e9e9;
        }
    </style>
</head>
<body>
    <div class="table-responsive">
        <table class="table" id="reksaDanas-table">
            <thead>
                <tr>
                    <th>NamaRD</th>
                    <th>Jenis</th>
                    <th>Nav</th>
                    <th>Aum</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $mahasiswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reksaDana): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($reksaDana->NamaRD); ?></td>
                        <td><?php echo e($reksaDana->Jenis); ?></td>
                        <td><?php echo e($reksaDana->NAV); ?></td>
                        <td><?php echo e($reksaDana->AUM); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</body>
</html>

<?php /**PATH C:\Users\sahas\OneDrive\Documents\Kuliah\SI\ProjectSI\resources\views/reksa_danas/report.blade.php ENDPATH**/ ?>