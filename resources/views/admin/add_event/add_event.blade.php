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
              <form action="/dashboard/add_event" method="POST" enctype="multipart/form-data" class="row g-3">
                @csrf
                <div class="col-12">
                  <label for="inputNanme4" class="form-label">Name</label>
                  <input type="text" class="form-control" name="name" id="inputText">
                </div>
                <div class="col-12">
                  <label for="inputEmail4" class="form-label">Image</label>
                  <input class="form-control" name="event_image" type="file" id="formFile">
                </div>
                <div class="col-12">
                  <label for="inputPassword4" class="form-label">Date</label>
                  <input type="date" name="date" class="form-control"  id="inputText">
                </div>
                <div class="col-12">
                  <label for="inputPassword4" class="form-label">Description</label>
                  <textarea class="form-control" name="description" style="height: 100px"></textarea>
                </div>
                <input type="hidden" name="current_user" class="form-control" id="current_user" value="{{ Auth::user()->id }}">
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </form><!-- Vertical Form -->
                      
                    </div>
                   
                  </div>
                </div>
              </div><!-- End Modal -->
               <!-- Horizontal Form -->
               <div id="myModal1" class="modal fade" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Form Modal</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                       <!-- Vertical Form -->
              <form action="/dashboard/edit_event" method="POST" enctype="multipart/form-data" class="row g-3">
                @csrf
                <div class="col-12">
                  <label for="inputNanme4" class="form-label">Name</label>
                  <input type="text" class="form-control" name="name"  id="edit_name">
                </div>
                <div class="col-12">
                  <label for="inputEmail4" class="form-label">Image</label>
                  <input class="form-control" name="event_image" type="file" accept="image/*"  id="edit_image">
                </div>
                <div class="col-12">
                  <label for="inputPassword4" class="form-label">Date</label>
                  <input type="date" name="date" class="form-control"  id="edit_date">
                </div>
                <div class="col-12">
                  <label for="inputPassword4" class="form-label">Description</label>
                  <textarea class="form-control" name="description" style="height: 100px" id="edit_description"></textarea>
                </div>
                <input type="hidden" name="current_user" class="form-control" id="current_user" value="{{ Auth::user()->id }}">
                <input type="hidden" name="edit_id" class="form-control" id="edit_id" >

                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Edit</button>
                    </div>
                  </form><!-- Vertical Form -->
                      
                    </div>
                   
                  </div>
                </div>
              </div><!-- End Modal -->
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">Add Event</button>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
         <!-- Recent Sales -->
         <div class="col-12">
            <div class="card recent-sales overflow-auto">

             

              <div class="card-body">
                <h5 class="card-title">Add Event</h5>

                <table class="table table-borderless datatable">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Name</th>
                      <th scope="col">Image</th>
                      <th scope="col">Date</th>
                      <th scope="col">Description</th>
                      <th scope="col">Action</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($data as $datas)
                    <tr>
                      <th scope="row"><a href="#">#{{ $loop->iteration }}</a></th>
                      <td>{{$datas->name}}</td>
                      <td><img src="/event_images/{{$datas->image}}" width="90"></td>
                      <td>{{$datas->date}}</td>
                      <td>{{$datas->description}}</td>
                      <td>
                        <button type="button" onClick="showedit({{ $datas }})" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#myModal1" style="width: 100px">Edit</button>
                        <form action="/dashboard/delete_event/{{$datas->id}}" method="POST">
                          @csrf
                        <button type="submit" class="btn btn-danger mt-3" style="width: 100px">Delete</button>
                        </form>
                      </td>                    
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
<script>

function showedit(data){
  $('#edit_id').val(data.id);
  $('#edit_name').val(data.name);
  $('#edit_description').val(data.description);
  $('#edit_date').val(data.date);
  $('#edit_photo').val('/advisor_images/' + data.photo);
  
}
</script>
@include('admin.common.js')
