<?php
    $title = "Fast, Reliable & Cheap Internet Service in PNG | HOME";
    $desc = "Next Town Technology Ltd is your all in one IT Solutions Provider. Light Speed Internet Solutions, Cloud Solutions and Website & Email Solutions.";
    $stylesheet = "index.css";
    require_once "includes/header.php";
?>

        <main>
            <!-- Hero Section -->
            <?php require_once "includes/indexHeroCarousel.php"; ?>

            <!-- Index Content -->
            <div class="index-content">

                <!-- Service Card Section-->
                <section class="services">
                    <div class="services-header-cont">
                        <h2 class="services-heading">Our Services</h2>
                    </div>
            
                    <div class="services-cont mt-5">
                        <div class="service-card">
                            <img src="./static/img/service-img/prof-image3.1 - 300x300.jpg" class="card-img-top" alt="Rack Installation">
                            <div class="service-cont">
                                <h5 class="card-title">Professional</h5>
                                <p class="card-text">
                                    Design, Implement a Network Infrastructure 
                                    that suit your organizations needs.
                                </p>
                            </div>
                        </div>
            
                        <div class="service-card">
                            <img src="./static/img/service-img/broad-img1.1 - 300x300.jpg" class="card-img-top" alt="VSAT Installation">
                            <div class="service-cont">
                                <h5 class="card-title">Broadband</h5>
                                <p class="card-text">
                                    We provide the best Broadband Internet Service 
                                    that can cover any type of Business.
                                </p>
                            </div>
                        </div>
            
                        <div class="service-card">
                            <img src="./static/img/service-img//manage-image1.1 - 300x300.jpg" class="card-img-top" alt="Network Management">
                            <div class="service-cont">
                                <h5 class="card-title">Managed</h5>
                                <p class="card-text">
                                    Let us manage your Network Infrastructure
                                    giving you more time to focus on your goals.
                                </p>
                            </div>
                        </div>
                    </div>
                </section>
                <br><br>

                <!-- Brief Info Section -->
                <section class="bg-brinfo">
                    <div class="services-header-cont mb-3">
                        <h2 class="services-heading">Who We Are</h2>
                    </div>
                    <div class="br-info">
                        <div class="info-img-wrapper">
                            <div class="img-info"></div>
                        </div>
                        <div class="content-info-wrapper">
                            <div class="content-info">
                                <p class="info-para">
                                    We’re a young talented group of Entrepreneurs and Engineers with 
                                    groundbreaking idea that we hope will contribute towards a better tomorrow. 
                                    We provide Smart Solutions for Companies of all size and pride ourselves on 
                                    our Unparalleled Dedicated Service.
                                </p>
                                <p class="info-para">
                                    At Next Town Technology we believe that the right understanding and 
                                    technical edge can lead companies towards a successful future. We always 
                                    seek valuable feedback from our clients in order to learn and evolve.
                                </p>
                                <a class="info-btn btn-sm btn-success" href="./company">Learn More About Us</a>
                            </div>
                        </div>
                    </div>
                    <br>
                </section>

                <!-- Solutions Section -->
                <section class="solution">
                    <div class="solution-title">
                        <h2 class="soln-heading">Our Solutions</h2>
                    </div>
                    
                    <div class="row g-3 gx-lg-5 solution-services">
                        <div class="col-6 col-sm-4 col-md-3 soln">
                            <div class="card" style="height: 100%;">
                                <img class="card-img-top" src="./static/img/index-soln-img/Cloud-Hosting.jpg" alt="Card image cap">
                                <div class="card-body soln-body">
                                    <h5 class="card-title">Cloud Hosting</h5>
                                    <a href="/solutions#cloud" class="btn btn-sm">Learn More</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-sm-4 col-md-3 soln">
                            <div class="card" style="height: 100%">
                                <img class="card-img-top" src="./static/img/index-soln-img/Web-Hosting.jpg" alt="Card image cap">
                                <div class="card-body soln-body">
                                    <h5 class="card-title">Website & Email Hosting</h5>
                                    <a href="/solutions#cloud" class="btn btn-sm">Learn More</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-sm-4 col-md-3 soln">
                            <div class="card" style="height: 100%">
                                <img class="card-img-top" src="./static/img/index-soln-img/App-Development.jpg" alt="Card image cap">
                                <div class="card-body soln-body">
                                    <h5 class="card-title">App Development</h5>
                                    <a href="#" class="btn btn-sm">Learn More</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-sm-4 col-md-3 soln">
                            <div class="card" style="height: 100%">
                                <img class="card-img-top" src="./static/img/index-soln-img/Netw-Mng.jpg" alt="Card image cap">
                                <div class="card-body soln-body">
                                    <h5 class="card-title">Network Management</h5>
                                    <a href="/solutions#netw" class="btn btn-sm">Learn More</a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-6 col-sm-4 col-md-3 soln">
                            <div class="card" style="height: 100%">
                                <img class="card-img-top" src="./static/img/index-soln-img/WiFi.jpg" alt="Card image cap">
                                <div class="card-body soln-body">
                                    <h5 class="card-title">WiFi Deployment</h5>
                                    <a href="/solutions#netw" class="btn btn-sm">Learn More</a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-6 col-sm-4 col-md-3 soln">
                            <div class="card" style="height: 100%">
                                <img class="card-img-top" src="./static/img/index-soln-img/Structured-Cabling.jpg" alt="Card image cap">
                                <div class="card-body soln-body">
                                    <h5 class="card-title">Structure Cabling</h5>
                                    <a href="/solutions#netw" class="btn btn-sm">Learn More</a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-6 col-sm-4 col-md-3 soln">
                            <div class="card" style="height: 100%">
                                <img class="card-img-top" src="./static/img/index-soln-img/Device-Procurement.jpg" alt="Card image cap">
                                <div class="card-body soln-body">
                                    <h5 class="card-title">Device & Software Procurement</h5>
                                    <a href="/solutions#procure" class="btn btn-sm">Learn More</a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-6 col-sm-4 col-md-3 soln">
                            <div class="card" style="height: 100%">
                                <img class="card-img-top" src="./static/img/index-soln-img/Telco-Soln.jpg" alt="Card image cap">
                                <div class="card-body soln-body">
                                    <h5 class="card-title">Telco Solutions</h5>
                                    <a href="/solutions#procure" class="btn btn-sm">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <br><br>
                
                <!-- Clients Section -->
                <section class="clients">
                    <div class="clients-heading">
                        <h2>Our Valued Clients</h2>
                    </div>

                    <div class="scroller">
                        <div class="scroller-inner">
                            <img src="./static/img/clients/NEA Logo - 500x500.PNG" class="card-img-top">
                            <img src="./static/img/clients/Myanmar Eng - 500x500.png" class="card-img-top">
                            <img src="./static/img/clients/Mosin Plaza Logo Trace - 500x500.png" class="card-img-top">
                            <img src="./static/img/clients/RTA-Logo.jpg" class="card-img-top">
                            <img src="./static/img/clients/KM_Logo_RGB.png" class="card-img-top">
                            <img src="./static/img/clients/PNG_Sports_Foundation.gif" class="card-img-top">
                            <img src="./static/img/clients/Guyu-Logo.avif" class="card-img-top">
                        </div>
                    </div>
                </section>
                <br><br>
            </div>
        </main>
        <script src="./static/js/carousel.js" defer></script>

<?php require_once "includes/footer.php"; ?>