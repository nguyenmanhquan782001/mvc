
<?php $__env->startSection('title' , 'Danh mục'); ?>
<?php $__env->startSection('name' , 'Tạo mới danh mục'); ?>
<?php $__env->startSection('main-content'); ?>

    <form method="post" action="" enctype="multipart/form-data">
        <div class="form-group">
            <label for="exampleInputEmail1">Tên danh mục</label>
            <input value="<?php echo e(@$_POST['cate_name']); ?>" name="cate_name" style="" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tên danh mục">
            <p style="margin-left: 10px ; margin-top: 10px ; color: red"><?php echo e(@$error['cate_name']); ?></p>
            </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Mô tả danh mục</label>

            <textarea name="desc" style="width: 200%" class="form-control" id="exampleFormControlTextarea1" rows="3"><?php echo e(@$_POST['desc']); ?></textarea>
            <p style="margin-left: 10px ; margin-top: 10px ; color: red"><?php echo e(@$error['desc']); ?></p>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Hình ảnh </label>
            <input name="image" style="width: 100%" type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tên danh mục">
        </div>
        <p style="margin-left: 10px ; margin-top: 10px ; color: red"><?php echo e(@$error['image']); ?></p>

        <div class="form-check">
            <input name="show_menu" type="checkbox" class="form-check-input" id="exampleCheck1">
            <label  class="form-check-label" for="exampleCheck1">Hiển thị ở menu</label>
        </div>

        <button name="sub" style="margin-top: 20px" type="submit" class="btn btn-primary">Submit</button>

    </form>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('appendjs'); ?>
    <script>
        CKEDITOR.replace('exampleFormControlTextarea1');
    </script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\OOP_MVC\mvc\app\views/cates/add-new.blade.php ENDPATH**/ ?>