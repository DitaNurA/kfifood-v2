<?php
  $current_page = basename($_SERVER['PHP_SELF']);
?>
<div class="header_bottom">
  <div class="container-fluid p-0">
    <nav class="navbar navbar-expand-lg custom_nav-container w-100">

      <a class="navbar-brand ml-3" href="index.php" style="display: flex; align-items: center;">
        <img src="images/fevicon.png" alt="Kirana Logo" class="logo-img" style="" />
        <div style="line-height: 1;">
          <span style="display: block;">KIRANA FOOD</span>
          <span style="display: block;">INTERNATIONAL</span>
        </div>
      </a>

      <!-- Hamburger -->

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
  aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="s-1"></span>
  <span class="s-2"></span>
  <span class="s-3"></span>
</button>

      <!-- Menu -->
      <div class="collapse navbar-collapse menu-overlay" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto text-center">
          <li class="nav-item <?php if($current_page == 'index.php') echo 'active'; ?>">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item <?php if($current_page == 'about.php') echo 'active'; ?>">
            <a class="nav-link" href="about.php">About Us</a>
          </li>
          <li class="nav-item <?php if($current_page == 'sustain.php') echo 'active'; ?>">
            <a class="nav-link" href="sustain.php">Sustainability</a>
          </li>
          <li class="nav-item <?php if($current_page == 'product.php') echo 'active'; ?>">
            <a class="nav-link" href="product.php">Product</a>
          </li>
        </ul>
        <div class="nav-item text-center">
          <a class="contact-btn btn btn-primary" href="contact-us.php">
            <i class="fa fa-envelope"></i> Contact Us
          </a>
        </div>
      </div>

    </nav>
  </div>
</div>
<script>
let lastScrollTop = 0;
const header = document.querySelector('.header_bottom');

window.addEventListener('scroll', function() {
  let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
  
  if (scrollTop > lastScrollTop) {
    // Scroll ke bawah → sembunyikan navbar
    header.style.top = "-100px"; // Angka ini lebih besar dari tinggi navbar (80px)
  } else {
    // Scroll ke atas → tampilkan navbar
    header.style.top = "0";
  }

  lastScrollTop = scrollTop <= 0 ? 0 : scrollTop; // Prevent negatif scroll
});
</script>