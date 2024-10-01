<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>ketan - childcare & kids school</title>
  <?php include 'include/toplink.php'?>
</head>

<body>
  <div id="homeup"></div>

  <!-- ========================= Header section start ========================= -->
  <?php include 'include/header.php'?>
  <!-- ========================= /Header section end ========================= -->

  <!-- ========================= Hero section start ========================= -->
  <section class="contact-banner ptb-200 mt-80">
    <div class="container">
      <div class="row text-center">
        <div class="col-12">
          <h2 class="text-white fw-bold">contact</h2>
          <ul class="text-center px-0 mb-0 list-unstyled">
            <li>
              <a href="./index.php" class="home fw-bold text-white"> Home </a>
            </li>
            <li class="text-orange contact">Contact</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- ========================= /Hero section end ========================= -->

  <!-- Ready to Get Start section start -->
  <section class="start-contect-area ptb-100">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-7 col-md-12">
          <div class="contact-form">
            <h3 class="fw-bold">Ready yo Get Started?</h3>
            <form id="contactform" method="post">
              <div class="row">
                <div class="col-lg-12 col-md-6">
                  <div class="form-group">
                    <input type="text" name="name" id="name" class="form-control" required placeholder="Your Name" />
                  </div>
                </div>
                <div class="col-lg-12 col-md-6">
                  <div class="form-group">
                    <input type="email" name="email" id="email" class="form-control" required
                      placeholder="Your Email Address" />
                  </div>
                </div>
                <div class="col-lg-12 col-md-6">
                  <div class="form-group">
                    <input type="number" name="phone_number" id="phone_number" class="form-control" required
                      placeholder="Your Phone Number">
                  </div>
                </div>
                <div class="col-lg-12 col-md-6">
                  <div class="form-group">
                    <input type="text" name="subjects" id="subjects" class="form-control" required
                      placeholder="Your Subjects" />
                  </div>
                </div>
                <div class="col-lg-12 col-md-6">
                  <div class="form-group has-error">
                    <textarea name="message" id="message" cols="30" rows="5" required class="form-control"
                      placeholder="Write Your Message........"></textarea>
                  </div>
                </div>
                <div class="col-lg-12 col-md-6">
                  <button type="submit" class="btn">Send Message</button>
                  <div id="msgSubmit" class="h3 text-center hidden"></div>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="col-lg-5 col-md-12">
          <div class="contact-info">
            <h3 class="fs-4 mb-4 fw-bold">Here to Help</h3>
            <ul class="contact-list">
              <li>
                <i class="fa-solid fa-location-dot i"></i>
                Location:
                <span> Market Palace Street, Pune, Maharashtra </span>
              </li>
              <li>
                <i class="fa-solid fa-phone-volume i"></i>
                Call Us:
                <a href="tel:+01321654214">
                  +01 321 654 214
                </a>
              </li>
              <li>
                <i class="fa-solid fa-envelope i"></i>
                Email Us:
                <a href="mailto:hello@ketan.com">
                  hello@ketan.com
                </a>
              </li>
              <li>
                <i class="fa-solid fa-microphone i"></i>
                Fax:
                <a href="tel:+6543647168">
                  +6543647168
                </a>
              </li>
            </ul>
            <h3 class="fs-4 mb-4 fw-bold">Opening Hours: </h3>
            <ul class="opening-hours">
              <li>
                Monday: 8AM - 6AM
              </li>
              <li>
                Tuesday: 8AM - 6AM
              </li>
              <li>
                Wednesday: 8AM - 6AM
              </li>
              <li>
                Thursday: 8AM - 6AM
              </li>
              <li>
                Friday: Closed
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /Ready to Get Start section end -->

  <!-- map section start -->
  <div id="map">
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d232975.49443100163!2d73.55110864435541!3d18.524686433680817!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2bf2e67461101%3A0x828d43bf9d9ee343!2sPune%2C%20Maharashtra!5e1!3m2!1sen!2sin!4v1727766901084!5m2!1sen!2sin"
      width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
      referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
  <!-- /map section end -->

  <!-- ========================= Footer section start ========================= -->
  <?php include 'include/footer.php'?>
  <!-- ========================= /Footer Section end ========================= -->

  <!-- ========================= Fixed section start ========================= -->
  <?php include 'include/fixed.php'?>
  <!-- ========================= /Fixed section end ========================= -->

  <!-- script section start -->
  <?php include 'include/scriptlink.php'?>
  <!-- /script section end -->
</body>

</html>