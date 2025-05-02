<!DOCTYPE html>
<html>
<?php include 'header.php'; ?>
<body>
<?php include 'navbar.php'; ?>
<!-- PRODUCT SECTION -->
<section class="product-fish-section">
  <img src="images/product/salmon/salmon.jpeg" alt="Background" class="product-fish-background-img">
  <div class="product-fish-overlay"></div>
  <div class="product-container-fish">
    <div class="product-fish-text">
      <h2>SALMON</h2>
    </div>
  </div>
</section>
<section class="detail-product-section">
        <aside class="sidebar">
            <?php include 'sidebar-product.php'; ?>
        </aside>
        
        <section class="product-detail">
            <p>Salmon is one of the Major Fish species with the highest demand in the market. 
                We processed Farm Atlantic Salmon and Wild Salmon like Sockeye, Chum, Coho, and Pink 
                into various cuts to fit with individual market like retails and specific foodservice chain. 
                From H&G and fillet, these are processed into portion cut, Kirimi (small portion) skin-on/skin-less 
                and slice  for Sushi/Sashimi.<p>
            <div class="product-slider">
    <button class="prev-btn">&#8249;</button>

    <div class="slider-wrapper">
        <div class="slider-track">
            <div class="slide">
                <img src="images/product/salmon/wr-salmon.png" alt="salmon whole round">
                <h2 class="slide-caption">Whole Round</h2>
            </div>
            <div class="slide">
                <img src="images/product/salmon/wr-sockeye.png" alt="salmon sockeye">
                <h2 class="slide-caption">Whole Round Salmon Sockeye</h2>
            </div>
            <div class="slide">
                <img src="images/product/salmon/wr-pink-salmon.png" alt="Pink salmon">
                <h2 class="slide-caption">Whole Round Pink Salmon</h2>
            </div>
            <div class="slide">
                <img src="images/product/salmon/wr-atlantic.png" alt="atlantic salmon">
                <h2 class="slide-caption">Whole Round Atlantic Salmon</h2>
            </div>
            <div class="slide">
                <img src="images/product/salmon/fillet-kirimi-skin-less.png" alt="Fillet kirimi Skin Less">
                <h2 class="slide-caption">Fillet Kirimi Skin Less</h2>
            </div>
            <div class="slide">
                <img src="images/product/salmon/fillet-kirimi-skin-on.png" alt="fillet kirimi skin on">
                <h2 class="slide-caption">Fillet Kirimi Skin On</h2>
            </div>
            <div class="slide">
                <img src="images/product/salmon/fillet-natural-cut.png" alt="fillet natural cut">
                <h2 class="slide-caption">Fillet Natural Cut</h2>
            </div>
            <div class="slide">
                <img src="images/product/salmon/fillet-portion-cut.png" alt="fillet portion cut">
                <h2 class="slide-caption">Fillet Portion Cut</h2>
            </div>
            <div class="slide">
                <img src="images/product/salmon/salmon-slice.png" alt="Salmon Slice">
                <h2 class="slide-caption">Salmon Slice</h2>
            </div>
        </div>
    </div>

    <button class="next-btn">&#8250;</button>
</div>
        </section>
    </section>
    <script>
    const track = document.querySelector('.slider-track');
    const slides = document.querySelectorAll('.slide');
    const prevBtn = document.querySelector('.prev-btn');
    const nextBtn = document.querySelector('.next-btn');

    let currentIndex = 0;

    function updateSlider() {
        const slideWidth = slides[0].clientWidth;
        track.style.transform = `translateX(-${currentIndex * slideWidth}px)`;
    }

    nextBtn.addEventListener('click', () => {
        if (currentIndex < slides.length - 1) {
            currentIndex++;
            updateSlider();
        }
    });

    prevBtn.addEventListener('click', () => {
        if (currentIndex > 0) {
            currentIndex--;
            updateSlider();
        }
    });

    // Optional: responsive on resize
    window.addEventListener('resize', updateSlider);
</script>
<?php include 'contact-section.php'; ?>
<?php include 'footer.php'; ?>
</body>
</html>