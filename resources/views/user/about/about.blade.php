@include('user.includes.head')
@include('user.includes.navbar')



        <!-- start about-us-section -->
        <section class="about-us-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-md-12">
                        <div class="section-title">
                            <span><h2>About us</h2></span>
                        </div>
                        <h2>Vision</h2>
                        <p style="color:#13487c "><i class="fi flaticon-chip" style="color: #fa7876"></i> {{$data->vision}}</p>
  
                        <h2>Mission</h2>
                        <p style="color:#13487c "> <i class="fi flaticon-chip" style="color: #fa7876"></i> {{$data->mission}}</p>
                              
                        <h2>Objectives</h2>
                     <ul>
                        @if($data->objectives)
                                @php
                                    $photos = explode(",", $data->objectives);
                                @endphp
                                @foreach($photos as $photo)
                                <li><i class="fi flaticon-chip"></i> {{$photo}}</li>

                                @endforeach
                        @endif
                     </ul>
                 </div>
                 <!-- end container -->
        </section>
        <!-- end about-us-section -->
        @include('user.includes.js')