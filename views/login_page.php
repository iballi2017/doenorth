<!-- Header -->

<?php include '../includes/header.php'; ?>

<div class="container login_page_container">
    <div class="row">
        <div class="col-12 col-md-6">

            <div id="login_form_wrapper">
                <h2 class="text-center">Login</h2>
                <form>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col">
                                <div class="form_group">
                                    <input type="email" id="email">
                                    <label for="email">Email</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form_group">
                                    <input type="password" id="password">
                                    <label for="password">Password</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="check_group mt-4">
                                    <input type="checkbox" id="subscribe_newsletter">
                                    <label for="subscribe_newsletter" class="check_label">
                                        <span class="custom_check"></span>
                                        Remember me</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="mt-4 text-right">
                                    <a href="#" class="_anc_lk">Forgot your password?</a></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <button type="submit" class="form_btn btn-block mt-3 pri_bg">Login</button>
                            </div>
                        </div>
                        <div class="fm_or_separator my-2" style="">
                            <span class="hr_lt">
                                <hr></span>
                            <span class="_or">OR</span>
                            <span class="hr_rt">
                                <hr></span></div>
                        <div class="row">
                            <div class="col">
                                <a href="#" type="submit" class="form_btn btn-block text-center _fbk_btn fb_bg">Login
                                    with
                                    Facebook</a>
                            </div>
                        </div>

                        <p class="mt-3">Don't have an account?
                            <br />
                            <a href="register_page.php" class="_fm_btn_lk">Register</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-12 col-md-6 illust_details">

        </div>
    </div>
</div>


<?php include '../includes/footer.php'; ?>
<!-- Footer -->