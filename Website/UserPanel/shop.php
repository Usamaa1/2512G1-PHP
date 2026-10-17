<?php

include('verifyUser.php');

require('../connection/connection.php');


$getCategoryQuery = "SELECT category.categoryId as categoryId, categoryName, COUNT(categoryName) as categoryCount FROM `category` JOIN `products` ON category.categoryId = products.categoryId GROUP BY categoryName";

$getCategoryPrepare = $connection->prepare($getCategoryQuery);
$getCategoryPrepare->execute();
$getCategoryData = $getCategoryPrepare->fetchAll(PDO::FETCH_ASSOC);

// echo "<pre>";
// print_r($getCategoryData);
// echo "</pre>";




$getProductQuery = "SELECT * FROM `products`";

$getProductPrepare = $connection->prepare($getProductQuery);
$getProductPrepare->execute();
$getProductData = $getProductPrepare->fetchAll(PDO::FETCH_ASSOC);





?>



<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Shop — Sprylo</title>
  <meta name="description" content="Browse the full Sprylo catalogue — smartphones, laptops, cameras, audio, wearables, and gaming. Filter by brand, price, and rating." />
  <meta name="theme-color" content="#4F46E5" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@500;600;700;800&family=Outfit:wght@400;500;600;700&family=Roboto+Mono:wght@400;500&display=swap" />
  <link rel="stylesheet" href="assets/css/styles.css" />
</head>

