<!--
    Directory:
    /public/sections/main-product.php
-->

<section>
    <form action="">
        <div class="product__wrapper">
            <div class="product--image__wrapper">
                <div class="each--image">
                    <img src="/public/assets/product/product1.png" alt="PITCH DECK TEMPLATES 1">
                </div>
                <div class="each--image">
                    <img src="/public/assets/product/product2.png" alt="PITCH DECK TEMPLATES 2">
                </div>
                <div class="each--image">
                    <img src="/public/assets/product/product3.png" alt="PITCH DECK TEMPLATES 3">
                </div>
            </div>
            <div class="product--contents__wrapper">
                <div class="product--contents__wrapper--sticky">
                    <h2 class="heading-h2 product--title">PITCH DECK TEMPLATES</h2>
                    <span class="collection--price">$20.00</span>
                    <div class="reviews">
                        <div class="stars">
                            <img src="/public/assets/review-stars.svg" alt="Review Rating">
                        </div>
                        <a href="#reviews__wrapper" class="review--text">2 Reviews</a>
                    </div>
                    <div class="selector">
                        <span>Styles:</span>
                        <div class="color--swatches">
                            <div class="color--1 color"></div>
                            <div class="color--2 color"></div>
                            <div class="color--3 color"></div>
                        </div>
                    </div>
                    <div class="product--description">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod <br>
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim <br>
                            veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea <br>
                            commodo consequat.
                        </p>
                    </div>
                    <div class="buy--buttons">
                        <a href="#" class="cta--secondary add--to--cart">Add to cart</a>
                        <a href="#" class="cta--secondary checkout--btn">Checkout with <img src="/public/assets/icons/applepay.svg" alt="Pay with Apple Pay"></a>
                    </div>
                    <?php include($directory . "/public/snippets/accordion.php"); ?>
                    <div class="share">
                        <span>Share:</span>
                        <div class="social--icons">
                            <li><a href="#" class="product--social"><img src="/public/assets/icons/pinterest-dark.svg" alt="White Canvas Co Pinterest Page"></a></li>
                            <li><a href="#" class="product--social"><img src="/public/assets/icons/facebook-dark.svg" alt="White Canvas Co Facebook Page"></a></li>
                            <li><a href="#" class="product--social"><img src="/public/assets/icons/insta-dark.svg" alt="White Canvas Co Instagram Page"></a></li>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</section>