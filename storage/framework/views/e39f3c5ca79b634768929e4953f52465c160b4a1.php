<?php $__env->startSection('title', 'Mahasiswa'); ?>
<?php $__env->startSection('k1', 'ID'); ?>
<?php $__env->startSection('k2', 'NIM'); ?>
<?php $__env->startSection('k3', 'Nama'); ?>
<?php $__env->startSection('k4', 'Gender'); ?>
<?php $__env->startSection('k5', 'Jurusan'); ?>
<?php $__env->startSection('k6', 'Bidang Minat'); ?>
<?php $__env->startSection('k7', 'Edit Data'); ?>
<?php $__env->startSection('content'); ?>
    <?php $__currentLoopData = $mahasiswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $no => $mhs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <th scope="row"><?php echo e($mahasiswa->firstitem() + $no); ?></th>
            <td><?php echo e($mhs -> nim); ?></td>
            <td><?php echo e($mhs -> nama); ?></td>
            <td><?php echo e($mhs -> gender); ?></td>
            <td><?php echo e($mhs -> jurusan); ?></td>
            <td><?php echo e($mhs -> bidang_minat); ?></td>
            <td>
                
                <a href="/mahasiswa/edit/<?php echo e($mhs->id); ?>" class="btn btn-outline-success"><i class="bi bi-pencil-square"></i></a>
                <a href="/mahasiswa/delete/<?php echo e($mhs->id); ?>" class="btn btn-outline-danger" onclick="return confirm('Are you sure?')"><i class="bi bi-trash"></i></a>
            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Application\teori13\resources\views/mahasiswa.blade.php ENDPATH**/ ?>