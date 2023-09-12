@extends('layouts.mobile')
@section('cotent_mobile')
    <section class="vh-100" style="background-color: #508bfc;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card shadow-2-strong" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">
  
              <h3 class="mb-5">Sign in</h3>
            <div class="logo">
                <img 
                style="height: auto; 
                width: auto; 
                max-width: 200px; 
                max-height: 200px;" src="{{asset('/images/g13.png')}}" alt="">
            </div>
            <br>
            <form action="{{route('loginmobile')}}" method="POST">
                <div class="form-outline mb-4">
                  <input type="email" id="email" name="email" class="form-control form-control-lg" />
                  <label class="form-label" for="email">Email</label>
                </div>
    
                <div class="form-outline mb-4">
                  <input type="password" id="password" name="password"class="form-control form-control-lg" />
                  <label class="form-label" for="password">Password</label>
                </div>
    
                <!-- Checkbox -->
                <div class="form-check d-flex justify-content-start mb-4">
                  <input class="form-check-input" name="remember" type="checkbox" value="" id="remember" />
                  <label class="form-check-label" for="remember"> Remember password </label>
                </div>
    
                <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
            </form>
  
              <hr class="my-4">
  
            </div>
          </div>
        </div>
      </div>
    </div>
    </section>
  @push('javascript')
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  @endpush
@endsection
