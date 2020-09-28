<footer>
    <div class="container">
        <div class="row-footer">
            <div class="item">
                <div class="title">
                    Help + Info
                </div>
                <ul>
                    <li><a href="">Order Status</a></li>
                    <li><a href="">Returns + Exchanges</a></li>
                    <li><a href="">Shipping</a></li>
                    <li><a href="">Orders + Payments</a></li>
                    <li><a href="">FAQ</a></li>
                    <li><a href="">See All Help Topics</a></li>
                    <li><a href="">Contact Us</a></li>
                </ul>
            </div>
            <div class="item">
                <div class="title">
                    Quick Links
                </div>
                <ul>
                    <li><a href="">Brands</a></li>
                    <li><a href="">Gift Cards</a></li>
                    <li><a href="">Careers</a></li>
                    <li><a href="">Shop Europe</a></li>
                    <li><a href="">Shop Canada</a></li>
                </ul>
            </div>
            <div class="item">
                <div class="title">
                    Extras
                </div>
                <ul>
                    <li><a href="">UO Rewards</a></li>
                    <li><a href="">UO MRKT</a></li>
                    <li><a href="">UO Blog</a></li>
                    <li><a href="">UO Community Cares</a></li>
                    <li><a href="">Creative Services</a></li>
                    <li><a href="">Afterpay</a></li>
                </ul>
            </div>
            <div class="item">
                <div class="title">
                    Find A Store
                </div>
                <ul>
                    <li><a href="">Store Locator</a></li>
                    <li><a href="">UO Spaces</a></li>
                    <li><a href="">Campus Bookstores</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/jquery.fancybox.js?v=2.1.4"></script>
<script>
    $(document).ready(function () {
        $('a').click(function () {
            var largeImage = $(this).attr('data-full');
            $('.selected').removeClass();
            $(this).addClass('selected');
            $('.full img').hide();
            $('.full img').attr('src', largeImage);
            $('.full img').fadeIn();


        }); // closing the listening on a click
        $('.full img').on('click', function () {
            var modalImage = $(this).attr('src');
            $.fancybox.open(modalImage);
        });
    }); //closing our doc ready
</script>
</body>
</html>