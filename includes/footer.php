<?php include '../includes/search_field.php'; ?>
<?php include '../includes/cart_btn.php'; ?>

</main>

<footer class="bg-dark py-1 text-white text-center">
    <div class="container">
        <div class="footer_menu">
            <h2>
                <a class="navbar-brand" href="../index.php"><span class="lgo_st_alt">Doe</span><span
                        class="lgo_ed">north</span></a></h2>
            <nav class="footer_nav pt-2">
                <ul class="footer_nav_tab" style="">
                    <li>
                        <a href="#">About Us</a>
                    </li>
                    <li>
                        <a href="#">Our Services</a>
                    </li>
                    <li>
                        <a href="#">Privacy policy</a>
                    </li>
                    <li>
                        <a href="#">Return policy</a>
                    </li>
                    <li>
                        <a href="#">FAQ</a>
                    </li>
                </ul>
            </nav>

            <ul class="social_tab pt-2">
                <li>
                    <a href="#">
                        <i class="fab fa-facebook-square"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fab fa-twitter-square"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fab fa-instagram-square"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="copyright text-center py-1">
        Copyright 2020. Allinovate</div>
</footer>

<!-- Juery -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
</script>
<!-- owl-carousel js -->
<script src="../js/owl_carousel/owl.carousel.min.js"></script>
<!-- custom js -->
<script src="../js/main.js"></script>
</body>

</html>

<!-- Close database connection -->
<?php
// mysqli_close($conn);
?>