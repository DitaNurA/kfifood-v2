<!DOCTYPE html>
<html>
<?php include 'header.php'; ?>
<body>
<?php include 'navbar.php'; ?>
<!-- PRODUCT SECTION -->
<section class="product-fish-section">
  <img src="images/product/pollock/pollock.png" alt="Background" class="product-fish-background-img">
  <div class="product-fish-overlay"></div>
  <div class="product-container-fish">
    <div class="product-fish-text">
      <h2>POLLOCK</h2>
    </div>
  </div>
</section>
<section class="detail-product-section">
        <aside class="sidebar">
            <?php include 'sidebar-product.php'; ?>
        </aside>
        
        <section class="product-detail">
            <p>Alaska Pollock is the most popular white fish used by seafood processor 
                and by far the most sought-after species used in fastfood chain. It's juicy, 
                tender and mildly sweet with natural taste. Pollock's scientific name is Gadus 
                chalcogrammus, is a family of Cod which is known as Gadus Morhua. It is widely 
                caught in the Eastern Berring Sea and Sea of Okhotsk. Pollock is also widely caught in Russia.<p>
            <div class="product-slider">
    <button class="prev-btn">&#8249;</button>

    <div class="slider-wrapper">
        <div class="slider-track">
            <div class="slide">
                <img src="images/product/pollock/pollock.png" alt="Pollock Whole Round">
                <h2 class="slide-caption">Whole Round</h2>
            </div>
            <div class="slide">
                <img src="images/product/pollock/fillet-skin-on.png" alt="Fillet skin on">
                <h2 class="slide-caption">Fillet Natural Cut Skin-On</h2>
            </div>
            <div class="slide">
                <img src="images/product/pollock/fillet-skin-less.png" alt="Fillet skin less">
                <h2 class="slide-caption">Fillet Natural Cut Skin-Less</h2>
            </div>
            <div class="slide">
                <img src="images/product/pollock/dusted.png" alt="dusted">
                <h2 class="slide-caption">Dusted</h2>
            </div>
            <div class="slide">
                <img src="images/product/pollock/fillet-block.png" alt="Block">
                <h2 class="slide-caption">Fillet Block</h2>
            </div>
            <div class="slide">
                <img src="images/product/pollock/headless.png" alt="headless">
                <h2 class="slide-caption">Headless</h2>
            </div>
            <div class="slide">
                <img src="images/product/pollock/portion-cut.png" alt="portion-cut">
                <h2 class="slide-caption">Fillet Portion Cut</h2>
            </div>
            <div class="slide">
                <img src="images/product/pollock/crispy-butter.png" alt="crispy butter">
                <h2 class="slide-caption">Pollock Crispy Butter</h2>
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