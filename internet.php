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
                <div class="">
                    <!-- Main Product Section -->
                    <div id="prod-cat">
                        <?php require_once "templates/brod-int.php"?>
                    </div>

                    <!-- Side Bar Enquire Form Section -->
                    <div class="side-navbar">
                        <div class="sticky-box">
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
                            <br>
                            <a id="top" type="button" class="btn btn-warning" href="#">Top</a>
                        </div>
                    </div>
                </div>
            </div>
            <br>
        </main>

        <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<?php require_once "includes/footer.php"; ?>