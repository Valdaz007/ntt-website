<?php
    $title = "Look More Professional with Our Business Package | CONTACTS";
    $desc = "Stand out from your competitors with our Business Package which include a Company Domain Name, Website and Email Address.";
    $stylesheet = "contact.css";
    require_once "includes/header.php";
?>

        <main>
            <section class="hero">
            </section>
            <br>
            <section class="content">
                <div class="contact-heading">
                    <h1>Need Help With Your Project</h1>
                </div>

                <div class="row g-sm-2">
                    <div class="contact-details col-sm-6 col-md-6">
                        <div class="border detail">
                            <h3><span class="con-icon"><img src="../static/img/contact-icon/contact-icon-office2.png"></span>Our Office</h3>
                            <p>1st Floor, Rita Flynn Netball Center, Bisini Parade, Boroko, NCD</p>
                            <p>Mon - Fri: 08:00am - 05:00pm</p>
                            <p>Sat 08:30am - 03:00pm</p>
                        </div>

                        <div class="border detail">
                            <h3><span class="con-icon"><img src="../static/img/contact-icon/contact-icon-phone2.png"></span>Phone</h3>
                            <p>+675 7532 0079</p>
                            <p>+675 7121 1193</p>
                        </div>

                        <div class="border detail">
                            <h3><span class="con-icon"><img src="../static/img/contact-icon/contact-icon-email2.png"></span>Email</h3>
                            <p>sales@nexttowntech.com.pg</p>
                            <p>info@nexttowntech.com.pg</p>
                        </div>
                    </div>

                    <div class="contact-form col-sm-6 col-md-6">
                        <div class="border detail">
                            <form action='send.php' method='post'>
                                <h3>Get In Touch</h3>
                                <input type ="text" name="page" value="contacts" style="display:none">
                                <input class="form-control contact-form-input" type="text" name="name" placeholder="Name" required>
                                <input class="form-control contact-form-input" type="email" name="email" placeholder="Email" required>
                                <input class="form-control contact-form-input" type="text" name="phone" placeholder="Phone">
                                <input class="form-control contact-form-input" type="text" name="subject" placeholder="Subject">
                                <textarea class="form-control contact-form-input" rows="4" type="text" name="message" placeholder="Message" required></textarea>
                                <input class="form-control contact-form-input btn btn-primary" type="submit" name="send">
                            </form>
                        </div>
                    </div>

                    <div class="col-12 mt-5">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d4893.692516920343!2d147.1978237!3d-9.4694294!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x69023789d632be87%3A0x951d70aadf93a0a4!2sNext%20Town%20Technology%20Ltd!5e1!3m2!1sen!2spg!4v1693281245276!5m2!1sen!2spg" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </section>
            <br><br>
        </main>
<?php require_once "includes/footer.php"; ?>