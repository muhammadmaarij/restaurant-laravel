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

      <div class="container">

      <h1>Customer Orders</h1>

      <form action="<?php echo e(url('/search')); ?>" method="get">

      <?php echo csrf_field(); ?>

        <input type="text" name="search" id="" style="color: blue;">

        <input type="submit" value="search" class="btn btn-success">

      </form>

      <table>

      <tr align="center">
        <td style="padding: 30px;">Name</td>
        <td style="padding: 30px;">Phone</td>
        <td style="padding: 30px;">Address</td>
        <td style="padding: 30px;">Foodname</td>
        <td style="padding: 30px;">Price</td>
        <td style="padding: 30px;">Quantity</td>
        <td style="padding: 30px;">Total Price</td>
      </tr>


      <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr align="center" style="background-color: black;">

      <td><?php echo e($data->name); ?></td>
      <td><?php echo e($data->phone); ?></td>
      <td><?php echo e($data->address); ?></td>
      <td><?php echo e($data->foodname); ?></td>
      <td><?php echo e($data->price); ?></td>
      <td><?php echo e($data->quantity); ?></td>
      <td><?php echo e($data->quantity * $data->price); ?></td>

      </tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


      </table>
      </div>
    </div>

    <!-- Plugin js for this page -->
    <?php echo $__env->make("admin.adminscript", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
  </body>
</html><?php /**PATH C:\xampp\htdocs\hotel\resources\views/admin/orders.blade.php ENDPATH**/ ?>