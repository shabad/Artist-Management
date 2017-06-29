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

                <div class="section">

                    <div class="content container">

                        <div class="col-md-4">

                            <h2 class="focus-title">Request an appointment</h2>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto voluptatibus assumenda accusamus autem ipsam explicabo, consequatur perspiciatis accusantium molestiae! Recusandae, vitae blanditiis. Ex iure molestias rem, repudiandae odio aperiam. Alias quisquam ratione nemo, vero eius ducimus unde, asperiores animi dolor incidunt facilis.</p>

                            <p>Dignissimos optio delectus quas dolorum libero animi ab repellat odio. Provident sequi, expedita, ad molestias culpa vero delectus nam repellendus ex porro magnam. Illum amet perferendis perspiciatis praesentium repellendus. Debitis eos nemo odit, quibusdam perferendis accusamus, recusandae ab quam nam praesentium quod deserunt unde eum aliquid laudantium placeat dolore expedita dicta amet error facilis veritatis! Sequi!</p>

                            <h3>Our Studio</h3>

                            <div id="map"></div>

                        </div>

                        <!-- ============ Appointment Form - START ============ -->

                        <div class="col-md-8">

                            <form class="contact-form" action="mailer/appointment.php" method="post">

                                <label>
                                    <strong>First Name *</strong>
                                    <input class="required" type="text" name="first_name">
                                </label>
                                <label>
                                    <strong>Last Name *</strong>
                                    <input class="required" type="text" name="last_name">
                                </label>
                                <label>
                                    <strong>Email *</strong>
                                    <input class="required" type="text" name="email">
                                </label>
                                <label>
                                    <strong>Phone Number *</strong>
                                    <input class="required" type="text" name="phone">
                                </label>
                                <label>
                                    <strong>Part of the Body</strong>
                                    <select name="part_body">
                                        <option value="Leg">Leg</option>
                                        <option value="Calf">Calf</option>
                                        <option value="Ankle">Ankle</option>
                                        <option value="Foot">Foot</option>
                                        <option value="Arm">Arm</option>
                                        <option value="Forearm">Forearm</option>
                                        <option value="Wrist">Wrist</option>
                                        <option value="Hand">Hand</option>
                                        <option value="Nek">Nek</option>
                                        <option value="Head">Head</option>
                                        <option value="Back">Back</option>
                                        <option value="Buttocks">Buttocks</option>
                                        <option value="Genitals">Genitals</option>
                                        <option class="other" value="Other">Other (Specify below)</option>
                                    </select>
                                </label>
                                <label id="other" class="hidden-field">
                                    <strong>Specific Part of Body</strong>
                                    <input type="text" name="custom">
                                </label>
                                <label><strong>Tattoo Size *</strong> (ex: 5x4)
                                    <input class="required" type="text" name="size">
                                </label>
                                <div class="radio label">
                                    <strong>Tattoo Color</strong>
                                    <label>
                                        <input type="radio" value="Black &amp; White" name="color" checked>
                                        <span class="radio-replacer"></span>
                                        <span>Black &amp; White</span>
                                    </label>
                                    <label>
                                        <input class="required" type="radio" value="Color" name="color">
                                        <span class="radio-replacer"></span>
                                        <span>Color</span>
                                    </label>
                                </div>
                                <label><strong>Tattoo Description *</strong>
                                    <textarea class="required" name="description"></textarea>
                                </label>
                                <div class="radio image-radio label">
                                    <strong>Choose an Artist</strong>
                                    <label>
                                        <input type="radio" value="Artist A" name="artist" checked>
                                        <span><img src="img/user.jpg" alt="Artist A"><span>Artist A</span></span>
                                    </label>
                                    <label>
                                        <input type="radio" value="Artist B" name="artist">
                                        <span><img src="img/user.jpg" alt="Artist B"><span>Artist B</span></span>
                                    </label>

                                    <label>
                                        <input type="radio" value="Artist C" name="artist">
                                        <span><img src="img/user.jpg" alt="Artist C"><span>Artist C</span></span>
                                    </label>
                                </div>
                                <hr>
                                 <label>
                                    <input class="required" type="checkbox" name="check">
                                    <span class="checkbox-replacer"></span>
                                    <strong>Check to authorize the system *</strong>
                                </label>
                                <hr>
                                <p>( <strong>*</strong> ) = Mandatory field</p>
                                <input class="submit btn md" type="submit" name="submit" value="Request Appointment">
                                <input type="hidden" name="form_type" value="appointment">

                            </form>

                        </div>

                        <!-- ============ Appointment Form - END ============ -->

                    </div>

                </div>

                  <?php
            require('./template/insta_bar.php');
            ?>

            </div>

            <!-- ============ Footer - START ============ -->
            <?php
            require('./template/footer.php');
            ?>
            