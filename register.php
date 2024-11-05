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
    <section class=" register-banner ptb-200 mt-80">
        <div class="container">
            <div class="row text-center">
                <div class="col-12">
                    <h2 class=" text-white fw-bold ">Register</h2>
                    <ul class="text-center px-0 mb-0 list-unstyled">
                        <li>
                            <a href="./index.php" class="home fw-bold text-white">
                                Home
                            </a>
                        </li>
                        <li class="text-orange register">
                            Register
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- ========================= /Hero section end ========================= -->

    <!-- ========================= Register section start ========================= -->
    <section class="register-area ptb-100">
        <div class="container">
            <div class="register-form">
                <h2>Register</h2>
                <form method="post">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" placeholder="Emai">
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <input type="tel" class="form-control" placeholder="Phone">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" placeholder="Password">
                    </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="checkme">
                            <label class="form-check-label" for="checkme">Show password?</label>
                        </div>
                    <button type="submit" class="btn mt-3 w-100">Register Now</button>
                </form>
                <div class="important-text">
                    <p>
                        Don't have an account?
                        <a href="login.php">Login now!</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- ========================= /Register section end ========================= -->  

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