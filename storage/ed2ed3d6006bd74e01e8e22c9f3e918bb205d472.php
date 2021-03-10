
<?php $__env->startSection('title' , 'Edit'); ?>
<?php $__env->startSection('name' , 'Sửa danh mục'); ?>
<?php $__env->startSection('main-content'); ?>
<form method="post" action="" enctype="multipart/form-data">
    <div class="form-group">
        <label for="exampleInputEmail1">Tên danh mục</label>
        <input value="<?php echo e($edit->cate_name); ?>" name="cate_name" style="" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tên danh mục">
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Mô tả danh mục</label>
        <textarea name="desc" style="width: 200%" class="form-control" id="exampleFormControlTextarea1" rows="3"><?php echo e($edit->desc); ?>

        </textarea>
    </div>
    <div class="form-group">
        <div class="form-group">
            <label for="exampleInputPassword1">Ảnh danh mục</label>
            <input name="image" type="file" class="form-control" id="exampleInputPassword1">
        </div>
        <br>
        <?php
        if (strlen($edit->image) > 0) {
            echo "<img style='width:250px' src='" . BASE_ULR .$edit->image . "' />";
        }

    ?>
        <input type="hidden" name="image" value="<?php echo e($edit->image); ?>" />
    </div>

    <div>
        <label for="">Hiển thị ở menu?</label>
        <input type="checkbox"
               <?php if($edit->show_menu == 1):?>
               checked
               <?php endif?>
               name="show_menu" value="1">
    </div>

    <button name="sub" style="margin-top: 20px" type="submit" class="btn btn-primary">Submit</button>

</form>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('appendjs'); ?>
    <script>
        CKEDITOR.replace('exampleFormControlTextarea1');
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\OOP_MVC\mvc\app\views/cates/editCate.blade.php ENDPATH**/ ?>