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
    <base href="/public">
  <?php echo $__env->make("admin.admincss", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
  </head>
  <body>
    <div class="container-scroller">
      <?php echo $__env->make("admin.navbar", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;

      <form action="<?php echo e(url('/updatefoodchef', $data->id)); ?>" method="Post" enctype="multipart/form-data">
      <?php echo csrf_field(); ?>
      <label for="">Chef name: </label>
        <input style="color:blue"type="text" name="name" value="<?php echo e($data->name); ?>">
        </div>
        <div>

        <label for="">Speciality</label>
        <input style="color:blue" type="text" name="speciality" value="<?php echo e($data->speciality); ?>">
        </div>
        

        <div>

        <label for="">Old Image</label>
        <img height="200" width="200" src="/chefimage/<?php echo e($data->image); ?>" alt="">  
      </div>
        
      <div>

        <label for="">new Image</label>
        <input type="file" name="image" id="">  
      </div>

        <div>

  
        <input type="submit" value="Save" style="background-color: blue;">
        </div>
      </form>

    </div>

    <!-- Plugin js for this page -->
    <?php echo $__env->make("admin.adminscript", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
  </body>
</html><?php /**PATH C:\xampp\htdocs\hotel\resources\views/admin/updatechef.blade.php ENDPATH**/ ?>