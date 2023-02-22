<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
   
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>

<!DOCTYPE html>
<html lang="en">
  <head>
  <?php echo $__env->make("admin.admincss", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
  </head>
  <body>

  <div class="container-scroller">
    
       <?php echo $__env->make("admin.navbar", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;


       <div style="position: relative; top:70px; right:-150;">
        <table bgcolor="grey" border="1px">
            <tr>
                <th style="padding: 30px;">Name</th>
                <th style="padding: 30px;">Email</th>
                <th style="padding: 30px;">Phone</th>
                <th style="padding: 30px;">Date</th>
                <th style="padding: 30px;">Time</th>
                <th style="padding: 30px;">Message</th>
            </tr>

            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <tr align="center">
                <td><?php echo e($data->name); ?></td>
                <td><?php echo e($data->email); ?></td>
                <td><?php echo e($data->phone); ?></td>
                <td><?php echo e($data->date); ?></td>
                <td><?php echo e($data->time); ?></td>
                <td><?php echo e($data->message); ?></td>

            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
       </div>

       </div>
    <!-- Plugin js for this page -->
    <?php echo $__env->make("admin.adminscript", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
  </body>
</html><?php /**PATH C:\xampp\htdocs\hotel\resources\views/admin/adminreservation.blade.php ENDPATH**/ ?>