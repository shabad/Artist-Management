            <?php
            require('./template/header.php');
            ?>

            <div id="main">

            <?php
            require('./template/bar.php');
            ?>

            <!-- ============ Main Header - END ============ -->

            <div id="main">

                <!-- ============ Contacts Bar - START ============ -->

                <div id="contacts-bar" class="row">
                    <div class="address col-md-6"><strong>THE TATTOOIST - Tattoo Studio</strong>, 1234 Our Awesome Street, Our Awesome City, OAS 123456</div>
                    <div class="other col-md-6">
                        <span class="contact"><i class="fa fa-phone"></i>Phone: <strong>(00) 123 456789</strong></span>
                        <span class="contact"><i class="fa fa-envelope"></i>Email: <a href="mailto:email@domain.com"><strong>email@domain.com</strong></a></span>
                    </div>
                </div>

                <!-- ============ Contacts Bar - END ============ -->

                <!-- ============ Google Map - START ============ -->

                <!-- <div id="map"></div> -->

                <!-- ============ Google Map - END ============ -->

                <div class="section">

                    <div class="content container">

                        <h2 class="focus-title">A question? Write us now!</h2>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus nostrum quo accusamus rerum maiores cupiditate ab deleniti expedita, optio, a, harum fugiat soluta adipisci blanditiis asperiores incidunt tempore voluptatem atque?</p>

                        <!-- ============ Contact Form - START ============ -->

                        <form class="contact-form row" action="mailer/contact.php" method="post">
                            <div class="col-md-6">
                                <label><strong>Full Name *</strong>
                                    <input class="required" type="text" name="name">
                                </label>
                                <label><strong>Email *</strong>
                                    <input class="required" type="text" name="email">
                                </label>
                                <label><strong>Subject</strong>
                                    <select name="subject">
                                        <option value="Subject 1">Subject 1</option>
                                        <option value="Subject 2">Subject 2</option>
                                        <option value="Subject 3">Subject 3</option>
                                        <option value="Subject 4">Subject 4</option>
                                    </select>
                                </label>
                            </div>
                            <div class="col-md-6">
                                <label><strong>Message *</strong>
                                    <textarea class="required" name="message"></textarea>
                                </label>
                                <p>( <strong>*</strong> ) = Mandatory field</p>
                                <input class="submit btn md" type="submit" name="submit" value="Send Message">
                            </div>
                            <input type="hidden" name="form_type" value="contact">
                        </form>

                        <!-- ============ Contact Form - END ============ -->

                    </div>

                </div>
                <script src="js/map.js"></script>

            <?php
            require('./template/insta_bar.php');
            ?>

            </div>

            <!-- ============ Footer - START ============ -->
            <?php
            require('./template/footer.php');
            ?>
            

