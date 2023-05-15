<footer class="page-footer">
    <div class="container">
        <div class="page-footer__img align--right lg--only">
            <img src="<?php echo get_field('footer_img')['url'] ?>" alt="">
            
        </div>

        <div class="page-footer__wrapper grid">
            <div class="page-footer__navigation">
                <nav class="footer__nav">
                    <h3 class="footer__nav__header">Navigation</h3>
                    <ul>
                        <!-- <li><a href="#">Home</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Contact</a></li> -->
                        <?php wp_menu_li() ?>
                    </ul>
                </nav>
                 <nav class="footer__nav">
                    <h3 class="footer__nav__header">Connect</h3>
                    <ul>
                        <!-- <li><a href="#">Facebook</a></li>
                        <li><a href="#">Instagram</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Youtube</a></li> -->
                        <?php wp_connect_li()?>
                    </ul>
                </nav>
            </div>

            <div class="newletter">
                <!-- <form action="">
                    <div class="form__group">
                        <input type="text" required>
                        <label for="">Subscribe to our newsletter</label>
                    </div>
                    <button class="btn btn--dark">Subcribe</button>
                </form> -->
                <?php echo do_shortcode('[contact-form-7 id="116" title="Newsletter"]') ?>

                <div class="footer__email">
                    <h4>Have a project in mind</h4>
                    <a href="mailto:<?php echo get_field('company_email','option') ?>"><?php echo get_field('company_email','option') ?></a>
                </div>
            </div>
           
        </div>
    </div>
    <div class="copyright">
        <p>&copy; 2021 All Right Reserve</p>
    </div>
</footer>