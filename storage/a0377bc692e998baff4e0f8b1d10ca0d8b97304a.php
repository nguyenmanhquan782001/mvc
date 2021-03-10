
<?php $__env->startSection('title' , 'Cập nhật trạng thái'); ?>
<?php $__env->startSection("name" , "Chỉnh sửa nhân sự"); ?>
<?php $__env->startSection('main-content'); ?>
    <form method="post" action="" enctype="multipart/form-data">
        <div class="form-group">
            <label for="exampleInputEmail1">Họ và tên</label>
            <input value="<?php echo e($edit->name); ?>" name="name" style="" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tên danh mục" disabled>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input value="<?php echo e($edit->email); ?>" name="email" style="" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tên danh mục" disabled>
        </div>
        <label for="exampleFormControlTextarea1">Phân quyền người sử dụng :</label>
        <div class="radio">

            <label><input value="1" type="radio" name="role" <?php if(@$edit->role == 1) {echo "checked" ; }    ?>   >Khách hàng</label>
        </div>
        <div class="radio">
            <label><input value="200" type="radio" name="role"  <?php if(@$edit->role == 200) {echo "checked" ; }    ?> >Quản trị viên</label>
        </div>


        <button name="edit-acc" style="margin-top: 20px" type="submit" class="btn btn-primary">Chỉnh sửa</button>

    </form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\OOP_MVC\mvc\app\views/user/edit.blade.php ENDPATH**/ ?>