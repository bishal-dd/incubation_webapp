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
         <!-- Modal Dialog Scrollable -->
        
          <div class="modal fade" id="modalDialogScrollable" tabindex="-1">
            <div class="modal-dialog modal-dialog-scrollable">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Idea</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" >
                    <p id="idea">

                    </p>
                  
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </div>
          </div><!-- End Modal Dialog Scrollable-->
         <!-- Recent Sales -->
         <div class="col-12">
            <div class="card recent-sales overflow-auto">

             

              <div class="card-body">
                <h5 class="card-title">Applications</h5>

                <table class="table table-borderless datatable">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Name</th>
                      <th scope="col">age</th>
                      <th scope="col">Email</th>
                      <th scope="col">Phone No</th>
                      <th scope="col">Idea</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($data as $datas)
                    <tr>
                      <th scope="row"><a href="#">#{{ $loop->iteration }}</a></th>
                      <td>{{$datas->name}}</td>
                      <td>{{$datas->age}}</td>
                      <td><a href="mailto:{{$datas->email}}">{{$datas->email}}</a></td>
                      <td>{{$datas->phone_no}}</td>
                      <td> <button type="button" onclick="showmodal({{$datas}})" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDialogScrollable">
                        View Idea
                      </button></td>                 
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

function showmodal(data){
    $('#idea').html(data.idea);
}
</script>

@include('admin.common.js')
