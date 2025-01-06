<?php
$worksDatas = get_field('worksData', $homePageId);
if ($worksDatas):
?>
    <section class="works scroll-effect">
        <div class="container">                     
                <div class="lists">
                    <?php
                    foreach ($worksDatas as $worksData):
                    ?>
                        <div class="list scroll-effect">
                            <div class="image">
                                <?php if ($worksData['link']['url']): ?>
                                    <a href="<?php echo $worksData['link']['url'] ?>" target="_blank" aria-label="<?php echo $worksData['image']['alt'] ?>">
                                        <picture>
                                            <source srcset="<?php echo $worksData['image']['url']; ?>" type="image/webp">
                                            <img src="<?php echo $worksData['image']['url'] ?>" alt="<?php echo $worksData['image']['alt'] ?>" class="image ease-in-out">
                                        </picture>
                                    </a>
                                <?php endif; ?>
                            </div>                           
                        </div>
                    <?php endforeach;  ?>
                </div>           
        </div>
    </section>
<?php endif; ?>