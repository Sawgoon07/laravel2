@extends('frontend.layout.main')
@section('content')


<!--========== SLIDER ==========-->
    
    <div class="container">
        <div class="row">
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img class="img-responsive" src="img/wall.jpg"  width="100%">
                </div>
            </div>
        </div>
    </div>

<!--========== SLIDER ==========-->
    


    <!-- Testimonials -->
    <div class="content-lg container">
        <div class="row">
            <div class="col-sm-12">
                <h2>What We Do</h2>

                <!-- Swiper Testimonials -->
                <div class="swiper-slider swiper-testimonials">
                    <!-- Swiper Wrapper -->
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            
                            <div class="margin-b-20">
                                <p class="text">We provide the new user to booked the venues according to the category that haven been provides such as Traditional, Formal (Full Catering) and Simple party (Semi Catering). The Menu 1 for the Traditional party. 
                                 The Formal party include Menu A in which it contain three sub category such as snack, dinner and desert. The Simple party include Menu B in which it contain two sub category such as dinner 
                                and desert.</p>
                            </div>
                            </blockquote>
                        </div>
                       
                    </div>
                    <!-- End Swiper Wrapper -->

                    <!-- Pagination -->
                    <div class="swiper-testimonials-pagination"></div>
                </div>
                <!-- End Swiper Testimonials -->
            </div>
        </div>
       <!--// end row -->


    <!-- Features -->
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <a href="{!!route('frontend.about')!!}"><span class="glyphicon glyphicon-user"></span></a>
                <h1>About Us</h1>   
                <p class="text">It contain the terms and contion before booking the venus. The user should read it carefully the terms and condition for booking.</p><br>
                <a class="btn btn-success btn-md" href="{!!route('frontend.about')!!}" target="_blank">Read more</a><br>
            </div>

            <div class="col-sm-4"> 
                <a href="{!!route('frontend.mennu-list')!!}"><span class="glyphicon glyphicon-cutlery"></span></a>
                <h1>Menus</h1>
                <p class="text">It shows the menu according to the category in which it include menu1, menuA and MenuB. The Menus is divided into three category party.</p><br>
              <a class="btn btn-primary btn-md" href="{!!route('frontend.mennu-list')!!}" target="_blank">View</a><br>
            </div>

            <div class="col-sm-4">

               <a href="{!!route('frontend.booking-list')!!}"><span class="glyphicon glyphicon-calendar"></span></a> 
                <h1>Booking List</h1>
                <p class="text">The user who had booked thier venus is display in this page so that use can book and reserve according to the abalibale.</p><br>
                <a class="btn btn-primary btn-md" href="{!!route('frontend.booking-list')!!}" target="_blank">View</a><br>
            </div>      
        </div> <!-- /.row -->

    </div> <!-- /.container -->
</div><!-- End Testimonials -->
        
@endsection