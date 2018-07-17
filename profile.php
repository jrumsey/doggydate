<?php session_start(); ?>
<html>
    <head>
    
        <script type='text/javascript' src='../lib/js/jquery-1.9.0.min.js'></script>
        <script type='text/javascript' src='../lib/js/jquery.splitter-0.14.0.js'></script>
        <script type='text/javascript' src='profile.js'></script>
        
        <link rel='stylesheet' type='text/css' href='../lib/css/jquery.splitter.css'>

        <link rel="stylesheet" href="themes/plugins/bootstrap-4.1.1-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="profile.css">
    
    </head>
    <body>
    
        <div id="main">
            <div>
                <h3 id="title-names"><?php echo $_SESSION["name"];?></h3>
            </div>
           
            <div>
                
            </div>
                        
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="pics/placeholder-folder.jpg">
                        <img class="img-fluid dog-profile-pics" src="pics/placeholder-folder.jpg" alt="">
                        </a>
                      </div>
                      <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="pics/placeholder-folder.jpg">
                          <img class="img-fluid dog-profile-pics" src="pics/placeholder-folder.jpg" alt="">
                        </a>
                      </div>
                      <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="pics/placeholder-folder.jpg">
                          <img class="img-fluid dog-profile-pics" src="pics/placeholder-folder.jpg" alt="">
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="add-dog-container">
                <div class="row center-box">
                    <a class="btn btn-light" id="dog-btn1" href="">Add dog</a>
                    <a class="btn btn-light" id="dog-btn2" href="">Add dog</a>
                    <a class="btn btn-light" id="dog-btn3" href="">Add dog</a>
                </div>
            </div>
            

            <h4 align="center">Pictures</h4>
            
            <div>
                <div class="portfolio-container">
                    <div class="row no-gutters">
                      <div class="col-lg-3 col-sm-6">
                        <a class="portfolio-box" href="pics/placeholder-folder.jpg">
                          <img class="img-fluid dog-pic-group" src="pics/placeholder-folder.jpg" alt="">
                        </a>
                      </div>
                      <div class="col-lg-3 col-sm-6">
                        <a class="portfolio-box" href="pics/placeholder-folder.jpg">
                          <img class="img-fluid dog-pic-group" src="pics/placeholder-folder.jpg" alt="">
                        </a>
                      </div>
                      <div class="col-lg-3 col-sm-6">
                        <a class="portfolio-box" href="pics/placeholder-folder.jpg">
                          <img class="img-fluid dog-pic-group" src="pics/placeholder-folder.jpg" alt="">
                        </a>
                      </div>
                      <div class="col-lg-3 col-sm-6">
                        <a class="portfolio-box" href="pics/placeholder-folder.jpg">
                          <img class="img-fluid dog-pic-group" src="pics/placeholder-folder.jpg" alt="">
                        </a>
                      </div>
                      <div class="col-lg-3 col-sm-6">
                        <a class="portfolio-box" href="pics/placeholder-folder.jpg">
                          <img class="img-fluid dog-pic-group" src="pics/placeholder-folder.jpg" alt="">
                        </a>
                      </div>
                      <div class="col-lg-3 col-sm-6">
                        <a class="portfolio-box" href="pics/placeholder-folder.jpg">
                          <img class="img-fluid dog-pic-group" src="pics/placeholder-folder.jpg" alt="">
                        </a>
                      </div>
                        <div class="col-lg-3 col-sm-6">
                        <a class="portfolio-box" href="pics/placeholder-folder.jpg">
                          <img class="img-fluid dog-pic-group" src="pics/placeholder-folder.jpg" alt="">
                        </a>
                      </div>
                      <div class="col-lg-3 col-sm-6">
                        <a class="portfolio-box" href="pics/placeholder-folder.jpg">
                          <img class="img-fluid dog-pic-group" src="pics/placeholder-folder.jpg" alt="">
                        </a>
                      </div>
                        <div class="col-lg-3 col-sm-6">
                            <a class="portfolio-box" href="pics/placeholder-folder.jpg">
                              <img class="img-fluid dog-pic-group" src="pics/placeholder-folder.jpg" alt="">
                            </a>
                        </div>
                      <div class="col-lg-3 col-sm-6">
                        <a class="portfolio-box" href="pics/placeholder-folder.jpg">
                          <img class="img-fluid dog-pic-group" src="pics/placeholder-folder.jpg" alt="">
                        </a>
                      </div>
                      <div class="col-lg-3 col-sm-6">
                        <a class="portfolio-box" href="pics/placeholder-folder.jpg">
                          <img class="img-fluid dog-pic-group" src="pics/placeholder-folder.jpg" alt="">
                        </a>
                      </div>
                      <div class="col-lg-3 col-sm-6">
                        <a class="portfolio-box" href="pics/placeholder-folder.jpg">
                          <img class="img-fluid dog-pic-group" src="pics/placeholder-folder.jpg" alt="">
                        </a>
                      </div>
                    </div>
                </div>
            </div>
            
            <div class="paragraph-headline">
                <div>
                    <h4 class="user-profile-paragraph">About You</h3>
                    <div class="form-group">
                      <!--<label for="comment">Comment:</label>-->
                      <textarea class="form-control" rows="3" id="about-user"></textarea>
                    </div>
                </div>
                <div>
                    <h4 class="user-profile-paragraph">About Your Dog(s)</h3>
                    <div class="form-group">
                      <!--<label for="comment">Comment:</label>-->
                      <textarea class="form-control" rows="3" id="about-dog"></textarea>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>