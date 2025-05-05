<!DOCTYPE html>
<html>
<?php include 'header.php'; ?>
<body>
<?php include 'navbar.php'; ?>
<!-- sustain SECTION -->
<section class="sustain-section">
  <img src="images/sustain-bg.jpg" alt="Background" class="sustain-background-img">
  <div class="sustain-overlay"></div>
  <div class="photo-source">Source: Unsplash/Knut Troim</div>
  <div class="container-sustain">
    <div class="sustain-text">
      <h2>WE BELIEVE THAT PROTECTING</h2>
      <h2>OCEAN IS ESSENTIAL</h2>
      <p>
        Sustainability isn't just a promise, it's how we do business every day. We partner with responsible fisheries,
        support traceable supply chains, and follow strict environmental standards to ensure every catch is made with care.
      </p>
    </div>
  </div>
</section>
<!--<section class="value-section">
  <div class="value-card">
    <img src="images/raw-material.jpg" alt="Raw Material" class="value-image">
    <div class="value-content">
      <h3><i class="fas fa-fish" style="font-size:30px;"></i> RAW MATERIAL</h3>
      <p>
        Kirana operates with a <strong>Chain of Custody (CoC)</strong> framework, aligning with 
        <strong>global seafood sustainability standards</strong>. Our vertically integrated supply chain ensures that we source 
        <strong>sustainable raw materials</strong> for the world seafood market, reinforcing our commitment to responsible and eco-friendly practices.
      </p>
    </div>
  </div>

  <div class="value-card">
    <div class="value-content">
      <h3><i class="fas fa-users" style="font-size:30px;"></i> SOCIAL PRACTICE</h3>
      <p>
        We are committed to responsible business practices that 
        <strong>prioritize social and economic benefits</strong> for local communities. Our dedication to ethical business standards is reflected in our 
        achievement of the <strong>4-Pillar Social Audit</strong>, reinforcing our commitment to fair labour practices, 
        worker welfare, and community engagement.
      </p>
    </div>
    <img src="images/social.jpg" alt="Social Practice" class="value-image">
  </div>

  <div class="value-card">
    <img src="images/energy.jpg" alt="Efficient Energy" class="value-image">
    <div class="value-content">
      <h3><i class="fas fa-bolt" style="font-size:30px;"></i> EFFICIENT ENERGY</h3>
      <p>
        We have invested in <strong>CO₂ refrigerant system</strong> for greater energy efficiency and reduced emissions. Additionally, our 
        <strong>water-based circulation system</strong> for air conditioning eliminates the need for Freon gas, 
        further enhancing our commitment to eco-friendly practices.
      </p>
    </div>
  </div>
</section>-->
<section class="value-section-wrapper">
  <button class="slider-btn left-btn">&#10094;</button>

  <div class="value-slider">
    <div class="value-card">
      <img src="images/raw-material.jpg" class="value-image" alt="Raw Material">
      <div class="value-content">
        <h3><i class="fas fa-fish" style="font-size:30px;"></i> RAW MATERIAL</h3>
        <p>Kirana operates with a <strong>Chain of Custody (CoC)</strong> framework, aligning with 
        <strong>global seafood sustainability standards</strong>. Our vertically integrated supply chain ensures that we source 
        <strong>sustainable raw materials</strong> for the world seafood market, reinforcing our commitment to responsible and eco-friendly practices.</p>
      </div>
    </div>
    <div class="value-card">
      <div class="value-content">
        <h3><i class="fas fa-users" style="font-size:30px;"></i> SOCIAL PRACTICE</h3>
        <p>We are committed to responsible business practices that 
        <strong>prioritize social and economic benefits</strong> for local communities. Our dedication to ethical business standards is reflected in our 
        achievement of the <strong>4-Pillar Social Audit</strong>, reinforcing our commitment to fair labour practices, 
        worker welfare, and community engagement.</p>
      </div>
      <img src="images/social.jpg" class="value-image" alt="Social Practice">
    </div>
    <div class="value-card">
      <img src="images/energy.jpg" class="value-image" alt="Efficient Energy">
      <div class="value-content">
        <h3><i class="fas fa-bolt" style="font-size:30px;"></i> EFFICIENT ENERGY</h3>
        <p>We have invested in <strong>CO₂ refrigerant system</strong> for greater energy efficiency and reduced emissions. Additionally, our 
        <strong>water-based circulation system</strong> for air conditioning eliminates the need for Freon gas, 
        further enhancing our commitment to eco-friendly practices.</p>
      </div>
    </div>
  </div>

  <button class="slider-btn right-btn">&#10095;</button>
</section>


<?php include 'footer.php'; ?>
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const slider = document.querySelector('.value-slider');
    const cards = document.querySelectorAll('.value-card');
    const leftBtn = document.querySelector('.left-btn');
    const rightBtn = document.querySelector('.right-btn');

    let currentIndex = 0;

    function updateSlider() {
      const cardWidth = slider.offsetWidth;
      slider.style.transform = `translateX(-${currentIndex * cardWidth}px)`;
    }

    rightBtn.addEventListener('click', () => {
      if (currentIndex < cards.length - 1) {
        currentIndex++;
        updateSlider();
      }
    });

    leftBtn.addEventListener('click', () => {
      if (currentIndex > 0) {
        currentIndex--;
        updateSlider();
      }
    });

    window.addEventListener('resize', updateSlider);
    updateSlider(); // awal
  });
</script>


</body>
</html>
