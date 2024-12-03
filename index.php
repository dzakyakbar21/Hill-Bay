<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hill Bay - Clothing</title>
    <link rel="icon" href="./assets/HillBay png.png">
    <link rel="stylesheet" href="./css/homeCSS.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
<body>
    <header>
        <nav>
            <div class="navbar-container">
                <div class="logo">
                    <img src="./assets/HillBayLogo.svg" alt="">
                </div>

                <div class="search-bar">
                    <input type="text" placeholder="Search">
                </div>

                <div class="ul-pc">
                    <ul>
                        <li><a href="#about">ABOUT</a></li>
                        <li class="batas">|</li>
                        <li><a href="./products/index.php">PRODUCTS</a></li>
                        <li class="batas">|</li>
                        <li><a href="./contact/index.php">CONTACT</a></li>
                    </ul>
                </div>

                <div class="top-menu">
                  <div class="close">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fff" class="size-6">
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
                        <a href="./favorites/index.php"><img src="./assets/like.png" alt=""></a>
                    </i>
                    <i class="cart">
                        <a href="./bag/index.php"><img src="./assets/cart.png" alt=""></a>
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
                </div>
            </div>
        </nav>
    </header>

    <main>
    <section class="hero">  
        <div class="hero-content-1">
            <h1>Peaks Of Style, <br><span>Waves Of Comfort</span></h1>
        </div>

        <div class="hero-content-2">
            <p>Welcome to HillBay. Your new favorite spot for comfy, stylish clothes that go with everything. Our pieces are all about keeping things simple, versatile, and easy to wear, so you can look good without trying too hard. From chill days to hanging out with friends, we've got you covered with high-quality fabrics and designs that just feel right. At HillBay, it’s all about being yourself, effortlessly.</p>
            <a href="./products/index.php" class="button">Shop More‎ ‎ →</a>
        </div>

        <div class="display-tee" data-aos="zoom-in" data-aos-duration="2000" data-aos-easing="ease-in-sine">
                <img src="./assets/LBJ erase bg.png" alt="Front T-Shirt" >
        </div>
        </section>
        
        <div class="container-what" data-aos="fade-" data-aos-duration="2000" data-aos-delay="200" >
            <p id="about">What is <span>HILL BAY?</span></p>
        </div>
    
        <div class="container-hero2" >
            <div class="column left-column1" data-aos="fade-in" data-aos-duration="2000" data-aos-delay="600">
                <li><img src="./assets/HillBay png.png" alt=""></li>
            </div>
            <div class="column right-column1" data-aos="fade-in" data-aos-duration="2000" data-aos-delay="600">
                <li><strong>Hill Bay</strong> is a clothing brand founded in 2024, by two university student. The reason it was created is because the two friends can’t find the design they want when looking for graphic tee, so they decided to make their own.</li>
            </div>
        </div>
       
    
        <div class="hero-3" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="800">
            <img src="./assets/hero 3.png" alt="">
        </div>
    
        <div class="container-explore">
            <div class="column left-column2"  data-aos="fade-up" data-aos-duration="2000">
                <li>Explore <span>Our Range</span></li>
            </div>
            <div class="column right-column2"  data-aos="fade-up" data-aos-duration="2000" data-aos-delay="400">
                <li>We source only the finest materials to ensure durability and comfort, giving you the best value for your investment.</li>
            </div>
        </div>
    
        <div class="container-product">
            <div class="column1">
                <div class="card">
                    <a href=""><img src="./assets/Fine Tee.png" alt="Card Image" class="card-img"></a>
                    <div class="card-body">
                        <h2 class="card-title">Fine Tee</h2>
                        <p class="card-text">Rp. 110.000</p>
                    </div>
                </div>
            </div>

            <div class="column1">
                <div class="card">
                    <a href="./infoProduct/index.html"><img src="./assets/ButterflyTee.png" alt="Card Image" class="card-img"></a>
                    <div class="card-body">
                        <h2 class="card-title">Butterfly Tee</h2>
                        <p class="card-text">Rp. 110.000</p>
                    </div>
                </div>
            </div>
            <div class="column1">
                <div class="card">
                    <a href=""><img src="./assets/Curry Tee.png" alt="Card Image" class="card-img"></a>
                    <div class="card-body">
                        <h2 class="card-title">Curry Tee</h2>
                        <p class="card-text">Rp. 110.000</p>
                    </div>
                </div>
            </div>
            <div class="column1">
                <div class="card">
                    <a href=""><img src="./assets/Ja Morant Tee.png" alt="Card Image" class="card-img"></a>
                    <div class="card-body">
                        <h2 class="card-title">Ja Morant Tee</h2>
                        <p class="card-text">Rp. 110.000</p>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="discover">
            <p>Discover <span><a href="#">More</a></span></p>
        </div>
    
        <div class="container-spend">
            <p>Spend Your Money Here</p>
        </div>
    
        <div class="container-social" id="social">
            <a href="https://www.instagram.com/hillbay.co/" target="_blank"><img src="./assets/ig.png" alt=""></a>
            <a href=" https://wa.me/6281260600713" target="_blank"><img src="./assets/wa.png" alt=""></a>
        </div>

        <div class="container-sidebar">
            <div class="sidebar">
                <ul>
                    <li><a href="../index.php">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#">Catalog</a></li>
                    <li><a href="#">FAQ</a></li>
                </ul>
            </div>
        </div>
    </main>

     <footer>
        <p>&copy; 2024 Hill Bay. All rights reserved.</p>
    </footer>

    <script>
        // Elements for popup functionality
        const showLoginIcon = document.getElementById('show-login');
        const popup = document.getElementById('popup-signin');

        // Toggle popup on clicking the user icon
        showLoginIcon.addEventListener('click', () => {
            popup.classList.toggle('hidden');
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="./js/script.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script> AOS.init(); </script>

</body>
</html>