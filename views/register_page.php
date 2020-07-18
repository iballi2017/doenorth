<!-- Header -->

<?php include '../includes/header.php'; ?>

<div class="container register_page_container">

    <div id="register_form_wrapper">
        <h2 class="text-center">Register</h2>
        <form>
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <div class="form_group">
                            <input type="text" id="first_name">
                            <label for="first_name">First Name</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form_group">
                            <input type="text" id="last_name">
                            <label for="last_name">Last Name</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form_group">
                            <input type="email" id="email">
                            <label for="email">Email</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form_group">
                            <input type="text" id="phone">
                            <label for="phone">Phone</label>
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
                    <div class="col">
                        <div class="form_group">
                            <input type="password" id="password_two">
                            <label for="password_two">Re-enter Password</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="check_group mt-4">
                            <input type="checkbox" id="subscribe_newsletter">
                            <label for="subscribe_newsletter" class="check_label">
                                <span class="custom_check"></span>
                                I want to receive &nbsp;<span class="lgo_st">Doe</span><span
                                    class="lgo_ed">north</span>&nbsp;
                                newsletters
                                with the best deals
                                and
                                offers</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <button type="submit" class="form_btn btn-block mt-3 pri_bg">Register</button>
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
                        <a href="#" type="submit" class="form_btn btn-block text-center _fbk_btn fb_bg">Register
                            with
                            Facebook</a>
                    </div>
                </div>

                <p class="mt-3">Already have an account?
                    <br />
                    <a href="login_page.php" class="_fm_btn_lk">Login</a>
                </p>
            </div>
        </form>
    </div>
</div>


<?php include '../includes/footer.php'; ?>
<!-- Footer -->