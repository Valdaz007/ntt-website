<?php
    $title = "Look More Professional with Our Business Package | CONTACTS";
    $desc = "Stand out from your competitors with our Business Package which include a Company Domain Name, Website and Email Address.";
    $stylesheet = "contact.css";
    require_once "includes/header.php";
?>

        <main>
            <section class="hero">
                <img src="./static/img/hero-img/contact1.png" alt="">
            </section>

            <section class="content">
                <div class="contact-heading">
                    <h1>Get in Touch</h1>
                </div>

                <div class="subhead">
                    <img src="./static/img/contact/bg-subhead.jpg" alt="">
                    <h2>
                        "Experience the Pinnacle of Service Excellence<br>
                        – your improvement is just a call away!"
                    </h2>
                </div>

                <div class="services-icon">
                    <div class="service">
                        <img src="./static/img/contact/cont-internet.png" alt="">
                        <h3>Internet<br>Services</h3>
                    </div>
                    <div class="service">
                        <img src="./static/img/contact/cont-cloud.png" alt="">
                        <h3>Cloud<br>Services</h3>
                    </div>
                    <div class="service">
                        <img src="./static/img/contact/cont-network.png" alt="">
                        <h3>Network<br>Services</h3>
                    </div>
                    <div class="service">
                        <img src="./static/img/contact/cont-mail.png" alt="">
                        <h3>Web<br>Services</h3>
                    </div>
                    <div class="service">
                        <img src="./static/img/contact/cont-procure.png" alt="">
                        <h3>Procure<br>Services</h3>
                    </div>
                </div>

                <div class="contact">
                    <div class="contact-details">

                        <div class="border detail">
                            <img src="./static/img/contact/office.jpg" alt="">

                            <div class="detail-cont">
                                <h3>Our Office</h3>
                                <p>
                                    1st Floor, Rita Flynn Netball Center, 
                                    Bisini Parade, Boroko, NCD
                                </p>
                                <p>Mon - Fri: 08:00am - 05:00pm</p>
                                <p>Sat 08:30am - 03:00pm</p>
                            </div>
                        </div>

                        <div class="border detail">
                            <img src="./static/img/contact/contact.jpg" alt="">

                            <div class="detail-cont">
                                <h3>Phone / Email</h3>
                                <p>+675 7532 0079</p>
                                <p>+675 7121 1193</p>
                                <p>sales@nexttowntech.com.pg</p>
                                <p>info@nexttowntech.com.pg</p>
                            </div>
                        </div>
                    </div>
                </div> 
                <br>
                <!-- Enquire Form - SIDEBAR -->
                <div class="contact-location">
                    <div class="contact-locate-wrapper">

                        <div class="locate card">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d4893.692516920343!2d147.1978237!3d-9.4694294!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x69023789d632be87%3A0x951d70aadf93a0a4!2sNext%20Town%20Technology%20Ltd!5e1!3m2!1sen!2spg!4v1693281245276!5m2!1sen!2spg" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        <div class="enquiry">
                            <form action="send.php" method="post" class="enquire-form">
                                <h4>Enquire Now</h4>
                                <hr>
                                <input type ="text" name="page" value="solutions" style="display:none">
                                <input type ="text" name="subject" value="Solutions Enquiry" style="display:none">
                                <input class="form-control soln-input" type="text" name="name" placeholder="Name" required>
                                <input class="form-control soln-input" type="email" name="email" placeholder="Email" required>
                                <input class="form-control soln-input" type="text" name="phone" placeholder="Phone">
                                <textarea class="form-control soln-input" rows="4" type = "text" name="message" placeholder="Message" required></textarea>
                                <input class="btn btn-primary soln-input" type="submit" name="send">
                            </form>
                            <!-- <a id="top" type="button" class="btn btn-warning" href="#">Top</a> -->
                        </div>
                    </div>
                </div>
            </section>
        </main>
<?php require_once "includes/footer.php"; ?>