<body>
  <a class="skip-link" href="#main">Skip to content</a>

  <div class="utility">
    <div class="container">
      <span class="promo"><span class="tag">SALE</span>Free shipping on orders over $50 · 30-day returns</span>
      <span class="links"><a href="#">Track order</a><a href="#">Help</a><a href="#">EN · USD</a></span>
    </div>
  </div>


  <?php include('nav.php') ?>

  <main id="main">

    <section class="page-head">
      <div class="container">
        <div class="crumbs"><a href="index.html">Home</a> <span class="sep">›</span> <span>Shop · All products</span>
        </div>
        <h1>All Products</h1>
        <p>314 products across smartphones, laptops, audio, cameras, wearables, and gaming. Use the filters on the left
          to narrow down by brand, price, rating, or availability.</p>
      </div>
    </section>

    <section class="section">
      <div class="container">
        <div class="shop-layout">

          <aside class="filters" aria-label="Filters">
            <div class="filter-block">
              <h3>Category</h3>

              <?php foreach ($getCategoryData as $category) { ?>

                <form action="" method="post">
                  <label><input type="checkbox" id="categoryName" checked value="<?= $category['categoryId'] ?>"> <?= $category['categoryName'] ?> <span class="ct"> <?= $category['categoryCount'] ?></span></label>
                </form>

              <?php } ?>
            </div>
            <div class="filter-block">
              <h3>Price range</h3>
              <div style="display:flex; justify-content:space-between; font-family:var(--ff-mono); font-size:11px; color:var(--fg-mute)">
                <span>$120</span><span>$3,400</span></div>
              <div class="range-bar" aria-hidden="true"></div>
              <div style="display:flex; justify-content:space-between; font-family:var(--ff-mono); font-size:var(--text-xs); font-weight:600; color:var(--ink); margin-top:var(--s2)">
                <span>$420</span><span>$2,380</span></div>
            </div>
            <div class="filter-block">
              <h3>Brand</h3>
              <label><input type="checkbox"> Apple <span class="ct">84</span></label>
              <label><input type="checkbox" checked> Samsung <span class="ct">72</span></label>
              <label><input type="checkbox"> Sony <span class="ct">36</span></label>
              <label><input type="checkbox"> Canon <span class="ct">22</span></label>
              <label><input type="checkbox"> HP <span class="ct">28</span></label>
              <label><input type="checkbox"> Huawei <span class="ct">19</span></label>
              <label><input type="checkbox"> Logitech <span class="ct">31</span></label>
            </div>
            <div class="filter-block">
              <h3>Rating</h3>
              <label><input type="checkbox"> ★★★★★ &amp; up <span class="ct">186</span></label>
              <label><input type="checkbox"> ★★★★☆ &amp; up <span class="ct">242</span></label>
              <label><input type="checkbox"> ★★★☆☆ &amp; up <span class="ct">296</span></label>
            </div>
            <div class="filter-block">
              <h3>Availability</h3>
              <label><input type="checkbox" checked> In stock <span class="ct">298</span></label>
              <label><input type="checkbox"> On sale <span class="ct">64</span></label>
              <label><input type="checkbox"> New arrivals <span class="ct">28</span></label>
            </div>
            <a href="#" class="btn btn--indigo btn--block">Apply filters</a>
          </aside>

          <div>
            <div class="shop-toolbar">
              <span class="count">Showing 1 – 12 of 314 products</span>
              <div style="display:flex; gap:var(--s3); align-items:center">
                <span style="font-size:var(--text-xs); color:var(--fg-mute); font-family:var(--ff-mono)">SORT</span>
                <select>
                  <option>Most popular</option>
                  <option>Price: low to high</option>
                  <option>Price: high to low</option>
                  <option>Newest first</option>
                  <option>Highest rated</option>
                </select>
              </div>
            </div>

            <div class="shop-grid">

              <?php foreach ($getProductData as $prod) { ?>
                <article class="product-card">
                  <div class="img-wrap"><button class="wishlist">♡</button><img src="../AdminPanel/assets/images/<?= $prod['prodImage'] ?>" alt="" /></div>
                  <div class="stock"><span class="dot"></span>In stock · <?= $prod['prodStock'] ?> items</div>
                  <a href="product.html" class="name"><?= $prod['prodName'] ?></a>
                  <div class="price"><span class="now">$<?= $prod['prodPrice'] ?></span></div>
                  <div class="stars">★★★★☆ <span class="count"><?= $prod['prodRating'] ?></span></div>
                  <a href="cart.html" class="btn">Order now →</a>
                </article>

              <?php } ?>


            </div>

            <div class="pagination">
              <a href="#" class="pg">‹</a>
              <a href="#" class="pg is-active">1</a>
              <a href="#" class="pg">2</a>
              <a href="#" class="pg">3</a>
              <a href="#" class="pg">…</a>
              <a href="#" class="pg">26</a>
              <a href="#" class="pg">›</a>
            </div>
          </div>

        </div>
      </div>
    </section>

    <section class="brands">
      <div class="container">
        <div class="brand-row">
          <a href="#" class="brand-logo">HP</a><a href="#" class="brand-logo">Huawei</a>
          <a href="#" class="brand-logo">Nokia</a><a href="#" class="brand-logo">Samsung</a>
          <a href="#" class="brand-logo">Canon</a><a href="#" class="brand-logo">Sony</a>
        </div>
      </div>
    </section>

  </main>

  <footer class="site-footer">
    <div class="container">
      <div class="footer-grid">
        <div class="footer-brand">
          <div class="mark"><span class="brand-mark">S</span> Sprylo</div>
          <p>Modern tech &amp; gadgets — straight from the makers, shipped fast, supported well. Since 2018, we've moved
            over 400,000 boxes.</p>
        </div>
        <div class="footer-col">
          <h4>Popular Categories</h4>
          <ul>
            <li><a href="shop.html">Laptops &amp; Desktops</a></li>
            <li><a href="shop.html">Smart Home</a></li>
            <li><a href="shop.html">Smart Watches</a></li>
            <li><a href="shop.html">Headphones</a></li>
            <li><a href="shop.html">Internal Components</a></li>
            <li><a href="shop.html">VR Headsets</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Let us help you</h4>
          <ul>
            <li><a href="#">My account</a></li>
            <li><a href="#">My order</a></li>
            <li><a href="#">Shipping policy</a></li>
            <li><a href="#">Help centre</a></li>
            <li><a href="#">Events</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Resources</h4>
          <ul>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Newsletter</a></li>
            <li><a href="#">Help centre</a></li>
            <li><a href="#">Support</a></li>
            <li><a href="#">Reviews</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Get to know us</h4>
          <ul>
            <li><a href="#">About us</a></li>
            <li><a href="contact.html">Contact</a></li>
            <li><a href="#">Login / Register</a></li>
            <li><a href="#">Terms &amp; conditions</a></li>
            <li><a href="#">Privacy policy</a></li>
            <li><a href="#">FAQs</a></li>
          </ul>
        </div>
      </div>
      <div class="footer-bottom">
        <span>© 2026 Sprylo · All rights reserved</span>
        <span>Free HTML template · No framework · No build step. Distributed by <a href="https://themewagon.com/" target="_blank">ThemeWagon</a></span>
      </div>
    </div>
  </footer>

  <script src="assets/js/main.js" defer></script>
  <script>
    let categoryName = document.querySelectorAll('#categoryName');

    categoryName.forEach(element => {
      element.addEventListener('change', (e) => {
        console.log(element.value);
        console.log(e.srcElement.checked)
      })
    });
  </script>
</body>

</html>