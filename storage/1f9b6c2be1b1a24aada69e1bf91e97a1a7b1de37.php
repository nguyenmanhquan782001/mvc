
<?php $__env->startSection('title' , 'Đơn hàng'); ?>
<?php $__env->startSection('name' , 'Danh sách đơn hàng'); ?>
<?php $__env->startSection('main-content'); ?>
    <table class="table table-hover">
        <thead>
        <tr>
            <th class="text-center">STT</th>
            <th class="text-center">Tên khách hàng</th>


            <th class="text-center">Địa chỉ</th>
            <th class="text-center">Thanh toán</th>
            <th class="text-center">Trạng thái giao hàng</th>
            <th class="text-center">Hành động</th>
        </tr>
        </thead>
        <tbody>
           <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
              <td class="text-center"><?php echo e($loop->index + 1); ?></td>
              <td><?php echo e($order->customer_name); ?></td>


              <td class="text-center"><?php echo e($order->customer_address); ?></td>
              <td class="text-center text-muted">
                  <?php if($order->payment_method==1): ?>
                      <?php echo e('Tiền mặt'); ?>

                  <?php else: ?>
                      <?php echo e('Chuyển khoản'); ?>

                  <?php endif; ?>
              </td>
              <td class="text-center">
                <?php
                        if($order->status ==0) {
    echo "Đang vận chuyển" ;
}elseif ($order->status == 1) {
    echo  "Đang đợi shipper"  ;

}
elseif ($order->status == 2) {
    echo  "Đã hủy đơn ";

}else {
    echo  "Đã giao hàng" ;
}
                        ?>
              </td>

              <td class="text-center">
                  <a href="<?php echo e(BASE_ULR . 'admin/invoices/orders-detail/' . $order->id); ?>">Chi tiết</a>
                  <a href="<?php echo e(BASE_ULR . 'admin/invoices/delete/' . $order->id); ?>">Xóa</a>
                  <a href="<?php echo e(BASE_ULR . 'admin/invoices/update/'.$order->id); ?>">Cập nhật </a>
              </td>
          </tr>
           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </tbody>


    </table>

<?php $__env->stopSection(); ?>

<?php echo $__env->make("layouts.main", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\OOP_MVC\mvc\app\views/invoice/index.blade.php ENDPATH**/ ?>