<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NanoTech blog || Toufik Shima</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="./public/sass/main.css">

</head>
<body>

    <!--Start the navbar +-->
    <nav class="navbar navbar-expand-md navbar-light  fixed-top shadow">
        <div class="container-fluid">
          <button class="navbar-toggler bg-white mb-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon bg-white"></span>
          </button>
          <a class="navbar-brand" href="#">NanoTech</a>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#">Posts</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#">Contact</a>
              </li>
            </ul>

            <?php if(isset($_SESSION["userid"])) {?>
              <form class="d-flex">
              
                <!-- <a href="./public/test/dashboard.php" class="btn">
                  Dashboard
                </a> -->
                <a href="./public/test/posts.php" class="btn">
                  Dashboard
                </a>
                <!-- <li><a href="./categories.php" class="btn my-1">categories</a></li> -->
							<!-- <li><a href="./posts.php" class="btn">posts</a></li> -->
              
            </form> 
            <?php } else { ?>
            <form class="d-flex">
              <a href="./public/test/signin.php" class="btn">
                Login
              </a>
              <a href="./public/test/signup.php" class="btn mx-3">
                Sign Up
              </a>
              
            </form>
            <?php } ?>
          </div>
        </div>
    </nav> 
    <!--Start the navbar-->

    <header>
        <div class="header-title">
            <p class="p-one">NanoTech</p>
            <p class="p-two">The best blog</p>
            <p class="p-three">For developers</p>
        </div>
    </header>

    <main>
        <section class="about text-center">
            <p class="sections-title">About</p>
            <p class="about-text">
                Toufik Shima frontend developer 
                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                Toufik Shima frontend developer 
                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
            </p>
        </section>

        <section class="categories mb-4">
            <p class="sections-title text-center">Last Posts</p>
            <div class="web-category mb-5 ">
                <div class="container">
                    <p class="text-white">Last posts in web developement <i class="fa-solid fa-turn-down text-white mx-2"></i></p>

                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-3">
                            <div class="card" style="width: 100%;">
                                <img src="./images/post-img1.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h6 class="card-title">Card title</h6>
                                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.
                                    Some quick example text to build.
                                  </p>
                                  <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3">
                            <div class="card" style="width: 100%;">
                                <img src="./images/post-img2.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h6 class="card-title">Card title</h6>
                                  <p class="card-text">Some quick example text to Some quick example text to build. build on the card title and make up the bulk of the card's content.</p>
                                  <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3">
                            <div class="card" style="width: 100%;">
                                <img src="./images/post-img3.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h6 class="card-title">Card title</h6>
                                  <p class="card-text">Some quick example Some quick example text to build. text to build on the card title and make up the bulk of the card's content.</p>
                                  <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3">
                            <div class="card" style="width: 100%;">
                                <img src="./images/post-img1.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h6 class="card-title">Card title</h6>
                                  <p class="card-text">Some quick example Some quick example text to build. text to build on the card title and make up the bulk of the card's content.</p>
                                  <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mobile-category mb-5">
                <div class="container">
                    <p class="text-white">Last Posts in mobile app developement <i class="fa-solid fa-turn-down text-white mx-2"></i></p>

                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-3">
                            <div class="card" style="width: 100%;">
                                <img src="./images/post-img1.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h6 class="card-title">Card title</h6>
                                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.
                                    Some quick example text to build.
                                  </p>
                                  <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3">
                            <div class="card" style="width: 100%;">
                                <img src="./images/post-img2.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h6 class="card-title">Card title</h6>
                                  <p class="card-text">Some quick example text to Some quick example text to build. build on the card title and make up the bulk of the card's content.</p>
                                  <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3">
                            <div class="card" style="width: 100%;">
                                <img src="./images/post-img3.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h6 class="card-title">Card title</h6>
                                  <p class="card-text">Some quick example Some quick example text to build. text to build on the card title and make up the bulk of the card's content.</p>
                                  <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3">
                            <div class="card" style="width: 100%;">
                                <img src="./images/post-img1.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h6 class="card-title">Card title</h6>
                                  <p class="card-text">Some quick example Some quick example text to build. text to build on the card title and make up the bulk of the card's content.</p>
                                  <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="desktop-category mb-5">
                <div class="container">
                    <p class="text-white">Last posts in desktop app <i class="fa-solid fa-turn-down text-white mx-2"></i></p>

                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-3">
                            <div class="card" style="width: 100%;">
                                <img src="./images/post-img1.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h6 class="card-title">Card title</h6>
                                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.
                                    Some quick example text to build.
                                  </p>
                                  <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3">
                            <div class="card" style="width: 100%;">
                                <img src="./images/post-img2.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h6 class="card-title">Card title</h6>
                                  <p class="card-text">Some quick example text to Some quick example text to build. build on the card title and make up the bulk of the card's content.</p>
                                  <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3">
                            <div class="card" style="width: 100%;">
                                <img src="./images/post-img3.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h6 class="card-title">Card title</h6>
                                  <p class="card-text">Some quick example Some quick example text to build. text to build on the card title and make up the bulk of the card's content.</p>
                                  <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3">
                            <div class="card" style="width: 100%;">
                                <img src="./images/post-img1.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h6 class="card-title">Card title</h6>
                                  <p class="card-text">Some quick example Some quick example text to build. text to build on the card title and make up the bulk of the card's content.</p>
                                  <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            
            <div class="mobile-category"></div>
            <div class="desktop-category"></div>
        </section>
    </main>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="main.js"></script>
</body>
</html>