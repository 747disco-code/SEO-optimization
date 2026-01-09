<?php
/**
 * Template Name: Home Page
 * Template Post Type: page
 */

get_header(); ?>

<!-- Hero Section -->
<section id="home" class="hero">
    <div class="hero-content">
        <h1 class="hero-title"><?php echo get_theme_mod( '747disco_hero_title', 'Benvenuti al 747 Disco' ); ?></h1>
        <p class="hero-subtitle"><?php echo get_theme_mod( '747disco_hero_subtitle', 'La location perfetta per i tuoi eventi indimenticabili a Roma Sud' ); ?></p>
        <div class="hero-cta">
            <a href="#contatti" class="btn btn-primary">Prenota Ora</a>
            <a href="#eventi" class="btn btn-secondary">Scopri di Più</a>
        </div>
    </div>
    <div class="scroll-indicator">
        <span>Scroll</span>
        <div class="scroll-arrow"></div>
    </div>
</section>

<!-- About Section -->
<section id="about" class="about">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Chi Siamo</h2>
            <p class="section-subtitle">Una storia che inizia negli anni '70</p>
        </div>
        <div class="about-content">
            <div class="about-text">
                <?php
                if ( have_posts() ) :
                    while ( have_posts() ) : the_post();
                        the_content();
                    endwhile;
                endif;
                ?>
            </div>
            <div class="about-features">
                <div class="feature-card">
                    <div class="feature-icon">🎉</div>
                    <h3>Esperienza</h3>
                    <p>Oltre 40 anni di eventi di successo</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">🎵</div>
                    <h3>Musica</h3>
                    <p>Sistema audio professionale e DJ esperti</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">🍽️</div>
                    <h3>Catering</h3>
                    <p>Servizio catering di alta qualità</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Events Section -->
<section id="eventi" class="events">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">I Nostri Eventi</h2>
            <p class="section-subtitle">Realizziamo ogni tipo di evento</p>
        </div>
        <div class="events-grid">
            <?php
            // Query per ottenere i post della categoria Eventi
            $events_query = new WP_Query( array(
                'post_type'      => 'post',
                'posts_per_page' => 6,
                'category_name'  => 'eventi',
            ) );

            if ( $events_query->have_posts() ) :
                while ( $events_query->have_posts() ) : $events_query->the_post();
            ?>
                <div class="event-card">
                    <?php if ( has_post_thumbnail() ) : ?>
                        <div class="event-image">
                            <?php the_post_thumbnail( 'medium' ); ?>
                        </div>
                    <?php else : ?>
                        <div class="event-image" style="background: linear-gradient(135deg, #c9a96e 0%, #745c39 100%);">
                            <span class="event-icon">🎉</span>
                        </div>
                    <?php endif; ?>
                    <div class="event-content">
                        <h3><?php the_title(); ?></h3>
                        <p><?php echo wp_trim_words( get_the_excerpt(), 20 ); ?></p>
                        <a href="<?php the_permalink(); ?>" class="event-link">Scopri di più →</a>
                    </div>
                </div>
            <?php
                endwhile;
                wp_reset_postdata();
            else :
                // Fallback: mostra gli eventi di default se non ci sono post
                $default_events = array(
                    array( 'title' => 'Feste 18 Anni', 'desc' => 'La festa di maggiorenità più bella con pacchetti all-inclusive a partire da €1590', 'icon' => '🎂' ),
                    array( 'title' => 'Eventi Aziendali', 'desc' => 'Location professionale per meeting, conferenze e team building', 'icon' => '💼' ),
                    array( 'title' => 'Feste di Laurea', 'desc' => 'Celebra il tuo successo con amici e famiglia in grande stile', 'icon' => '🎓' ),
                    array( 'title' => 'Matrimoni', 'desc' => 'Il giorno più importante merita una location speciale', 'icon' => '💑' ),
                    array( 'title' => 'Compleanni', 'desc' => 'Feste per tutte le età: 30, 40, 50 anni e oltre', 'icon' => '🎈' ),
                    array( 'title' => 'Baby Shower', 'desc' => 'Celebra l\'arrivo del nuovo bebè in un ambiente elegante', 'icon' => '👶' ),
                );
                foreach ( $default_events as $event ) :
            ?>
                <div class="event-card">
                    <div class="event-image" style="background: linear-gradient(135deg, #c9a96e 0%, #745c39 100%);">
                        <span class="event-icon"><?php echo $event['icon']; ?></span>
                    </div>
                    <div class="event-content">
                        <h3><?php echo $event['title']; ?></h3>
                        <p><?php echo $event['desc']; ?></p>
                        <a href="#contatti" class="event-link">Scopri di più →</a>
                    </div>
                </div>
            <?php
                endforeach;
            endif;
            ?>
        </div>
    </div>
