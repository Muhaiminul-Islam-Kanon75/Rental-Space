    <!-- All The JS Files
    ================================================== --> 
    <script src="<?php echo e(asset('fontend')); ?>/assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="<?php echo e(asset('fontend')); ?>/assets/js/plugins.js"></script>
    <script src="<?php echo e(asset('fontend')); ?>/assets/js/main.js"></script> <!-- main-js -->

    <!-- TOASTER JS CDN -->
      <!-- toaster js cdn link -->
    <script type="text/javascript" src="<?php echo e(asset('fontend')); ?>/assets/toastr/toastr.min.js"></script>
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
        </script>
        <script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script><?php /**PATH C:\Users\mikan\Desktop\FALL 2021\cse499b\HouseRent\resources\views/fontend/inc/script.blade.php ENDPATH**/ ?>