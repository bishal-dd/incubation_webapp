@include('user.includes.head')
@include('user.includes.navbar')

         <!-- start page-title -->
        <section class="page-title">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <h2>Stakeholder</h2>
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
                            <span>Our Stakeholders</span>
                            <h2>Dedicated Stakeholders</h2>
                            <p>As a stakeholder, they are an individual, group, or organization with a vested interest in a specific project, organization, or initiative. Their involvement and contributions directly or indirectly impact the outcomes and decisions related to the endeavor.</p>
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
                                        <img src="stakeholder_images/{{$datas->photo}}" alt>
                                    </div>
                                </div>
                                <div class="details">
                                    <h3>{{$datas->name}}</h3>
                                    <span>{{$datas->designation}}</span><br>
                                    <p>{{$datas->affiliation}}</p>
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
