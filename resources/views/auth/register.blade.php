<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Register</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="icon" type="image/x-icon" href="{{asset('storage/assets/img/cininetfavicon.png')}}">
  <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/apple-toucininetlogo.png') }}">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendor/simple-datatables/style.css') }}">

  <!-- Template Main CSS File -->
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

</head>

<body>

<main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <!-- <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="storage/assets/img/cininetlogo.png" alt="">
                  <span class="d-none d-lg-block">Cininet</span>
                </a>
              </div>End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                    <div class="d-flex justify-content-center py-4">
                            <a href="index.html" class="logo d-flex align-items-center w-auto">
                            <img src="storage/assets/img/cininetlogo.png" alt="">
                            <span class="d-none d-lg-block"><b>Cininet</b></span>
                            </a>
                    </div>

                  <form class="row g-3 needs-validation" method="POST" action="{{ route('register') }}">
                  @csrf
                    <div class="col-12">
                      <label for="yourName" class="form-label">Name</label>
                      <input id="name" class="form-control block mt-1 w-full" type="text" name="name" required autofocus>
                      <div class="invalid-feedback">Please, enter your name!</div>
                    </div>

                    <div class="col-12">
                      <label for="yourEmail" class="form-label">Email</label>
                      <input id="email" class="form-control block mt-1 w-full" type="email" name="email" required >
                      <div class="invalid-feedback">Please enter a valid Email adddress!</div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input id="password" class="form-control block mt-1 w-full" type="password" name="password" required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Confirm Password</label>
                      <input id="password_confirmation" class="form-control block mt-1 w-full" type="password" name="password_confirmation" required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>

                    <div class="col-12">
                      <button class="btn btn-primary w-100 mt-3" type="submit">Create Account</button>
                    </div>
                    <div class="col-12 text-center">
                      <p class="small mb-0">Already have an account? <a href="{{ route('login') }}">Log in</a></p>
                    </div>
                  </form>

                </div>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <script type="text/javascript" src="{{asset('assets/vendor/simple-datatables/simple-datatables.js')}}"></script>

  <!-- Template Main JS File -->
  <script type="text/javascript" src="{{asset('assets/js/main.js')}}"></script>

</body>

</html>