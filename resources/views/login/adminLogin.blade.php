<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard Admin</title>
    <link rel="stylesheet" href="{{ URL::asset('loginStyle.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
</head>

<body>
<section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card bg-dark text-white" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">
  
              <div class="mb-md-5 mt-md-4 pb-5">
  
                <img src="{{ URL::asset('img/computer_svgrepo.com.svg') }}" alt="logoWD" width="150" >
                <h2 class="fw-bold mb-2 text-uppercase">OPERATOR</h2>
                <p class="text-white-50 mb-5">Silahkan Masukan Username dan password anda</p>
  
                <div class="form-outline form-white mb-4">
                  <label class="form-label" for="typeEmailX">Username</label>
                  <input type="email" id="typeEmailX" class="form-control form-control-lg" />
                </div>
  
                <div class="form-outline form-white mb-4">
                  <label class="form-label" for="typePasswordX">Password</label>
                  <input type="password" id="typePasswordX" class="form-control form-control-lg" />
                </div>
  
                <p class="small mb-5 pb-lg-2">Login sebagai Pelanggan? <a class="text-white-50" href="/index">masuk disini</a></p>
  
                <button class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>
  
                <div class="d-flex justify-content-center text-center mt-2 pt-1">
                </div>
  
              </div>
  
              <div>
                <p class="mb-4">
                </p>
              </div>
                
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
</script>
</body>

</html>
