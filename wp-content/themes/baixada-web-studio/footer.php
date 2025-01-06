    </main>
    <footer role="contentinfo" itemscope itemtype="https://schema.org/WPFooter">
        <div class="container">
            <div class="about-me-footer" id="quem-somos" itemscope itemtype="https://schema.org/LocalBusiness">
                <div class="content">
                    <a href="/" class="logo" aria-label="Baixada Web Studio - Desenvolvimento de sites profissionais para diversos setores">
                        <img
                            src="<?php echo get_template_directory_uri() . '/dist/icons/baixada-web-studio-logo-2.png' ?>"
                            alt=""
                            itemprop="image"
                            class="image" />
                        <span class="title">BAIXADA<span>WEB STUDIO</span></span>
                    </a>
                    <p itemprop="description">Na Baixada Web Studio, somos especialistas em web design dedicados a transformar a presença online de microempreendedores em algo verdadeiramente impactante. Com anos de experiência, entendemos as necessidades específicas dos pequenos negócios e oferecemos soluções personalizadas que não apenas destacam sua marca, mas também impulsionam resultados tangíveis.</p>

                    <div class="infos" itemprop="address" itemscope itemtype="https://schema.org/PostalAddress">
                        <h3 class="subtitle">Encontre-nos</h3>
                        <p itemprop="streetAddress">Endereço: Rua Amadeu de Queiroz, Jockey Club - São Vicente/SP</p>
                        <meta itemprop="addressLocality" content="São Vicente">
                        <meta itemprop="addressRegion" content="SP">
                        <meta itemprop="addressCountry" content="BR">
                        <p itemprop="telephone">Telefone: (13) 98826-4181</p>

                    </div>
                    <div class="social-networks">
                        <?php
                        $args = array(
                            'name' => 'informacoes-gerais',
                            'post_type' => 'page',
                        );

                        $query = new WP_Query($args);
                        while ($query->have_posts()) :
                            $query->the_post();
                            $whatsapp = get_field('whatsapp');
                            $whatsappNumber = get_field('whatsappNumber');
                            $whatsappMessage = get_field('whatsappMessage');
                            $email = get_field('e-mail');
                            $instagram = get_field('instagram');
                            $github = get_field('github');
                            $behance = get_field('behance');
                            $linkedin = get_field('linkedin');
                        ?>
                            <a target="_blank" href="mailto:<?php echo $email ?>" class="scroll-effect" aria-label="E-mail - Baixada Web Studio">
                                <img src="<?php echo get_template_directory_uri() . '/dist/icons/email.svg' ?>" alt="E-mail - Baixada Web Studio">
                            </a>
                            <a target="_blank" href="<?php echo $linkedin ?>" class="scroll-effect" aria-label="Linkedin - Baixada Web Studio">
                                <img src="<?php echo get_template_directory_uri() . '/dist/icons/linkedin.svg' ?>" alt="Linkedin - Baixada Web Studio" itemprop="image">
                            </a>
                            <a target="_blank" href="<?php echo $instagram ?>" class="scroll-effect" aria-label="Instagram - Baixada Web Studio">
                                <img src="<?php echo get_template_directory_uri() . '/dist/icons/instagram.svg' ?>" alt="Instagram - Baixada Web Studio" itemprop="image">
                            </a>
                            <a target="_blank" href="<?php echo $github ?>" class="scroll-effect" aria-label="Github - Baixada Web Studio">
                                <img src="<?php echo get_template_directory_uri() . '/dist/icons/github.svg' ?>" alt="Github - Baixada Web Studio" itemprop="image">
                            </a>
                            <a target="_blank" href="<?php echo $behance ?>" class="scroll-effect" aria-label="Behance - Baixada Web Studio">
                                <img src="<?php echo get_template_directory_uri() . '/dist/icons/behance.svg' ?>" alt="Behance - Baixada Web Studio" itemprop="image">
                            </a>
                    </div>
                </div>
                <div class="form">
                    <?php include 'components/form.php'; ?>
                </div>
            </div>
            <div class="wpp-float">
                <a target="_blank" href="https://api.whatsapp.com/send?phone=<?php echo $whatsappNumber ?>&text=<?php echo $whatsappMessage ?>" aria-label="WhatsApp - Baixada Web Studio">
                    <img src="<?php echo get_template_directory_uri() . '/dist/icons/whatsapp.svg' ?>" alt="WhatsApp - Baixada Web Studio" itemprop="image">
                </a>
            </div>

            <button class="scroll-to-top-btn" id="scrollToTopBtn">
                Subir para o topo
            </button>
        <?php endwhile; ?>
        </div>
        <div class="after-footer-bg">
            <div class="container after-footer">
                <div id="copyright" itemprop="copyrightHolder">
                    &copy; <?php echo esc_html(date_i18n(__('Y', 'blankslate'))); ?> <?php echo esc_html(get_bloginfo('name')); ?>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-33XBREB3GC"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-33XBREB3GC');
    </script>
    <?php wp_footer(); ?>
    </body>

    </html>