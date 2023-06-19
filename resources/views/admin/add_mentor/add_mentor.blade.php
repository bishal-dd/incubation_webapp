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
      <div class="row">
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
              <form action="/dashboard/add_mentor" method="POST" enctype="multipart/form-data" class="row g-3">
                @csrf
                <div class="col-12">
                  <label for="inputNanme4" class="form-label">Name</label>
                  <input type="text" name="name" class="form-control" id="inputText">
                </div>
                <div class="col-12">
                  <label for="inputEmail4" class="form-label">Photo</label>
                  <input class="form-control" name="photo" type="file" accept="image/*" id="formFile">
                </div>
                <div class="col-12">
                  <label for="inputPassword4" class="form-label">Designation</label>
                  <input type="text" name="designation" class="form-control" id="inputText">
                </div>
                <div class="col-12">
                  <label for="inputPassword4" class="form-label">Affiliation</label>
                  <input type="text" name="affiliation" class="form-control" id="inputText">
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
              <!-- Horizontal Form -->
              <div id="myModal1" class="modal fade" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Edit Advisor</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
               <!-- Vertical Form -->
              <form action="/dashboard/edit_mentor" method="POST" enctype="multipart/form-data" class="row g-3">
                @csrf
                <div class="col-12">
                  <label for="inputNanme4" class="form-label">Name</label>
                  <input type="text" name="name" class="form-control" id="edit_name">
                </div>
                <div class="col-12">
                  <label for="inputEmail4" class="form-label">Photo</label>
                  <input class="form-control" name="photo" type="file" accept="image/*" id="edit_photo">
                </div>
                <div class="col-12">
                  <label for="inputPassword4" class="form-label">Designation</label>
                  <input type="text" name="designation" class="form-control" id="edit_designation">
                </div>
                <div class="col-12">
                  <label for="inputPassword4" class="form-label">Affiliation</label>
                  <input type="text" name="affiliation" class="form-control" id="edit_affliliation">
                </div>
                <input type="hidden" name="current_user" class="form-control" id="current_user" value="{{ Auth::user()->id }}">
                <input type="hidden" name="edit_id" class="form-control" id="edit_id" >
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Edit</button>
                    </div>
                  </form><!-- Vertical Form -->
                  </div>
                </div>
              </div><!-- End Modal -->
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">Add Mentors</button>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
         <!-- Recent Sales -->
         <div class="col-12">
            <div class="card recent-sales overflow-auto">

             

              <div class="card-body">
                <h5 class="card-title">Name</h5>

                <table class="table table-borderless datatable">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Name</th>
                      <th scope="col">Photo</th>
                      <th scope="col">Designation</th>
                      <th scope="col">Affiliation</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($data as $datas )
                    <tr>
                      <th scope="row"><a href="#">#{{ $loop->iteration }}</a></th>
                      <td>{{$datas->name}}</td>
                      <td><img src="/mentor_images/{{$datas->photo}}" width="90"></td>
                      <td>{{$datas->designation}}</td>
                      <td>{{$datas->affiliation}}</td>
                      <td>
                        <button type="button" onClick="showedit({{ $datas }})" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#myModal1" style="width: 100px">Edit</button>
                        <form action="/dashboard/delete_mentor/{{$datas->id}}" method="POST">
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
  $('#edit_designation').val(data.designation);
  $('#edit_affliliation').val(data.affiliation);
  
}

</script>
@include('admin.common.js')
