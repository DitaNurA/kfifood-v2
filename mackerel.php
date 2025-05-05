<!DOCTYPE html>
<html>
<?php include 'header.php'; ?>
<body>
<?php include 'navbar.php'; ?>
<!-- PRODUCT SECTION -->
<section class="product-fish-section">
  <img src="images/product/mackerel.png" alt="Background" class="product-fish-background-img">
  <div class="product-fish-overlay"></div>
  <div class="product-container-fish">
    <div class="product-fish-text">
      <h2>MACKEREL</h2>
    </div>
  </div>
</section>
<section class="detail-product-section">
        <aside class="sidebar">
            <?php include 'sidebar-product.php'; ?>
        </aside>
        
        <section class="product-detail">
            <p>Atlantic Mackerel or also known as Norwegian Mackerel are caught in Norwegian Sea. This species of Mackerel 
                is known for its superior quality as the meat is the juiciest with highest fat content. 
                The main season for thisfish is from September to October and is by far the best species for mackerel. 
                Among others, we processed Spanish Mackerel and Mackerel from Japan and Korea as well.<p>
        <div class="product-slider">
        
        <button class="prev-btn">&#8249;</button>
    <div class="slider-wrapper">
    
        <div class="slider-track">
            <div class="slide">
                <img src="images/product/mackerel/wr.png" alt="Mackerel Whole Round">
                <h2 class="slide-caption">Whole Round</h2>
            </div>
            <div class="slide">
                <img src="images/product/mackerel/fillet-natural.png" alt="Mackerel Fillet Natural">
                <h2 class="slide-caption">Fillet Natural Cut</h2>
            </div>
            <div class="slide">
                <img src="images/product/mackerel/fillet-hole.png" alt="Fillet Hole">
                <h2 class="slide-caption">Fillet Hole</h2>
            </div>
            <div class="slide">
                <img src="images/product/mackerel/fillet-portion.png" alt="Fillet Portion">
                <h2 class="slide-caption">Fillet Portion Cut</h2>
            </div>
            <div class="slide">
                <img src="images/product/mackerel/bone-on.png" alt="Bone On">
                <h2 class="slide-caption">Fillet Bone On</h2>
            </div>
            <div class="slide">
                <img src="images/product/mackerel/slice.png" alt="Slice">
                <h2 class="slide-caption">Mackerel Slice</h2>
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