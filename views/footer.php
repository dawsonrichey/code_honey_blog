<!-- FOOTER -->
<footer id="eskimo-footer">
    <div class="container">
        <div class="row eskimo-footer-wrapper">
            <!-- FOOTER WIDGET 1 -->
            <div class="col-12 col-lg-6 mb-4 mb-lg-0">
                <h5 class="eskimo-title-with-border"><span>About Me</span></h5>
                <p>Trusted by thousands of customers, my unique themes and plugins help you make beautiful responsive web sites with ease.</p>
                <p><a href="about.php" class="btn btn-default">Read More</a></p>
            </div>
            <!-- FOOTER WIDGET 2 -->
            <div class="col-12 col-lg-6">
                <h5 class="eskimo-title-with-border"><span>Newsletter</span></h5>
                <form method="post" action="forms/mailer.php">
                    <label>Subscribe to our mailing list!</label>
                    <div class="input-group">
                        <input type="email" class="form-control" name="EMAIL" placeholder="Your email address" required />
                        <div class="input-group-append">
                            <input type="submit" value="Sign up" class="btn btn-default" />
                        </div>
                    </div>
                </form>
                <div id="form-messages"></div>
            </div>
        </div>

        <form id="ajax-form" action="forms/mailer.php" method="post">
        <h5 class="eskimo-title-with-border"><span>Newsletter</span></h5>
         
                <label>Subscribe to our mailing list!</label>
         
                        <input type="email" class="form-control" name="email" placeholder="Your email address" required />

                   

                            <button id="sendbutton" type="submit" value="sign up" class="btn btn-lg w-100">Send Message</button>
                        </div>
                    </div>
                </form>
                <div id="form-messages"></div>


        
        <!-- CREDITS -->
        <div class="eskimo-footer-credits">
            <p>
                
            </p>
        </div>
    </div>
</footer>