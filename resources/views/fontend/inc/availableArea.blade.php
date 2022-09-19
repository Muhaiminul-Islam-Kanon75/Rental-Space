<!-- ====== Availability Area ======= -->
<div class="availability-area bg-white-smoke">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading-content-three">
                    <h2 class="title">For rates &amp; Availability</h2>
                    <h5 class="sub-title">Search your <span>House</span></h5>
                </div><!-- /.Availability-content -->
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
        <div class="row">
            <div class="col-md-12">
                <form action="{{route('avail.able.house')}}" method="POST" class="advance_search_query">
                    @csrf
                    <div class="form-content">
                        <div class="form-group">
                            <label>Living Aria</label>
                            <input type="text" name="address" placeholder="Where do you want to live?">
                        </div><!-- /.form-group -->
                        <div class="form-group">
                            <label>Available Date</label>
                            <input type="date" name="date" placeholder="">
                        </div><!-- /.form-group -->
                        <div class="form-group">
                            <label>Rent</label>
                            <input type="number" name="min_rent" placeholder="min">
                        </div><!-- /.form-group -->
                        <div class="form-group">
                            <label>Rent</label>
                            <input type="text" placeholder="max" name="max_rent">
                        </div><!-- /.form-group -->
                    </div><!-- /.form-content -->
                    <button type="submit" class=" button nevy-button">Check Availability</button>
                </form> <!-- /.advance_search_query -->
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container  -->
</div><!-- /.Availability-area -->