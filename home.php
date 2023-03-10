<?php 
session_start(); 
// include('./app/view/view.php');
include('./public/components/home-head.php');
?>


    <!--Start the navbar +-->
    <nav class="navbar navbar-expand-md navbar-light  fixed-top shadow" id="navbar-example">
        <div class="container-fluid">
          <button class="navbar-toggler bg-white mb-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon bg-white"></span>
          </button>
          <a class="navbar-brand" href="#">NanoTech</a>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item ">
                <a class="nav-link active" aria-current="page" href="#home">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#posts">Posts</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#contact">Contact</a>
              </li>
            </ul>

            <?php if(isset($_SESSION["userid"])) {?>
              <form class="d-flex">
              
                <a href="./public/test/posts.php" class="btn">
                  Dashboard
                </a>
              
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

    <header id="home">
        <div class="header-title">
            <p class="p-one">NanoTech</p>
            <p class="p-two">The best blog</p>
            <p class="p-three">For developers</p>
        </div>
    </header>

    <main>
        <section class="about text-center" id="about">
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

        <section class="categories mb-4" id="posts">
            <p class="sections-title text-center">Last Posts</p>
            <div class="web-category mb-5 ">
                <div class="container">
                    <p class="text-warning">Last posts in web developement <i class="fa-solid fa-turn-down mx-2" style="color: #ff8906;"></i></p>

                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-3">
                            <div class="card mb-3" style="width: 100%;">
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
                            <div class="card mb-3" style="width: 100%;">
                                <img src="./images/post-img2.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h6 class="card-title">Card title</h6>
                                  <p class="card-text">Some quick example text to Some quick example text to build. build on the card title and make up the bulk of the card's content.</p>
                                  <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3">
                            <div class="card mb-3" style="width: 100%;">
                                <img src="./images/post-img3.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h6 class="card-title">Card title</h6>
                                  <p class="card-text">Some quick example Some quick example text to build. text to build on the card title and make up the bulk of the card's content.</p>
                                  <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3">
                            <div class="card mb-3" style="width: 100%;">
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
                    <p class="text-warning">Last Posts in mobile app developement <i class="fa-solid fa-turn-down mx-2" style="color: #ff8906;"></i></p>

                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-3">
                            <div class="card mb-3" style="width: 100%;">
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
                            <div class="card mb-3" style="width: 100%;">
                                <img src="./images/post-img2.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h6 class="card-title">Card title</h6>
                                  <p class="card-text">Some quick example text to Some quick example text to build. build on the card title and make up the bulk of the card's content.</p>
                                  <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3">
                            <div class="card mb-3" style="width: 100%;">
                                <img src="./images/post-img3.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h6 class="card-title">Card title</h6>
                                  <p class="card-text">Some quick example Some quick example text to build. text to build on the card title and make up the bulk of the card's content.</p>
                                  <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3">
                            <div class="card mb-3" style="width: 100%;">
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
                    <p class="text-warning">Last posts in desktop app <i class="fa-solid fa-turn-down mx-2" style="color: #ff8906;"></i></p>

                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-3">
                            <div class="card mb-3" style="width: 100%;">
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
                            <div class="card mb-3" style="width: 100%;">
                                <img src="./images/post-img2.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h6 class="card-title">Card title</h6>
                                  <p class="card-text">Some quick example text to Some quick example text to build. build on the card title and make up the bulk of the card's content.</p>
                                  <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3">
                            <div class="card mb-3" style="width: 100%;">
                                <img src="./images/post-img3.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h6 class="card-title">Card title</h6>
                                  <p class="card-text">Some quick example Some quick example text to build. text to build on the card title and make up the bulk of the card's content.</p>
                                  <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3">
                            <div class="card mb-3" style="width: 100%;">
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

            
            
        </section>
    </main>

    <!--start section footer-->

    <footer id="contact">
      <div class="contact-us">
        <p class="sections-title text-center">Contact</p>
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-12 col-md-4">
              <div class="social footer-columns">
                <p class="title">Social media</p>
                <ul>
                  <li>
                    <a href="#">
                      <i class="fa-brands fa-facebook fa-1x"></i>
                      Facebook
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa-brands fa-linkedin fa-1x"></i>
                      LinkedIn
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa-brands fa-twitter fa-1x"></i>
                      Twitter
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-sm-12 col-md-4">
              <div class="social footer-columns">
                <p class="title">Emails</p>
                <ul>
                  <li>
                    <a href="#">
                      <i class="fa-solid fa-envelope"></i>
                      toufikshima98@gmail.com</a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa-solid fa-envelope"></i>
                      nouhi073@gmail.com</a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa-solid fa-envelope"></i>
                      nntech@gmail.com
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-sm-12 col-md-4">
              <div class="social footer-columns">
                <p class="title">Phones</p>
                <ul>
                  <li>
                    <a href="#">
                      <i class="fa-solid fa-phone"></i>
                      +212 54135741</a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa-solid fa-phone"></i>
                      +212 6413..</a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa-solid fa-phone"></i>
                      +212 61..</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="copyright text-center">
        <p class="text-white">All right reserved &copy; NanoTech <span style="color: red;">&hearts;</span> Toufik Shima <span style="color: red;">&hearts;</span></p>
      </div>
      

    </footer>



<?php
include('./public/components/home_footer.php');
?>