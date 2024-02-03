<?php
    $title = "Cheap Unlimited Internet in Papua New Guinea | PRODUCTS";
    $desc = "Suitable Internet Plans for Home, Small - Medium Businesses and Corperations.";
    $stylesheet = "products.css";
    require_once "includes/header.php";
?>

        <main>
            <!-- Hero Section -->
            <section class="hero">
                <div class="hero-content">
                    <div class="hero-inner-cont" >
                        <div class="hero-heading">
                            <h1 class="hero-title">FOR THE ULTIMATE INTERNET EXPERIENCE!</h1>
                            <h3 class="hero-sub-title">Check Out Our Broadband Internet Services</h3>
                        </div>
                    </div>
                </div>
            </section>

            <div class="content">  
                <!-- Main Product Section -->
                <div id="prod-cat">
                    <?php require_once "templates/brod-int.php"?>
                </div>

                <!-- Enquire Form Section -->
                <div class="contact-location">
                    <div class="contact-locate-wrapper">
                        <div class="enquiry">
                            <form action="send.php" method="post" class="product-form">
                                <h4>Enquire Now</h4>
                                <hr>
                                <input type ="text" name="page" value="products" style="display:none">
                                <input type ="text" name="subject" value="Products Enquiry" style="display:none">
                                <input class="form-control prod-input" type = "text" name="name" placeholder="Name" required>
                                <input class="form-control prod-input" type = "email" name="email" placeholder="Email" required>
                                <input class="form-control prod-input" type = "text" name="phone" placeholder="Phone">
                                <textarea class="form-control prod-input" rows="4" type = "text" name="message" placeholder="Message" required></textarea>
                                <input class="btn btn-primary prod-input" type="submit" name="send">
                            </form>
                            <!-- <a id="top" type="button" class="btn btn-warning" href="#">Top</a> -->
                        </div>

                        <div class="locate card">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d4893.692516920343!2d147.1978237!3d-9.4694294!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x69023789d632be87%3A0x951d70aadf93a0a4!2sNext%20Town%20Technology%20Ltd!5e1!3m2!1sen!2spg!4v1693281245276!5m2!1sen!2spg" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </main>

<?php require_once "includes/footer.php"; ?>