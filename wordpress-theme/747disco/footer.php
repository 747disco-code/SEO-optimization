    <!-- Footer -->
    <footer class="site-footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>747 Disco</h3>
                    <p><?php echo get_bloginfo( 'description' ); ?></p>
                </div>
                <div class="footer-section">
                    <h4>Link Utili</h4>
                    <?php
                    wp_nav_menu( array(
                        'theme_location' => 'footer',
                        'container'      => false,
                        'fallback_cb'    => false,
                    ) );
                    ?>
                </div>
                <div class="footer-section">
                    <h4>Contatti</h4>
                    <p>📞 <?php echo get_theme_mod( '747disco_phone', '+39 06 123 4567' ); ?></p>
                    <p>✉️ <?php echo get_theme_mod( '747disco_email', 'info@747disco.it' ); ?></p>
                    <p>📍 <?php echo get_theme_mod( '747disco_address', 'Ciampino (RM)' ); ?></p>
                </div>
                <div class="footer-section">
                    <h4>Seguici</h4>
                    <div class="social-links">
                        <?php if ( get_theme_mod( '747disco_facebook' ) ) : ?>
                            <a href="<?php echo esc_url( get_theme_mod( '747disco_facebook' ) ); ?>" target="_blank">Facebook</a>
                        <?php endif; ?>
                        <?php if ( get_theme_mod( '747disco_instagram' ) ) : ?>
                            <a href="<?php echo esc_url( get_theme_mod( '747disco_instagram' ) ); ?>" target="_blank">Instagram</a>
                        <?php endif; ?>
                        <?php if ( get_theme_mod( '747disco_whatsapp' ) ) : ?>
                            <a href="<?php echo esc_url( get_theme_mod( '747disco_whatsapp' ) ); ?>" target="_blank">WhatsApp</a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; <?php echo date('Y'); ?> 747 Disco. Tutti i diritti riservati.</p>
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>
</body>
</html>
