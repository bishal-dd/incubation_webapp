
@include('user.includes.head')
@include('user.includes.navbar')

<style>
  #note::placeholder {
        color: #000000; /* Adjust the color as desired */
    }
    #phone::placeholder {
        color: #000000; /* Adjust the color as desired */
    }
    #email::placeholder {
        color: #000000; /* Adjust the color as desired */
    }
    #name::placeholder {
        color: #000000; /* Adjust the color as desired */
    }
  
    </style>

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
                                
                                <div class="clearfix"></div>
                               
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
                    <div class="col col-md-6">
                        <div class="section-title">
                            <h2>{{$home_content->title}}</h2>
                        </div>
                        <div class="details">
                            <p style="text-align: justify"> {{$home_content->content}}</p>
                        </div>
                    </div>
                    <div class="col col-md-6">
                        <div class="right-col">
                            <div class="img-holder">
                                <img src="assets/images/JNEC.jpeg" height="400" alt>
                            </div>
                            <div class="video-holder">
                                <a href="{{$home_content->link}}" class="hero-video-btn video-btn"  data-type="iframe" tabindex="0"><i class="fi flaticon-play-button"></i>Watch our intro video</a> 
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
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
                                <input type="text"  class="form-control" name="name" id="name" placeholder="Name*" style="height: 45px" required>
                            </div><br>

                            <div>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email*" style="height: 45px" required>
                            </div><br>
                            <div>
                                <input type="number" class="form-control" name="phone" id="phone" placeholder="Phone*" style="height: 45px" required>
                            </div><br>
                            <div>
                                <textarea class="form-control" name="note"  id="note" placeholder="Message..." rows="4" required></textarea>
                            </div><br>
                            <div class="submit-area">
                                <button type="submit" class="theme-btn">Send</button>
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
