<?php

session_start();

include "../connection/connection.php";
include('verifyUser.php');


$userId = $_SESSION['userId'];


$cartQuery = "SELECT * FROM `cart` join `products` on products.id = cart.prod_id  WHERE `user_id`= :userId";
$cartPrepare = $connection->prepare($cartQuery);
$cartPrepare->bindParam(':userId', $userId, PDO::PARAM_INT);
$cartPrepare->execute();
$cartData = $cartPrepare->fetchAll(PDO::FETCH_ASSOC);
echo "<pre>";
print_r($cartData);
echo "</pre>";



if (isset($_POST['btnDel'])) {
  $cartId = $_POST['cartId'];
  $cartDeleteQuery = "DELETE FROM `cart` WHERE `cart_id` = :id";
  $cartDeletePrepare = $connection->prepare($cartDeleteQuery);
  $cartDeletePrepare->bindParam(':id', $cartId, PDO::PARAM_INT);
  if ($cartDeletePrepare->execute()) {
    header("location:cart.php");
  }
}



?>




<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Cart — Sprylo</title>
  <meta name="description" content="Your Sprylo shopping cart — review items, apply a promo code, and proceed to secure checkout." />
  <meta name="theme-color" content="#4F46E5" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@500;600;700;800&family=Outfit:wght@400;500;600;700&family=Roboto+Mono:wght@400;500&display=swap" />
  <link rel="stylesheet" href="assets/css/styles.css" />
</head>

