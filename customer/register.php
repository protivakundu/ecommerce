<?php include("./inc/header.php") ?>
        <!-- Main -->
        <main class="main--wrapper">

            

            <!-- reg area start -->
            <section class="reg-area pt-60 pb-75">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <div class="reg-wrapper">
                                <h2 class="text-center">Register</h2>

                                        <form action="./Controller/Auth/register.php" method="post">
                                            <div class="field">
                                                <label>Username</label>
                                                <input type="text" placeholder="Username" name="username" required>
                                            </div>
                                            <div class="field">
                                                <label>Email ID</label>
                                                <input type="text" name="email" placeholder="Email Address" required>
                                            </div>
                                            <div class="field">
                                                <label>Password</label>
                                                <input type="password" placeholder="Password" name="password" required>
                                            </div>
                                            <button type="submit">Register</button>
                                            <span>
                                                <input type="checkbox" class="check">
                                                Remember me
                                            </span>
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