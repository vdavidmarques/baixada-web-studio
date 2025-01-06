<?php
    $bgImage = get_field("bout-image", $homePageId);
    $title = get_field("bout-main-title", $homePageId);
?>
<section class="about">
    <article class="about-article" itemprop="mainEntity" itemscope itemtype="https://schema.org/Article">
        <div class="waves wave-1a"></div>
        <div class="container image-text relative grid grid-cols-12">
            <?php if($bgImage): ?>
                <div class="image scroll-effect" itemscope itemprop="image" itemtype="https://schema.org/ImageObject">
                    <div class="bg-image ease-in-out" itemprop="contentUrl"></div>
                </div>
            <?php endif;?>
            <div class="content">
                <div class="scroll-effect">
                    <?php echo get_field('bout-description', $homePageId) ?> 
                </div>

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
            ?>
                    <a target="_blank" href="https://api.whatsapp.com/send?phone=<?php echo $whatsappNumber ?>&text=<?php echo $whatsappMessage ?>" class="button button-default scroll-effect" aria-label="Atraia e Conquiste Mais Clientes">
                        Atraia e Conquiste Mais Clientes
                    </a>
                <?php endwhile; ?>
            </div>
        </div>
        <div class="waves wave-1b"></div>
    </article>
</section>