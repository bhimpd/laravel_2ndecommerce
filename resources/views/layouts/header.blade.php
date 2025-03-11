<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home Page</title>

    {{-- bootstrap link --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    {{-- font awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    {{-- stylecss --}}
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

  </head>
  <body>

    {{-- headerpart --}}
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm nav-header">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">Ecommerce</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
    
            <div class="collapse navbar-collapse" id="navbarNav">
                <!-- Search Bar Centered -->
                <form class="d-flex mx-auto w-50">
                    <div class="input-group">
                        <input class="form-control" type="search" placeholder="Search Products" aria-label="Search">
                        <button class="btn btn-outline-primary btn-sm" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </div>
                </form>
    
                <!-- Right-side items -->
                <div class="d-flex align-items-center gap-3 ms-auto">
                    <a href="#" class="text-decoration-none fw-semibold">Become a Seller</a>
                    <a href="#" class="btn btn-outline-success btn-sm"><i class="fa-solid fa-cart-shopping  me-2"></i>Cart</a>
                    <a href="#" class="btn btn-outline-primary btn-sm"><i class="fa-solid fa-user  me-2"></i>Login</a>
                </div>
            </div>
        </div>
    </nav>
    {{-- ***********header ended here************* --}}

    {{-- categories list   --}}
    <nav class="navbar navbar-expand-lg categories">
        <div class="container-fluid">
          <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="nav">
              <li class="nav-item">
                <a class="nav-link active" href="#">Mobile</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="#">Fashion</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="#">Electronics</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="#">Furniture</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="#">Grocery</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="#">Appliances</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>
    {{-- ***********categories ended here************* --}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
