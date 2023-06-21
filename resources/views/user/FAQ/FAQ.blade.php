@include('user.includes.head')
@include('user.includes.navbar')
 
 
 <!-- start page-title -->
 <section class="page-title">
    <div class="container">
        <div class="row">
            <div class="col col-xs-12">
                <h2>FAQ</h2>
            </div>
        </div> <!-- end row -->
    </div> <!-- end container -->
</section>        
<!-- end page-title -->


<!-- start faq-pg-section -->
<section class="faq-pg-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                <div class="section-title-s5">
                    <span>FAQ</span>
                    <h2>Frequently asked question</h2>
                </div>
            </div>
        </div> 
                       
        <div class="row">
            
            <div class="col col-xs-12">
                @foreach($data as $datas)
                <div class="panel-group faq-accordion theme-accordion-s1" id="accordion">

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse-{{ $loop->iteration }}">{{$datas->question}} ?</a>
                        </div>
                        <div id="collapse-{{ $loop->iteration }}" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>{{$datas->answer}}</p>
                            </div>
                        </div>
                    </div>
                    
                </div>
                @endforeach

                
            </div>
            
        </div>    
    </div> <!-- end container -->
</section> 
<!-- end faq-pg-section -->       

@include('user.includes.js')