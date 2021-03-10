<?php
 // echo trong laravel {!! $test !!}
 // {{ $test  }}
?>

<?php $__env->startSection('title' , 'Danh sach danh muc'); ?>
<?php $__env->startSection('main-content'); ?>

<table class="table table-hover">
    <thead>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>desc</th>
        <th>Trang thai</th>

        <th>
            <a href="../../index.php"> Tạo mới</a>
        </th>

    </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $cates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($c->id); ?></td>
            <td><?php echo e($c->cate_name); ?></td>
            <td><?php echo e($c->desc); ?></td>
            <td><?php echo e($c->show_menu == 1 ? "Có" : "Không"); ?></td>
            <td>
                <a href="edit-cate?id=<?php echo e($c->id); ?>">Sửa</a>
                <a href="remove?id=<?php echo e($c->id); ?>">Xóa</a>
            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\OOP_MVC\mvc\app\views/cate-list.blade.php ENDPATH**/ ?>