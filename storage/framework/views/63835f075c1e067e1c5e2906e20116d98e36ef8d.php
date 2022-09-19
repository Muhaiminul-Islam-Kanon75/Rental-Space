
<?php $__env->startSection('fontend-content'); ?>
<!-- ====== Page Header ====== --> 
<div class="page-header default-template-gradient">
    <div class="container">
        <div class="row">
            <div class="col-md-12">                
                <h2 class="page-title">Contact</h2>
                <p class="page-description">Contact with us</p>        
            </div><!-- /.col-md-12 -->
        </div><!-- /.row-->
    </div><!-- /.container-fluid -->           
</div><!-- /.page-header -->
<!-- ====== Breadcrumbs Area======= --> 
<div class="breadcrumbs-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumbs">
                    <span class="first-item">
                     <a href="index01.html">Home</a></span>
                    <span class="separator">&gt;</span>
                    <span class="last-item">Contact</span>
                </div>
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.breadcrumbs-area -->
<!-- ====== Map Area====== --> 
<div class="map-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading-content-one">
                   <h5>Find Our location</h5>
                   <h2 class="title default-text-gradient">Map &amp; Directions</h2>
                   <p>Find out how to find us from your current location</p>
                </div><!-- /.about-heading-content -->
                <div class="map-content">
                    <iframe height="550" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d116834.00977783451!2d90.349285777798!3d23.780777744564805!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1644852909879!5m2!1sen!2sbd" allowfullscreen="allowfullscreen"></iframe>
                </div><!-- /.map-content -->
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.map-content-area -->
<!-- ====== Contact Us Area ====== --> 
<div class="contact-us-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading-content-one">
                    <h2 class="title default-text-gradient">Contact us<br/> live</h2>
                </div><!-- /.heading-content-one -->
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
        <div class="row">
            <div class="col-md-4">
                <div class="contact-us-content-left">
                    <div class="contact">
                        <h4><i class="fa fa-map-marker"></i>Address</h4>
                        <p>121 King St, Melbourne VIC <br> 3000, Australia</p>
                    </div><!-- /.contact -->
                
                    <div class="contact">
                        <h4><i class="fa fa-envelope"></i>Mall</h4>
                        <p>yourmail@gmail.com <br> houserentmail@gmail.com</p>
                    </div><!-- /.contact -->
            
                
                    <div class="contact">
                        <h4><i class="fa fa-volume-control-phone"></i>Call</h4>
                        <p>+88 0215469875 <br> 666 35874692050</p>
                    </div><!-- /.contact -->
                
                    <div class="contact">
                        <h4><i class="fa fa-user"></i>Social account</h4>
                        <div class="social-icon">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                        </div><!-- /.Social-icon -->
                    </div><!-- /.contact -->
                </div><!-- /.contactus-content-left -->
            </div><!-- /.col-md-4 -->
            
            <div class="col-md-8">
                <div class="contact-us-content-right">
                    <form action="<?php echo e(route('contact.store')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <h3>Have a question</h3>
                        <img src="<?php echo e(asset('fontend')); ?>/assets/images/envelope.jpg" alt="envelope" />
                        <div class="input-content clearfix">
                            <h4>Send Us A email</h4>
                            <div class="row">
                                <div class="col-sm-6">
                                    <input type="text" placeholder="Name*" name="name" class="form-control">
                                </div><!-- /.col-sm-6 -->
                                <div class="col-sm-6">
                                    <input type="email" placeholder="Email*" name="email" class="form-control Email">
                                </div><!-- /.col-sm-6 -->
                                <div class="col-md-12">
                                    <input type="search" placeholder="Website*" name="website" class="form-control website">
                                </div><!-- /.col-md-12 -->
                                <div class="col-md-12">
                                    <textarea rows="2" cols="80" name="message" placeholder="your massage"></textarea>
                                </div><!-- /.col-md-12 -->
                            </div><!-- /.row -->
                            <div class="subimt-button clearfix">
                                <input type="submit" value="Submit" class="submit default-template-gradient">
                            </div><!-- /.subimt -->
                        </div><!-- /.input-content -->
                    </form>
                </div><!-- /.contactus-content-right -->
            </div><!-- /.col-md-8 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.contact-us-area -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.fontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\web\hoese rent\HouseRent\resources\views/fontend/contact.blade.php ENDPATH**/ ?>