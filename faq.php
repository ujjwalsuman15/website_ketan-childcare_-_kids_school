<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ketan - childcare & kids school</title>
    <?php include 'include/toplink.php'?>

</head>

<body>
    <div id="homeup"></div>

    <!-- ========================= Header section start ========================= -->
    <?php include 'include/header.php'?>
    <!-- ========================= /Header section end ========================= -->
    

    <!-- ========================= Hero section start ========================= -->
    <section class=" faq-banner ptb-200 mt-80">
        <div class="container">
            <div class="row text-center">
                <div class="col-12">
                    <h2 class=" text-white fw-bold ">FAQ</h2>
                    <ul class="text-center px-0 mb-0 list-unstyled">
                        <li>
                            <a href="./index.php" class="home fw-bold text-white">
                                Home
                            </a>
                        </li>
                        <li class="text-orange faq">
                            FAQ
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- ========================= /Hero section end ========================= -->

    <!-- ========================= FAQ section start ========================= -->
    <section class="entollment-area pt-100">
        <div class="container">
            <div class="row faq">
                <span class="text-center d-block">FAQ</span>
                <h3 class="text-center">Frequently Asked Questions</h3>
                <div class="col-lg-6">
                    <div class="faq-image"></div>
                </div>
                <div class="col-lg-6">
                    <div class="enrollment-content">
                        <div class="content">
                            <h3>Steps to Enrollment</h3>
                        </div>
                        <div class="enroll-expand">
                            <p class=" mb-0 enroll-expand-item">
                                <a class="enroll-expand-title" data-bs-toggle="collapse" href="#collapseExample1"
                                    role="button" aria-expanded="false" aria-controls="collapseExample">
                                    Explore Your Option
                                    <i class="fa-solid fa-plus i"></i>
                                </a>
                            </p>
                            <div class="collapse" id="collapseExample1">
                                <div class="card-body enroll-expand-content">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua.
                                </div>
                            </div>
                        </div>
                        <div class="enroll-expand">
                            <p class=" mb-0 enroll-expand-item">
                                <a class="enroll-expand-title" data-bs-toggle="collapse" href="#collapseExample2"
                                    role="button" aria-expanded="false" aria-controls="collapseExample">
                                    Submit Application in Online
                                    <i class="fa-solid fa-plus i"></i>
                                </a>
                            </p>
                            <div class="collapse" id="collapseExample2">
                                <div class="card-body enroll-expand-content">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua.
                                </div>
                            </div>
                        </div>
                        <div class="enroll-expand">
                            <p class=" mb-0 enroll-expand-item">
                                <a class="enroll-expand-title" data-bs-toggle="collapse" href="#collapseExample3"
                                    role="button" aria-expanded="false" aria-controls="collapseExample">
                                    Receive Assign Task
                                    <i class="fa-solid fa-plus i"></i>
                                </a>
                            </p>
                            <div class="collapse" id="collapseExample3">
                                <div class="card-body enroll-expand-content">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua.
                                </div>
                            </div>
                        </div>
                        <div class="enroll-expand">
                            <p class=" mb-0 enroll-expand-item">
                                <a class="enroll-expand-title" data-bs-toggle="collapse" href="#collapseExample4"
                                    role="button" aria-expanded="false" aria-controls="collapseExample">
                                    Register at Your Assign Class
                                    <i class="fa-solid fa-plus i"></i>
                                </a>
                            </p>
                            <div class="collapse" id="collapseExample4">
                                <div class="card-body enroll-expand-content">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua.
                                </div>
                            </div>
                        </div>
                        <div class="enroll-expand">
                            <p class=" mb-0 enroll-expand-item">
                                <a class="enroll-expand-title" data-bs-toggle="collapse" href="#collapseExample5"
                                    role="button" aria-expanded="false" aria-controls="collapseExample">
                                    Go Online Live Class
                                    <i class="fa-solid fa-plus i"></i>
                                </a>
                            </p>
                            <div class="collapse" id="collapseExample5">
                                <div class="card-body enroll-expand-content">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========================= /FAQ section end ========================= -->

    <!-- ========================= QUESTION section start ========================= -->
    <section class="question-area ptb-100">
        <div class="container">
            <div class="row question">
                <span class="text-center d-block">Questions</span>
                <h3 class="text-center">Do You Have Any Questions?</h3>
                <div class="question-contact-form">
                    <form method="post" id="contactform">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="name" id="name" class="form-control" required=""
                                        placeholder="Name">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="email" name="email" id="email" class="form-control" required=""
                                        placeholder="Email">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="tel" name="phone" id="phone" class="form-control" required=""
                                        placeholder="Phone">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="subject" id="subject" class="form-control" required=""
                                        data-error="Please enter your subject" placeholder="Subject">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <textarea name="message" class="form-control" id="message" cols="30" rows="6"
                                        placeholder="Your Message..."></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="send-btn">
                                    <button type="submit" class="btn">Send Message..</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- ========================= /QUESTION section end ========================= -->


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