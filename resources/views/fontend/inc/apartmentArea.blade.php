<!-- ====== Apartments Area ====== -->
@php

$now = \Carbon\Carbon::now();
$date = \Carbon\Carbon::now()::parse($now)->toDateString();


@endphp
<div class="apartments-area bg-gray-color">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading-content-one border">
                    <h2 class="title">Rooms &amp; </h2>
                    <h5 class="sub-title">Find Your Rooms, for your abaility</h5>
                </div><!-- /.Apartments-heading-content -->
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
        <div class="row">
            @forelse(App\Models\House::orderBy('id','desc')->get()->take(6) as $house)
            <div class="col-md-4 col-sm-6 col-xs-6">
                <div class="apartments-content">
                    <div class="image-content">
                        <a href="{{route('house.single',$house->id)}}"><img src="{{ asset($house->image) }}" alt="apartment" /></a>
                    </div><!-- /.image-content -->

                    <div class="text-content">
                        <div class="top-content">
                            <h3><a href="{{route('house.single',$house->id)}}">{{$house->title}}</a></h3>
                            <span>
                                <i class="fa fa-map-marker"></i>
                                {{$house->address}}
                            </span>
                        </div><!-- /.top-content -->
                        <div class="bottom-content clearfix">
                            <div class="meta-bed-room">
                                <i class="fa fa-bed"></i> {{$house->bed_room}} Bedrooms
                            </div>
                            <div class="meta-bath-room">
                                <i class="fa fa-bath"></i>{{$house->bath_room}} Bathroom
                            </div>
                            <span class="clearfix"></span>
                            <div class="rent-price pull-left">
                                ৳{{$house->rent}}
                            </div>
                            <div class="share-meta dropup pull-right">
                                <ul>
                                    <li class="dropup">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-share-alt"></i></a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="#"><i class="fa fa-facebook"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-twitter"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-instagram"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-star-o"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div><!-- /.bottom-content -->
                    </div><!-- /.text-content -->
                </div><!-- /.partments-content -->
            </div><!-- /.col-md-4 -->
            @empty
            <h1>No House Found!!</h1>
            @endforelse
        </div><!-- /.row -->
        <a href="{{route('house.all')}}" class="button nevy-button">All Apartments</a>
    </div><!-- /.container -->
</div><!-- /.Apartments-area-->