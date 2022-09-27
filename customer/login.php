<?php include("./inc/header.php") ?>
        <!-- Main -->
        <main class="main--wrapper">

            

            <!-- reg area start -->
            <section class="reg-area pt-60 pb-75">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <div class="reg-wrapper">
                                <h2 class="text-center">Login</h2>
                                        <?php if(isset($_SESSION["success_msg"])) { ?>
                                            <div class="alert alert-success alert-dismissible">
                                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                                <?php echo $_SESSION["success_msg"] ?>
                                            </div>
                                        <?php } ?>

                                        <?php if(isset($_SESSION["fail_msg"])) { ?>
                                            <div class="alert alert-danger alert-dismissible">
                                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                                <?php echo $_SESSION["fail_msg"]?>
                                            </div>
                                        <?php } ?>

                                        <?php 
                                            unset($_SESSION["success_msg"]);
                                            unset($_SESSION["fail_msg"]);
                                        ?>

                                        <form action="./Controller/Auth/login.php" method="post">
                                            <div class="field">
                                                <label>Email ID</label>
                                                <input type="text" placeholder="Email Address" name="email" required>
                                            </div>
                                            <div class="field">
                                                <label>Password</label>
                                                <input type="password" placeholder="Password" name="password" required>
                                            </div>
                                            <button type="submit">Login</button>
                                            <button type="button"><a class="text-white" href="http://localhost/ecommerce/customer/register.php">Create new account</a></button>
                                            
                                            <a href="#" class="lost-pass">Lost Your Password?</a>
                                        </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- reg area end -->

            <!-- Subscribe -->
            <div class="subscribe subscribe--area grenadier-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="newsletter newsletter--box d-flex justify-content-between align-items-center pos-rel">
                                <div class="left d-flex justify-content-between align-items-center">
                                    <div class="newsletter__title">
                                        <span class="notification--icon"><img src="img/icon/notification-icon.png"
                                                alt="notification"></span>
                                        <span class="notification__title--heading f-800 white-color">Subscribe for Join Us!</span>
                                    </div>
                                    <div class="newsletter--message d-none d-xl-block">
                                        <p class="newsletter__message__title mb-0">.... & receive $20 coupne for first Shopping &
                                            free delivery.</p>
                                    </div>
                                </div>
                                <form class="right newsletter--form pos-rel">
                                    <input class="newsletter--input" type="text" placeholder="Enter Your Email Address ...">
                                    <button class="btn newsletter--button" type="button"><img src="img/icon/plan-icon.png"
                                            alt=""></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Subscribe End -->

        </main>
        <!-- Main End -->
<?php include("./inc/footer.php") ?>