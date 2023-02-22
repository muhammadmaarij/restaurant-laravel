<!DOCTYPE html>
<html lang="en">

  <head>

  <base href="/public">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

    <title>Klassy Cafe - Restaurant HTML Template</title>
<!--
    
TemplateMo 558 Klassy Cafe

https://templatemo.com/tm-558-klassy-cafe

-->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>


    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                            <img src="assets/images/klassy-logo.png" align="klassy cafe html template">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#about">About</a></li>
                           	
                        <!-- 
                            <li class="submenu">
                                <a href="javascript:;">Drop Down</a>
                                <ul>
                                    <li><a href="#">Drop Down Page 1</a></li>
                                    <li><a href="#">Drop Down Page 2</a></li>
                                    <li><a href="#">Drop Down Page 3</a></li>
                                </ul>
                            </li>
                        -->
                            <li class="scroll-to-section"><a href="#menu">Menu</a></li>
                            <li class="scroll-to-section"><a href="#chefs">Chefs</a></li> 
                            <li class="submenu">
                                <a href="javascript:;">Features</a>
                                <ul>
                                    <li><a href="#">Features Page 1</a></li>
                                    <li><a href="#">Features Page 2</a></li>
                                    <li><a href="#">Features Page 3</a></li>
                                    <li><a href="#">Features Page 4</a></li>
                                </ul>
                            </li>
                            <!-- <li class=""><a rel="sponsored" href="https://templatemo.com" target="_blank">External URL</a></li> -->
                           
                            <li class="scroll-to-section"><a href="#reservation">Contact Us</a></li> 


                            <li class="scroll-to-section" style="background-color: red;">
                                <?php if(auth()->guard()->check()): ?>
                            <a href="<?php echo e(url('/showcart', Auth::user()->id)); ?>">

                                Cart<?php echo e($count); ?>


                            </a>

                                <?php endif; ?>

                                <?php if(auth()->guard()->guest()): ?>
                                Cart[0]
                                <?php endif; ?>

                        </li> 



                            <li>

                            <?php if(Route::has('login')): ?>
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    <?php if(auth()->guard()->check()): ?>
                       <li> <?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
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
<?php endif; ?></li>
                    <?php else: ?>
                       <li> <a href="<?php echo e(route('login')); ?>" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a></li>

                        <?php if(Route::has('register')): ?>
                        <li><a href="<?php echo e(route('register')); ?>" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a></li>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
                            </li>
                        </ul>        
                       
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>

<div id="top">
    <table align="center" bgcolor="yellow">

    <tr>
        <th style="padding: 30px;">Food name</th>
        <th style="padding: 30px;">Food price</th>
        <th style="padding: 30px;">Quantity</th>
        <th style="padding: 30px;">Action</th>
    </tr>



    <form action="<?php echo e(url('orderconfirm')); ?>" method="post">

    <?php echo csrf_field(); ?>


<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr align="center">

        <td>
            <input type="text" name="foodname[]" hidden value="<?php echo e($data->title); ?>">
            <?php echo e($data->title); ?>

        </td>
        <td>
        <input type="text" name="price[]" hidden value="<?php echo e($data->price); ?>">
            <?php echo e($data->price); ?>

        </td>
        <td>
        <input type="text" name="quantity[]" hidden value="<?php echo e($data->quantity); ?>">
            <?php echo e($data->quantity); ?>

        </td>

    </tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


<?php $__currentLoopData = $data2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr style="position: relative; top: -60px; right: -360px">
<td><a href="<?php echo e(url('/remove', $data2->id)); ?>" class="btn btn-warning">Remove</a></td>

</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </table>


    <div align="center" style="padding: 10px;">

    <button type="button" class="btn btn-primary" id="order">Order Now</button>

    </div>


    <div id="appear" align="center" style="padding: 10px; display:none">
        <div style="padding: 10px;">
            <label for="name">Name</label>
            <input type="text" name="name" placeholder="Name">
        </div>

        <div style="padding: 10px;">
            <label for="name">Phone</label>
            <input type="number" name="phone" placeholder="Phone no">
        </div>

        <div style="padding: 10px;">
            <label for="name">Address</label>
            <input type="text" name="address" placeholder="Address">
        </div>

        
        <div style="padding: 10px;">
            <input type="submit" class="btn btn-success" value="Order Confirm">
            <button type="button" id="close" class="btn btn-danger">Close</button>
        </div>


        
    </div>

    </form>

    </div>


    <script type="text/javascript">

    $("#order").click(

        function(){
            $("#appear").show();
        }


    );

    $("#close").click(

function(){
    $("#appear").hide();
}


);

    </script>


        <!-- jQuery -->
        <script src="assets/js/jquery-2.1.0.min.js"></script>

<!-- Bootstrap -->
<script src="assets/js/popper.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<!-- Plugins -->
<script src="assets/js/owl-carousel.js"></script>
<script src="assets/js/accordions.js"></script>
<script src="assets/js/datepicker.js"></script>
<script src="assets/js/scrollreveal.min.js"></script>
<script src="assets/js/waypoints.min.js"></script>
<script src="assets/js/jquery.counterup.min.js"></script>
<script src="assets/js/imgfix.min.js"></script> 
<script src="assets/js/slick.js"></script> 
<script src="assets/js/lightbox.js"></script> 
<script src="assets/js/isotope.js"></script> 

<!-- Global Init -->
<script src="assets/js/custom.js"></script>
<script>

    $(function() {
        var selectedClass = "";
        $("p").click(function(){
        selectedClass = $(this).attr("data-rel");
        $("#portfolio").fadeTo(50, 0.1);
            $("#portfolio div").not("."+selectedClass).fadeOut();
        setTimeout(function() {
          $("."+selectedClass).fadeIn();
          $("#portfolio").fadeTo(50, 1);
        }, 500);
            
        });
    });

</script>
</body>
</html><?php /**PATH C:\xampp\htdocs\hotel\resources\views/showcart.blade.php ENDPATH**/ ?>