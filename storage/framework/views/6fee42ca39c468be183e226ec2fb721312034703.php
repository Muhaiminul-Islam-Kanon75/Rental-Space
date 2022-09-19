<!-- JS
============================================ -->

    <!-- Global Vendor, plugins & Activation JS -->
    <script src="<?php echo e(asset('backend')); ?>/assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="<?php echo e(asset('backend')); ?>/assets/js/vendor/jquery-3.3.1.min.js"></script>
    <script src="<?php echo e(asset('backend')); ?>/assets/js/vendor/popper.min.js"></script>
    <script src="<?php echo e(asset('backend')); ?>/assets/js/vendor/bootstrap.min.js"></script>
    <!--Plugins JS-->
    <script src="<?php echo e(asset('backend')); ?>/assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="<?php echo e(asset('backend')); ?>/assets/js/plugins/tippy4.min.js.js"></script>
    <!--Main JS-->
    <script src="<?php echo e(asset('backend')); ?>/assets/js/main.js"></script>

    <!-- Plugins & Activation JS For Only This Page -->

    <!--Moment-->
    <script src="<?php echo e(asset('backend')); ?>/assets/js/plugins/moment/moment.min.js"></script>

    <!--Daterange Picker-->
    <script src="<?php echo e(asset('backend')); ?>/assets/js/plugins/daterangepicker/daterangepicker.js"></script>
    <script src="<?php echo e(asset('backend')); ?>/assets/js/plugins/daterangepicker/daterangepicker.active.js"></script>

    <!--Echarts-->
    <script src="<?php echo e(asset('backend')); ?>/assets/js/plugins/chartjs/Chart.min.js"></script>
    <script src="<?php echo e(asset('backend')); ?>/assets/js/plugins/chartjs/chartjs.active.js"></script>

    <!--VMap-->
    <script src="<?php echo e(asset('backend')); ?>/assets/js/plugins/vmap/jquery.vmap.min.js"></script>
    <script src="<?php echo e(asset('backend')); ?>/assets/js/plugins/vmap/maps/jquery.vmap.world.js"></script>
    <script src="<?php echo e(asset('backend')); ?>/assets/js/plugins/vmap/maps/samples/jquery.vmap.sampledata.js"></script>
    <script src="<?php echo e(asset('backend')); ?>/assets/js/plugins/vmap/vmap.active.js"></script>
    <!-- TOASTER JS CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
      <?php if(Session::has('message')): ?>
        var type ="<?php echo e(Session::get('alert-type','info')); ?>"
        switch(type){
            case 'info':
                toastr.info(" <?php echo e(Session::get('message')); ?> ");
                break;

            case 'success':
                toastr.success(" <?php echo e(Session::get('message')); ?> ");
                break;

            case 'warning':
                toastr.warning(" <?php echo e(Session::get('message')); ?> ");
                break;

            case 'error':
                toastr.error(" <?php echo e(Session::get('message')); ?> ");
                break;
        }
    <?php endif; ?>
    </script><?php /**PATH C:\Users\mikan\Desktop\FALL 2021\cse499b\HouseRent\resources\views/backend/inc/script.blade.php ENDPATH**/ ?>