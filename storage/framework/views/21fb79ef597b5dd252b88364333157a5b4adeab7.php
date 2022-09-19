<!-- ====== Category Menu ====== --> 
<?php 
$categories = App\Models\Category::orderBy('name','ASC')->get();

?>
<div class="category-menu margin-less-top">
    <div class="container-fluid pd-zero">
        <div class="row">
            <div class="col-md-12">
                <div class="category-menu-content">
                    <div class="category-title">
                        <h3><span>We Provide</span></h3>
                    </div><!-- /.category-titel -->
                    <div class="category-slider bg-white-smoke owl-carousel">
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <div class="item">
                            <div class="category-list style-one">
                                <a href="<?php echo e(route('house.category',$category->id)); ?>"><img src="<?php echo e(asset($category->image)); ?>" alt="" />
                                <h4><?php echo e($category->name); ?></h4></a>
                            </div><!-- /.category-list -->
                        </div><!-- /.item -->
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div><!-- /.category-slider -->  
                </div><!-- /.category-menu-content -->
            </div> <!-- category-menu -->
        </div><!-- /.col-md-12 -->
    </div><!-- /.row -->
</div><!-- /.catagory-menu --><?php /**PATH D:\web\hoese rent\HouseRent\resources\views/fontend/inc/categoryMenu.blade.php ENDPATH**/ ?>