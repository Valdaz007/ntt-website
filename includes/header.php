<?php 

function active_page($pgTitle, $page){
    if (strpos($pgTitle, $page) !== false) {
        return "active";
    } else {
        return "";
    }
}

?>

<!doctype html>

<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"/>

        <!-- META TAG FOR CLEARING TAGS -->
        <meta http-equiv="cache-control" content="no-cache" />
        <meta http-equiv="Pragma" content="no-cache" />
        <meta http-equiv="Expires" content="-1" />

        <!-- Tab Icon -->
        <link rel="icon" type="image/png" href="./static/img/ntt-webtitle-icon.png"/>

        <!-- Bootstrap CSS -->
        <link href="./static/css/bootstrap.min.css" type="text/css" rel="stylesheet"/>

        <!-- Custom CSS -->
        <link href="./static/css/hdfter.css" rel="stylesheet" type="text/css"/>
        <link href="./static/css/css-variables.css" type="text/css" rel="stylesheet"/>

        <link href="./static/css/<?php echo $stylesheet; ?>" rel="stylesheet" type="text/css"/>

        <title><?php echo $title; ?></title>
        <meta name="description" content="<?php echo $desc ?>"/>
    </head>

    <body>
        <div class="bg-info-img"></div>
        <header>
            <div class="header-wrapper">
                <img src="./static/ntt-logo.gif" alt="">

                <button class="btn-nav"
                        aria-controls="primary-nav"
                        aria-expanded="false">
                </button>

                <nav>
                    <ul id="primary-nav" class="primary-nav" data-visible="false">
                        <li><a href="./">Home</a></li>
                        <li><a href="./internet">Internet</a></li>
                        <li><a href="./products">Products</a></li>
                        <li><a href="./solutions">Solutions</a></li>
                        <li><a href="./contacts">Contact Us</a></li>
                        <li><a href="./company">Company</a></li>
                    </ul>
                </nav>
            </div>
        </header>

        <script src="./static/js/header.js" defer></script>