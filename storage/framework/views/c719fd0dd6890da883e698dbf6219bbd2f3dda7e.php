<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo $__env->make("admin.admincss", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
</head>

<body>
    <div class="container-scroller">

        <?php echo $__env->make("admin.navbar", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;

        <div style="position: relative;top: 60px;right: -100px;">

            <table style="background-color: grey;">

                <tr>
                    <th style="padding: 50px">
                        Name
                    </th>
                    <th style="padding: 50px">
                        Email
                    </th>
                    <th style="padding: 50px">
                        Action
                    </th>

                </tr>
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr  align="center">
                    <td><?php echo e($data->name); ?></td>
                    <td><?php echo e($data->email); ?></td>

                    <?php if($data->usertype=="0"): ?>
                    <td><a href="<?php echo e(url('deleteuser',$data->id)); ?>">Delete</a></td>
                    <?php else: ?>
                    <td>Admin</td>
                    <?php endif; ?>




                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
        </div>


        <div>
            <!-- Plugin js for this page -->
            <?php echo $__env->make("admin.adminscript", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
</body>

</html><?php /**PATH C:\xampp\htdocs\hotel\resources\views/admin/users.blade.php ENDPATH**/ ?>