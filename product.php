<!DOCTYPE html>
<html>
<?php include 'header.php'; ?>
<body>
<?php include 'navbar.php'; ?>
<!-- PRODUCT SECTION -->
<section class="product-section">
  <img src="images/product-bg.jpg" alt="Background" class="product-background-img">
  <div class="product-overlay"></div>
  <div class="photo-source">Source: iStock/Nuture</div>
  <div class="container-product">
    <div class="product-text">
      <h2>WORLDWIDE SPECIES</h2>
      <p>
        Processes fish from all over the world such as Mackerel, Salmon, Pollock, and Flounder.
        Also Yellowfin Tuna, Red Snapper, Squid, Cuttle Fish and Octopus which are caught in Indonesia seas.
        Raw material are imported from the best places and process with our international standards facilities that
        combined with a good workmanship according to the regulations of destination country/market into products that have more value.
      </p>
    </div>
  </div>
</section>
<section class="fish-section">
        <h1>Our Seafood Selection</h1>
        <!-- Baris Pertama (5 item) -->
        <div class="fish-wrapper">
            <a href="mackerel.php" class="fish-item">
                <div class="fish-image">
                    <img src="images/product/mackerel.png" alt="Mackerel">
                </div>
                <h3 class="fish-name">MACKEREL</h3>
            </a>
            
            <a href="salmon.php" class="fish-item">
                <div class="fish-image">
                    <img src="images/product/salmon.png" alt="Salmon">
                </div>
                <h3 class="fish-name">SALMON</h3>
            </a>
            
            <a href="pollock.php" class="fish-item">
                <div class="fish-image">
                    <img src="images/product/pollock.png" alt="Pollock">
                </div>
                <h3 class="fish-name">POLLOCK</h3>
            </a>
            
            <a href="" class="fish-item">
                <div class="fish-image">
                    <img src="images/product/flounder.png" alt="Flounder">
                </div>
                <h3 class="fish-name">FLOUNDER</h3>
            </a>
            
            <a href="" class="fish-item">
                <div class="fish-image">
                    <img src="images/product/snow_crab.png" alt="Snow Crab" style="height:150px;">
                </div>
                <h3 class="fish-name">SNOW CRAB</h3>
            </a>
        
            <a href="" class="fish-item">
                <div class="fish-image">
                    <img src="images/product/red_crab.png" alt="Red Crab">
                </div>
                <h3 class="fish-name">RED CRAB</h3>
            </a>
            
            <a href="" class="fish-item">
                <div class="fish-image">
                    <img src="images/product/red_snapper.png" alt="Red Snapper">
                </div>
                <h3 class="fish-name">RED SNAPPER</h3>
            </a>
            
            <a href="" class="fish-item">
                <div class="fish-image">
                    <img src="images/product/tuna.png" alt="Yellowfin Tuna">
                </div>
                <h3 class="fish-name">YELLOWFIN TUNA</h3>
            </a>
            
            <a href="" class="fish-item">
                <div class="fish-image">
                    <img src="images/product/tobiko.png" alt="Tobiko" style="height:150px;">
                </div>
                <h3 class="fish-name">TOBIKO</h3>
            </a>
            
            <a href="" class="fish-item">
                <div class="fish-image">
                    <img src="images/product/squid.png" alt="Squid & Cuttlefish">
                </div>
                <h3 class="fish-name">SQUID & CUTTLEFISH</h3>
            </a>
            <a href="" class="fish-item">
                <div class="fish-image">
                    <img src="images/product/octopus.png" alt="Octopus">
                </div>
                <h3 class="fish-name">OCTOPUS</h3>
            </a>
            
            <a href="" class="fish-item">
                <div class="fish-image">
                    <img src="images/product/shrimp.png" alt="Shrimp" style="width:250px;">
                </div>
                <h3 class="fish-name">SHRIMP</h3>
            </a>
            
            <a href="" class="fish-item">
                <div class="fish-image">
                    <img src="images/product/wakame.png" alt="Wakame">
                </div>
                <h3 class="fish-name">WAKAME</h3>
            </a>
        </div>
    </section>
<!-- RAW MATERIAL SECTION -->
<section class="raw-material-section">
  <div class="container">
    <h2>RAW MATERIAL SOURCE</h2>

    <div class="map-container">
      <img src="images/raw-map.jpg" alt="Raw Material World Map">
    </div>
  </div>
</section>
<?php include 'footer.php'; ?>
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

<script>
  if (window.innerWidth <= 600) {
    const wrapper = document.querySelector('.fish-wrapper');

    // Pastikan tidak ada swiper-wrapper sebelumnya
    if (!wrapper.classList.contains('swiper')) {
      wrapper.classList.add('swiper');
      const slideWrapper = document.createElement('div');
      slideWrapper.className = 'swiper-wrapper';

      [...wrapper.children].forEach(child => {
        child.classList.add('swiper-slide');
        slideWrapper.appendChild(child);
      });

      wrapper.innerHTML = '';
      wrapper.appendChild(slideWrapper);

      new Swiper('.swiper', {
        slidesPerView: 1.1,
        spaceBetween: 20,
        freeMode: true
      });
    }
  }
</script>



</body>
</html>