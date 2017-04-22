<?php
require_once('header.php');
?>

        <div id="tf-home">
            <div class="overlay">
                <nav id="tf-menu" class="navbar navbar-default">
                    <div class="container">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand logo" href="index.php">Nasa Space Apps</a>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right menu-d">
                                <li><a href="index.php">Home</a></li>
                                <li><a href="#aboutUs">About & News</a></li>
                                <li><a href="#tream">Scientist</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                </nav>

                <div class="container">
                    <div class="content">
                        <h1>Warning! Danger Ahead!</h1>
                        <h3>Natural disasters - like wildfires, earthquakes, and landslides</h3>
                        <br>
                        <a href="#tf-happened" class="btn btn-primary my-btn">What Happened</a>
                        <a href="#tf-more" class="btn btn-primary my-btn2">Learn More</a>
                    </div>
                </div>
            </div>
        </div>

        <!--=========== BEGIN ABOUT US SECTION ================-->
        <section id="aboutUs">
            <div class="container">
                <div class="row">
                    <!-- Start about us area -->
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="aboutus_area wow fadeInLeft">
                            <h2 class="titile">About Us</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="newsfeed_area wow fadeInRight">
                            <ul class="nav nav-tabs feed_tabs" id="myTab2">
                                <li class="active"><a href="#news" data-toggle="tab">News</a></li>
                                <li><a href="#notice" data-toggle="tab">Notice</a></li>
                                <li><a href="#events" data-toggle="tab">Events</a></li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <!-- Start news tab content -->
                                <div class="tab-pane fade in active" id="news">
                                    <ul class="news_tab">
                                        <li>
                                            <div class="media">
                                                <div class="media-left">
                                                    <a class="news_img" href="#">
                                                        <img class="media-object" src="images/news.jpg" alt="img">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <a href="#">Dummy text of the printing and typesetting industry</a>
                                                    <span class="feed_date">27.02.15</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media">
                                                <div class="media-left">
                                                    <a class="news_img" href="#">
                                                        <img class="media-object" src="images/news.jpg" alt="img">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <a href="#">Dummy text of the printing and typesetting industry</a>
                                                    <span class="feed_date">28.02.15</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media">
                                                <div class="media-left">
                                                    <a class="news_img" href="#">
                                                        <img class="media-object" src="images/news.jpg" alt="img">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <a href="#">Dummy text of the printing and typesetting industry</a>
                                                    <span class="feed_date">28.02.15</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <a class="see_all" href="#">See All</a>
                                </div>
                                <!-- Start notice tab content -->
                                <div class="tab-pane fade " id="notice">
                                    <div class="single_notice_pane">
                                        <ul class="news_tab">
                                            <li>
                                                <div class="media">
                                                    <div class="media-left">
                                                        <a class="news_img" href="#">
                                                            <img class="media-object" src="images/news.jpg" alt="img">
                                                        </a>
                                                    </div>
                                                    <div class="media-body">
                                                        <a href="#">Dummy text of the printing and typesetting industry</a>
                                                        <span class="feed_date">27.02.15</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="media">
                                                    <div class="media-left">
                                                        <a class="news_img" href="#">
                                                            <img class="media-object" src="images/notice.jpg" alt="img">
                                                        </a>
                                                    </div>
                                                    <div class="media-body">
                                                        <a href="#">Dummy text of the printing and typesetting industry</a>
                                                        <span class="feed_date">28.02.15</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="media">
                                                    <div class="media-left">
                                                        <a class="news_img" href="#">
                                                            <img class="media-object" src="images/notice.jpg" alt="img">
                                                        </a>
                                                    </div>
                                                    <div class="media-body">
                                                        <a href="#">Dummy text of the printing and typesetting industry</a>
                                                        <span class="feed_date">28.02.15</span>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <ul class="news_tab">
                                            <li>
                                                <div class="media">
                                                    <div class="media-left">
                                                        <a class="news_img" href="#">
                                                            <img class="media-object" src="images/notice.jpg" alt="img">
                                                        </a>
                                                    </div>
                                                    <div class="media-body">
                                                        <a href="#">Contrary to popular belief, Lorem Ipsum is not simply random text</a>
                                                        <span class="feed_date">27.02.15</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="media">
                                                    <div class="media-left">
                                                        <a class="news_img" href="#">
                                                            <img class="media-object" src="images/notice.jpg" alt="img">
                                                        </a>
                                                    </div>
                                                    <div class="media-body">
                                                        <a href="#">Dummy text of the printing and typesetting industry</a>
                                                        <span class="feed_date">28.02.15</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="media">
                                                    <div class="media-left">
                                                        <a class="news_img" href="#">
                                                            <img class="media-object" src="images/notice.jpg" alt="img">
                                                        </a>
                                                    </div>
                                                    <div class="media-body">
                                                        <a href="#">Contrary to popular belief, Lorem Ipsum is not simply random text</a>
                                                        <span class="feed_date">28.02.15</span>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Start events tab content -->
                                <div class="tab-pane fade " id="events">
                                    <ul class="news_tab">
                                        <li>
                                            <div class="media">
                                                <div class="media-left">
                                                    <a class="news_img" href="#">
                                                        <img class="media-object" src="images/news.jpg" alt="img">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <a href="#">Dummy text of the printing and typesetting industry</a>
                                                    <span class="feed_date">27.02.15</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media">
                                                <div class="media-left">
                                                    <a class="news_img" href="#">
                                                        <img class="media-object" src="images/news.jpg" alt="img">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <a href="#">Dummy text of the printing and typesetting industry</a>
                                                    <span class="feed_date">28.02.15</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media">
                                                <div class="media-left">
                                                    <a class="news_img" href="#">
                                                        <img class="media-object" src="images/news.jpg" alt="img">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <a href="#">Dummy text of the printing and typesetting industry</a>
                                                    <span class="feed_date">28.02.15</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <a class="see_all" href="#">See All</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=========== END ABOUT US SECTION ================-->
        <section class="tiwter-part text-center">
            <div class="container">
                <div id="carousel-example-generic" class="carousel slide " data-ride="carousel">
                    <ol class="carousel-indicators paddl">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <i class="fa fa-twitter fa-2x"></i>
                            <h3>THE SET DOESN’T MOVED. DEEP DON’T FRUIT FOWL GETHERING HEAVEN DAYS MOVING </h3>
                            <p>John Deo     53 min ago</p>
                        </div>
                        <div class="item">
                            <i class="fa fa-twitter fa-2x"></i>
                            <h3>THE SET DOESN’T MOVED. DEEP DON’T FRUIT FOWL GETHERING HEAVEN DAYS MOVING </h3>
                            <p>John Deo     53 min ago</p>
                        </div>
                        <div class="item">
                            <i class="fa fa-twitter fa-2x"></i>
                            <h3>THE SET DOESN’T MOVED. DEEP DON’T FRUIT FOWL GETHERING HEAVEN DAYS MOVING </h3>
                            <p>John Deo     53 min ago</p>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <section class="team-part" id="tream">
            <div class="container text-center">
                <a href="#"><h3>Meet Our Scientist</h3></a>
                <p>Check our awesome team memebers who always work hard to provide quality products.</p>
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="img-ho">
                            <img src="images/team-1.png" class="img-responsive"/>
                            <div class="overlay">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-vimeo"></i></a>
                            </div>
                        </div>
                        <a href="#"><h4>JOHN SMITH</h4></a>
                        <h6>CTO</h6>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="img-ho">
                            <img src="images/team-2.png" class="img-responsive"/>
                            <div class="overlay">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-vimeo"></i></a>
                            </div>
                        </div>
                        <a href="#"><h4>PATRICIA MEDINA</h4></a>
                        <h6>Senior Scientist</h6>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="img-ho">
                            <img src="images/team-3.png" class="img-responsive"/>
                            <div class="overlay">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-vimeo"></i></a>
                            </div>
                        </div>
                        <a href="#"><h4>THOMAS HANS</h4></a>
                        <h6>Professor</h6>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="img-ho">
                            <img src="images/team-4.png" class="img-responsive"/>
                            <div class="overlay">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-vimeo"></i></a>
                            </div>
                        </div>
                        <a href="#"><h4>PATRICIA MEDINA</h4></a>
                        <h6>Media Controller</h6>
                    </div>
                </div><!--row end-->
            </div><!--container end-->
        </section><!--team-part end-->

<?php
require_once('footer.php');
?>
