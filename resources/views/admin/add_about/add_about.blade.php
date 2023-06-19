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
      <div class="row justify-content-center" >
        <div class="col-lg-6" >
          <div class="card">
            <div class="card-body" style="background-color: #f6f9ff">
               <!-- Horizontal Form -->
               <div id="myModal1" class="modal fade" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Edit Content</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
               <!-- Vertical Form -->
              <form action="/dashboard/edit_about" method="POST" enctype="multipart/form-data" class="row g-3">
                @csrf
                <div class="col-12">
                  <label for="inputNanme4" class="form-label">Vision</label>
                  <input type="text" name="vision" class="form-control" id="edit_name">
                </div>
                <div class="col-12">
                  <label for="inputNanme4" class="form-label">Mission</label>
                  <input type="text" name="mission" class="form-control" id="edit_mission">
                </div>
                <div class="col-12">
                  <label for="inputPassword4" class="form-label">Objectives</label>
                  <textarea class="form-control" name="objectives" id="edit_description" style="height: 100px"></textarea>
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
            </div>
          </div>
        </div>
      </div>
      <div class="row">
         <!-- Recent Sales -->
         <div class="col-12">
            <div class="card recent-sales overflow-auto">

             

              <div class="card-body">
                <h5 class="card-title">Add About Us</h5>

                <table class="table table-borderless datatable">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Vision</th>
                      <th scope="col">Mission</th>
                      <th scope="col">Objectives</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($data as $datas)
                    <tr>
                      <th scope="row"><a href="#">#{{ $loop->iteration }}</a></th>
                      <td>{{$datas->vision}}</td>
                      <td>{{$datas->mission}}</td>
                      <td>{{$datas->objectives}}</td>
                      <td>
                        <button type="button" onClick="showedit({{ $datas }})" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#myModal1" style="width: 100px">Edit</button>
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
  $('#edit_name').val(data.vision);
  $('#edit_mission').val(data.mission);
  $('#edit_description').val(data.objectives);    
}
</script>
@include('admin.common.js')
