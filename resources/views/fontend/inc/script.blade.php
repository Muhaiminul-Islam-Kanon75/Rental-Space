    <!-- All The JS Files
    ================================================== --> 
    <script src="{{asset('fontend')}}/assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="{{asset('fontend')}}/assets/js/plugins.js"></script>
    <script src="{{asset('fontend')}}/assets/js/main.js"></script> <!-- main-js -->

    <!-- TOASTER JS CDN -->
      <!-- toaster js cdn link -->
    <script type="text/javascript" src="{{ asset('fontend') }}/assets/toastr/toastr.min.js"></script>
    <script>
          @if(Session::has('message'))
            var type ="{{Session::get('alert-type','info')}}"
            switch(type){
                case 'info':
                    toastr.info(" {{Session::get('message')}} ");
                    break;

                case 'success':
                    toastr.success(" {{Session::get('message')}} ");
                    break;

                case 'warning':
                    toastr.warning(" {{Session::get('message')}} ");
                    break;

                case 'error':
                    toastr.error(" {{Session::get('message')}} ");
                    break;
            }
        @endif
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
</script>