<!DOCTYPE html>
<html>
<?php include 'header.php'; ?>
<body>
<?php include 'navbar.php'; ?>
<!-- ABOUT SECTION -->
<section class="about-section">
  <img src="images/about-bg.jpg" alt="Background" class="background-img">
  <div class="about-overlay"></div>
  <div class="container-about">
    <div class="about-text">
      <h2>PT. KIRANA FOOD INTERNATIONAL</h2>
      <p>
        Prioritize quality in our processes as well as our sales. So that we can be sure the products that we sells are of good quality. 
        Equipped with state-of-the-art facilities and well-trained workers, we have undertaken from primary processing to the most delicate 
        and meticulous processes to the satisfaction of our global network of customers. We have been trusted by several foreign companies 
        to process and cooperate at our plants by prioritizing quality of product.
      </p>
    </div>
  </div>
</section>


<!-- LOCATION SECTION -->
<section class="location-section">
  <div class="container-location">
    <div class="location-content">
      <div class="map-box">
        <img src="images/map.png" alt="Map of Indonesia with locations">
      </div>
      <div class="info-box">
        <h3>WHERE TO FIND US?</h3>
        <p>
          Jl. Raya Pakah - Ponco KM. 15+700 Sumberagung, <br>
          Plumpang, Tuban, East Java - Indonesia
        </p>
        <p><strong>Phone.</strong> +62 35 6881 2888<br>
           <strong>Fax.</strong> +62 35 6881 2999</p>
      </div>
    </div>
  </div>
</section>
<!-- MANUFACTURING SYSTEM SECTION -->
<section class="manufacturing-section">
  <div class="manufac-overlay-layer"></div>
  <div class="container-manufacturing">
    <div class="text">
      <h2>WELL FACILITATED & RESPONSIBLE<br><span>MANUFACTURING SYSTEM</span></h2>
      <p>
      Under a stringent food safety protocol, processing are done in Kirana’s facility which complied and certified by international bodies in food production standards.
        To earn high quality products, we always ensure our facilities meet procedural standards and monitoring operational effectively.
        Kirana Food International uses manufacturing system that is energy saving and environmentally friendly.
      </p>
    </div>
  </div>
</section>
<section class="facility-section">
  <div class="facility-grid" id="facilitySlider">
    <div class="facility-item">
      <img src="images/icon-raw.png" alt="Raw Material">
      <h3>Raw Material Capacity</h3>
      <p>10.000 MT</p>
    </div>
    <div class="facility-item">
      <img src="images/icon-cold.png" alt="Cold Storage">
      <h3>Cold Storage Capacity</h3>
      <p>8.000 MT</p>
    </div>
    <div class="facility-item">
      <img src="images/icon-line.png" alt="Production Line">
      <h3>Production Line</h3>
      <p>7 Lines</p>
    </div>
    <div class="facility-item">
      <img src="images/icon-iqf.png" alt="IQF Machine">
      <h3>IQF Machine</h3>
      <p>5 Individual Quick Frozen</p>
    </div>
    <div class="facility-item">
      <img src="images/icon-refrigerant.png" alt="Refrigerant">
      <h3>Refrigerant System</h3>
      <p>CO2 + Ammonia ; Inverter Control</p>
    </div>
    <div class="facility-item">
      <img src="images/icon-water.png" alt="Water Treatment">
      <h3>Water Treatment</h3>
      <p>Reverse Osmosis ; JIA / Chlorine Automatic Diffuser ; Filter ; UV</p>
    </div>
  </div>

  <!-- Tombol navigasi di bawah grid -->
  <div class="slider-nav">
    <button id="prevBtn">&#8592;</button>
    <button id="nextBtn">&#8594;</button>
  </div>
</section>

<!-- CUSTOMER SECTION -->
<section class="customer-section">
  <div class="container">
    <h2>OUR CUSTOMER</h2>
    <p>
      We’ve build and maintain customer network in a number of across the globe. It’s one of our greatest strengths in the our business because it provides us with the most up-to-date market information.
      We’ve made it our mission to use our unique global perspective for good: to protect marine resources with accountability, transparency, and professionalism.
    </p>

    <div class="map-container">
      <img src="images/customer-map.jpg" alt="Customer World Map">
    </div>
  </div>
</section>

<?php include 'footer.php'; ?>
<script>
  function initSlider() {
    const items = document.querySelectorAll('#facilitySlider .facility-item');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    let currentIndex = 0;

    function updateSlider() {
      items.forEach((item, index) => {
        item.classList.toggle('active', index === currentIndex);
      });
    }

    prevBtn.addEventListener('click', () => {
      currentIndex = (currentIndex - 1 + items.length) % items.length;
      updateSlider();
    });

    nextBtn.addEventListener('click', () => {
      currentIndex = (currentIndex + 1) % items.length;
      updateSlider();
    });

    updateSlider();
  }

  document.addEventListener('DOMContentLoaded', function () {
    if (window.innerWidth <= 600) {
      initSlider();
    }
  });
</script>


</body>
</html>