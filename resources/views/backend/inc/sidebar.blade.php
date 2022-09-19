        <!-- Side Header Start -->
        <div class="side-header show">
            <button class="side-header-close"><i class="zmdi zmdi-close"></i></button>
            <!-- Side Header Inner Start -->
            <div class="side-header-inner custom-scroll">

                <nav class="side-header-menu" id="side-header-menu">
                    <ul>

                        <li><a href="{{route('admin.dashboard')}}"><i class="ti-home"></i> <span>Dashboard</span></a></li>
                        @if( Route::has('login'))
                        @auth
                        @if( Auth::user()->role_id == 1 )
                        <li><a href="{{route('admin.house.all')}}"><i class="ti-home"></i> <span>All House</span></a></li>
                        <li><a href="{{route('house.owner.all')}}"><i class="ti-home"></i> <span>All House owner</span></a></li>
                        <li><a href="{{route('varati.all')}}"><i class="ti-home"></i> <span>All Varati</span></a></li>
                        <li><a href="{{route('booking.house.all')}}"><i class="ti-home"></i> <span>All Booking House</span></a></li>
                        <li><a href="{{route('contact.all')}}"><i class="ti-home"></i> <span>Contact</span></a></li>

                        @endif
                        @if( Auth::user()->role_id == 2 )
                        <li class="has-sub-menu"><a href="#"><i class="ti-package"></i> <span>House</span></a>

                            <ul class="side-header-sub-menu">
                                <li><a href="{{route('house.create')}}"><span>Add House</span></a></li>
                                <li><a href="{{route('house.manage')}}"><span>Manage House</span></a></li>
                            </ul>
                        </li>
                        <li><a href="{{route('bookig.house.all.house.owner')}}"><i class="ti-home"></i> <span>Booking House</span></a></li>
                        @endif

                        @endif
                        @endif


                    </ul>
                </nav>

            </div><!-- Side Header Inner End -->
        </div><!-- Side Header End -->