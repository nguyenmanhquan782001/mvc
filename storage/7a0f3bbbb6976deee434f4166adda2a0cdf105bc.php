
<?php $__env->startSection('title' , 'Edit Product'); ?>
<?php $__env->startSection('name' , 'Chỉnh sửa sản phẩm'); ?>
<?php $__env->startSection('main-content'); ?>
    <form method="post" action="" enctype="multipart/form-data">
        <div class="form-group">
            <label for="exampleInputEmail1">Tên sản phẩm</label>
            <input value="<?php if(isset($edit->name)) {
    echo  $edit->name ;
} else {
     echo  $_POST['name'] ;
}
            ?>" name="name" style="" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tên sản phẩm ">
            <p style="margin-left: 10px ; margin-top: 10px ; color: red"><?php echo e(@$error['name']); ?></p>
        </div>

        <div class="form-group">
            <label for="exampleFormControlTextarea1">Mô tả sản phẩm ( chi tiết )</label>
            <textarea name="detail" style="width: 200%" class="form-control" id="exampleFormControlTextarea1" rows="3"><?php if(isset($edit->detail)) {
    echo  $edit->detail ;
} else {
     echo  $_POST['detail'] ;
}
                ?></textarea>
            <p style="margin-left: 10px ; margin-top: 10px ; color: red"><?php echo e(@$error['detail']); ?></p>
        </div>

        <div class="form-group">
            <div class="form-group">
                <label for="exampleInputPassword1">Ảnh danh mục</label>
                <input name="image" type="file" class="form-control" id="exampleInputPassword1">
            </div>
            <br>
            <?php
                if (strlen(@$edit->image) > 0) {
                    echo "<img style='width:200px' src='" . BASE_ULR .$edit->image . "' />";
                }

            ?>
            <input type="hidden" name="image" value="<?php echo e(@$edit->image); ?>" />
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Giá sản phẩm</label>
            <input value="<?php if(isset($edit->price)) {
    echo  $edit->price ;
} else {
     echo  $_POST['price'] ;
}
            ?>" min="0" name="price" style="" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Giá sản phẩm">
            <p style="margin-left: 10px ; margin-top: 10px ; color: red"><?php echo e(@$error['price']); ?></p>
        </div>


        <div class="form-group">
            <label for="exampleFormControlSelect1">Example select</label>
            <select class="form-control" id="exampleFormControlSelect1" name="cate_id">

                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php $select = ($edit->cate_id == $category->id) ? "selected" : "" ;
                            ?>
                    <option value="<?php echo e($category->id); ?>" <?php echo e(@$select); ?>><?php echo e($category->cate_name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </select>
        </div>

        <button name="sub" style="margin-top: 20px" type="submit" class="btn btn-primary">Thêm mới</button>
    </form>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('appendjs'); ?>
    <script>
        CKEDITOR.replace('exampleFormControlTextarea1');
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("layouts.main", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\OOP_MVC\mvc\app\views/products/edit_product.blade.php ENDPATH**/ ?>