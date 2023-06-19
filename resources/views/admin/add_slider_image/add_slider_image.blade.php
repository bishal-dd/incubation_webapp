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
              <form action="/dashboard/add_slider" method="POST" enctype="multipart/form-data" class="row g-3">
                @csrf
                <div class="col-12">
                  <label for="inputNanme4" class="form-label">Name</label>
                  <input type="text" name="name" class="form-control" id="inputText">
                </div>
                <div class="col-12">
                  <label for="inputEmail4" class="form-label">Slider Image</label>
                  <input class="form-control" name="slider_image" accept="image/*" type="file" id="formFile">
                </div>
                <div class="col-12">
                  <label for="inputPassword4" class="form-label">Text for Image</label>
                  <textarea class="form-control" name="slider_text" style="height: 100px"></textarea>
                </div>
                <input type="hidden" name="current_user" class="form-control" id="current_user" value="{{ Auth::user()->id }}">
 
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                  </form><!-- Vertical Form -->
                  </div>
                </div>
              </div><!-- End Modal -->
              <button type="button" class="btn btn-primary text-center" data-bs-toggle="modal" data-bs-target="#myModal">Add Slider Image</button>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
         <!-- Recent Sales -->
         <div class="col-12">
            <div class="card recent-sales overflow-auto">

             

              <div class="card-body">
                <h5 class="card-title">Slider Images</h5>

                <table class="table table-borderless datatable">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Name</th>
                      <th scope="col">Slider Text</th>
                      <th scope="col">Image</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($data as $datas)
                    <tr>
                      <th scope="row"><a href="#">#{{ $loop->iteration }}</a></th>
                      <td>{{$datas->name}}</td>
                      <td>{{$datas->text}}</td>
                      <td><img src="/slider_images/{{$datas->image}}" width="90"></td>
                      <td>
                        <form action="/dashboard/delete_slider/{{$datas->id}}" method="POST">
                          @csrf
                        <button type="submit" class="btn btn-danger mt-3" style="width: 100px">Delete</button>
                        </form>
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
