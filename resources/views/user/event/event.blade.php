@include('user.includes.head')
@include('user.includes.navbar')

         <!-- start page-title -->
        <section class="page-title">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <h2>JNEC INCUBATION EVENTS</h2>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>        
        <!-- end page-title -->


        
          <!-- start blog-section -->
          <section class="blog-section section-padding">
            <div class="container">
                
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
@include('user.includes.js')
