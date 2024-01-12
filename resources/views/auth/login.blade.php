@extends('master.master_inner')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-5 m-5">
        <form action="{{ route('login') }}" method="post">
            @csrf
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
           <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
           <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="row justify-content-center">
                <div class="d-grid gap-2 col-6 mx-auto">
                    <button id="submit" class="btn btn-primary" type="submit" >Login</button>   
                </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Remember me</label>
            </div>
            <p class="text-center fw-bold fs-5"><br>Login Dengan</p>
                  </div>
                  <div class="row justify-content-center">
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <button class="btn btn-info" type="button"><img src="https://logos-world.net/wp-content/uploads/2020/09/Google-Symbol.png" alt="" width="32">Google</button>    
                        <button class="btn btn-primary" type="button"><img src="https://logodownload.org/wp-content/uploads/2014/09/facebook-logo-1-2.png" alt="" width="25">Facebook</button> 
                      </div>
                    </div>
        </form>
    </div>
</div>
@endsection
