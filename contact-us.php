<!DOCTYPE html>
<html>
<?php include 'header.php'; ?>
<body>
<?php include 'navbar.php'; ?>
<!-- ABOUT SECTION -->
<section class="contactus-section">
  <img src="images/contact-us-bg.jpg" alt="Background" class="contactus-background-img">
  <div class="contactus-overlay"></div>
  <div class="container-contactus">
    <div class="contactus-text">
      <h2>LET'S HAVE A TALK <br>
      ABOUT SOMETHING INTERESTING!
    </h2>
      <p>
        Our team is here to help you. If you'd like to get in touch, contact us via
         the email or telephone details below. Or fill out our form and a member of our
          team will contact you within one working day.
      </p>
    </div>
  </div>
</section>
<section id="contact">
    <div class="contact-container">
      
      <!-- KIRI: Peta dan Info Kontak -->
      <div class="contact-left">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d976.1849029456126!2d112.10368062082976!3d-7.013710232100962!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e779106f7c3aed5%3A0x1199ea3b66519810!2sPT.%20Kirana%20Food%20International!5e1!3m2!1sen!2sid!4v1745997013398!5m2!1sen!2sid" 
          width="95%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <p>
          <strong>Head Office & Factory:</strong><br>
          Jl. Raya Pakah - Ponco KM. 15+700<br>
          Sumberagung, Plumpang, Tuban, East Java - Indonesia<br><br>
          <strong>Phone:</strong> +62 35 6881 2888<br>
          <strong>Fax:</strong> +62 35 6881 2999<br>
          <strong>Email:</strong><br>
          kirana@kfifood.com<br>
          marketing@kfifood.com
        </p>
      </div>

      <!-- KANAN: Formulir Kontak -->
      <div class="contact-right">
        <form action="send_mail.php" method="POST">
          <p>Silakan isi detail Anda di bawah ini, dan kami akan segera menghubungi Anda kembali.</p>

          <label for="name">Your Name:</label>
          <input type="text" id="name" name="name" required>

          <label for="phone">Your Phone Number:</label>
          <input type="tel" id="phone" name="phone" required>

          <label for="email">Your Email:</label>
          <input type="email" id="email" name="email" required>

          <label for="subject">Subject:</label>
          <input type="text" id="subject" name="subject" required>

          <label for="message">Message:</label>
          <textarea id="message" name="message" rows="5" required></textarea>

          <button type="submit">Submit</button>
        </form>
      </div>

    </div>
  </section>

<?php include 'footer.php'; ?>
</body>
</html>