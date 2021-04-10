<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Razen eComm web</title>
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Owl-carousel CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous" />

    <!-- font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />

    <!-- Custom CSS file -->
    <link rel="stylesheet" href="style.css">
    <?php
    require ('functions.php');
    ?>
</head>

<body>
<header id="header">
    <nav class="navbar navbar-expand-lg navbar-light" style=" background-color: rgb(121, 202, 121); ">
        <div class="container-fluid ">
            <a class="navbar-brand " href="index.php "><span class="font-size-40 color-yellow font-rale">Razen </span><span class="font-size-20 font-rale color-yellow ">web</span></a>
            <button class="navbar-toggler " type="button " data-bs-toggle="collapse " data-bs-target="#navbarSupportedContent " aria-controls="navbarSupportedContent " aria-expanded="false " aria-label="Toggle navigation ">
                <span class="navbar-toggler-icon "></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarSupportedContent ">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                    <li class="nav-item ">
                        <a class="nav-link " aria-current="page " href="# ">Category</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link " href="# ">top mobiles</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link " href="# ">Laptops</a>
                    </li>

                    <li class="nav-item ">
                        <a class="nav-link " href="# " tabindex="-1 " aria-disabled="true ">top sales</a>
                    </li>
                </ul>
            </div>
            <form class="d-flex ">
                <input class="form-control me-3 " type="search " placeholder="Search " aria-label="Search ">
                <button class="btn btn-outline-success " type="submit ">Search</button>
            </form>
            <form action="#" class="font-size-14 font-rale px-4">
                <a href="cart.php" class="py-2 rounded-pill color-primary-bg">
                    <span class="font-size-16 px-1 text-white"><i class="fas fa-shopping-cart"></i></span>
                    <span class="px-3 py-2 rounded-pill text-dark bg-light"><?php echo count($product->getData('cart')); ?></span>
                </a>
            </form>
        </div>

    </nav>

</header>
<main id="main-site">
