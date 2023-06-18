
@include('user.includes.head')
@include('user.includes.navbar')

        <!-- start of hero -->
        <section class="hero-slider hero-style-3">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    @foreach($Slider as $Sliders )
                    <div class="swiper-slide">
                        <div class="slide-inner slide-bg-image" data-background="/slider_images/{{$Sliders->image}}">
                            <div class="container">
                                <div data-swiper-parallax="300" class="slide-title">
                                    <h2>{{$Sliders->text}}</h2>
                                </div>
                                <div data-swiper-parallax="400" class="slide-text">
                                    <p>Recently cut out of an illustrated magazine and housed in a nice, gilded frame. It showed a lady fitted out with a fur hat and fur boa</p>
                                </div>
                                <div class="clearfix"></div>
                                <div data-swiper-parallax="500" class="slide-btns">
                                    <a href="#" class="theme-btn">Our services</a> 
                                    <a href="#" class="theme-btn-s2">More about us</a> 
                                </div>
                            </div>
                        </div> <!-- end slide-inner --> 
                    </div> <!-- end swiper-slide -->
                    @endforeach
                </div>
                <!-- end swiper-wrapper -->

                <!-- swipper controls -->
                <div class="swiper-pagination"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </section>
        <!-- end of hero slider -->


          <!-- start blog-section -->
          <section class="blog-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2">
                        <div class="section-title-s5">
                            <h2>Events</h2>
                            <p>Feel free to to browse through our events and be informed</p>
                        </div>
                    </div>
                </div> 
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="blog-grids">
                            @foreach($event as $events)
                            <div class="grid">
                                <div class="entry-media">
                                    <img src="event_images/{{$events->image}}" alt="{{$events->name}}" height="260px">
                                </div>
                                <div class="entry-body">
                                    <div class="cats">{{$events->date}}</div>
                                    <h4><a href="#">{{$events->name}}</a></h4>
                                    <p class="date">{{$events->description}}</p>
                                    <a href="#" class="read-more">Read More <i class="fi flaticon-next"></i></a>
                                </div>
                            </div>
                            @endforeach
                            
                        </div>
                    </div>
                </div>               
            </div> <!-- end container -->
        </section>
        <!-- end blog-section -->

        
 <!-- start about-us-section -->
 <section class="about-us-section section-padding">
    <div class="container">
      <div class="row">
        <div class="col col-md-12">
          <div class="section-title">
            <span>About us</span>
            <h2>We set the standards others try to live up to.</h2>
          </div>
          <div class="details">
            <p>
              It wasn't a dream. His room, a proper human room although a
              little too small, lay peacefully between its four familiar
              walls. A collection of textile samples lay spread out on the
              table - Samsa was a travelling salesman - and above it there
              hung a picture that he had recently cut out of an illustrated
              magazine and housed in a nice, gilded frame. It showed a lady
              fitted out with a fur hat and fur boa who sat upright
            </p>
            
            
          </div>
        </div>
        
      </div>
    </div>
    <!-- end container -->
  </section>
  <!-- end about-us-section -->
       

  <!-- start feedback-section -->
<section class="feedback-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2">
                <div class="section-title-s5">
                    <span>Feedback</span>
                    <h2>We'd Love to Hear from You!</h2>
                    <p>Please share your feedback with us. We appreciate your input and strive to improve our services based on your suggestions.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2">
                <div class="right-col">
                    <div class="quote-area" style="padding: 20px">
                        <h3>Feedback</h3>
                        <form method="post" action="/give_feedback" class="contact-validation-active" id="contact-quote-form">
                            <div>
                                <input type="text"  class="form-control" name="name" id="name" placeholder="Name*">
                            </div><br>
                            <div>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email*">
                            </div>
                            <div><br>
                                <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone*">
                            </div><br>
                            <div>
                                <textarea class="form-control" name="note"  id="note" placeholder="Case Description..." rows="4"></textarea>
                            </div><br>
                            <div class="submit-area">
                                <button type="submit" class="theme-btn">Sent</button>
                                <div id="loader">
                                    <i class="ti-reload"></i>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end container -->
</section>
<!-- end feedback-section -->
        
@include('user.includes.js')
