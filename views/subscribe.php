<h2>CONTACT ME</h2>
                <p>Possumus e aute sed se litteris in aliquip, a tamen quem qui pariatur ex pariatur nam nulla possumus, magna do nostrud non quid qui cernantur eram aliqua e illum labore proident consequat.</p>
                <!-- CONTACT FORM -->
                <form id="ajax-form" action="mailer.php" method="post">
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