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
    <section class=" errorpage-banner ptb-200">
        <div class="container">
            <div class="row text-center">
                <div class="col-12">
                    <h2 class=" text-white fw-bold ">Error Page</h2>
                    <ul class="text-center px-0 mb-0 list-unstyled">
                        <li>
                            <a href="./index.php" class="home fw-bold text-white">
                                Home
                            </a>
                        </li>
                        <li class="text-orange errorpage">
                            Error Page
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- ========================= /Hero section end ========================= -->

    <!-- ========================= ERROR section start ========================= -->
    <section class="error-area ptb-100">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="error-content">
                        <img src="assests/img/errorpageimg/404.png" alt="error">
                        <h3>Error 404 : page not found</h3>
                        <p>The page you are looking for might have been removed had its name changed or is temporarily
                            unavailable.</p>
                        <a href="index.html" class="btn">Go to home</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========================= /ERROR section end ========================= -->

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