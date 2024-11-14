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
    <section class=" login-banner ptb-200">
        <div class="container">
            <div class="row text-center">
                <div class="col-12">
                    <h2 class=" text-white fw-bold ">Login</h2>
                    <ul class="text-center px-0 mb-0 list-unstyled">
                        <li>
                            <a href="./index.php" class="home fw-bold text-white">
                                Home
                            </a>
                        </li>
                        <li class="text-orange login">
                            Login
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- ========================= /Hero section end ========================= -->

    <!-- ========================= LOGIN section start ========================= -->
    <section class="login-area ptb-100">
        <div class="container">
            <div class="login-form">
                <h2>Login</h2>
                <form method="post">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <label>Email or Phone</label>
                        <input type="text" class="form-control" placeholder="Email or Phone">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" placeholder="Password">
                    </div>
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="checkme">
                                <label class="form-check-label" for="checkme">Remember me</label>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 lost-your-password">
                            <a href="javascript:void()" class="lost-your-password">
                                Forgot your password?
                            </a>
                        </div>
                    </div>
                    <button type="submit" class="btn mt-3 w-100">Login</button>
                </form>
                <div class="important-text">
                    <p>
                        Don't have an account?
                        <a href="register.php">Register now!</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- ========================= /LOGIN section end ========================= -->

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