    <footer class="footer" id="footer">
        <div class="sitemap">
            サイトマップ
        </div>
        <div class="copyright">
            <?php $now = date('Y'); ?>
            <p class="copyright__text">copyright&copy; <?php echo $now; ?> - <?php bloginfo( 'name' ); ?></p>
        </div>
    </footer>
    <div class="top-btn"><a href="#"><i class="fas fa-caret-up fa-2x"></i></a></div>
    <?php wp_footer(); ?>
</body>
</html>