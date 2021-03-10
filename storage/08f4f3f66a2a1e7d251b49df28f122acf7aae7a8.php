

<?php ob_start() ?>
<?php $__env->startSection('title' , 'Product'); ?>
<?php $__env->startSection('name' , 'Danh sách sản phẩm'); ?>
<?php $__env->startSection('main-content'); ?>
<table class="table table-hover">
    <thead>
    <tr>
<th>STT</th>
        <th>Tên sản phẩm</th>
        <th>Hình ảnh sản phẩm</th>
        <th>Giá sản phẩm</th>
        <th>Tên danh mục</th>
        <th>Hành động</th>
    </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
            <td><?php echo e($offset + $loop->iteration); ?></td>
          <td><?php echo e($product->name); ?></td>
          <td><img src="<?php echo e(BASE_ULR .$product->image); ?>" alt="" width="150px; hieght= auto ; "> </td>
          <td><?php echo e(number_format($product->price) . " ".  "$"); ?></td>
          <td><?php echo e($product->category->cate_name); ?></td>
          <td>
              <a href="<?php echo e(BASE_ULR); ?>admin/product/edit-product/<?php echo e($product->id); ?>"><i style="font-size: 25px; color: red ;  " class="fas fa-edit"></i></a>
              <a href="<?php echo e(BASE_ULR); ?>admin/product/remove-product/<?php echo e($product->id); ?>" onclick="return confirm('Are you sure you want to delete this item?')"><i style="font-size: 25px ;margin-left: 10px; color: yellowgreen; "  class="far fa-trash-alt"></i></a>
          </td>
      </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<nav aria-label="Page navigation example">
    <ul class="pagination">

        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
        <?php for($i = 1 ; $i <= $totalPage ; $i++): ?>
        <li class="page-item"><a class="page-link" href="<?php echo e(BASE_ULR . "admin/product?keyword=$keyword&page=$i"); ?>"><?php echo e($i); ?></a></li>
        <?php endfor; ?>
        <li class="page-item"><a class="page-link" href="#">Next</a></li>

    </ul>
</nav>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\OOP_MVC\mvc\app\views/products/list-product.blade.php ENDPATH**/ ?>