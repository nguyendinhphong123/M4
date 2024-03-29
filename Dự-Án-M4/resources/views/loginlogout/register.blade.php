

<style>
  /*
*
* ==========================================
* CUSTOM UTIL CLASSES
* ==========================================
*
*/
.login,
.image {
min-height: 100vh;
}

.bg-image {
background-image: url('https://res.cloudinary.com/mhmd/image/upload/v1555917661/art-colorful-contemporary-2047905_dxtao7.jpg');
background-size: cover;
background-position: center center;
}
</style>
<!--important link source from "https://bootstrapious.com/p/login-split-page"-->
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
<div class="container-fluid">
  <div class="row no-gutter">
      <!-- The image half -->
      <div class="col-md-6 d-none d-md-flex bg-image"></div>


      <!-- The content half -->
      <div class="col-md-6 bg-light">
          <div class="login d-flex align-items-center py-5">

              <!-- Demo content-->
              <div class="container">
                  <div class="row">
                      <div class="col-lg-10 col-xl-7 mx-auto">
                          <h5 class="display-4"> Đăng Ký</h5>
                          <p class="text-muted mb-4">Create a login split page using Bootstrap 4.</p>
                          <form action="{{route('shop.checkregister')}}" method="post">
                            @csrf
                              <div class="form-group mb-3">
                                  <input id="inputEmail" type="text" placeholder="Nhập tên"  name="name" class="form-control rounded-pill border-0 shadow-sm px-4">
                              </div>
                              <div class="form-group mb-3">
                                  <input id="inputPassword" type="text" placeholder="Nhập địa chỉ" name="address" required="" class="form-control rounded-pill border-0 shadow-sm px-4 text-primary">
                              </div>
                              <div class="form-group mb-3">
                                  <input id="inputPassword" type="text" placeholder="Nhập email" name="email" required="" class="form-control rounded-pill border-0 shadow-sm px-4 text-primary">
                              </div>
                              <div class="form-group mb-3">
                                  <input id="inputPassword" type="text" placeholder="Nhập SĐT" name="phone" required="" class="form-control rounded-pill border-0 shadow-sm px-4 text-primary">
                              </div>
                              <div class="form-group mb-3">
                                  <input id="inputPassword" type="password" placeholder="Nhập mật khẩu" name="password" required="" class="form-control rounded-pill border-0 shadow-sm px-4 text-primary">
                              </div>
                              <div class="form-group mb-3">
                                  <input id="inputPassword" type="password" placeholder="Nhập lại mật khẩu" name="password" required="" class="form-control rounded-pill border-0 shadow-sm px-4 text-primary">
                              </div>
                              <div class="custom-control custom-checkbox mb-3">
                                  <input id="customCheck1" type="checkbox" checked class="custom-control-input">
                                  <label for="customCheck1" class="custom-control-label">Remember password</label>
                              </div>
                              <button type="submit" class="btn btn-primary btn-block text-uppercase mb-2 rounded-pill shadow-sm">Sign in</button>
                              <div class="text-center d-flex justify-content-between mt-4"><p>Snippet by <a href="https://bootstrapious.com/snippets" class="font-italic text-muted"> 
                                      <u>Boostrapious</u></a></p></div>
                          </form>
                      </div>
                  </div>
              </div><!-- End -->

          </div>
      </div><!-- End -->

  </div>
</div>
</body>
</html>