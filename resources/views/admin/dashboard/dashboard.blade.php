
@include('admin.common.header')
@include('admin.common.navbar')
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
       
          <div class="row">

            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

                <div class="card-body">
                  <h5 class="card-title">Total Views</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people" style="color: orange"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{$number+1}}</h6>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->
            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

                <div class="card-body">
                  <h5 class="card-title">Unique Visitors</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi  bi-person-check-fill" style="color: orange"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{$uniqueVisitors}}</h6>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

                <div class="card-body">
                  <h5 class="card-title">Monthly Visitors</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people-fill " style="color: orange"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{$monthlyVisitors}}</h6>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

             <!-- Sales Card -->
             <div class="col-xxl-4 col-md-5">
              <div class="card info-card sales-card">

                <div class="card-body">
                  <h5 class="card-title">Yearly Visitors</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bx bxs-user" style="color: orange"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{$yearlyVisitors}}</h6>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

          



           

           

        </div><!-- End Right side columns -->

      </div>
    </section>

  </main><!-- End #main -->

  

@include('admin.common.js')

</body>

</html>