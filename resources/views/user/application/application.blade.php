@include('user.includes.head')
@include('user.includes.navbar')


<!-- start contact-pg-section -->
<section class="contact-pg-section section-padding">
    <div class="container">
        <div class="row text-center" style="display: flex; justify-content: center; align-items: center;">
            <div class="col col-lg-5 col-md-6 col-sm-8 text-center">
                <div class="section-title">
                    <h2>Application</h2>
                </div>
            </div>
        </div>
        <div class="row" style="display: flex; justify-content: center; align-items: center;">
            <div class="col col-md-8">
                <form action="/submit_application" method="post" class="contact-validation-active">
                    @csrf
                    <div>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Name*" required>
                    </div>
                    <div>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Email*" required>
                    </div>
                    <div>
                        <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone*" required>
                    </div>
                    <div>
                        <input type="text" class="form-control" name="age" id="age" placeholder="Age*" required>

                    </div>
                    <div class="fullwidth">
                        <textarea class="form-control" name="idea" id="idea" placeholder="Idea Description..." required></textarea>
                    </div>
                    <div class="submit-area">
                        <button type="submit" class="theme-btn">Submit Now</button>
                        <div id="loader">
                            <i class="ti-reload"></i>
                        </div>
                    </div>
                    <div class="clearfix error-handling-messages">
                        <div id="success">Thank you</div>
                        <div id="error"> Error occurred while sending email. Please try again later. </div>
                    </div>
                </form>
            </div>  
        </div>
    </div> <!-- end container -->
</section>
<!-- end contact-pg-section -->

@include('user.includes.js')
