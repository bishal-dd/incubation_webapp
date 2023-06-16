@include('admin.common.header')
@include('admin.common.navbar')
<main id="main" class="main">
    <div class="pagetitle">
      <h1>Form Layouts</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Forms</li>
          <li class="breadcrumb-item active">Layouts</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <!-- Horizontal Form -->
              <div id="myModal" class="modal fade" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Form Modal</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                       <!-- Vertical Form -->
              <form action="/add_admin" method="POST" class="row g-3">
                @csrf
                <div class="col-12">
                  <label for="inputNanme4" class="form-label">Name</label>
                  <input type="text" name="name" class="form-control" id="inputText">
                </div>
                <div class="col-12">
                  <label for="inputPassword4" class="form-label">Email</label>
                  <input type="email" name="email" class="form-control" id="inputText">
                </div>
                <div class="col-12">
                  <label for="inputPassword4" class="form-label">Contact No.</label>
                  <input type="number" name="contact_no" class="form-control" id="inputText">
                </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </form><!-- Vertical Form -->
                      
                    </div>
                   
                  </div>
                </div>
              </div><!-- End Modal -->
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">Add Admin</button>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
         <!-- Recent Sales -->
         <div class="col-12">
            <div class="card recent-sales overflow-auto">

             

              <div class="card-body">
                <h5 class="card-title">Admins</h5>

                <table class="table table-borderless datatable">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Customer</th>
                      <th scope="col">Product</th>
                      <th scope="col">Price</th>
                      <th scope="col">Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($users as $user)
                    <tr>
                      <th scope="row"><a href="#">#{{ $loop->iteration }}</a></th>
                      <td>{{ $user->name }}</td>
                      <td><a href="#" class="text-primary">{{ $user->email }}</a></td>
                      <td>{{ $user->phone_no }}</td>
                      <td><span class="badge bg-success">Approved</span></td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>

              </div>

            </div>
          </div><!-- End Recent Sales -->
      </div>
    </section>
</main><!-- End #main -->
@include('admin.common.js')
