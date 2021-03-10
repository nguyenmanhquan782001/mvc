
<?php $__env->startSection('title' , 'Chi tiết'); ?>
<?php $__env->startSection('name' , 'Chi tiết đơn hàng'); ?>
<?php $__env->startSection('main-content'); ?>
    <table class=" table table-hover">
        <thead>
        <tr>
            <th class="text-center">STT</th>
            <th class="text-center">Tên sản phẩm</th> 
            <th class = "text-center">Hình ảnh</th>
            <th class="text-center">Số lượng</th>
            <th class="text-center">Thành tiền sản phẩm</th>
        </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td class="text-center text-muted"><?php echo e($loop->index + 1); ?></td>
                <td class="text-center text-muted"><?php echo e($order->products['name']); ?></td> 
                <td class="text-center text-muted"><img src="<?php echo e(BASE_ULR . $order->products->image); ?>" alt=""width="150px"></td>
                <td class="text-center text-muted"><?php echo e($order->quantity); ?></td>
                <td class="text-center text-muted"><?php echo e(number_format($order->quantity * $order->products->price) . " " . "$"); ?></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <span id="total-price">Tổng tiền:<?php echo e(number_format($price->total_price) ." " . "$"); ?></span>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("layouts.main", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\OOP_MVC\mvc\app\views/invoice/detail.blade.php ENDPATH**/ ?>