<body>
  <a class="skip-link" href="#main">Skip to content</a>

  <div class="utility">
    <div class="container"><span class="promo"><span class="tag">SALE</span>Free shipping on orders over $50 · 30-day
        returns</span><span class="links"><a href="#">Track order</a><a href="#">Help</a><a href="#">EN · USD</a></span>
    </div>
  </div>



  <?php include('nav.php') ?>

  <main id="main">

    <section class="page-head">
      <div class="container">
        <div class="crumbs"><a href="index.html">Home</a> <span class="sep">›</span> <span>Shopping cart</span></div>
        <h1>Your cart</h1>
        <p>3 items · ready to ship. Free delivery on this order. Estimated arrival 21 – 23 May.</p>
      </div>
    </section>

    <section class="section">
      <div class="container">
        <div class="cart-layout">

          <div>
            <div class="cart-list">


              <?php foreach ($cartData as $prod) { ?>
                <article class="cart-row">
                  <div class="pic"><img src="../AdminPanel/assets/images/<?= $prod['prodImage'] ?>" alt="" /></div>
                  <div class="info">
                    <div class="name"><?= $prod['prodName'] ?></div>
                    <div class="variant">★<?= $prod['prodRating'] ?></div>
                  </div>
                  <div class="qty">
                    <button data-act="-" aria-label="Decrease" id="decQty">−</button>
                    <input type="text" id="qty" value="<?= $prod['quantity'] ?>" inputmode="numeric" aria-label="Quantity" />
                    <button data-act="+" aria-label="Increase" id="incQty">+</button>
                  </div>
                  <input type="hidden" id='prodPrice' value="<?=$prod['prodPrice'] ?>">
                  <span class="subtotal" id="prodTotalPrice">$<?=  $prod['quantity']  * $prod['prodPrice'] ?></span>
                  <form action="" method="post">
                    <input type="hidden" name="cartId" value="<?= $prod['cart_id'] ?>">
                    <button type="submit" name="btnDel" class="remove" aria-label="Remove">✕</button>
                  </form>
                </article>
              <?php } ?>

            </div>

            <div style="margin-top: var(--s5); display: flex; gap: var(--s3); flex-wrap: wrap">
              <a href="shop.html" class="btn btn--ghost">← Continue shopping</a>
              <button class="btn btn--ghost">Update cart</button>
            </div>

            <!-- Trust strip -->
            <div style="margin-top: var(--s7); display: grid; grid-template-columns: repeat(3, 1fr); gap: var(--s4); padding: var(--s5); background: var(--bg); border-radius: var(--r)">
              <div style="display:flex; align-items:center; gap:var(--s3)">
                <div style="width:40px; height:40px; background:var(--indigo-soft); color:var(--indigo); border-radius:999px; display:grid; place-items:center; font-size:18px">
                  ⚡</div>
                <div>
                  <div style="font-family:var(--ff-display); font-weight:700; font-size:var(--text-sm)">Free fast
                    shipping</div>
                  <div style="font-family:var(--ff-mono); font-size:11px; color:var(--fg-mute)">2 — 3 business days
                  </div>
                </div>
              </div>
              <div style="display:flex; align-items:center; gap:var(--s3)">
                <div style="width:40px; height:40px; background:var(--indigo-soft); color:var(--indigo); border-radius:999px; display:grid; place-items:center; font-size:18px">
                  ↺</div>
                <div>
                  <div style="font-family:var(--ff-display); font-weight:700; font-size:var(--text-sm)">30-day free
                    returns</div>
                  <div style="font-family:var(--ff-mono); font-size:11px; color:var(--fg-mute)">No questions asked</div>
                </div>
              </div>
              <div style="display:flex; align-items:center; gap:var(--s3)">
                <div style="width:40px; height:40px; background:var(--indigo-soft); color:var(--indigo); border-radius:999px; display:grid; place-items:center; font-size:18px">
                  ★</div>
                <div>
                  <div style="font-family:var(--ff-display); font-weight:700; font-size:var(--text-sm)">2-year warranty
                  </div>
                  <div style="font-family:var(--ff-mono); font-size:11px; color:var(--fg-mute)">On every Sprylo order
                  </div>
                </div>
              </div>
            </div>
          </div>

          <aside class="cart-summary">
            <h3>Order summary</h3>

            <div class="promo-input">
              <input type="text" placeholder="Promo code" />
              <button>Apply</button>
            </div>

            <div class="cart-line"><span>Subtotal · 3 items</span><span style="font-family:var(--ff-display); font-weight:600; color:var(--ink)">$1,520.00</span></div>
            <div class="cart-line"><span>Shipping</span><span style="color: var(--emerald); font-weight: 600">Free</span></div>
            <div class="cart-line"><span>Estimated tax</span><span style="font-family:var(--ff-display); font-weight:600; color:var(--ink)">$121.60</span></div>
            <div class="cart-line"><span>Promo · WELCOME20</span><span style="color: var(--rose); font-family:var(--ff-display); font-weight:600">−$56.00</span></div>

            <div class="cart-line is-total"><span>Total</span><span>$1,585.60</span></div>

            <a href="#" class="btn btn--indigo btn--block">Proceed to checkout →</a>

            <div style="display: flex; justify-content: center; gap: var(--s3); margin-top: var(--s5); flex-wrap: wrap">
              <span style="font-family: var(--ff-mono); font-size: 11px; color: var(--fg-mute); padding: 6px 10px; background: var(--paper); border-radius: 4px">VISA</span>
              <span style="font-family: var(--ff-mono); font-size: 11px; color: var(--fg-mute); padding: 6px 10px; background: var(--paper); border-radius: 4px">MASTERCARD</span>
              <span style="font-family: var(--ff-mono); font-size: 11px; color: var(--fg-mute); padding: 6px 10px; background: var(--paper); border-radius: 4px">AMEX</span>
              <span style="font-family: var(--ff-mono); font-size: 11px; color: var(--fg-mute); padding: 6px 10px; background: var(--paper); border-radius: 4px">PAYPAL</span>
              <span style="font-family: var(--ff-mono); font-size: 11px; color: var(--fg-mute); padding: 6px 10px; background: var(--paper); border-radius: 4px">APPLE
                PAY</span>
            </div>

            <p style="margin-top: var(--s5); font-size: 11px; font-family: var(--ff-mono); color: var(--fg-mute); text-align: center; line-height: 1.6">
              Encrypted checkout · SSL secured. Your payment information is never stored on our servers.</p>
          </aside>

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
          </ul>
        </div>
        <div class="footer-col">
          <h4>Let us help you</h4>
          <ul>
            <li><a href="#">My account</a></li>
            <li><a href="#">My order</a></li>
            <li><a href="#">Shipping policy</a></li>
            <li><a href="#">Help centre</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Resources</h4>
          <ul>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Newsletter</a></li>
            <li><a href="#">Support</a></li>
            <li><a href="#">Reviews</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Get to know us</h4>
          <ul>
            <li><a href="#">About us</a></li>
            <li><a href="contact.html">Contact</a></li>
            <li><a href="#">Terms</a></li>
            <li><a href="#">Privacy</a></li>
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

    let decQty = document.getElementById('decQty');
    let incQty = document.getElementById('incQty');

    let prodPrice = document.getElementById('prodPrice');
    let qty = document.getElementById('qty');
    
    let prodTotalPrice = document.getElementById('prodTotalPrice');

    decQty.addEventListener('click',(e)=>{

      console.log((Number(qty.value)-1) * Number(prodPrice.value))
      prodTotalPrice.innerText = `$${(qty.value-1) * prodPrice.value}`

    })
    incQty.addEventListener('click',(e)=>{
      console.log((Number(qty.value)+1) * Number(prodPrice.value))
      prodTotalPrice.innerText = `$${(Number(qty.value)+1) * prodPrice.value}`

    })



    







  </script>
</body>

</html>