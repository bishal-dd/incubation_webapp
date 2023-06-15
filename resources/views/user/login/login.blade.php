@include('user.includes.head')
@include('user.includes.navbar')

<!-- start page-title -->
<section class="page-title">
    <div class="container">
      <div class="row">
        <div class="col col-xs-12">
          <h2>Login</h2>
        </div>
      </div>
      <!-- end row -->
    </div>
    <!-- end container -->
  </section>
  <!-- end page-title -->

  <div class="container">
  <div class="row justify-content-center">
    <div class="col-md-6"> 
        <h2 class="text-center mb-4">Login</h2>
    <form>
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control" id="username" placeholder="Enter your username" required>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" placeholder="Enter your password" required>
      </div>
      <button type="submit" class="btn btn-primary btn-block">Login</button>
    </form></div></div>
   
  </div>

@include('user.includes.js')