<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="copy.css">
    <link rel="stylesheet" href="mainfootr.css">

    <title>Document</title>
  </head>
  <body>
  <?php include 'nav2.php'; ?>
  <nav class="navbar">
    <!-- LOGO -->
    <div class="logo"><a href="">BOOK TOWN</a></div>
    <!-- NAVIGATION MENU -->
    <ul class="nav-links">
          <!-- USING CHECKBOX HACK -->
          <input type="checkbox" id="checkbox_toggle" />
          <label for="checkbox_toggle" class="hamburger">&#9776;</label>
          <!-- NAVIGATION MENUS -->
          <div class="menu">
          <li><a href="pp.html">Home</a></li>
          <li><a href="login.php">Login</a></li>
          <li class="services">
              <a href="/">Genres</a>
              <!-- DROPDOWN MENU -->
              <ul class="dropdown">
              <li><a href="/">Fantasy</a></li>
              <li><a href="/">Romance</a></li>
              <li><a href="/">Adventure</a></li>
              <li><a href="/">MORE</a></li>
              </ul>
          </li>
          <li><a href="#">About</a></li>
          <li><a href="#">Contact</a></li>
          </div>
      </ul>
  </nav>
  <div class="search">
    <form class="search-form">
      <input type="text" placeholder="Search for books, authors, categories and more..">
      <input type="submit" value="Submit" id="search-submit">
    </form>
  </div>
                <!-- home page start -->

  <section id="hero">
    <h4>Hurry up🏃‍♀️🏃‍♀️</h4>
    <h2>Super👍value deals</h2>
    <h1>On all books📚</h1>
    <p>save more with coupons & up to 70% off😍</p>
    <button>Shop now🛒</button>
    
  </section>
  <section id="feature" class="section-p1">
    <div class="fet-box">
      <img src="/image/features/f7.jpg" alt="free shipping">
      <h6>Free shipping</h6>

    </div>
    
    <div class="fet-box">
      <img src="/image/features/f8.png" alt="online order">
      <h6>Online Oreder</h6>

    </div>

    <div class="fet-box">
      <img src="/image/features/f9.png" alt="save money">
      <h6>Save money</h6>

    </div>

    <div class="fet-box">
      <img src="/image/features/f10.png" alt="free shipping">
      <h6>service</h6>

    </div>

    
  </section>
  <section id="book1" class="section-p1">
    <h2>Featured Books📚</h2>
    <p>new sci-fi and thriller</p>
    <div class="book-container">
      <div class="books">
        <img src="/image/Books/sci-fi1.jpg" alt="Unknown Space">
        <div class="des">
          <span>Sci-fi</span>
          <h5>Unknown Space</h5>
          <div class="writer">
            <h6>Jimmy Li Sijun</h6>
          </div>
          <h4>$10</h4>
        </div>
        <a href="#">🛒</i></a>
      </div>

      <div class="books">
        <img src="/image/Books/sci-fi1.jpg" alt="Unknown Space">
        <div class="des">
          <span>Sci-fi</span>
          <h5>Unknown Space</h5>
          <div class="writer">
            <h6>Jimmy Li Sijun</h6>
          </div>
          <h4>$10</h4>
        </div>
        <a href="#">🛒</i></a>
      </div>

      <div class="books">
        <img src="/image/Books/sci-fi1.jpg" alt="Unknown Space">
        <div class="des">
          <span>Sci-fi</span>
          <h5>Unknown Space</h5>
          <div class="writer">
            <h6>Jimmy Li Sijun</h6>
          </div>
          <h4>$10</h4>
        </div>
        <a href="#">🛒</i></a>
      </div>

      <div class="books">
        <img src="/image/Books/sci-fi1.jpg" alt="Unknown Space">
        <div class="des">
          <span>Sci-fi</span>
          <h5>Unknown Space</h5>
          <div class="writer">
            <h6>Jimmy Li Sijun</h6>
          </div>
          <h4>$10</h4>
        </div>
        <a href="#">🛒</i></a>
      </div>

      <div class="books">
        <img src="/image/Books/sci-fi1.jpg" alt="Unknown Space">
        <div class="des">
          <span>Sci-fi</span>
          <h5>Unknown Space</h5>
          <div class="writer">
            <h6>Jimmy Li Sijun</h6>
          </div>
          <h4>$10</h4>
        </div>
        <a href="#">🛒</i></a>
      </div>

      <div class="books">
        <img src="/image/Books/sci-fi1.jpg" alt="Unknown Space">
        <div class="des">
          <span>Sci-fi</span>
          <h5>Unknown Space</h5>
          <div class="writer">
            <h6>Jimmy Li Sijun</h6>
          </div>
          <h4>$10</h4>
        </div>
        <a href="#">🛒</i></a>
      </div>

      <div class="books">
        <img src="/image/Books/sci-fi3.jpeg" alt="Unknown Space">
        <div class="des">
          <span>Sci-fi</span>
          <h5>Unknown Space</h5>
          <div class="writer">
            <h6>Jimmy Li Sijun</h6>
          </div>
          <h4>$10</h4>
        </div>
        <a href="#">🛒</i></a>
      </div>

      <div class="books">
        <img src="/image/Books/sci-fi2.png" alt="Unknown Space">
        <div class="des">
          <span>Sci-fi</span>
          <h5>Unknown Space</h5>
          <div class="writer">
            <h6>Jimmy Li Sijun</h6>
          </div>
          <h4>$10</h4>
        </div>
        <a href="#">🛒</i></a>
      </div>

      
    </div>
  </section>
  <section id="footer" class="sec">
    <h4>services</h4>
    <h2>Up to <span>70% off</span>- All books</h2>
    <button>Explore More</button>
  </section>


  <section id="main-footr">
    <footer>
      <div class="footer-main">
          <div class="container">
              <div class="row">
                  <div class="col-lg-4 col-md-12 col-sm-12">
                      <div class="footer-widget">
                          <h4>About Book Hub</h4>
                          <p>When it comes to searching for books, there is only one place to turn to – Book Hub.We have a veritable collection of books that span categories as diverse as you could possibly expect. From segments like accountancy, to parenting
                              and pregnancy, to banking and finance, to even topics on yoga and meditation – almost any category you seek – you will find with us
                          </p>
                        
                      </div>
                  </div>
                  <div class="col-lg-4 col-md-12 col-sm-12">
                      <div class="footer-link-contact">
                          <h4>Contact Us</h4>
                          <ul>
                              <li>
                                  <p><i class="fas fa-map-marker-alt"></i>Address: KSI, Malad west<br>Mumbai, MAHARASHTRA <br> Pin 400064 </p>
                              </li>
                              <li>
                                  <p><i class="fas fa-phone-square"></i>Phone: <a href="tel:+1-123455" style="color: red; text-decoration: none;">+91-1234567890</a></p>
                              </li>
                              <li>
                                  <p><i class="fas fa-envelope"></i>Email: <a href="ankit.dhivar2001@gmail.com" style="color: red; text-decoration: none;">ankit.dhivar2001@gmail.com</a></p>
                              </li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </footer>
  <!-- End Footer  -->
  </section>

  
      <!-- Start copyright  -->
      <?php include 'copyright.php'; ?>
  </body>
</html>
