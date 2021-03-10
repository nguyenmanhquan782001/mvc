 
 <?php $__env->startSection('title' , "Account"); ?>
 <?php $__env->startSection('name' , 'Danh sách thành viên'); ?>
 <?php $__env->startSection('main-content'); ?>
    <table class="table table-hover">
        <thead>
          <tr>
              <th>STT</th>
              <th>Tên tài khoản</th>
              <th>Role</th>
              <th>Email</th>
              <th>Hành động</th>
          </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = @$users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($loop->index + 1); ?></td>
                    <td><?php echo e($user->name); ?></td>
                    <td><?php echo e($user->role == 1 ? "Khách hàng" : "Quản trị viên"); ?></td>
                    <td><?php echo e($user->email); ?></td>
                    <td>

                        <a href="<?php echo e(BASE_ULR); ?>admin/account/edit-acc/<?php echo e($user->id); ?>"><i style="font-size: 25px; color: red ;  " class="fas fa-edit"></i></a>
                    </td>
                </tr>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>

    </table>
 <?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.main", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\OOP_MVC\mvc\app\views/user/list-users.blade.php ENDPATH**/ ?>