        </main>
        <footer>
            <div>© <?php echo date('Y'); ?> simplesite.com</div>
            <div>
                <?php wp_nav_menu(array(
                    'theme_location'=>'footer_menu'
                )); ?>
            </div>
        </footer>
        <?php wp_footer(); ?>
    </div><!-- #app -->
</body>
</html>