</section>

<!-- Location Section -->
<section id="location" class="location">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">La Nostra Location</h2>
            <p class="section-subtitle">Spazi versatili e moderni</p>
        </div>
        <div class="location-content">
            <div class="location-info">
                <div class="info-item">
                    <h3>📍 Posizione Strategica</h3>
                    <p>Situati a Ciampino, facilmente raggiungibili da tutta Roma Sud con ampio parcheggio disponibile</p>
                </div>
                <div class="info-item">
                    <h3>🏛️ Spazi Flessibili</h3>
                    <p>Sale modulari che si adattano a eventi di diverse dimensioni, da 50 a 300 persone</p>
                </div>
                <div class="info-item">
                    <h3>🎨 Design Moderno</h3>
                    <p>Ambienti curati nei minimi dettagli con illuminazione professionale e atmosfera unica</p>
                </div>
                <div class="info-item">
                    <h3>🔊 Tecnologia</h3>
                    <p>Sistema audio e luci di ultima generazione per un'esperienza indimenticabile</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Gallery Section -->
<section id="gallery" class="gallery">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Gallery</h2>
            <p class="section-subtitle">I nostri eventi più belli</p>
        </div>
        <div class="gallery-grid">
            <?php
            // Query per ottenere le immagini della galleria
            $gallery_query = new WP_Query( array(
                'post_type'      => 'post',
                'posts_per_page' => 6,
                'category_name'  => 'gallery',
                'meta_query'     => array(
                    array(
                        'key'     => '_thumbnail_id',
                        'compare' => 'EXISTS'
                    ),
                ),
            ) );

            if ( $gallery_query->have_posts() ) :
                while ( $gallery_query->have_posts() ) : $gallery_query->the_post();
            ?>
                <div class="gallery-item">
                    <?php if ( has_post_thumbnail() ) : ?>
                        <?php the_post_thumbnail( 'large' ); ?>
                    <?php endif; ?>
                </div>
            <?php
                endwhile;
                wp_reset_postdata();
            else :
                // Placeholder se non ci sono immagini
                $placeholders = array( 'Festa 18 Anni', 'Evento Aziendale', 'Matrimonio', 'Festa di Laurea', 'Party Privato', 'Baby Shower' );
                foreach ( $placeholders as $placeholder ) :
            ?>
                <div class="gallery-item">
                    <div class="gallery-placeholder">
                        <span><?php echo $placeholder; ?></span>
                    </div>
                </div>
            <?php
                endforeach;
            endif;
            ?>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contatti" class="contact">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Contattaci</h2>
            <p class="section-subtitle">Richiedi un preventivo personalizzato</p>
        </div>
        <div class="contact-content">
            <div class="contact-info">
                <div class="contact-card">
                    <div class="contact-icon">📞</div>
                    <h3>Telefono</h3>
                    <p><?php echo get_theme_mod( '747disco_phone', '+39 06 123 4567' ); ?></p>
                </div>
                <div class="contact-card">
                    <div class="contact-icon">✉️</div>
                    <h3>Email</h3>
                    <p><?php echo get_theme_mod( '747disco_email', 'info@747disco.it' ); ?></p>
                </div>
                <div class="contact-card">
                    <div class="contact-icon">📍</div>
                    <h3>Indirizzo</h3>
                    <p><?php echo nl2br( get_theme_mod( '747disco_address', 'Via Example, 123<br>Ciampino (RM)' ) ); ?></p>
                </div>
            </div>
            <div class="contact-form-wrapper">
                <?php echo do_shortcode( '[contact-form-7 id="1" title="Contact form 1"]' ); ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
