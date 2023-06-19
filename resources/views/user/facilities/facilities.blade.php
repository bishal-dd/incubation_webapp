@include('user.includes.head')
@include('user.includes.navbar')


        <!-- start page-title -->
        <section class="page-title">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <h2>Facilities</h2>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>        
        <!-- end page-title -->


        <!-- start blog-pg-section -->
        <section class="blog-pg-section blog-pg-left-sidebar section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-md-10 col-md-offset-1">
                        <div class="blog-content">
                            @foreach($data as $datas)
                            <div class="post format-gallery">
                                @if($datas->photo)
                                @php
                                    $photos = explode(",", $datas->photo);
                                @endphp
                                @if(count($photos) > 1)
                                    <div class="entry-media post-slider">
                                        @foreach($photos as $photo)
                                            <img src="/facilities_images/{{$photo}}" alt>
                                        @endforeach
                                    </div>
                                @else
                                <div class="entry-media">
                                    <img src="/facilities_images/{{$photos[0]}}" alt>
                                </div>
                                @endif
                            @endif
                                <ul class="entry-meta">
                                    <li><a href="#"></a></li>
                                </ul>
                                <h3><a href="#">{{$datas->name}}</a></h3>
                                <p>{{$datas->details}}</p>
                                
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end blog-pg-section -->


@include('user.includes.js')
