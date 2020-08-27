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

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.1.0/css/all.css"
      integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt"
      crossorigin="anonymous"
    />

    <!-- Bootstrap core CSS -->
    <link href="../assets/dist/css/bootstrap.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="product.css" />
  </head>
  <body>
    <!-- Nav Bar -->
    <header>
      <nav
        class="navbar navbar-dark navbar-expand-md fixed-top bg-dark justify-content-between"
      >
        <div class="container-fluid">
          <button
            class="navbar-toggler"
            type="button"
            data-toggle="coll2pse"
            data-target=".dual-nav"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div
            class="navbar-coll2pse coll2pse dual-nav w-50 order-1 order-md-0"
          >
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link pl -0" href="index.php"
                  >Home <span class="sr-only">Home</span></a
                >
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="product.php">Catalog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact">Contact</a>
              </li>
            </ul>
          </div>
          <a
            href="index.php"
            class="navbar-brand mx-auto d-block text-center order-0 order-md-1 w-25"
            >MedKube</a
          >
          <div class="navbar-collapse collapse dual-nav w-50 order-2">
            <ul class="nav navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="signin.php" title="Sign In"
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
                <a class="nav-link" href="cart.php" title="Cart">
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
    <!-- Nav Bar -->

    <div
      class="position-relative overflow-hidden p-3 p-md-5 text-center bg-secondary"
    >
      <div class="col-md-5 p-lg-5 mx-auto my-3">
        <h2 class="display-5 font-weight-normal text-light">Punny headline</h2>
        <p class="lead font-weight-normal text-light">
          And an even wittier subheading to boot. Jumpstart your marketing
          efforts with this example based on Apple’s marketing pages.
        </p>
        <a class="btn btn-outline-light" href="#">Coming soon</a>
      </div>
    </div>

    <!-- Search Bar -->
    <div class="container-fluid custom-container w-100">
      <div class="d-flex justify-content-center row my-5">
        <div class="col pl-5">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Search" />
          </div>
        </div>
        <div class="col-1 pl-0">
          <button type="submit" class="btn btn-primary">
            <svg
              width="1em"
              height="1em"
              viewBox="0 0 16 16"
              class="bi bi-search"
              fill="currentColor"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                fill-rule="evenodd"
                d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"
              />
              <path
                fill-rule="evenodd"
                d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"
              />
            </svg>
          </button>
        </div>
      </div>
    </div>

    <!-- Search Bar -->

    <div class="container-fluid justify-content-center" id="about">
      <div class="d-flex row justify-content-center">
        <!-- <div class="card mx-3 my-3" style="width: 18rem">
          <img
            class="card-img-top"
            src="images/jeans3.jpg"
            height="200"
            alt="Card image cap"
          />
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">
              Some quick example text to build on the card title and make up the
              bulk of the card's content.
            </p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div> -->

        <?php
          $servername = "localhost";
          $username = "root";
          $serverpass = "";
          $dbname = "MedKube";

          // Create connection
          $conn = new mysqli($servername, $username, $serverpass, $dbname);
          // Check connection  
          $sql = "SELECT * FROM products";
          $result = $conn->query($sql); if ($result->num_rows > 0) { 
            // output data of each row
             while($row = $result->fetch_assoc())
              {
                
                $ID = $row["ID"];
                $Title = $row["Title"];
                $Description = $row["Description"];
                $Price = $row["Price"];
                $inStock = $row["inStock"];
                $ImageURL = $row["Image"];

                echo "<div class='card mx-3 my-3' style='width: 18rem'>
                <img class='card-img-top' src=". $ImageURL ." height='200'
                alt='Card image cap' />
                <div class='card-body'>
                <h5 class='card-title'>" . $Title . "</h5>
                <p class='card-text'>". $Description ."</p>
                <button id='demo' onClick='myFunction('$Description')' class='btn btn-danger'>
                  <svg
                    width='1.1em'
                    height='1.1em'
                    viewBox='0 0 16 16'
                    class='bi bi-cart my-1'
                    fill='currentColor'
                    xmlns='http://www.w3.org/2000/svg'
                    >
                      <path
                      fill-rule='evenodd'
                      d='M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z'
                    /></svg
                  >
                </button>
                <span href='#' class='card-link mx-3'>PKR ".$Price.".00</span>
                </div>
              </div>"; 
            } 
          }
         else { 
           echo "0 results";
            }
             $conn->close();
              ?>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-3"></div>
      </div>
    </div>

    <!-- About Page -->

    <div class="starter-template text-center mt-5 pt-5">
      <h1>About Us</h1>
      <p class="lead">
        Use this document as a way to quickly start any new project.<br />
        All you get is this text and a mostly barebones HTML document. This
        shows the MedKube Documentation!
      </p>
    </div>

    <!-- About Page -->

    <!-- Line Between Section -->

    <div class="container w-100 mt-5 pt-5" id="contact">
      <div class="row text-center">
        <div class="col">
          <div class="card-header p-0"></div>
        </div>
      </div>
    </div>

    <!-- Line Between Section -->

    <!-- Contact Form -->

    <div class="container my-5 pt-5">
      <h1 class="text-center">Contact Form</h1>
      <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-6 pb-5">
          <!--Form with header-->

          <form action="feedback.php" method="post">
            <div class="card-body p-3">
              <!--Body-->
              <div class="form-group">
                <div class="input-group mb-2">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="fa fa-user text-info"></i>
                    </div>
                  </div>
                  <input
                    type="text"
                    class="form-control"
                    id="Name"
                    name="Name"
                    placeholder="Name"
                    required
                  />
                </div>
              </div>
              <div class="form-group">
                <div class="input-group mb-2">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="fa fa-envelope text-info"></i>
                    </div>
                  </div>
                  <input
                    type="Email"
                    class="form-control"
                    id="Name"
                    name="Email"
                    placeholder="myemail@gmail.com"
                    required
                  />
                </div>
              </div>

              <div class="form-group">
                <div class="input-group mb-2">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="fa fa-comment text-info"></i>
                    </div>
                  </div>
                  <textarea
                    class="form-control"
                    placeholder="Enter Your Message"
                    required
                    style="height: 80px; resize: none"
                  ></textarea>
                </div>
              </div>
              <div class="text-center">
                <input
                  type="submit"
                  value="Submit"
                  name="create"
                  class="btn btn-lg btn-primary btn-block py-2"
                />
              </div>
            </div>
          </form>
          <!--Form with header-->
        </div>
      </div>
    </div>

    <!-- Contact Form -->

    <footer class="container pt-5">
      <div class="row">
        <div class="col-2 mx-auto my-4 col-2 mx-auto my-4d">
          <h5>Features</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted" href="#">Cool stuff For Web</a></li>
            <li><a class="text-muted" href="#">Random feature</a></li>
            <li><a class="text-muted" href="#">Team feature</a></li>
            <li><a class="text-muted" href="#">Stuff for developers</a></li>
            <li><a class="text-muted" href="#">Another one</a></li>
            <li><a class="text-muted" href="#">Last time</a></li>
          </ul>
        </div>
        <div class="col-2 mx-auto my-4 col-2 mx-auto my-4d">
          <h5>Resources</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted" href="#">Resource</a></li>
            <li><a class="text-muted" href="#">Resource name</a></li>
            <li><a class="text-muted" href="#">Another resource</a></li>
            <li><a class="text-muted" href="#">Final resource</a></li>
          </ul>
        </div>
        <div class="col-2 mx-auto my-4 col-2 mx-auto my-4d">
          <h5>Resources</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted" href="#">Business</a></li>
            <li><a class="text-muted" href="#">Education</a></li>
            <li><a class="text-muted" href="#">Government</a></li>
            <li><a class="text-muted" href="#">Gaming</a></li>
          </ul>
        </div>
        <div class="col-2 mx-auto my-4 col-2 mx-auto my-4d">
          <h5>About</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted" href="#">Team</a></li>
            <li><a class="text-muted" href="#">Locations</a></li>
            <li><a class="text-muted" href="#">Privacy</a></li>
            <li><a class="text-muted" href="#">Terms</a></li>
          </ul>
        </div>
      </div>
      <div class="my-3">
        <p class="float-right"><a href="#">Back to top</a></p>
        <p class="d-block mb-3 text-muted">&copy; 2017-2020</p>
      </div>
    </footer>

    <scripts>
      <script
        src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"
      ></script>
      <script>
        window.jQuery ||
          document.write(
            '<script src="/docs/4.5/assets/js/vendor/jquery.slim.min.js"><\/script>'
          );
      </script>
      <script
        src="/docs/4.5/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-1CmrxMRARb6aLqgBO7yyAxTOQE2AKb9GfXnEo760AUcUmFx3ibVJJAzGytlQcNXd"
        crossorigin="anonymous"
      ></script>
      <script
        src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"
      ></script>
      <script
        src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"
      ></script>
      <script
        src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"
      ></script>
      <script src="product.js"></script>
    </scripts>
  </body>
</html>
