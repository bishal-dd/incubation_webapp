@include('user.includes.head')
@include('user.includes.navbar')

 
 <!-- start page-title -->
 <section class="page-title">
    <div class="container">
        <div class="row">
            <div class="col col-xs-12">
                <h2>{{ $event->name }}</h2>
            </div>
        </div> <!-- end row -->
    </div> <!-- end container -->
</section>        
<!-- end page-title -->


<!-- start blog-single-section -->
<section class="blog-single-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col col-md-8">
                <div class="blog-content">
                    <div class="post format-standard-image">
                        <div class="entry-media">
                            <img src="/event_images/{{$event->image}}" alt>
                        </div>
                        <ul class="entry-meta">
                            <li><a href="#"><i class="ti-time"></i> {{$event->date}}</a></li>
                        </ul>
                        <h2>{{ $event->name }}</h2>
                        <p>{{$event->description}}</p>
                        
                    </div>

                </div>
            </div>

            <div class="col col-md-4">
                <div class="blog-sidebar">
                    
                    <div class="widget recent-post-widget">
                        <h3>Other Events</h3>
                        <div class="posts">
                            @foreach($data as $datas)
                            <div class="post">
                                <div class="img-holder">
                                    <img src="/event_images/{{$datas->image}}" alt>
                                </div>
                                <div class="details">
                                    <h4><a href="/event_details/{{$datas->id}}">{{$datas->name}}</a></h4>
                                    <span class="date"><i class="ti-timer"></i>Oct 31 2019</span>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end container -->
</section>
<!-- end blog-single-section -->

@include('user.includes.js')