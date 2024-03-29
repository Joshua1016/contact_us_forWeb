<?php
require_once '../assets/layouts/headers/header.php';
?>


<?php require_once '../assets/layouts/menu/contact.php'; ?>


<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs d-flex align-items-center" style="background-image: url('../assets/img2/contact.jpg');">
    <div class="container position-relative d-flex flex-column align-items-center">

      <h2 style="color: gold">Contact</h2>
      <ol>
        <li><a href="index.php">Home</a></li>
        <li style="color: gold">Contact</li>
      </ol>

    </div>
  </div><!-- End Breadcrumbs -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container position-relative" data-aos="fade-up">

      <div class="row gy-4 d-flex justify-content-end">

        <div class="col-lg-5" data-aos="fade-up" data-aos-delay="100">

          <div class="info-item d-flex">
            <i class="bi bi-geo-alt flex-shrink-0"></i>
            <div>
              <h4>Location:</h4>
              <p> Brgy. Dos Hermanas, <br>Talisay City, 6115, <br>Negros Occidental </p>
            </div>
          </div><!-- End Info Item -->

          <div class="info-item d-flex">
            <i class="bi bi-envelope flex-shrink-0"></i>
            <div>
              <h4>Email:</h4>
              <p>firstfarmershrd@gmail.com</p>
              <p>firstfarmersholdingcorporation@gmail.com</p>
            </div>
          </div><!-- End Info Item -->

          <div class="info-item d-flex">
            <i class="bi bi-phone flex-shrink-0"></i>
            <div>
              <h4>Call:</h4>
              <p>(034) 441-0255</p>
            </div>
          </div><!-- End Info Item -->

        </div>

        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="250">
          <!-- Your HTML form code as provided in the question -->
          <form action="process.php" method="post" role="form" class="php-email-form">
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div>
            </div>
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>

        </div><!-- End Contact Form -->

      </div>

    </div>
  </section><!-- End Contact Section -->

</main><!-- End #main -->

<?php require_once '../assets/layouts/footers/footer_contact.php' ?>
