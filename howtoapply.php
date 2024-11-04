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
    <section class=" howtoapply-banner ptb-200 mt-80">
        <div class="container">
            <div class="row text-center">
                <div class="col-12">
                    <h2 class=" text-white fw-bold ">How To Apply</h2>
                    <ul class="text-center px-0 mb-0 list-unstyled">
                        <li>
                            <a href="./index.php" class="home fw-bold text-white">
                                Home
                            </a>
                        </li>
                        <li class="text-orange howtoapply">
                            How To Apply
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- ========================= /Hero section end ========================= -->

    <!-- ========================= Apply section start ========================= -->
    <section class="apply-area ptb-100">
        <div class="container">
            <div class="apply-form">
                <form>
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="content">
                                <h3>Parent Details</h3>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Your Name">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Email Address">
                            </div>
                            <div class="form-group">
                                <input type="tel" class="form-control" placeholder="Phone Nmuber">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="content">
                                <h3>Child Details</h3>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Email Address">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Age">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" placeholder="Write Something..."></textarea>
                    </div>
                    <button type="submit" class="btn w-100">
                        Submit Now
                    </button>
                </form>
            </div>
        </div>
    </section>
    <!-- ========================= /Apply section end ========================= -->




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