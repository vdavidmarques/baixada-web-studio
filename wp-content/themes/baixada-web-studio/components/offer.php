<section class="offer" itemscope itemtype="https://schema.org/Service">
    <div class="waves wave-1a"></div>
    <div class="container">
        <div class="heading-title scroll-effect" id="o-que-fazemos">
            <?php echo get_field('offer-titles', $homePageId) ?>
        </div>
        <div class="packages">
            <div class="content scroll-effect" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
                <?php $image = get_field('offer-image', $homePageId); ?>
                <picture>
                    <source srcset="<?php echo $image['url']; ?>" type="image/webp">
                    <img
                        src="<?php echo $image['url']; ?>"
                        alt="O que fazemos na Baixada web studio"
                        class="image-content ease-in-out" itemprop="contentUrl" />
                    <meta itemprop="url" content="<?php echo $image['url']; ?>">
                </picture>
            </div>
            <div class="package swiper mySwiper scroll-effect" itemscope itemtype="https://schema.org/OfferCatalog">
                <div class="swiper-container">
                    <div class="swiper-button-next"></div>
                    <div class="options swiper-wrapper">
                        <?php
                        $packages = get_field('offer_list', $homePageId);
                        if ($packages) :
                            foreach ($packages as $package) :
                        ?>
                            <article class="option swiper-slide" itemscope itemtype="https://schema.org/Offer">
                                <img src="<?php echo get_template_directory_uri() . '/dist/icons/check.svg' ?>" alt="O que oferecemos">
                                <div class="text">
                                    <?php echo $package['text']; ?>
                                    <?php if ($package['add_link']): ?>
                                        <a
                                            href="<?php echo $package['link']['url']; ?>"
                                            class="button button-second"
                                            aria-label="<?php echo $package['link']['title']; ?>">
                                            <?php echo $package['link']['title']; ?>
                                        </a>
                                    <?php else: ?>
                                        <a
                                            target="_blank"
                                            href="https://api.whatsapp.com/send?phone=5513988264181&text=<?php echo $package['mensagem_whatsapp']; ?>"
                                            class="button button-second"
                                            aria-label="WhatsApp - Baixada Web Studio">
                                           <?php echo $package['label-button']; ?>
                                        </a>
                                    <?php endif; ?>
                                </div>
                            </article>
                        <?php
                            endforeach;
                        endif;
                        ?>
                    </div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="waves wave-1b"></div>
</section>