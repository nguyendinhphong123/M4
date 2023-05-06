<style>
    .divider:after,
.divider:before {
content: "";
flex: 1;
height: 1px;
background: #eee;
}

</style>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <!--important link source from "https://bootstrapious.com/p/login-split-page"-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<section class="vh-100">
    <div class="container py-5 h-100">
      <div class="row d-flex align-items-center justify-content-center h-100">
        <div class="col-md-8 col-lg-7 col-xl-6">
          <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg"
            class="img-fluid" alt="Phone image">
        </div>
        <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
          <form action="{{route('shop.checklogin')}}" method="post">
            @csrf
            <!-- Email input -->
            <div class="form-outline mb-4">
              <input type="text" name="email" id="form1Example13" class="form-control form-control-lg" />
              <label class="form-label" for="form1Example13">Email </label>
            </div>
            @error('email')
            <div class="text text-danger">{{ $message }}</div>
        @enderror
  
            <!-- Password input -->
            <div class="form-outline mb-4">
              <input type="password" name="password" id="form1Example23" class="form-control form-control-lg" />
              <label class="form-label" for="form1Example23">Password</label>
            </div>
  
            <div class="d-flex justify-content-around align-items-center mb-4">
              <!-- Checkbox -->
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
                <label class="form-check-label" for="form1Example3"> Remember me </label>
              </div>
              <a href="#!">Forgot password?</a>
            </div>
  
            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>
  
            
          </form>
        </div>
      </div>
    </div>
  </section>
  </body>
</html>