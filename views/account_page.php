<!-- Header -->

<?php include '../includes/header.php'; ?>

<div class="container account_page_container mb-5">
    <div class="row no-gutters">
        <div class="col-12 col-md-3">

            <nav class="acct_side_nav nav_area" style="height: 100%">
                <div class="card shadow border-0 mt-5">
                    <div class="card-body p-0">
                        <div class="p-3 acc_nv_hd">
                            My Doenorth Account
                        </div>
                        <div class="pt-3">
                            <ul class="p-0">
                                <li class="ord">
                                    <a href="#">Orders</a>
                                </li>
                                <li class="svdt">
                                    <a href="#">Saved Items</a>
                                </li>
                            </ul>
                        </div>
                        <hr>
                        <div class="">
                            <ul class="p-0">
                                <li class="detls">
                                    <a href="#">Details</a>
                                </li>
                                <li class="adbk">
                                    <a href="#">Address Book</a>
                                </li>
                                <li class="chpw">
                                    <a href="#">Change Password</a>
                                </li>
                                <li class="newsl">
                                    <a href="#">Newsletter Preference</a>
                                </li>
                            </ul>
                        </div>
                        <br>
                        <br>
                        <br>
                        <br>
                        <div class="p-3 text-center border-top logout_option_btn">
                            <a href="#">Logout</a>
                        </div>
                    </div>
                </div>
            </nav>

        </div>
        <div class="col-12 col-md-9">
            <main class="main_content main_area">
                <nav class="fixed-top m-2 d-block d-md-none" style="top: 6em">
                    <span>
                        <i class="fas fa-bars fa-2x" id="acct_pg_menu_toggler"></i></span>
                </nav>
                <div class="card shadow border-0 mt-5">
                    <div class="card-body">
                        <div class="container-fluid p-0 over_view_container">
                            <h4 class="m-2">Account Overview</h4>
                            <div class="row no-gutters">
                                <div class="col-12 col-md-6">
                                    <div class="card m-2">
                                        <div class="card-body">
                                            <h6>Account Details</h6>
                                            <hr>
                                            <h6>Alli ibrahim</h6>
                                            <p class="text-secondary">suport@ibrahimalli.com</p>
                                            <br>
                                            <a href="#" class="edit_lk">Change Password</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="card m-2">
                                        <div class="card-body">
                                            <h6>Address Book</h6>
                                            <hr>
                                            <h6>Your default shipping address</h6>
                                            <p class="text-secondary">No defuault shipping address</p>
                                            <br>
                                            <a href="#" class="edit_lk">Add default address</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row no-gutters">
                                <div class="col-12 col-md-6">
                                    <div class="card m-2">
                                        <div class="card-body">
                                            <h6>Newsletter Preferences</h6>
                                            <hr>
                                            <h6>You are currently not subscribed to any of our newsletters.</h6>
                                            <br>
                                            <a href="#" class="edit_lk">Add newsletter preferences</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="card m-2">
                                        <div class="card-body">
                                            <h6>Doenorthpay Balance</h6>
                                            <hr>
                                            <div class="wallet_acct_balance">
                                                <span><i class="fas fa-wallet mr-2"></i></span><span>$0.00</span>
                                            </div>
                                            <br>
                                            <br>
                                            <br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <div class="row no-gutters">
        <div class="col">
            <div class="recommended_prods_area">
                <div class="card shadow border-0">
                    <div class="card-body" style="position: relative">
                        <h4>Yummy Yummy (Fresh from the kitchen)</h4>
                        <!-- Set up your HTML -->
                        <div class="owl-carousel recommended_product_slider">
                            <a href="#">
                                <figure class="figure prod_fig">
                                    <img src="../images/0d7c126cee48e419be9b991d423c7bcc.jpg"
                                        class="figure-img img-fluid rounded" alt="product thumbnail">
                                    <figcaption class="figure-caption prod_fig_caption">
                                        <div class="cd_prod_name">Lorem, ipsum dolor.</div>
                                        <div class="cd_prod_prce">$3.30 <br>
                                            <small class="cd_prod_old_price">$3.45</small>
                                        </div>
                                    </figcaption>
                                </figure>
                            </a>
                            <a href="#">
                                <figure class="figure prod_fig">
                                    <img src="../images/0f80435ef431f270eff640bd565aa3e9.jpg"
                                        class="figure-img img-fluid rounded" alt="product thumbnail">
                                    <figcaption class="figure-caption prod_fig_caption">
                                        <div class="cd_prod_name">Lorem, ipsum dolor.</div>
                                        <div class="cd_prod_prce">$2.00 <br>
                                            <small class="cd_prod_old_price">$2.99</small>
                                        </div>
                                    </figcaption>
                                </figure>
                            </a>
                            <a href="#">
                                <figure class="figure prod_fig">
                                    <img src="../images/8b718e328319e998685d17fd835d257b.jpg"
                                        class="figure-img img-fluid rounded" alt="product thumbnail">
                                    <figcaption class="figure-caption prod_fig_caption">
                                        <div class="cd_prod_name">Lorem, ipsum dolor.</div>
                                        <div class="cd_prod_prce">$4.00 <br>
                                            <small class="cd_prod_old_price">$4.33</small>
                                        </div>
                                    </figcaption>
                                </figure>
                            </a>
                            <a href="#">
                                <figure class="figure prod_fig">
                                    <img src="../images/64968702bb4d7610c3e8ced9450379f4.jpg"
                                        class="figure-img img-fluid rounded" alt="product thumbnail">
                                    <figcaption class="figure-caption prod_fig_caption">
                                        <div class="cd_prod_name">Lorem, ipsum dolor.</div>
                                        <div class="cd_prod_prce">$2.00 <br>
                                            <small class="cd_prod_old_price">$2.30</small>
                                        </div>
                                    </figcaption>
                                </figure>
                            </a>
                            <a href="#">
                                <figure class="figure prod_fig">
                                    <img src="../images/d633ca9345e888cb80e6573448eb927f.jpg"
                                        class="figure-img img-fluid rounded" alt="product thumbnail">
                                    <figcaption class="figure-caption prod_fig_caption">
                                        <div class="cd_prod_name">Lorem, ipsum dolor.</div>
                                        <div class="cd_prod_prce">$3.00 <br>
                                            <small class="cd_prod_old_price">$3.45</small>
                                        </div>
                                    </figcaption>
                                </figure>
                            </a>
                            <a href="#">
                                <figure class="figure prod_fig">
                                    <img src="../images/0f80435ef431f270eff640bd565aa3e9.jpg"
                                        class="figure-img img-fluid rounded" alt="product thumbnail">
                                    <figcaption class="figure-caption prod_fig_caption">
                                        <div class="cd_prod_name">Lorem, ipsum dolor.</div>
                                        <div class="cd_prod_prce">$2.00 <br>
                                            <small class="cd_prod_old_price">$3.40</small>
                                        </div>
                                    </figcaption>
                                </figure>
                            </a>
                            <a href="#">
                                <figure class="figure prod_fig">
                                    <img src="../images/8b718e328319e998685d17fd835d257b.jpg"
                                        class="figure-img img-fluid rounded" alt="product thumbnail">
                                    <figcaption class="figure-caption prod_fig_caption">
                                        <div class="cd_prod_name">Lorem, ipsum dolor.</div>
                                        <div class="cd_prod_prce">$4.00 <br>
                                            <small class="cd_prod_old_price">$4.05</small>
                                        </div>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>

                        <div class="recommended_product_slider_nav" style="">

                            <span class="custom_prod_PrevBtn"><i class="fas fa-chevron-circle-left fa-2x"></i></span>
                            <span class="custom_prod_NextBtn"><i class="fas fa-chevron-circle-right fa-2x"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>
<!-- Footer -->