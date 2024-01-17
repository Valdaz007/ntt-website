<?php
    $title = "Cheap Unlimited Internet in Papua New Guinea | PRODUCTS";
    $desc = "Suitable Internet Plans for Home, Small - Medium Businesses and Corperations.";
    $stylesheet = "products.css";
    require_once "includes/header.php";
?>

        <main>
            <div class="bg-info-img"></div>
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
            </section><br> 

            <div class="content">
                <!-- Product Services  Links -->
                <nav class="row navbar navbar-expand-md navbar-light">
                    <div class="container">
                        
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-left mb-2 mb-md-0">
                                <li class="nav-item"><button class="nav-link btn" id="brod-int">Broadband Internet</button></li>
                                <li class="nav-item"><button class="nav-link btn" id="web-mail">Email & Website Packages</button></li>
                            </ul>
                        </div>
                    </div>
                </nav><br>
                
                <div class="">
                    <!-- Main Product Section -->
                    <div class="" id="prod-cat">
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
        <script>
            $(document).ready(function() {
                $("#web-mail").click(function() {
                    console.log("Confirm")
                    $("#prod-cat").load("templates/web-mail.php");
                });
                
                $("#brod-int").click(function() {
                    console.log("Confirm")
                    $("#prod-cat").load("templates/brod-int.php");
                });
            });
        </script>

<?php require_once "includes/footer.php"; ?>