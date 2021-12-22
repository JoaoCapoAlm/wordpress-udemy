<footer>
    <div class="container">
        <div class="row">
            <div class="copyright col-sm-7 col-4">
                <p>Copyright</p>
            </div>
            <?php wp_nav_menu([
                'theme_location' => 'menu_rodape',
                'container' => 'nav',
                'container_class' => 'footer-menu col-sm-5 col-8 text-end',
                'menu_class' => 'menu'
            ]); ?>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
