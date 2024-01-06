<?php
    $title = "NTT | PROJECT GALLERY";
    $stylesheet = "gallery.css";
    require_once "includes/header.php";
?>

        <!--########### Page Content ##################-->
        <link rel="stylesheet" type="text/css" href="./static/css/lightbox.min.css">
        
        <main>
            <div class="pjx-content container-fluid">
                <br>
                <h1>Project Gallery</h1>
                <br>

                <!-- Project Column-->
                <div class="row mb-5 p-3 pjx">
                    <div class="col-12 col-md-4 pjx-img">
                        <img class="pic" src="images/mm2.jpg" alt="">
                    </div>
                    
                    <div class="col-12 col-md-8 pjx-body mt-3">
                        <h4>Magisterial Services VSAT Installation</h4>
                        <h6>Location: Down Town Office</h6>
                        <p class="mb-4">
                            Magisterial Services PNG has been one of our company's regular clients. 
                            Seen below is one of a number of projects that our company had been engaged 
                            in to provide broadband internet service for Megisterial Services PNG. This 
                            VSAT installation is set up as secondary internet link for the Magisterial 
                            Services PNG.
                        </p>
                        <a href="#" class="btn btn-warning btn-sm pjx-btn">Read More. . .</a>
                    </div>
                </div>

                <div class="row mb-5 p-3 pjx">
                    <div class="col-12 col-md-4 pjx-img">
                        <img class="featured-img" src="images/fiberinstallation2.png" alt="">
                    </div>
                    
                    <div class="col-12 col-md-8 pjx-body mt-3">
                            <h4 class="pjx-heading">National Energy Authority Optical Fiber Installation</h4>
                            <h6 class="pjx-subheading">Location: HQ Waigani Dr</h6>
                            <p class="mb-4 pjx-brief">
                                National Energy Authority (NEA) is one of our value customers that uses our
                                Broadband Optical Fiber Internet Service as well as occasional Infrastructure
                                Cabling, Wi-Fi office setup and Network Monitoring.
                            </p>
                        <a href="#" class="btn btn-warning btn-sm pjx-btn">Read More. . .</a>
                    </div>
                </div>

            </div>
        </main>

        <script type="text/javascript" src="./static/js/lightbox-plus-jquery.min.js"></script>
        

<?php require_once "includes/footer.php"; ?>