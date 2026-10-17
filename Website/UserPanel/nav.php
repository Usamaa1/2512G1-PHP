
<?php 
  session_start();

$firstName = $_SESSION['firstName'][0];
$lastName = $_SESSION['lastName'][0];


?>



  <!-- Header -->
  <header class="site-header">
    <div class="container">
      <a href="index.html" class="brand">
        <span class="brand-mark">S</span>
        Sprylo
      </a>

      <form class="search" role="search" onsubmit="event.preventDefault();">
        <input type="text" placeholder="Search for products, brands, categories…" aria-label="Search the store" />
        <button type="submit" aria-label="Search">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"><circle cx="11" cy="11" r="7"/><path d="M21 21l-4.3-4.3"/></svg>
        </button>
      </form>

      <div class="icon-row myIcon" id="myIcon">
        <a href="#" id="userIcon" class="icon-btn" aria-label="Account">
        <p style="font-size: 20px;"><?= $firstName . $lastName ?></p>
        <div class="userBox" id="userBox">
          <p><?=$_SESSION['firstName'] ." ". $_SESSION['lastName'] ?></p>
          <p style="padding-bottom: 8px"><?=$_SESSION['email'] ?></p>
          <a href="logout.php" class="all-cats">Logout</a>
        </div>
        </a>

      

        <a href="#" class="icon-btn" aria-label="Wishlist">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>
          <span class="count">3</span>
        </a>
        <a href="cart.html" class="icon-btn icon-btn--cart" aria-label="Cart">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 2l-2 5v13a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7l-2-5z"/><path d="M4 7h16"/><path d="M16 11a4 4 0 0 1-8 0"/></svg>
          <span class="count">2</span>
        </a>
        <button class="nav-toggle" aria-label="Open menu" aria-expanded="false">≡</button>
      </div>
    </div>
  </header>

  <!-- Category nav -->
  <nav class="nav-bar" aria-label="Primary">
    <div class="container">
      <a href="shop.php" class="all-cats">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round"><line x1="3" y1="6" x2="21" y2="6"/><line x1="3" y1="12" x2="21" y2="12"/><line x1="3" y1="18" x2="21" y2="18"/></svg>
        All Categories
      </a>
      <div class="main-nav">
        <a href="index.php" aria-current="page">Home</a>
        <a href="shop.php">Shop ▾</a>
        <a href="product.php">Products</a>
        <a href="cart.php">Cart</a>
        <a href="contact.php">Contact</a>
      </div>
      <span class="nav-cta">UP TO <strong>60% OFF</strong> ALL ITEMS</span>
    </div>
  </nav>

  <!-- Mobile drawer -->
  <div class="drawer" id="drawer" aria-hidden="true">
    <div class="drawer-head">
      <a href="index.php" class="brand"><span class="brand-mark">S</span> Sprylo</a>
      <button class="drawer-close" aria-label="Close menu">Close ✕</button>
    </div>
    <a href="index.php">Home</a>
    <a href="shop.php">Shop</a>
    <a href="product.php">Products</a>
    <a href="cart.php">Cart</a>
    <a href="contact.php">Contact</a>
    <a href="cart.php" class="btn btn--indigo" style="margin-top:var(--s5); justify-content:center">View cart →</a>
  </div>