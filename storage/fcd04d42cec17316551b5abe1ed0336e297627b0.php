
<?php $__env->startSection("title" , "Hóa đơn"); ?>
<?php $__env->startSection('main-content'); ?>
    <div class="banner-wrapper has_background">
        <img src="<?php echo e(FE_URL); ?>images/banner-for-all2.jpg"
             class="img-responsive attachment-1920x447 size-1920x447" alt="img">
        <div class="banner-wrapper-inner">
            <h1 class="page-title">Cart</h1>
            <div role="navigation" aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
                <ul class="trail-items breadcrumb">
                    <li class="trail-item trail-begin"><a href="index-2.html"><span>Home</span></a></li>
                    <li class="trail-item trail-end active"><span>Hóa đơn</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
              <h5 style="text-align: center">Chúc mừng bạn đã đặt hàng thành công</h5>

 <div class="container">
     <div class="row">
         <div class="col-3">

         </div>
         <div class="col-6" style="justify-content: center ; margin: 10px">
               <div style="border: 1px solid red ; width: 600px ; min-height: 450px">
                       <div class="title" style="text-align: center">
                           <h6>Cộng hòa xã hội chủ nghĩa Việt Nam</h6>
                           <h6>Độc lập - Tự do - Hạnh phúc</h6>
                       </div>
                      <div style="text-align: center">
                          <p>------------</p>
                      </div>
                   <div style="text-align: center">
                       <h5 style="font-weight: bold">ĐƠN ĐẶT HÀNG</h5>
                   </div>
                   <div style="margin-left: 20px">
                        <p>Kính gửi :Ông (Bà): <i><?php echo e($info->customer_name); ?></i> do nhu cầu đặt hàng chúng tôi xin gửi lại ông(bà) hóa đơn</p>
                   </div>
                   <div style="margin-left: 20px">
                       <span style="font-weight: bold">Nội dung đặt hàng như sau:</span>
                   </div>
                   <div style="margin: 10px" >
                       <table class="table table-bordered" >
                            <thead>
                              <tr>
                                  <th>STT</th>
                                  <th>Tên mặt hàng</th>
                                  <th>Số lượng</th>
                                  <th>Đơn giá</th>
                                  <th>Thành tiền</th>
                              </tr>
                            </thead>
                           <tbody>
 <?php $__currentLoopData = $model; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <tr>
                                  <td class="text-center"><?php echo e($loop->index + 1); ?></td>
                                  <td class="text-center"><?php echo e($bill->products->name); ?></td>
                                  <td class="text-center"><?php echo e($bill->quantity); ?></td>
                                  <td class="text-center">$<?php echo e(number_format($bill->products->price) . " " . "$"); ?></td>
                                  <td class="text-center"><?php echo e(number_format($bill->quantity * $bill->products->price) . " " . "$"); ?></td>
                              </tr>
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                           </tbody>
                       </table>

                   </div>
                   <div style="margin-left: 10px">
                       <h6>Tổng tiền : <?php echo e(number_format($info->total_price) . " " . "$"); ?> </h6>
                   </div>
                   <div style="margin-left: 10px">
                       <h6>Thời gian giao hàng :  </h6>
                   </div>
                   <div style="margin-left: 10px">
                       <h6>Địa điểm giao hàng : <?php echo e($info->customer_address); ?></h6>
                   </div>
                   <div style="margin-left: 400px">
                       <p>Chủ shop kí tên</p>
                        <i style="margin-left: 25px">Quân</i>

                   </div>

               </div>
         </div>
         <div class="col-3">

         </div>


     </div>

 </div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts-fe.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\OOP_MVC\mvc\app\views/cart/bill.blade.php ENDPATH**/ ?>