<?php
 // echo trong laravel {!! $test !!}
 // {{ $test  }}
?>

<?php $__env->startSection('title' , 'Danh mục'); ?>
<?php $__env->startSection('name' , 'Danh sách danh mục'); ?>
<?php $__env->startSection('main-content'); ?>
<table class="table table-hover">
    <thead>
    <tr>
        <th>Id</th>
        <th>Tên danh mục</th>
        <th>Trạng thái</th>
        <th>Hình ảnh</th>
        <th>Số lượng sản phẩm</th>
        <th>Hành động</th>

    </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $cates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($c->id); ?></td>
            <td><?php echo e($c->cate_name); ?></td>
            <td><?php echo e($c->show_menu == 1 ? "Hiện" : "Ẩn"); ?></td>
            <td>
                <img src="<?php echo e(BASE_ULR .$c->image); ?>" alt="" width="200px; ">
            </td>

            <td><?php echo e(count($c->products)); ?></td>
            <td>
                <a href="<?php echo e(BASE_ULR); ?>admin/category/edit-cate/<?php echo e($c->id); ?>"><i style="font-size: 25px; color: red ;  " class="fas fa-edit"></i></a>
                <a href="<?php echo e(BASE_ULR); ?>admin/category/remove/<?php echo e($c->id); ?>" onclick="return confirm('Are you sure you want to delete this item?')"><i style="font-size: 25px ;margin-left: 10px; color: yellowgreen; "  class="far fa-trash-alt"></i></a>
            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php $__env->stopSection(); ?> 


   





<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\OOP_MVC\mvc\app\views/cates/cate-list.blade.php ENDPATH**/ ?>