
<?php $__env->startSection('title' , 'Đơn hàng'); ?>
<?php $__env->startSection('name' , 'Cập nhật trạng thái giao hàng'); ?>
<?php $__env->startSection('main-content'); ?>
    <form method="post">
        <div class="form-group" >
            <label for="exampleInputEmail1">Tên khách hàng</label>
            <input disabled value="<?php echo e($edit->customer_name); ?>" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Số điện thoại</label>
            <input disabled value="<?php echo e($edit->customer_phone_number); ?>" type="text" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Example select</label>
            <select name="status" class="form-control" id="exampleFormControlSelect1">

                <option value="0" <?php echo e(($edit->status == 0) ? "selected" : ""); ?> >Đang vận chuyển</option>
                <option value="1" <?php echo e(($edit->status == 1) ? "selected" : ""); ?>>Đợi ship</option>
                <option value="2" <?php echo e(($edit->status == 2) ? "selected" : ""); ?>>Hủy đơn</option>
                <option value="3" <?php echo e(($edit->status == 3) ? "selected" : ""); ?>>Đã giao hàng</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make("layouts.main", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\OOP_MVC\mvc\app\views/invoice/update.blade.php ENDPATH**/ ?>