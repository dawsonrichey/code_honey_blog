<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>Eskimo - HTML Template</title>
    <!-- META TAGS -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="description" content="">
    <meta name="keywords" content="">
    <!-- CSS FILES -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/fontawesome.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
    <!-- READING POSITION INDICATOR -->
    <progress value="0" id="eskimo-progress-bar">
        <span class="eskimo-progress-container">
            <span class="eskimo-progress-bar"></span>
        </span>
    </progress>
    <!-- SITE WRAPPER -->
    <div id="eskimo-site-wrapper">
        <!-- MAIN CONTAINER -->
        <main id="eskimo-main-container">
            <div class="container">
            <!-- Side bar include -->
            <?php include_once('views/left_nav_bar.php'); ?>
                <!-- TOP ICONS -->
                <ul class="eskimo-top-icons">
                    <li id="eskimo-panel-icon">
                        <a href="#eskimo-panel" class="eskimo-panel-open"><i class="fa fa-bars"></i></a>
                    </li>
                    <li id="eskimo-search-icon">
                        <a id="eskimo-open-search" href="#"><i class="fa fa-search"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <div class="row">
                <!-- BLOG POSTS INCLUDE -->
                <?php include_once('views/blog_posts.php'); ?>
                    <!-- SIDEBAR -->
                    <div class="col-12 col-lg-5">
                        <!-- AUTHOR BOX -->
                        <div class="eskimo-author-box eskimo-add-border eskimo-widget">
                            <div class="eskimo-author-img">
                                <img src="images/300x300.png" alt="JOHN DOE" />
                            </div>
                            <h3><span>JOHN DOE</span></h3>
                            <p class="eskimo-author-subtitle">WEB DESIGNER &amp; DEVELOPER</p>
                            <p class="eskimo-author-description">I'm a Web Developer and Designer with a strong passion for UX/UI design. I have experience building websites, web applications, and brand assets. Contact me if you have any questions!</p>
                            <div class="eskimo-author-box-btn">
                                <a class="btn btn-default" href="about.html">CONTACT ME</a>
                            </div>
                        </div>
                        <!-- CATEGORIES -->
                        <div class="eskimo-categories eskimo-widget">
                            <h5 class="eskimo-title-with-border"><span>Categories</span></h5>
                            <ul>
                                <li>
                                    <a href="category.html" title="The best restaurants, cafes, bars and shops in town.">Food &amp; Drink</a> <span class="badge badge-pill badge-default">5</span>
                                </li>
                                <li>
                                    <a href="category.html" title="An up-to-date, personal urban guide.">Lifestyle</a> <span class="badge badge-pill badge-default">5</span>
                                </li>
                                <li>
                                    <a href="category.html" title="Latest technology news and updates.">Technology</a> <span class="badge badge-pill badge-default">4</span>
                                </li>
                                <li>
                                    <a href="category.html" title="Travel advice, information and inspiration.">Travel</a> <span class="badge badge-pill badge-default">5</span>
                                </li>
                                <li>
                                    <a href="category.html" title="The latest news about movies and TV shows.">TV &amp; Movies</a> <span class="badge badge-pill badge-default">4</span>
                                </li>
                            </ul>
                        </div>
                        <!-- POPULAR POSTS -->
                        <div class="eskimo-post-list-wrapper eskimo-widget">
                            <h5 class="eskimo-title-with-border"><span>Popular Posts</span></h5>
                            <!-- POST 1 -->
                            <div class="eskimo-post-list">
                                <div class="eskimo-post-list-left">
                                    <a href="single-post.html">
                                        <img src="images/100x100.png" alt="5 Ways to a Healthy Lifestyle" />   
                                    </a>
                                </div>
                                <div class="eskimo-post-list-right">
                                    <p class="eskimo-post-list-title">
                                        <a href="single-post.html">5 Ways to a Healthy Lifestyle</a>
                                    </p>
                                    <div class="eskimo-post-list-info">
                                        <i class="fa fa-clock-o"></i><a href="single-post.html">May 25, 2018</a>
                                    </div>
                                </div>
                            </div>
                            <!-- POST 2 -->
                            <div class="eskimo-post-list">
                                <div class="eskimo-post-list-left">
                                    <a href="single-post.html">
                                        <img src="images/100x100.png" alt="The Best Cameras For Beginners" />   
                                    </a>
                                </div>
                                <div class="eskimo-post-list-right">
                                    <p class="eskimo-post-list-title">
                                        <a href="single-post.html">The Best Cameras For Beginners</a>
                                    </p>
                                    <div class="eskimo-post-list-info">
                                        <i class="fa fa-clock-o"></i><a href="single-post.html">May 20, 2018</a>
                                    </div>
                                </div>
                            </div>
                            <!-- POST 3 -->
                            <div class="eskimo-post-list">
                                <div class="eskimo-post-list-left">
                                    <a href="single-post.html">
                                        <img src="images/100x100.png" alt="Can Technology Make You Happy?" />   
                                    </a>
                                </div>
                                <div class="eskimo-post-list-right">
                                    <p class="eskimo-post-list-title">
                                        <a href="single-post.html">Can Technology Make You Happy?</a>
                                    </p>
                                    <div class="eskimo-post-list-info">
                                        <i class="fa fa-clock-o"></i><a href="single-post.html">May 10, 2018</a>
                                    </div>
                                </div>
                            </div>
                            <!-- POST 4 -->
                            <div class="eskimo-post-list">
                                <div class="eskimo-post-list-left">
                                    <a href="single-post.html">
                                        <img src="images/100x100.png" alt="5 Best Coffee Shops In Paris" />   
                                    </a>
                                </div>
                                <div class="eskimo-post-list-right">
                                    <p class="eskimo-post-list-title">
                                        <a href="single-post.html">5 Best Coffee Shops In Paris</a>
                                    </p>
                                    <div class="eskimo-post-list-info">
                                        <i class="fa fa-clock-o"></i><a href="single-post.html">May 12, 2018</a>
                                    </div>
                                </div>
                            </div>
                            <!-- POST 5 -->
                            <div class="eskimo-post-list">
                                <div class="eskimo-post-list-left">
                                    <a href="single-post.html">
                                        <img src="images/100x100.png" alt="Eyes Wide Shut Is A Classic" />   
                                    </a>
                                </div>
                                <div class="eskimo-post-list-right">
                                    <p class="eskimo-post-list-title">
                                        <a href="single-post.html">Eyes Wide Shut Is A Classic</a>
                                    </p>
                                    <div class="eskimo-post-list-info">
                                        <i class="fa fa-clock-o"></i><a href="single-post.html">May 19, 2018</a>
                                    </div>
                                </div>
                            </div>
                            <!-- POST 6 -->
                            <div class="eskimo-post-list">
                                <div class="eskimo-post-list-left">
                                    <a href="single-post.html">
                                        <img src="images/100x100.png" alt="Headphones For Music Lovers" />   
                                    </a>
                                </div>
                                <div class="eskimo-post-list-right">
                                    <p class="eskimo-post-list-title">
                                        <a href="single-post.html">Headphones For Music Lovers</a>
                                    </p>
                                    <div class="eskimo-post-list-info">
                                        <i class="fa fa-clock-o"></i><a href="single-post.html">May 19, 2018</a>
                                    </div>
                                </div>
                            </div>
                            <!-- POST 7 -->
                            <div class="eskimo-post-list">
                                <div class="eskimo-post-list-left">
                                    <a href="single-post.html">
                                        <img src="images/100x100.png" alt="Ketchup Flavored Ice Cream!" />   
                                    </a>
                                </div>
                                <div class="eskimo-post-list-right">
                                    <p class="eskimo-post-list-title">
                                        <a href="single-post.html">Ketchup Flavored Ice Cream!</a>
                                    </p>
                                    <div class="eskimo-post-list-info">
                                        <i class="fa fa-clock-o"></i><a href="single-post.html">May 28, 2018</a>
                                    </div>
                                </div>
                            </div>
                            <!-- POST 8 -->
                            <div class="eskimo-post-list">
                                <div class="eskimo-post-list-left">
                                    <a href="single-post.html">
                                        <img src="images/100x100.png" alt="The Best Tea Houses in Japan" />   
                                    </a>
                                </div>
                                <div class="eskimo-post-list-right">
                                    <p class="eskimo-post-list-title">
                                        <a href="single-post.html">The Best Tea Houses in Japan</a>
                                    </p>
                                    <div class="eskimo-post-list-info">
                                        <i class="fa fa-clock-o"></i><a href="single-post.html">May 19, 2018</a>
                                    </div>
                                </div>
                            </div>
                            <!-- POST 9 -->
                            <div class="eskimo-post-list">
                                <div class="eskimo-post-list-left">
                                    <a href="single-post.html">
                                        <img src="images/100x100.png" alt="Why India's cinemas are changing" />   
                                    </a>
                                </div>
                                <div class="eskimo-post-list-right">
                                    <p class="eskimo-post-list-title">
                                        <a href="single-post.html">Why India's cinemas are changing</a>
                                    </p>
                                    <div class="eskimo-post-list-info">
                                        <i class="fa fa-clock-o"></i><a href="single-post.html">May 17, 2018</a>
                                    </div>
                                </div>
                            </div>
                            <!-- POST 10 -->
                            <div class="eskimo-post-list">
                                <div class="eskimo-post-list-left">
                                    <a href="single-post.html">
                                        <img src="images/100x100.png" alt="How To Design A Minimalist Garden" />   
                                    </a>
                                </div>
                                <div class="eskimo-post-list-right">
                                    <p class="eskimo-post-list-title">
                                        <a href="single-post.html">How To Design A Minimalist Garden</a>
                                    </p>
                                    <div class="eskimo-post-list-info">
                                        <i class="fa fa-clock-o"></i><a href="single-post.html">May 15, 2018</a>
                                    </div>
                                </div>
                            </div>
                        </div>  
                        <!-- BANNER -->
                        <div class="eskimo-widget">
                            <a href="https://themeforest.net/user/egemenerd/portfolio">	
                                <img src="images/600x600.png" alt="banner" class="img-fluid mx-auto d-block" />
                            </a>
                        </div>
                        <!-- TAGS -->
                        <div class="eskimo-widget">
                            <h5 class="eskimo-title-with-border"><span>Tags</span></h5>
                            <div class="eskimo-tag-cloud">
                                <a href="category.html">aute<span>7</span></a>
                                <a href="category.html">enim<span>7</span></a>
                                <a href="category.html">commodo<span>7</span></a>
                                <a href="category.html">voluptatibus<span>7</span></a>
                                <a href="category.html">culpa<span>7</span></a>
                                <a href="category.html">offendit<span>7</span></a>
                                <a href="category.html">magna<span>7</span></a>
                                <a href="category.html">quorum<span>7</span></a>
                                <a href="category.html">mandaremus<span>7</span></a>
                                <a href="category.html">ingeniis<span>7</span></a>
                                <a href="category.html">tempor<span>7</span></a>
                                <a href="category.html">summis<span>7</span></a>
                                <a href="category.html">consequat<span>6</span></a>
                                <a href="category.html">iudicem<span>6</span></a>
                                <a href="category.html">expetendis<span>6</span></a>
                                <a href="category.html">deserunt<span>6</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!-- FOOTER INCLUDE -->
        <?php include_once('views/footer.php'); ?>
    </div>
    <!-- GO TO TOP BUTTON -->
    <a id="eskimo-gototop" href="#"><i class="fa fa-chevron-up"></i></a>
    <!-- SLIDE PANEL OVERLAY -->
    <div id="eskimo-overlay"></div>
    <!-- SLIDE PANEL -->
    <div id="eskimo-panels">
        <aside id="eskimo-panel" class="eskimo-panel">
            <div class="eskimo-panel-inner">
                <!-- CLOSE SLIDE PANEL BUTTON -->
                <a href="#" class="eskimo-panel-close"><i class="fa fa-times"></i></a>
                <!-- AUTHOR BOX -->
                <div class="eskimo-author-box eskimo-widget">
                    <div class="eskimo-author-img">
                        <img src="images/300x300.png" alt="JOHN DOE" />
                    </div>
                    <h3><span>JOHN DOE</span></h3>
                    <p class="eskimo-author-subtitle">WEB DESIGNER &amp; DEVELOPER</p>
                    <p class="eskimo-author-description">I'm a Web Developer and Designer with a strong passion for UX/UI design. I have experience building websites, web applications, and brand assets. Contact me if you have any questions!</p>
                    <div class="eskimo-author-box-btn">
                        <a class="btn btn-default" href="about.html">CONTACT ME</a>
                    </div>
                </div>
                <!-- RECENT POSTS -->
                <div class="eskimo-recent-entries eskimo-widget">
                    <h5 class="eskimo-title-with-border"><span>Recent Posts</span></h5>
                    <ul>
                        <li>
                            <a href="single-post.html">Ketchup Flavored Ice Cream!</a>
                            <span class="post-date">May 28, 2018</span>
                        </li>
                        <li>
                            <a href="single-post.html">Hair You've Always Dreamed Of</a>
                            <span class="post-date">May 27, 2018</span>
                        </li>
                        <li>
                            <a href="single-post.html">15 Of The World's Best Carnivals</a>
                            <span class="post-date">May 25, 2018</span>
                        </li>
                        <li>
                            <a href="single-post.html">5 Ways to a Healthy Lifestyle</a>
                            <span class="post-date">May 25, 2018</span>
                        </li>
                        <li>
                            <a href="single-post.html">Best Breakfast In The World</a>
                            <span class="post-date">May 23, 2018</span>
                        </li>
                    </ul>
                </div>
                <!-- CATEGORIES INCLUDE -->
                <?php include_once('views/categories.php'); ?>
                <!-- TAGS INCLUDE -->
                <?php include_once('views/tags.php'); ?>
            </div>
        </aside>
    </div>
    <!-- FULLSCREEN SEARCH -->
    <div id="eskimo-fullscreen-search">
        <div id="eskimo-fullscreen-search-content">
            <a href="#" id="eskimo-close-search"><i class="fa fa-times"></i></a>
            <form role="search" method="get" action="search.html" class="eskimo-lg-form">
                <div class="input-group">
                    <input type="text" class="form-control form-control-lg" placeholder="Enter a keyword..." name="s" />
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- JS FILES -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/salvattore.min.js"></script>
    <script src="js/panel.js"></script>
    <script src="js/reading-position-indicator.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>