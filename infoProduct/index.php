<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hill Bay - Products</title>
    <link rel="icon" href="./assets/HillBay png.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/infoProductCSS.css">
    <style>
        .registerTxt {
            color: black;
            font-style: normal;
            font-size: 10px;
        }

        .registerTxt a {
            color: black;
            font-weight: 600;
            font-size: 10px;
        }

        .registerTxt a:hover {
            color: #D6BC9B;
        }

        .welcome {
            color: black;
            font-style: normal;
            font-size: 18px;
            padding: 10px 0px 10px;
        }

        .hidden {
            display: none;
        }

        /* Styling for popup */
        .popup {
            position: absolute;
            top: 150%; /* Adjusted position to appear below the icon */
            right: 0px;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            z-index: 1000;
            width: 250px;
            text-align: center;
        }

        /* Close button styling (removed for toggle functionality) */
        .actionBtn {
            padding: 10px 75px;
            background-color: #D6BC9B;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin: 10px 0;
        }

        .actionBtn:hover {
            background-color: #A18663;
        }

        .welcome-user {
            font-style: normal;
            font-weight: 400;
            color: black;
        }

        .welcome-user .user-email {
            font-weight: 600;
            color: black;
        }
    </style>
</head>

<body>

    </head>

    <body>
        <header>
            <nav>
                <div class="logo">
                    <img src="../assets/HillBayLogo.svg" alt="">
                </div>

                <div class="search-bar">
                    <input type="text" placeholder="Search">
                </div>

                <div class="ul-pc">
                    <ul>
                        <li><a href="../index.php">ABOUT</a></li>
                        <li class="batas">|</li>
                        <li><a href="../products/index.php">PRODUCTS</a></li>
                        <li class="batas">|</li>
                        <li><a href="../contact/index.php">CONTACT</a></li>
                    </ul>
                </div>


                <div class="top-menu">
                    <div class="close">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="#fff" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                        </svg>
                    </div>

                    <div class="ul-handphone">
                        <ul>
                            <li><a href="../index.php">ABOUT</a></li>
                            <li class="batas">|</li>
                            <li><a href="../products/index.php">PRODUCTS</a></li>
                            <li class="batas">|</li>
                            <li><a href="../contact/index.php">CONTACT</a></li>
                        </ul>

                    </div>
                </div>

                <div class="icons">
                    <i class="like">
                        <a href="../favorites/index.    "><img src="../assets/like.png" alt=""></a>
                    </i>
                    <i class="cart">
                        <a href="../bag/index.html"><img src="../assets/cart.png" alt=""></a>
                    </i>
                    <i class="user" style="position: relative;">
                        <img id="show-login" src="./assets/profile.png" alt="">
                        <!-- Popup container -->
                        <div id="popup-signin" class="popup hidden">
                            <?php if (isset($_SESSION['email'])): ?>
                                <p class="welcome-user">
                                    Hello, <span class="user-email"><?php echo htmlspecialchars($_SESSION['email']); ?></span>
                                </p>
                                <form method="POST" action="logout.php">
                                    <button class="actionBtn" type="submit">Log Out</button>
                                </form>
                            <?php else: ?>
                                <p class="welcome">Welcome To Hill Bay!</p>
                                <button class="actionBtn"><a href="signin.html">Sign In</a></button>
                                <p class="registerTxt">Don't have an account? <a href="signin.html">Register Here</a></p>
                            <?php endif; ?>
                        </div>
                    </i>
                    <i class="hamburger">
                        <img src="../assets/Hamburger Icon.png" alt="">
                    </i>
                </div>

            </nav>
        </header>


        <div class="container-products-top">
            <div class="column-left-top">

                <div id="carouselExampleIndicators" class="carousel slide">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="../assets/ButterflyTee.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="../assets/ButterflyTee.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="../assets/ButterflyTee.png" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

                <div class="e-commerce">
                    <a href=""><img src="../assets/tokopedia.png" alt=""></a>
                    <a href=""><img src="../assets/shopee.png" alt=""></a>
                    <a href=""><img src="../assets/tiktok.png" alt=""></a>

                    <div class="like-info">
                        <a href=""><img src="../assets/like border yellow.png" alt=""></a>
                    </div>

                </div>

                <!-- <div class="preview-butter">
                    <a href=""><img src="./assets/preview butter1.png" alt=""></a>
                    <a href=""><img src="./assets/preview butter2.png" alt=""></a>   
                </div> -->

            </div>

            <div class="column-right-top">

                <div class="our-top">
                    <h1>Butterflies Graphic Shirt</h1>

                    <p class="desc-top">“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua.”</p>
                    
                    <p class="desc-disc"><strong>Rp 200.000</strong></p>

                    <p class="desc-price">RP 120.000</p>

                    <div class="container-color">
                        <div class="default">

                            <a href=""><img class="pertama" href src="../assets/white color.png" alt=""></a>
                            <a href="../infoProduct/index.html"><img class="kedua" src="../assets/hoover black color.png" alt=""></a>
                            <a href=""><img class="ketiga" src="../assets/brown color.png" alt=""></a>  
                            
                        </div>

                       <div class="buy-bag-btn">
                            <a href=""><button>Buy Now</button></a>
                            <a class="right-btn" href=""><button>Add To Bag</button></a>
                        </div>
                        
                    </div>
                </div>

            </div>
        </div>

        <div class="discover-products">
            <p>Our <span> Collection</span></p>
        </div>
      
        <div class="container-product-bottom">
            <div class="column1">
                <div class="card">
                    <img src="../assets/GreatnessBeigeTee.png" alt="Card Image" class="card-img">
                    <div class="card-body">
                        <h2 class="card-title">Greatness Tee</h2>
                        <p class="card-text-discount">Rp. 150.000</p>
                        <p class="card-text">Rp. 110.000
                          <button onclick="addToFavorites(`Item 1`)">
                              <img src="../assets/like border white.png" alt="">
                              <img src="../assets/cart.png" alt="">
                          </button>
                      </p>
                    </div>
                </div>
            </div>
            <div class="column1">
                <div class="card">
                    <img src="../assets/GreatnessBlackTee.png" alt="Card Image" class="card-img">
                    <div class="card-body">
                        <h2 class="card-title">Butterfly Tee</h2>
                        <p class="card-text-discount">Rp. 150.000</p>
                        <p class="card-text">Rp. 110.000
                          <button onclick="addToFavorites(`Item 1`)">
                            <img src="../assets/like border white.png" alt="">
                            <img src="../assets/cart.png" alt="">
                          </button>
                      </p>
                    </div>
                </div>
            </div>
            <div class="column1">
                <div class="card">
                    <img src="../assets/GreatnessBeigeTee.png" alt="Card Image" class="card-img">
                    <div class="card-body">
                        <h2 class="card-title">Greatness Tee</h2>
                        <p class="card-text-discount">Rp. 150.000</p>
                        <p class="card-text">Rp. 110.000
                          <button onclick="addToFavorites(`Item 1`)">
                            <img src="../assets/like border white.png" alt="">
                            <img src="../assets/cart.png" alt="">
                          </button>
                      </p>
                    </div>
                </div>
            </div>
            <div class="column1">
                <div class="card">
                    <img src="../assets/GreatnessBlackTee.png" alt="Card Image" class="card-img">
                    <div class="card-body">
                        <h2 class="card-title">Butterfly Tee</h2>
                        <p class="card-text-discount">Rp. 150.000</p>
                        <p class="card-text">Rp. 110.000
                          <button onclick="addToFavorites(`Item 1`)">
                            <img src="../assets/like border white.png" alt="">
                            <img src="../assets/cart.png" alt="">
                          </button>
                      </p>
                    </div>
                </div>
            </div>
            <div class="column1">
                <div class="card">
                    <img src="../assets/GreatnessBlackTee.png" alt="Card Image" class="card-img">
                    <div class="card-body">
                        <h2 class="card-title">Butterfly Tee</h2>
                        <p class="card-text-discount">Rp. 150.000</p>
                        <p class="card-text">Rp. 110.000
                          <button onclick="addToFavorites(`Item 1`)">
                            <img src="../assets/like border white.png" alt="">
                            <img src="../assets/cart.png" alt="">
                          </button>
                      </p>
                    </div>
                </div>
            </div>
                
          </div>



        <!-- Notifikasi -->
        <div id="notification" class="hidden">Added to Like</div>

        </div>



        <div class="container-sidebar">
            <div class="sidebar">
                <ul>
                    <li><a href="../index.html">Home</a></li>
                    <li><a href="../index.html">About</a></li>
                    <li><a href="#">Catalog</a></li>
                    <li><a href="#">FAQ</a></li>
                </ul>
            </div>
        </div>



        <footer>
            <p>&copy; 2024 Hill Bay. All rights reserved.</p>
        </footer>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"
            integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <script src="./js/script.js"></script>

    </body>

</html>