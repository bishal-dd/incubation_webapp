@include('user.includes.head')
@include('user.includes.navbar')

 <!-- start page-title -->
 <section class="page-title">
    <div class="container">
        <div class="row">
            <div class="col col-xs-12">
                <h2>About Us</h2>
            </div>
        </div> <!-- end row -->
    </div> <!-- end container -->
</section>        
<!-- end page-title -->

        <!-- start about-us-section -->
        <section class="about-us-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-md-12">
                        
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