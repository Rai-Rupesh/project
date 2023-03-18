<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>

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