    </main>

    <footer class="footer">
        <div class="footer__top">
            <div class="container">
                <?php if (is_active_sidebar('Footer Top')) { ?>
                    <?php dynamic_sidebar('Footer Top'); ?>
                <?php } ?>
            </div>
        </div>
        <div class="footer__columns container">
            <div class="footer__columns__col">
                <?php if (is_active_sidebar('Footer 1')) { ?>
                    <?php dynamic_sidebar('Footer 1'); ?>
                <?php } ?>
            </div>
            <div class="footer__columns__col">
                <?php if (is_active_sidebar('Footer 2')) { ?>
                    <?php dynamic_sidebar('Footer 2'); ?>
                <?php } ?>
            </div>
            <div class="footer__columns__col">
                <?php if (is_active_sidebar('Footer 3')) { ?>
                    <?php dynamic_sidebar('Footer 3'); ?>
                <?php } ?>
            </div>
        </div>
        <div class="footer__bottom">
            <div class="container">
                <?php if (is_active_sidebar('Footer Bottom')) { ?>
                    <hr />
                    <?php dynamic_sidebar('Footer Bottom'); ?>
                <?php } ?>
            </div>
        </div>
    </footer>

    <?php wp_footer() ?>
    </body>

    </html>