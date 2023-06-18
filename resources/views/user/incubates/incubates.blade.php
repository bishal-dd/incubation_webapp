@include('user.includes.head')
@include('user.includes.navbar')

         <!-- start page-title -->
         <section class="page-title">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <h2>Incubates</h2>
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
                            <p>The JNEC Entrepreneurship and Innovation Centre Advisory Board advises on
                                programming the ideas, opportunities, and resources critical to building and
                                growing the JNEC-EIC startup incubator programs to support students, staffs and
                                adjoining community.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="team-grids">
                            @foreach($advisor as $advisors)
                            <div class="grid">
                                <div class="img-social">
                                    <div class="img-holder">
                                        <img src="incubates_images/{{$advisors->photo}}" alt>
                                    </div>
                                </div>
                                <div class="details">
                                    <h3>{{$advisors->name}}</h3>
                                    <span>{{$advisors->description}}</span><br>
                                    <span>{{$advisors->affiliation}}</span>
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
