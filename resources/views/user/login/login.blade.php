@include('user.includes.head')
@include('user.includes.navbar')



<div style="display: flex; justify-content: center; align-items: center; height: 100vh;">
  <div style="width: 500px; padding: 50px; border: 1px solid #ccc; border-radius: 5px; height:400px">
    <h2 style="text-align: center; margin-bottom: 20px;">Login</h2>
    <form action="/userlogin" method="POST">
      @csrf
      <div class="form-group">
        <label for="Email">Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
        @error('email')
        <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
        @error('password')
        <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>
      <button type="submit" class="btn btn-primary btn-block">Login</button>
    </form>
  </div>
</div>

@include('user.includes.js')
