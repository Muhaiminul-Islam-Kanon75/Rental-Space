<!-- ====== Category Menu ====== --> 
@php 
$categories = App\Models\Category::orderBy('name','ASC')->get();

@endphp
<div class="category-menu margin-less-top">
    <div class="container-fluid pd-zero">
        <div class="row">
            <div class="col-md-12">
                <div class="category-menu-content">
                    <div class="category-title">
                        <h3><span>We Provide</span></h3>
                    </div><!-- /.category-titel -->
                    <div class="category-slider bg-white-smoke owl-carousel">
                        @foreach($categories as $category)

                        <div class="item">
                            <div class="category-list style-one">
                                <a href="{{route('house.category',$category->id)}}"><img src="{{ asset($category->image) }}" alt="" />
                                <h4>{{$category->name}}</h4></a>
                            </div><!-- /.category-list -->
                        </div><!-- /.item -->
                        @endforeach
                    </div><!-- /.category-slider -->  
                </div><!-- /.category-menu-content -->
            </div> <!-- category-menu -->
        </div><!-- /.col-md-12 -->
    </div><!-- /.row -->
</div><!-- /.catagory-menu -->