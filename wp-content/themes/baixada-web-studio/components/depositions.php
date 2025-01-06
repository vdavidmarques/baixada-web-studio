<?php
$depositions = get_field('depositions', $homePageId);
if ($depositions):
?>
    <section class="works depositions scroll-effect">
        <div class="container">
            <div class="heading-title scroll-effect">
                <?php echo get_field('client-title', $homePageId); ?>
            </div>
            <div class="lists">
                <?php foreach ($depositions as $deposition): ?>
                    <div class="list scroll-effect">
                        <div class="image">
                            <picture>
                                <source srcset="<?php echo $deposition['thumb']['url']; ?>" type="image/webp">
                                <img src="<?php echo $deposition['thumb']['url'] ?>" alt="<?php echo $deposition['thumb']['alt'] ?>" class="image ease-in-out">
                            </picture>
                        </div>
                        <?php if ($deposition['content']): ?>
                            <p class="text"><?php echo $deposition['content']; ?></p>
                        <?php endif; ?>
                    </div>
                <?php endforeach;  ?>
            </div>
        </div>
    </section>
<?php endif; ?>