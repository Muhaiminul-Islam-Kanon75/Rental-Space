
<link rel="stylesheet" type="text/css" href="https://getbootstrap.com/docs/4.6/assets/css/docs.css">
<?php $__env->startSection('admin-content'); ?>
<!-- Page Headings Start -->
            <div class="row justify-content-between align-items-center mb-10">

                <!-- Page Heading Start -->
                <div class="col-12 col-lg-auto mb-20">
                    <div class="page-heading">
                        <h3>House <span>/ Add</span></h3>
                    </div>
                </div><!-- Page Heading End -->

            </div><!-- Page Headings End -->

            <div class="row mbn-30">

                <!--Default Form Start-->
                <div class="col-lg-6 col-12 mb-30">
                    <div class="box">
                        <div class="box-head">
                            <h4 class="title">Appartment details</h4>
                        </div>
                        <div class="box-body">
                            <form method="POST" action="<?php echo e(route('house.update',$house->id)); ?>" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <div class="row mbn-20">

                                    <div class="col-12 mb-20">
                                        <label for="invalidCheck">Title</label>
                                        <input type="text"  id="validationCustom03" class="form-control" placeholder="Title" name="title" value="<?php echo e($house->title); ?>">
                                         <div class="invalid-feedback">
                                            You must agree before submitting.
                                          </div>
                                    </div>
                                    
                                    <div class="col-12 mb-20">
                                        <label for="formLayoutMessage1">Description</label>
                                        <textarea id="formLayoutMessage1" required class="form-control" placeholder="description" name="description"><?php echo e($house->description); ?></textarea>
                                    </div>

                                </div>
                        </div>
                    </div>
                </div>
                <!--Default Form End-->

                
                <!--Form With Basic Form Elements Start-->
                <div class="col-lg-6 col-12 mb-30">
                    <div class="box">
                        <div class="box-head">
                            <h4 class="title">Price Details</h4>
                        </div>
                        <div class="box-body">

                                <div class="row mbn-20">

                                    <div class="col-12 mb-20">
                                        <label for="formLayoutUsername3">Rent/Day</label>
                                        <input type="number" id="formLayoutUsername3"value="<?php echo e($house->rent); ?>" class="form-control" placeholder="Rent" name="rent" required>
                                    </div>
                                    

                                </div>
                        </div>
                    </div>
                </div>
                <!--Form With Basic Form Elements End-->
                <!--Form With Basic Form Elements Start-->
                <div class="col-lg-6 col-12 mb-30">
                    <div class="box">
                        <div class="box-head">
                            <h4 class="title">Property Details</h4>
                        </div>
                        <div class="box-body">

                                <div class="row mbn-20">

                                    <div class="col-12 mb-20">
                                        <label for="formLayoutUsername33">Address & Area</label>
                                        <input type="text" id="formLayoutUsername33"value="<?php echo e($house->address); ?>" required class="form-control" placeholder="Address & Area" name="address">
                                    </div>
                                    <div class="col-12 mb-20">
                                        <label for="formLayoutSecurity1">Bed Room</label>
                                        <input type="text" id="formLayoutSecurity1"value="<?php echo e($house->id); ?>" name="bed_room" required class="form-control" placeholder="Facilities ">
                                    </div>
                                    <div class="col-12 mb-20">
                                        <label for="formLayoutSecurity1">Bath Room</label>
                                        <input type="text" id="formLayoutSecurity1"value="<?php echo e($house->bath_room); ?>" name="bath_room" required class="form-control" placeholder="Facilities ">
                                    </div>
                                    <div class="col-12 mb-20">
                                        <label for="formLayoutEmail3">Flat Size</label>
                                        <input type="text" id="formLayoutEmail3"value="<?php echo e($house->flat_size); ?>" name="flat_size" required class="form-control" placeholder="Flat Size">
                                    </div>
                                    <div class="col-12 mb-20">
                                        <label for="formLayoutSecurity1">Floor</label>
                                        <input type="text" id="formLayoutSecurity1"value="<?php echo e($house->floor); ?>" name="floor" required class="form-control" placeholder="Floor">
                                    </div>
                                    
                                    

                                </div>
                        </div>
                    </div>
                </div>
                <!--Form With Basic Form Elements End-->
                <!--Form With Basic Form Elements Start-->
                <div class="col-lg-6 col-12 mb-30">
                    <div class="box">
                        <div class="box-head">
                            <h4 class="title">Facilities</h4>
                        </div>
                        <div class="box-body">

                                <div class="row mbn-20">

                                    <div class="col-12 mb-20">
                                        <label for="formLayoutSecurity1">Facilities</label>
                                        <input type="text" id="formLayoutSecurity1" required name="facilities" class="form-control"value="<?php echo e($house->facilities); ?>" placeholder="Facilities ">
                                    </div>
                                    <div class="col-12 mb-20">
                                        <label for="formLayoutMessage11">Room Category</label>
                                        <textarea id="formLayoutMessage11" required class="form-control" placeholder="Room Category" name="room_category"><?php echo e($house->room_category); ?></textarea>
                                    </div>
                                    
                                    <div class="col-12 mb-20">
                                        <label for="formLayoutMessage111">Additional Facilities</label>
                                        <textarea id="formLayoutMessage111" class="form-control" placeholder="Additional Facilities" name="additional_facilities"><?php echo e($house->additional_facilities); ?></textarea>
                                    </div>
                                    <div class="col-12 mb-20">
                                        <label for="formLayoutMessage1111">Indoor features</label>
                                        <textarea id="formLayoutMessage1111" class="form-control" placeholder="Indoor features" name="indoor_features"><?php echo e($house->indoor_features); ?></textarea>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
                <!--Form With Basic Form Elements End-->
                <!--Form With Basic Form Elements Start-->
                <div class="col-lg-12 col-12 mb-30">
                    <div class="box">
                        <div class="box-head">
                            <h4 class="title">Images</h4>
                        </div>
                        <div class="box-body">
                                <div class="row mbn-20">
                                    <div class="col-12 mb-20">
                                        <label for="formLayoutSecurity1">Main Image</label>
                                            <input class="form-control"  type="file" name="image">
                                            
                                          </div>
                                    <div class="col-12 mb-20">
                                        <label for="formLayoutSecurity1">Images</label>
                                            <input class="form-control" type="file" name="multi_img[]" value="<?php echo e(old('multi_img')); ?>" multiple id="multiImg">
                                            <?php $__errorArgs = ['multi_img'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="text-danger"><?php echo e($message); ?></span>
                                              <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                          </div>
                                          <div class="row" id="preview_img" >
                                        </div>
                                    </div>

                                    <div class="col-12 mb-20 mt-4">
                                        <input type="submit" value="submit" class="button button-primary">
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!--Form With Basic Form Elements End-->

            </div>
<!-- Plugins & Activation JS For Only This Page -->
    <script src="<?php echo e(asset('backend')); ?>/assets/js/plugins/filepond/filepond.min.js"></script>
    <script src="<?php echo e(asset('backend')); ?>/assets/js/plugins/filepond/filepond-plugin-image-exif-orientation.min.js"></script>
    <script src="<?php echo e(asset('backend')); ?>/assets/js/plugins/filepond/filepond-plugin-image-preview.min.js"></script>
    <script src="<?php echo e(asset('backend')); ?>/assets/js/plugins/filepond/filepond.active.js"></script>
    <script src="<?php echo e(asset('backend')); ?>/assets/js/plugins/dropify/dropify.min.js"></script>
    <script src="<?php echo e(asset('backend')); ?>/assets/js/plugins/dropify/dropify.active.js"></script>
    <script type="text/javascript">
        FilePond.registerPlugin(FilePondPluginImageExifOrientation, FilePondPluginImagePreview);
        const inputElement = document.querySelector('.file-pond');
        const pond = FilePond.create( inputElement, {
            imagePreviewHeight: 140,
        });
    </script>
<script>

  $(document).ready(function(){
   $('#multiImg').on('change', function(){ //on file input change
      if (window.File && window.FileReader && window.FileList && window.Blob) //check File API supported browser
      {
          var data = $(this)[0].files; //this file data

          $.each(data, function(index, file){ //loop though each file
              if(/(\.|\/)(gif|jpe?g|png)$/i.test(file.type)){ //check supported file type
                  var fRead = new FileReader(); //new filereader
                  fRead.onload = (function(file){ //trigger function on successful read
                  return function(e) {
                      var img = $('<img/>').addClass('thumb').attr('src', e.target.result) .width(80)
                  .height(80); //create image element
                      $('#preview_img').append(img); //append image to output element
                  };
                  })(file);
                  fRead.readAsDataURL(file); //URL representing the file's data.
              }
          });

      }else{
          alert("Your browser doesn't support File API!"); //if File API is absent
      }
   });
  });

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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\mikan\Desktop\FALL 2021\cse499b\HouseRent\resources\views/backend/HouseOwner/house/edit.blade.php ENDPATH**/ ?>