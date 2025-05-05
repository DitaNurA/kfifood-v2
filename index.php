<!DOCTYPE html>
<html>
<?php include 'header.php'; ?>

<body>
<?php include 'navbar.php'; ?>

<!-- Hero Section -->
<div class="hero_area">
<section class="slider_section">
  <div class="slider_bg_box">
    <img src="images/hero-bg.jpg" alt="Background">
  </div>

  <div class="container">
    <div class="row">
      <div class="col-md-7">
        <div class="detail-box">
          <h3>Welcome To</h3>
          <h1>
            KIRANA FOOD <br>
            INTERNATIONAL
          </h1>
          <p>
            We specialize in the meticulous processing of premium seafood. With a focus on quality, sustainability, 
            and innovation, we have become a trusted name in the industry.
          </p>
          <!--<div class="btn-box">
            <a href="#" class="btn1">Product</a>
            <a href="about.php" class="btn2">About Us</a>
          </div>-->
        </div>
      </div>
    </div>
  </div>
</section>
</div>

<!-- WHY KIRANA SECTION -
<section class="why-kirana">
  <div class="container">
    <h2>WHY KIRANA?</h2>
    <p>
      At Kirana, <span class="highlight">quality is at the heart of everything we do</span>, both in our production processes and commercial activities.
      We are committed to ensuring that every product we deliver meets the <span class="highlight">highest quality standards and conformance requirements</span>.
      This dedication has earned us the trust of leading <span class="highlight">International Companies</span>, who rely on us as a
      <span class="highlight">strategic production partner</span> for key global programs.
    </p>

    <div class="features">
      <div class="feature-box">
        <div class="image-container">
          <img src="images/img1.jpg" alt="Prioritize Quality">
          <div class="overlay">
            <p>We sell seafood for the domestic market as well as for the export market.</p>
          </div>
        </div>
        <div class="title-box">
          <h3>Prioritize Quality</h3>
        </div>
      </div>
      <div class="feature-box">
        <div class="image-container">
          <img src="images/img2.jpg" alt="High Integrity">
          <div class="overlay">
            <p>We trained all levels of management to always uphold integrity, honest and trust</p>
          </div>
        </div>
        <div class="title-box">
          <h3>High Integrity</h3>
        </div>
      </div>
      <div class="feature-box">
        <div class="image-container">
          <img src="images/img3.jpg" alt="Environmentally friendly">
          <div class="overlay">
            <p>We use manufacturing system that is energy saving and environmentally friendly.</p>
          </div>
        </div>
        <div class="title-box">
          <h3>Environmentally Friendly</h3>
        </div>
      </div>
      <div class="feature-box">
        <div class="image-container">
          <img src="images/img4.jpg" alt="Well Facilitated">
          <div class="overlay">
            <p>we always ensure our facilities meet procedural standards and monitoring operational effectively.</p>
          </div>
        </div>
        <div class="title-box">
          <h3>Well Facilitated</h3>
        </div>
      </div>
    </div>
  </div>
