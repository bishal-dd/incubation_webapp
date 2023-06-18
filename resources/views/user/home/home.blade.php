
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

<!-- start about-us-section -->
<section class="about-us-section section-padding">
    <div class="container">
      <div class="row">
        <div class="col col-md-12">
          <div class="section-title">
            <h2>JNEC- Entrepreneurship and Innovation Centre</h2>
          </div>
          <div class="details">
            <p>
                The JNEC Entrepreneurship and Innovation Centre is set up to provide business support & technology transfer initiative for various sectors in the multidisciplinary areas of science, technology, and humanities in the region. The establishment of the centre is supported by the Department of Employment and Entrepreneurship under the Ministry of Labor and Human Resources through Start-up/CSI Flagship program in 2020.

                The main aim is to produce successful firms that will leave the programme financially viable and independent, through Science and Technology interventions. In particular, the purpose of the JNEC-Entrepreneurship and Innovation Centre is to incubate and materialize the conceptual ideas among the students, faculty members of Jigme Namgyel Engineering College, and other relevant institutions/firms and transform these ideas into value-added products in the commercial market.
                
                JNEC-Entrepreneurship and Innovation will nurture budding ventures by providing workspace and shared facilities along with focused counseling. In the centre, the entrepreneurs can receive value-added support and access to critical tools, information, education, networking, resources, and prototype fund in the form of research and development that may otherwise have been unaffordable.
            </p>
            
            
          </div>
        </div>
        
      </div>
    </div>
    <!-- end container -->
  </section>
  <!-- end about-us-section -->
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
                                    <p class="date">{{Str::limit($events->description, 150)}}</p> <!-- Limiting to 100 characters -->
                                    <a href="/event_details/{{$events->id}}" class="read-more">Read More <i class="fi flaticon-next"></i></a>
                                </div>
                            </div>
                            @endforeach
                            
                        </div>
                    </div>
                </div>               
            </div> <!-- end container -->
        </section>
        <!-- end blog-section -->

        
 
       

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
                        <form action="/give_feedback" method="POST" enctype="multipart/form-data" class="contact-validation-active">
                            @csrf
                            <div>
                                <input type="text"  class="form-control" name="name" id="name" placeholder="Name*" required>
                            </div><br>
                            <div>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email*" required>
                            </div>
                            <div><br>
                                <input type="number" class="form-control" name="phone" id="phone" placeholder="Phone*" required>
                            </div><br>
                            <div>
                                <textarea class="form-control" name="note"  id="note" placeholder="Message..." rows="4" required></textarea>
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
