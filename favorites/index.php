<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hill Bay - Clothing</title>
    <link rel="stylesheet" href="../css/favoritesCSS.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
<body>
    <header>
        <nav>
            <div class="logo">
                <img src="../assets/HillBayLogo.svg" alt="">
            </div>

            <div class="search-bar">
                <input type="text" placeholder="Search" >
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
            

            <div class="top-menu" >
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
                        <li><a href="../index.php">CONTACT</a></li>
                    </ul>
                </div>
                
            </div>

            <div class="icons">
                <i class="like">
                    <a href="../index.php"><img src="../assets/like.png" alt=""></a>
                </i>
                <i class="cart">
                    <a href="../bag/index.php"><img src="../assets/cart.png" alt=""></a>
                </i>
                <i class="user" style="position: relative;">
                        <img id="show-login" src="../assets/profile.png" alt="">
                        <!-- Popup container -->
                        <div id="popup-signin" class="popup hidden">
                            <?php if (isset($_SESSION['email'])): ?>
                                <p class="welcome-user">
                                    Hello, <span class="user-email"><?php echo htmlspecialchars($_SESSION['email']); ?></span>
                                </p>
                                <form method="POST" action="../logout.php">
                                    <button class="actionBtn" type="submit">Log Out</button>
                                </form>
                            <?php else: ?>
                                <p class="welcome">Welcome To Hill Bay!</p>
                                <button class="actionBtn"><a href="../signin.html">Sign In</a></button>
                                <p class="registerTxt">Don't have an account? <a href="../signin.html">Register Here</a></p>
                            <?php endif; ?>
                        </div>
                    </i>
                <i class="hamburger">
                    <img src="../assets/Hamburger Icon.png" alt="">
                </i>
            </div> 
        </nav>
    </header>

  <main>
    <div class="like-top">
        <img src="../assets/like yellow.png" alt="">
        <h1>Favorite</h1>
    </div>

    <div class="container-product">
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
                        <button onclick="addToFavorites(`Item 2`)">
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
                        <button onclick="addToFavorites(`Item 2`)">
                            <img src="../assets/like border white.png" alt="">
                            <img src="../assets/cart.png" alt="">
                        </button>                    
                    </p>
                </div>
            </div>
        </div>
    </div>
        
        <div class="container-sidebar">
            <div class="sidebar">
                <ul>
                    <li><a href="../index.php">Home</a></li>
                    <li><a href="../index.php">About</a></li>
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
    <script src="../js/script.js"></script>
    
  </body>
  
</html>