</section>-->
<!-- WHY KIRANA SECTION -->
<section class="why-kirana">
  <div class="container">
    <h2>WHY KIRANA?</h2>
    <p>
      At Kirana, <span class="highlight">quality is at the heart of everything we do</span>, both in our production processes and commercial activities.
      We are committed to ensuring that every product we deliver meets the <span class="highlight">highest quality standards and conformance requirements</span>.
      This dedication has earned us the trust of leading <span class="highlight">International Companies</span>, who rely on us as a
      <span class="highlight">strategic production partner</span> for key global programs.
    </p>

    <div class="features-wrapper">
      <button class="nav-btn prev" onclick="prevSlide()" id="prevBtn">❮</button>

      <div class="features-track" id="sliderTrack">
        <div class="feature-box">
          <div class="image-container">
            <img src="images/img1.jpg" alt="Prioritize Quality">
            <div class="overlay">
              <p>We sell seafood for the domestic market as well as for the export market.</p>
            </div>
          </div>
          <div class="title-box">
            <h3>Prioritize Quality</h3>
          </div>
        </div>

        <div class="feature-box">
          <div class="image-container">
            <img src="images/img2.jpg" alt="High Integrity">
            <div class="overlay">
              <p>We trained all levels of management to always uphold integrity, honest and trust.</p>
            </div>
          </div>
          <div class="title-box">
            <h3>High Integrity</h3>
          </div>
        </div>

        <div class="feature-box">
          <div class="image-container">
            <img src="images/img3.jpg" alt="Environmentally Friendly">
            <div class="overlay">
              <p>We use manufacturing system that is energy saving and environmentally friendly.</p>
            </div>
          </div>
          <div class="title-box">
            <h3>Environmentally Friendly</h3>
          </div>
        </div>

        <div class="feature-box">
          <div class="image-container">
            <img src="images/img4.jpg" alt="Well Facilitated">
            <div class="overlay">
              <p>We always ensure our facilities meet procedural standards and monitoring operational effectively.</p>
            </div>
          </div>
          <div class="title-box">
            <h3>Well Facilitated</h3>
          </div>
        </div>
      </div>

      <button class="nav-btn next" onclick="nextSlide()" id="nextBtn">❯</button>
    </div>
  </div>
</section>

<!-- QUALITY IS OUR PRIORITY SECTION -->
<section class="quality-priority">
  <div class="overlay-layer"></div>
  <div class="container overlay-content">
    <div class="text">
      <h2>QUALITY IS<br><span>OUR PRIORITY</span></h2>
      <p>
        Transcends Beyond Food Safety. It’s the hallmark of our reassurance which earns our success.
        This dedication fuelling our commitment to uncompromising quality.
        Our diverse partnerships stand as a testament to the high levels of trust and collaboration
        embedded in every face of our seafood products.
      </p>
    </div>
  </div>
</section>


<!-- CERTIFICATION LOGOS -->
<section class="certification-logos">
  <img src="images/haccp.png" alt="HACCP">
  <img src="images/ctpat.png" alt="CTPAT">
  <img src="images/brc.png" alt="BRC FOOD">
  <img src="images/msc.png" alt="MSC">
  <img src="images/smeta.png" alt="SMETA">
  <img src="images/halal.png" alt="Halal Indonesia">
</section>

<?php include 'footer.php'; ?>
<script>
  let currentSlide = 0;
  const sliderTrack = document.getElementById('sliderTrack');
  const featureBoxes = document.querySelectorAll('.feature-box');
  const prevBtn = document.getElementById('prevBtn');
  const nextBtn = document.getElementById('nextBtn');

  function updateSlider() {
    const viewportWidth = window.innerWidth;
    const isMobile = viewportWidth < 768;

    if (isMobile) {
      sliderTrack.style.transform = `translateX(-${currentSlide * 100}%)`;
      prevBtn.style.display = currentSlide === 0 ? 'none' : 'block';
      nextBtn.style.display = currentSlide === featureBoxes.length - 1 ? 'none' : 'block';
    } else {
      sliderTrack.style.transform = 'none';
      prevBtn.style.display = 'none';
      nextBtn.style.display = 'none';
    }
  }

  function nextSlide() {
    if (currentSlide < featureBoxes.length - 1) {
      currentSlide++;
      updateSlider();
    }
  }

  function prevSlide() {
    if (currentSlide > 0) {
      currentSlide--;
      updateSlider();
    }
  }

  // Mobile overlay toggle on click
  featureBoxes.forEach(box => {
    box.addEventListener('click', function () {
      const viewportWidth = window.innerWidth;
      const isMobile = viewportWidth < 768;

      if (isMobile) {
        const overlay = this.querySelector('.overlay');
        overlay.style.opacity = overlay.style.opacity === '1' ? '0' : '1';
      }
    });
  });

  window.addEventListener('resize', updateSlider);
  window.addEventListener('DOMContentLoaded', updateSlider);
</script>



</body>
</html>
