<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Contact — Sprylo</title>
  <meta name="description"
    content="Get in touch with Sprylo customer support — order help, returns, warranty claims, and partnership inquiries." />
  <meta name="theme-color" content="#4F46E5" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@500;600;700;800&family=Outfit:wght@400;500;600;700&family=Roboto+Mono:wght@400;500&display=swap" />
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
        <div class="crumbs"><a href="index.html">Home</a> <span class="sep">›</span> <span>Contact &amp; support</span>
        </div>
        <h1>Talk to us — we ship gear, but we answer messages too.</h1>
        <p>Three ways to reach our team: live chat (fastest), email, or this contact form for anything that needs an
          attachment. We typically reply within 4 working hours and cover support in EN, ES, FR, and DE.</p>
      </div>
    </section>

    <section>
      <div class="container">
        <div class="contact-grid">

          <div class="contact-info">
            <div class="info-block">
              <div class="ic">✉</div>
              <div>
                <div class="label">EMAIL US</div>
                <div class="value"><a href="mailto:support@sprylo.example">support@sprylo.example</a></div>
              </div>
            </div>
            <div class="info-block">
              <div class="ic">☏</div>
              <div>
                <div class="label">CALL US · 24/7</div>
                <div class="value"><a href="tel:+18005551234">+1 (800) 555-1234</a></div>
              </div>
            </div>
            <div class="info-block">
              <div class="ic">💬</div>
              <div>
                <div class="label">LIVE CHAT</div>
                <div class="value"><a href="#">Open chat — 4 agents online</a></div>
              </div>
            </div>
            <div class="info-block">
              <div class="ic">⌖</div>
              <div>
                <div class="label">VISIT OUR FLAGSHIP</div>
                <div class="value">214 Market Street<br />San Francisco, CA 94103</div>
              </div>
            </div>
            <div class="info-block">
              <div class="ic">⏱</div>
              <div>
                <div class="label">SUPPORT HOURS</div>
                <div class="value">Mon — Fri · 06:00 — 22:00 PT<br />Sat — Sun · 08:00 — 18:00 PT</div>
              </div>
            </div>

            <div
              style="margin-top: var(--s7); padding: var(--s6); background: linear-gradient(135deg, var(--indigo), var(--card-purple)); color: var(--paper); border-radius: var(--r-lg); position: relative; overflow: hidden">
              <div
                style="position: absolute; inset: 0; background-image: radial-gradient(circle at 80% 20%, rgba(255,255,255,0.18) 0, transparent 40%); pointer-events: none">
              </div>
              <div style="position: relative">
                <h3 style="color: var(--paper); font-size: var(--text-xl); margin-bottom: var(--s3)">Looking for trade
                  or bulk pricing?</h3>
                <p
                  style="color: rgba(255,255,255,0.85); font-size: var(--text-sm); line-height: 1.6; margin-bottom: var(--s4)">
                  Companies ordering 10+ units qualify for tiered discounts, NET-30 terms, and a dedicated account
                  manager.</p>
                <a href="mailto:trade@sprylo.example" class="btn btn--paper">Email the trade desk →</a>
              </div>
            </div>
          </div>

          <form class="contact-form"
            onsubmit="event.preventDefault(); this.querySelector('button[type=submit]').textContent='Sent ✓ — we will reply within 4 hours';">
            <h2 style="font-size: var(--text-xl); margin-bottom: var(--s2)">Send us a message</h2>
            <p style="color: var(--fg-soft); font-size: var(--text-sm); margin-bottom: var(--s5)">No bots, no templated
              replies — a real person at our SF or Berlin desks will pick this up.</p>

            <div class="field-row">
              <div class="field">
                <label for="c-first">First name</label>
                <input id="c-first" type="text" required placeholder="Mira" />
              </div>
              <div class="field">
                <label for="c-last">Last name</label>
                <input id="c-last" type="text" required placeholder="Kapoor" />
              </div>
            </div>

            <div class="field-row">
              <div class="field">
                <label for="c-email">Email</label>
                <input id="c-email" type="email" required placeholder="you@example.com" />
              </div>
              <div class="field">
                <label for="c-phone">Phone (optional)</label>
                <input id="c-phone" type="tel" placeholder="+1 (415) 555 0123" />
              </div>
            </div>

            <div class="field">
              <label for="c-topic">What is this about?</label>
              <select id="c-topic">
                <option>Order — tracking, change, or cancellation</option>
                <option>Returns or refunds</option>
                <option>Warranty claim or product issue</option>
                <option>Trade / wholesale inquiry</option>
                <option>Press, partnership, or affiliate</option>
                <option>Something else</option>
              </select>
            </div>

            <div class="field">
              <label for="c-order">Order number (if applicable)</label>
              <input id="c-order" type="text" placeholder="e.g. SPR-204418" />
            </div>

            <div class="field">
              <label for="c-msg">Your message</label>
              <textarea id="c-msg" required
                placeholder="Tell us what's going on. Screenshots welcome — drag and drop after sending."></textarea>
            </div>

            <button class="btn btn--indigo btn--block" type="submit"
              style="padding: 16px; font-size: var(--text-base); margin-top: var(--s2)">Send message →</button>

            <p
              style="font-family: var(--ff-mono); font-size: 11px; color: var(--fg-mute); margin-top: var(--s4); text-align: center; line-height: 1.6">
              By submitting, you agree to our <a href="#" style="color: var(--indigo)">privacy policy</a>. We never sell
              your data and never share with third parties.</p>
          </form>

        </div>
      </div>
    </section>

    <!-- FAQ short -->
    <section class="section" style="background: var(--bg)">
      <div class="container">
        <div class="section-head">
          <h2>Quick answers</h2>
          <a href="#" class="view-all">Full help centre →</a>
        </div>
        <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: var(--s5)">

          <article
            style="background: var(--paper); border: 1px solid var(--rule); border-radius: var(--r); padding: var(--s5)">
            <h3 style="font-size: var(--text-md); margin-bottom: var(--s2)">Where is my order?</h3>
            <p style="color: var(--fg-soft); font-size: var(--text-sm); line-height: 1.6">Every order ships with a
              tracking number sent by email within 2 hours of dispatch. Use the <a href="#"
                style="color: var(--indigo); font-weight: 600">order tracker</a> with your email + order number for live
              status.</p>
          </article>

          <article
            style="background: var(--paper); border: 1px solid var(--rule); border-radius: var(--r); padding: var(--s5)">
            <h3 style="font-size: var(--text-md); margin-bottom: var(--s2)">How do returns work?</h3>
            <p style="color: var(--fg-soft); font-size: var(--text-sm); line-height: 1.6">30 days, no questions asked.
              Initiate from your account → orders → return. We email a prepaid label; drop off at any carrier point.
              Refund hits your card 3 – 5 business days after we receive it.</p>
          </article>

          <article
            style="background: var(--paper); border: 1px solid var(--rule); border-radius: var(--r); padding: var(--s5)">
            <h3 style="font-size: var(--text-md); margin-bottom: var(--s2)">Do you ship internationally?</h3>
            <p style="color: var(--fg-soft); font-size: var(--text-sm); line-height: 1.6">Yes — to 48 countries. Free
              standard shipping on orders over $50 to the US, EU, UK, Canada, and Australia. Other destinations carry a
              flat shipping fee shown at checkout.</p>
          </article>

          <article
            style="background: var(--paper); border: 1px solid var(--rule); border-radius: var(--r); padding: var(--s5)">
            <h3 style="font-size: var(--text-md); margin-bottom: var(--s2)">What is the warranty?</h3>
            <p style="color: var(--fg-soft); font-size: var(--text-sm); line-height: 1.6">Every Sprylo order ships with
              a 2-year limited warranty in addition to the manufacturer's. Optional extended cover (3 or 5 years) can be
              added at checkout from $39.</p>
          </article>

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
        <span>Free HTML template · No framework · No build step. Distributed by <a href="https://themewagon.com/"
            target="_blank">ThemeWagon</a></span>
      </div>
    </div>
  </footer>

  <script src="assets/js/main.js" defer></script>
</body>

</html>