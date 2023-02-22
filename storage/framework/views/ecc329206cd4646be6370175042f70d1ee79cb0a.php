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


       <div style="position: relative; top: 70px;right: -150px;">
        <form action="<?php echo e(url('/update', $data->id)); ?>" method="post" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>

        <div>

        <label for="">Title</label>
        <input style="color:black"type="text" name="title" value="<?php echo e($data->title); ?>">
        </div>
        <div>

        <label for="">Price</label>
        <input style="color:black" type="number" name="price" value="<?php echo e($data->price); ?>">
        </div>
        

        <div>

        <label for="">Description</label>
        <input style="color:black" type="text" name="des" value="<?php echo e($data->desciption); ?>" required>
        </div>

        <div>

        <label for="">old Image</label>
        <img height="200" width="200" src="/foodimage/<?php echo e($data->image); ?>" alt="">  
      </div>
        
      <div>

        <label for="">new Image</label>
        <input type="file" name="image" required id="">  
      </div>

        <div>

  
        <input type="submit" value="Save" style="background-color: white ;color:black;">
        </div>
        </form>



        <div>

    </div>

    <!-- Plugin js for this page -->
    <?php echo $__env->make("admin.adminscript", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
  </body>
</html><?php /**PATH C:\xampp\htdocs\hotel\resources\views/admin/updateview.blade.php ENDPATH**/ ?>