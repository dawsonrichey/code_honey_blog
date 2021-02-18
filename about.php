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
    <link href="css/featherlight.css" rel="stylesheet" type="text/css">
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
            <?php include_once('views/left_navbar.php'); ?>
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
                <!-- PAGE TITLE -->
                                <!-- PAGE TITLE -->
                                <div class="eskimo-page-title">
                                    <h1><span>Dawson Richey</span></h1>
                                    <p class="eskimo-page-subtitle">Photographer and Videographer</p>
                                </div>
                                <!-- ABOUT ME -->
                                <div class="row">
                                    <div class="col-12 col-lg-8 order-2 order-lg-1">
                                        <p>Laborum varias in possumus philosophari nam mandaremus ad malis. Sint fidelissimae tempor fugiat expetendis. Est nisi quibusdam admodum ut noster laborum se tamen culpa aut labore. Senserit sed commodo. Occaecat concursionibus te deserunt ab nam amet mentitum est ea nam dolor malis aute ab iis sempiternum.</p>
                                        <p><span class="lead"><em>Ubi nescius a iudicem, non veniam si amet a tempor ad fabulas id ipsum excepteur relinqueret non fore commodo quibusdam, incidi imitaren do mentitum.</em></span></p>
                                        <p>Laboris quo ingeniis, eu dolore iudicem fabulas. Si fugiat anim est officia, aut aliqua incididunt efflorescere te varias de nostrud ab quis si si de dolore quem culpa...</p>
                                    </div>
                                    <div class="col-12 col-lg-4 order-1 order-lg-2 mb-5 mb-lg-0">
                                        <img src="images/600x600.png" alt="Dawson Richey" class="img-fluid mx-auto d-block eskimo-img-shadow" />
                                    </div>
                                </div>
                                <!-- DIVIDER -->
                                <hr />
                                <!-- TABS -->
                                <h2>WHAT CAN I DO</h2>
                                <!-- TABS NAVIGATION -->
                                <ul class="nav nav-tabs">
                                    <!-- TAB 1 -->
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#mp-tab-fashion" aria-expanded="true">FASHION</a>
                                    </li>
                                    <!-- TAB 2 -->
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#mp-tab-wildlife" aria-expanded="false">WILDLIFE</a>
                                    </li>
                                    <!-- TAB 3 -->
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#mp-tab-real-estate" aria-expanded="false">REAL ESTATE</a>
                                    </li>
                                </ul>
                                <!-- TABS CONTENT -->
                                <div class="eskimo-tabs-content tab-content">
                                    <!-- TAB 1 -->
                                    <div class="tab-pane fade active show" id="mp-tab-fashion" role="button" aria-expanded="true">
                                        <p>Senserit sed commodo. Ubi nescius a iudicem, non veniam si amet a tempor ad fabulas id ipsum excepteur relinqueret non fore commodo quibusdam, incidi imitaren do mentitum. Et enim offendit ingeniis. Dolor probant senserit si mandaremus do nulla laborum, hic aute iudicem expetendis id cupidatat tamen iudicem proident ut eram arbitror aut veniam enim, nostrud. Ex velit arbitror possumus, labore proident consequat, non aute cillum o fabulas ut probant ubi consequat.</p>
                                        <p>Excepteur ea probant, expetendis quid proident sed nostrud. Doctrina quis offendit, aliquip summis occaecat singulis nam de aut magna probant ne de sunt nostrud eu ut eram philosophari, ita dolore quamquam coniunctione e ita velit excepteur, ita e dolor amet tamen. Quis occaecat si praesentibus, minim ne mentitum.</p>
                                    </div>
                                    <!-- TAB 2 -->
                                    <div class="tab-pane fade " id="mp-tab-wildlife" role="button" aria-expanded="false">
                                        <p>Senserit sed commodo. Ubi nescius a iudicem, non veniam si amet a tempor ad fabulas id ipsum excepteur relinqueret non fore commodo quibusdam, incidi imitaren do mentitum. Et enim offendit ingeniis. Dolor probant senserit si mandaremus do nulla laborum, hic aute iudicem expetendis id cupidatat tamen iudicem proident ut eram arbitror aut veniam enim, nostrud. Ex velit arbitror possumus, labore proident consequat, non aute cillum o fabulas ut probant ubi consequat.</p>
                                        <p>Excepteur ea probant, expetendis quid proident sed nostrud. Doctrina quis offendit, aliquip summis occaecat singulis nam de aut magna probant ne de sunt nostrud eu ut eram philosophari, ita dolore quamquam coniunctione e ita velit excepteur, ita e dolor amet tamen. Quis occaecat si praesentibus, minim ne mentitum.</p>
                                    </div>
                                    <!-- TAB 3 -->
                                    <div class="tab-pane fade " id="mp-tab-real-estate" role="button" aria-expanded="false">
                                        <p>Senserit sed commodo. Ubi nescius a iudicem, non veniam si amet a tempor ad fabulas id ipsum excepteur relinqueret non fore commodo quibusdam, incidi imitaren do mentitum. Et enim offendit ingeniis. Dolor probant senserit si mandaremus do nulla laborum, hic aute iudicem expetendis id cupidatat tamen iudicem proident ut eram arbitror aut veniam enim, nostrud. Ex velit arbitror possumus, labore proident consequat, non aute cillum o fabulas ut probant ubi consequat.</p>
                                        <p>Excepteur ea probant, expetendis quid proident sed nostrud. Doctrina quis offendit, aliquip summis occaecat singulis nam de aut magna probant ne de sunt nostrud eu ut eram philosophari, ita dolore quamquam coniunctione e ita velit excepteur, ita e dolor amet tamen. Quis occaecat si praesentibus, minim ne mentitum.</p>
                                    </div>
                                </div>
                                <!-- DIVIDER -->
                                <hr />
                <div class="eskimo-page-title">
                    <h1><span>Dawson Richey</span></h1>
                    <p class="eskimo-page-subtitle">Web Designer &amp; Developer</p>
                </div>
                <!-- ABOUT ME -->
                <div class="row">
                    <div class="col-12 col-lg-7 order-2 order-lg-1">
                        <p>Laborum varias in possumus philosophari nam mandaremus ad malis. Sint fidelissimae tempor fugiat expetendis. Est nisi quibusdam admodum ut noster laborum se tamen culpa aut labore. Senserit sed commodo. Ubi nescius a iudicem, non veniam si amet a tempor ad fabulas id.</p>
                        <p>Est nisi quibusdam admodum ut noster. Quamquam malis illum ex elit, anim arbitrantur cupidatat aute admodum, cernantur noster mentitum cupidatat.</p>
                        <div class="progress">
                            <div class="progress-bar bg-success" style="width: 100%" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"><span>PHP</span> 100%</div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-info" style="width: 85%" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span>WordPress</span> 85%</div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-warning" style="width: 65%" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"><span>Javascript</span> 65%</div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-danger" style="width: 50%" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"><span>ASP</span> 50%</div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-5 order-1 order-lg-2 mb-5 mb-lg-0">
                        <img src="images/600x600.png" alt="Dawson Richey" class="img-fluid mx-auto d-block eskimo-img-shadow" />
                    </div>
                </div>
                <!-- DIVIDER -->
                <hr />
                <!-- TABS -->
                <h2>EXPERIENCE &amp; EDUCATION</h2>
                <!-- ACCORDION -->
                <div id="mp-accordion-1" data-children=".mp-accordion-item" class="mp-accordion">
                    <!-- ACCORDION ITEM 1 -->
                    <div class="mp-accordion-item">
                        <a class="mp-accordion-title" data-toggle="collapse" data-parent="#mp-accordion-1" href="#mp-accordion-item-1" aria-expanded="false" aria-controls="mp-accordion-item-1">2014 to Present</a>
                        <div id="mp-accordion-item-1" class="collapse show" role="tabpanel">
                            <div class="mp-accordion-content">
                                <h5>Senior Developer - Google Inc</h5>
                                Senserit sed commodo. Ubi nescius a iudicem, non veniam si amet a tempor ad fabulas id ipsum excepteur relinqueret non fore commodo quibusdam, incidi imitaren do mentitum. Et enim offendit ingeniis. Dolor probant senserit si mandaremus do nulla laborum, hic aute iudicem expetendis id cupidatat tamen iudicem proident ut eram arbitror aut veniam enim, nostrud. Ex velit arbitror possumus, labore proident consequat, non aute cillum o fabulas ut probant ubi consequat. Excepteur ea probant, expetendis quid proident sed nostrud.
                            </div>
                        </div>
                    </div>
                    <!-- ACCORDION ITEM 2 -->
                    <div class="mp-accordion-item">
                        <a class="mp-accordion-title collapsed" data-toggle="collapse" data-parent="#mp-accordion-1" href="#mp-accordion-item-2" aria-expanded="false" aria-controls="mp-accordion-item-2">2014 - 2010</a>
                        <div id="mp-accordion-item-2" class="collapse" role="tabpanel">
                            <div class="mp-accordion-content">
                                <h5>Art Director - Designs Ltd</h5>
                                Senserit sed commodo. Ubi nescius a iudicem, non veniam si amet a tempor ad fabulas id ipsum excepteur relinqueret non fore commodo quibusdam, incidi imitaren do mentitum. Et enim offendit ingeniis. Dolor probant senserit si mandaremus do nulla laborum, hic aute iudicem expetendis id cupidatat tamen iudicem proident ut eram arbitror aut veniam enim, nostrud. Ex velit arbitror possumus, labore proident consequat, non aute cillum o fabulas ut probant ubi consequat. Excepteur ea probant, expetendis quid proident sed nostrud.
                            </div>
                        </div>
                    </div>
                    <!-- ACCORDION ITEM 3 -->
                    <div class="mp-accordion-item">
                        <a class="mp-accordion-title collapsed" data-toggle="collapse" data-parent="#mp-accordion-1" href="#mp-accordion-item-3" aria-expanded="false" aria-controls="mp-accordion-item-3">2010 - 2008</a>
                        <div id="mp-accordion-item-3" class="collapse" role="tabpanel">
                            <div class="mp-accordion-content">
                                <h5>Web Designer - Freelance</h5>
                                Senserit sed commodo. Ubi nescius a iudicem, non veniam si amet a tempor ad fabulas id ipsum excepteur relinqueret non fore commodo quibusdam, incidi imitaren do mentitum. Et enim offendit ingeniis. Dolor probant senserit si mandaremus do nulla laborum, hic aute iudicem expetendis id cupidatat tamen iudicem proident ut eram arbitror aut veniam enim, nostrud. Ex velit arbitror possumus, labore proident consequat, non aute cillum o fabulas ut probant ubi consequat. Excepteur ea probant, expetendis quid proident sed nostrud.
                            </div>
                        </div>
                    </div>
                    <!-- ACCORDION ITEM 4 -->
                    <div class="mp-accordion-item">
                        <a class="mp-accordion-title collapsed" data-toggle="collapse" data-parent="#mp-accordion-1" href="#mp-accordion-item-4" aria-expanded="false" aria-controls="mp-accordion-item-4">2008 - 2004</a>
                        <div id="mp-accordion-item-4" class="collapse" role="tabpanel">
                            <div class="mp-accordion-content">
                                <h5>University - Cambridge</h5>
                                Senserit sed commodo. Ubi nescius a iudicem, non veniam si amet a tempor ad fabulas id ipsum excepteur relinqueret non fore commodo quibusdam, incidi imitaren do mentitum. Et enim offendit ingeniis. Dolor probant senserit si mandaremus do nulla laborum, hic aute iudicem expetendis id cupidatat tamen iudicem proident ut eram arbitror aut veniam enim, nostrud. Ex velit arbitror possumus, labore proident consequat, non aute cillum o fabulas ut probant ubi consequat. Excepteur ea probant, expetendis quid proident sed nostrud.
                            </div>
                        </div>
                    </div>
                </div>
                <!-- DIVIDER -->
                <hr />
                <h2>PORTFOLIO</h2>
                <p>Possumus e aute sed se litteris in aliquip, a tamen quem qui pariatur ex pariatur nam nulla possumus, magna do nostrud non quid qui cernantur eram aliqua e illum labore proident consequat.</p>
                <!-- IMAGE GALLERY -->
                <div class="eskimo-masonry-grid eskimo-gallery">
                    <div class="eskimo-three-columns" data-columns>
                        <!-- GALLERY ITEM 1 -->
                        <div class="eskimo-gallery-item">
                            <a href="#" data-featherlight="images/1400x1000.png" class="eskimo-lightbox">
                                <img src="images/900x600.png" alt="" />
                            </a>
                        </div>
                        <!-- GALLERY ITEM 2 -->
                        <div class="eskimo-gallery-item">
                            <a href="#" data-featherlight="images/1400x1000.png" class="eskimo-lightbox">
                                <img src="images/900x600.png" alt="" />
                            </a>
                        </div>
                        <!-- GALLERY ITEM 3 -->
                        <div class="eskimo-gallery-item">
                            <a href="#" data-featherlight="images/1400x1000.png" class="eskimo-lightbox">
                                <img src="images/900x600.png" alt="" />
                            </a>
                        </div>
                        <!-- GALLERY ITEM 4 -->
                        <div class="eskimo-gallery-item">
                            <a href="#" data-featherlight="images/1400x1000.png" class="eskimo-lightbox">
                                <img src="images/900x600.png" alt="" />
                            </a>
                        </div>
                        <!-- GALLERY ITEM 5 -->
                        <div class="eskimo-gallery-item">
                            <a href="#" data-featherlight="images/1400x1000.png" class="eskimo-lightbox">
                                <img src="images/900x600.png" alt="" />
                            </a>
                        </div>
                        <!-- GALLERY ITEM 6 -->
                        <div class="eskimo-gallery-item">
                            <a href="#" data-featherlight="images/1400x1000.png" class="eskimo-lightbox">
                                <img src="images/900x600.png" alt="" />
                            </a>
                        </div>
                    </div>
                </div>
                <!-- DIVIDER -->
                <hr />
                <h2>CONTACT ME</h2>
                <p>Possumus e aute sed se litteris in aliquip, a tamen quem qui pariatur ex pariatur nam nulla possumus, magna do nostrud non quid qui cernantur eram aliqua e illum labore proident consequat.</p>
                <!-- CONTACT FORM -->
                <form id="ajax-form" action="forms/subcribe.php" method="post">
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <p>
                                <label>Your Name</label><br />
                                <input type="text" name="sendername" id="sendername" class="form-control" required="required" maxlength="50" />
                            </p>
                            <p>
                                <label>Your Email</label><br />
                                <input type="email" name="senderemail" id="senderemail" class="form-control" required="required" maxlength="50" />
                            </p>
                            <p>
                                <label>Phone Number</label><br />
                                <input type="text" name="senderphone" id="senderphone" class="form-control" maxlength="50" />
                            </p>
                        </div>
                        <div class="col-12 col-lg-6">
                            <p>
                                <label>Your Message</label><br />
                                <textarea name="sendermessage" id="sendermessage" required="required" class="form-control form-fixed-height"></textarea>
                            </p>
                            <button id="sendbutton" type="submit" class="btn btn-lg w-100">Send Message</button>
                        </div>
                    </div>
                </form>
                <div id="form-messages"></div>
            </div>
        </main>
        <!-- FOOTER -->
        <?php include_once('views/footer.php'); ?>
                <!-- CREDITS -->
                <div class="eskimo-footer-credits">
                    <p>
                       
                    </p>
                </div>
            </div>
        </footer>
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
                        <img src="images/300x300.png" alt="Dawson Richey" />
                    </div>
                    <h3><span>Dawson Richey</span></h3>
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
    <script src="js/featherlight.js"></script>
    <script src="js/ajax-contact-form.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>