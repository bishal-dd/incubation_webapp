@include('user.includes.head')
@include('user.includes.navbar')

        <!-- start page-title -->
        <section class="page-title">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <h2>Mentor</h2>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>        
        <!-- end page-title -->


        <!-- start team-section -->
        <section class="team-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2">
                        <div class="section-title-s5">
                            <span>Our Mentors</span>
                            <h2>Dedicated Mentors</h2>
                            <p>As a mentor, their role is to provide guidance, support, and share their wealth of knowledge and experiences with individuals seeking to develop their skills and achieve their goals. With their expertise in a specific field or industry, they are dedicated to helping them grow both personally and professionally.

                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="team-grids">
                            @foreach($data as $datas)
                            <div class="grid">
                                <div class="img-social">
                                    <div class="img-holder">
                                        <img src="/mentor_images/{{$datas->photo}}" alt>
                                    </div>
                                </div>
                                    <div class="details">
                                        <h3>{{$datas->name}}</h3>
                                        <span>{{$datas->designation}}</span>
                                        <p>{{$datas->affiliation}}</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
        </section>
        <!-- end team-section -->

        @include('user.includes.js')
