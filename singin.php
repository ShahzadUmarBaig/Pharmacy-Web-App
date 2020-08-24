<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
      integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
      crossorigin="anonymous"
    />
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
      integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
      crossorigin="anonymous"
    ></script>
    <title>MedKube | Sign Up</title>
    <link
      rel="canonical"
      href="https://getbootstrap.com/docs/4.5/examples/sign-in/"
    />

    <!-- Bootstrap core CSS -->
    <link href="../assets/dist/css/bootstrap.css" rel="stylesheet" />

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet" />
  </head>
  <body class="">
    <header>
      <nav
        class="navbar navbar-dark navbar-expand-md fixed-top bg-dark justify-content-between"
      >
        <div class="container-fluid">
          <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target=".dual-nav"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div
            class="navbar-collapse collapse dual-nav w-50 order-1 order-md-0"
          >
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link pl-0" href="/"
                  >Home <span class="sr-only">Home</span></a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" href="product.html">Catalog</a>
              </li>
            </ul>
          </div>
          <a
            href="/"
            class="navbar-brand mx-auto d-block text-center order-0 order-md-1 w-25"
            >MedKube</a
          >
          <div class="navbar-collapse collapse dual-nav w-50 order-2">
            <ul class="nav navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="singin.html" title="Sign In"
                  ><svg
                    width="1em"
                    height="1em"
                    viewBox="0 0 16 16"
                    class="bi bi-person-circle"
                    fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 0 0 8 15a6.987 6.987 0 0 0 5.468-2.63z"
                    />
                    <path
                      fill-rule="evenodd"
                      d="M8 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"
                    />
                    <path
                      fill-rule="evenodd"
                      d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z"
                    />
                  </svg>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="cart.html" title="Cart">
                  <svg
                    width="1em"
                    height="1em"
                    viewBox="0 0 16 16"
                    class="bi bi-cart"
                    fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"
                    />
                  </svg>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <div class="container-fluid">
      <div class="row">
        
      <!-- Sign In Method -->
        
      
        <div class="col text-center">
          <form class="form-signin">
            <img
              class="mb-4 bg-dark p-3 rounded"
              src="images/medlogo.png"
              alt=""
              width="90"
              height="90"
            />
            <h1 class="h3 mb-3 font-weight-normal">Sign In</h1>
            <label for="inputEmail" class="sr-only">Email address</label>
            <input
              type="email"
              id="inputEmail"
              class="form-control"
              placeholder="Email address"
              required
              autofocus
            />
            <label for="inputPassword" class="sr-only">Password</label>
            <input
              type="password"
              id="inputPassword"
              class="form-control"
              placeholder="Password"
              required
            />
            <div class="checkbox mb-3">
              <label class="">
                <input type="checkbox" value="remember-me" /> Remember me
              </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">
              Sign in
            </button>
          </form>
        </div>
        
<!-- Sign In Method -->
        
<div>
<?php
if(isset($_POST['create'])){
echo 'User Submitted';

}

?>


</div>
        <!-- Sign Up Method -->
        
        <div class="col text-center">
          <form class="form-signup" method="post" action="signin.php" >
            <img
              class="mb-4 bg-dark p-3 rounded"
              src="images/medlogo.png"
              alt=""
              width="90"
              height="90"
            />
            <h1 class="h3 mb-3 font-weight-normal">Sign Up</h1>
            <label for="inputEmail" class="sr-only">Email address</label>
            <input
              type="email"
              id="inputEmail"
              class="form-control"
              placeholder="Email address"
              required
              autofocus
            />
            <label for="inputPassword" class="sr-only">Password</label>
            <input
              type="password"
              id="inputPassword"
              class="form-control password"
              placeholder="Password"
              required
            />
            <label for="inputNo" class="sr-only">Contact</label>
            <input
              type="text"
              id="inputNo"
              class="form-control"
              placeholder="Contact"
              required
            />
            <button class="btn btn-lg btn-primary btn-block" name="create" type="submit">
              Sign Up
            </button>
          </form>
        </div>

        <!-- Sign Up Method -->
        
      </div>
      <footer>
        <p class="mt-5 mb-3 fixed-bottom text-center text-muted">
          &copy; By Shahzad Umar Baig
        </p>
      </footer>
    </div>
  </body>
</html>
