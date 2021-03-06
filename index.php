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

    <link
      rel="canonical"
      href="https://getbootstrap.com/docs/4.5/examples/carousel/"
    />


    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet" />
    <link rel="stylesheet" href="index.css" />
    <title>MedKube</title>
  </head>

  <body cz-shortcut-listen="true">
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
              <li class="nav-item active">
                <a class="nav-link pl-0" href="index.php"
                  >Home <span class="sr-only">Home</span></a
                >
              </li>
              <li class="nav-item">
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

    <main role="main" class="container-fluid pl-0 pr-0">
      <!-- Carousel -->

      <div id="myCarousel" class="carousel slide mb-5" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1" class=""></li>
          <li data-target="#myCarousel" data-slide-to="2" class=""></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
          <img src="images/delivery.jpg" alt="bike">
            <div class="container">
              <div class="carousel-caption text-left">
                <h1>Example headline.</h1>
                <p>
                  Cras justo odio, dapibus ac facilisis in, egestas eget quam.
                  Donec id elit non mi porta gravida at eget metus. Nullam id
                  dolor id nibh ultricies vehicula ut id elit.
                </p>
                <p>
                  <a class="btn btn-lg btn-primary" href="signin.php" role="button"
                    >Sign up today</a
                  >
                </p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <svg
              class="bd-placeholder-img"
              width="100%"
              height="100%"
              xmlns="http://www.w3.org/2000/svg"
              preserveAspectRatio="xMidYMid slice"
              focusable="false"
              role="img"
            >
            <rect width="100%" height="100%" fill="#5393C4"></rect>
            </svg>
            <div class="container">
              <div class="carousel-caption">
                <h1>Another example headline.</h1>
                <p>
                  Cras justo odio, dapibus ac facilisis in, egestas eget quam.
                  Donec id elit non mi porta gravida at eget metus. Nullam id
                  dolor id nibh ultricies vehicula ut id elit.
                </p>
                <p>
                  <a class="btn btn-lg btn-primary" href="#about" role="button"
                    >Learn more</a
                  >
                </p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
          <img src="images/delivery.png" alt="delivery">
            <div class="container">
              <div class="carousel-caption text-right">
                <h1>One more for good measure.</h1>
                <p>
                  Cras justo odio, dapibus ac facilisis in, egestas eget quam.
                  Donec id elit non mi porta gravida at eget metus. Nullam id
                  dolor id nibh ultricies vehicula ut id elit.
                </p>
                <p>
                  <a class="btn btn-lg btn-primary" href="product.php" role="button"
                    >Browse gallery</a
                  >
                </p>
              </div>
            </div>
          </div>
        </div>
        <a
          class="carousel-control-prev"
          href="#myCarousel"
          role="button"
          data-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a
          class="carousel-control-next"
          href="#myCarousel"
          role="button"
          data-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

      <!-- Search Bar -->

      <div class="container-fluid custom-container mb-5">
        <div class="row">
          <div class="col pl-5">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Search" />
            </div>
          </div>
          <div class="col-1 pl-0">
            <button type="submit" class="btn btn-primary btn-lg">
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

      <!-- Marketing messaging and featurettes
        ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->

      <div class="container marketing">
        <!-- Three columns of text below the carousel -->
        <div class="row">
          <div class="col-lg-4">
            <img
              src="images/insulin.jpg"
              alt="medicine"
              height="140"
              width="140"
              class="rounded-circle"
            />
            <h2>Diabetic Items</h2>
            <p>
              You are at the right spot, you can find all the
              diabetic medicines and all the diabetic equipments
              at our online store! You can get it delivered as well
              at your door step.
            </p>
            <p>
              <a class="btn btn-secondary" href="product.php" role="button"
                >View details »</a
              >
            </p>
          </div>
          <!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img
              src="images/surgical equipment.jfif"
              alt="medlogo"
              height="140"
              width="140"
              class="rounded-circle"
            />
            <h2>Surgical Items</h2>
            <p>
              We have complete stock of all medical equipments
              available at our online store! Just don't miss your 
              chance to avail the first customer discount.
            </p>
            <p>
              <a class="btn btn-secondary" href="product.php" role="button"
                >View details »</a
              >
            </p>
          </div>
          <!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img
              src="images/Medicine.webp"
              alt="medicine"
              height="140"
              width="140"
              class="rounded-circle"
            />
            <h2>Medicines</h2>
            <p>
              We have all rare and common medicines available at our
              online store. We are always available to cater your needs.
              You are one click away!
            </p>
            <p>
              <a class="btn btn-secondary" href="product.php" role="button"
                >View details »</a
              >
            </p>
          </div>
          <!-- /.col-lg-4 -->
        </div>
        <!-- /.row -->

        <!-- START THE FEATURETTES -->

        <hr class="featurette-divider" />

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">
              First featurette heading.
              <span class="text-muted">It’ll blow your mind.</span>
            </h2>
            <p class="lead">
              Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id
              ligula porta felis euismod semper. Praesent commodo cursus magna,
              vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus
              commodo.
            </p>
          </div>
          <div class="col-md-5">
          <img
              src="images/insulin.jpg"
              alt="medlogo"
              width="500"
              height="500"
              class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
              xmlns="http://www.w3.org/2000/svg"
              preserveAspectRatio="xMidYMid slice"
              focusable="false"
              role="img"
              aria-label="Placeholder: 500x500"
            />
          </div>
        </div>

        <hr class="featurette-divider" />

        <div class="row featurette">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">
              Oh yeah, it’s that good.
              <span class="text-muted">See for yourself.</span>
            </h2>
            <p class="lead">
              Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id
              ligula porta felis euismod semper. Praesent commodo cursus magna,
              vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus
              commodo.
            </p>
          </div>
          <div class="col-md-5 order-md-1">
          <img
              src="images/insulin.jpg"
              alt="medlogo"
              width="500"
              height="500"
              class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
              xmlns="http://www.w3.org/2000/svg"
              preserveAspectRatio="xMidYMid slice"
              focusable="false"
              role="img"
              aria-label="Placeholder: 500x500"
            />
          </div>
        </div>

        <hr class="featurette-divider" />

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">
              And lastly, this one. <span class="text-muted">Checkmate.</span>
            </h2>
            <p class="lead">
              Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id
              ligula porta felis euismod semper. Praesent commodo cursus magna,
              vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus
              commodo.
            </p>
          </div>
          <div class="col-md-5">
          <img
              src="images/insulin.jpg"
              alt="medlogo"
              width="500"
              height="500"
              class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
              xmlns="http://www.w3.org/2000/svg"
              preserveAspectRatio="xMidYMid slice"
              focusable="false"
              role="img"
              aria-label="Placeholder: 500x500"
            />
          </div>
        </div>

        <hr class="featurette-divider md-0" id="about" />

        <!-- /END THE FEATURETTES -->
      </div>
      <!-- About Page -->

      <div class="starter-template mt-0 pt-0  ">
        <h1>About Us</h1>
        <p class="lead">
          Use this document as a way to quickly start any new project.<br />
          All you get is this text and a mostly barebones HTML document.
        </p>
      </div>

      <!-- About Page -->

      <!-- Line Between Section -->

      <div class="container w-100" id="contact">
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

            <form action="feedback.php" method="POST">
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
                      name="Message"
                      required
                      style="height: 80px; resize: none;"
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

      <!-- FOOTER -->

      <footer class="container pt-5">
        <div class="row">
          <div class="col-6 col-md">
            <h5>Features</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="#">Cool stuff</a></li>
              <li><a class="text-muted" href="#">Random feature</a></li>
              <li><a class="text-muted" href="#">Team feature</a></li>
              <li><a class="text-muted" href="#">Stuff for developers</a></li>
              <li><a class="text-muted" href="#">Another one</a></li>
              <li><a class="text-muted" href="#">Last time</a></li>
            </ul>
          </div>
          <div class="col-6 col-md">
            <h5>Resources</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="#">Resource</a></li>
              <li><a class="text-muted" href="#">Resource name</a></li>
              <li><a class="text-muted" href="#">Another resource</a></li>
              <li><a class="text-muted" href="#">Final resource</a></li>
            </ul>
          </div>
          <div class="col-6 col-md">
            <h5>Resources</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="#">Business</a></li>
              <li><a class="text-muted" href="#">Education</a></li>
              <li><a class="text-muted" href="#">Government</a></li>
              <li><a class="text-muted" href="#">Gaming</a></li>
            </ul>
          </div>
          <div class="col-6 col-md">
            <h5>About</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="#">Team</a></li>
              <li><a class="text-muted" href="#">Locations</a></li>
              <li><a class="text-muted" href="#">Privacy</a></li>
              <li><a class="text-muted" href="#">Terms</a></li>
            </ul>
          </div>
        </div>

        <p class="float-right"><a href="#">Back to top</a></p>
        <p class="d-block mb-3 text-muted">&copy; 2017-2020</p>
      </footer>

      <!-- FOOTER -->
    </main>

    <!-- All Scripts -->

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
      <script src="index.js"></script>
    </scripts>

    <!-- All Scripts -->
  </body>
</html>
