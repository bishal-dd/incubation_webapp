@include('user.includes.head')
@include('user.includes.navbar')


        <!-- start page-title -->
        <section class="page-title">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <h2>Blog</h2>
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
                                    <li><a href="#"><i class="ti-book"></i> Oil&gas, Chemical</a></li>
                                </ul>
                                <h3><a href="#">{{$datas->name}}</a></h3>
                                <p>A collection of textile samples lay spread out on the table samsa was a travelling salesman and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame. It showed a lady fitted out with a fur hat and fur boa who sat upright</p>
                                
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end blog-pg-section -->


@include('user.includes.js')
