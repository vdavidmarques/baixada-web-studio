<section class="hiring container">
    <div class="title scroll-effect"><?php echo get_field('hiring-title-sub', $homePageId) ?></div>
    <div class="lists">
        <meta itemprop="numberOfItems" content="3"> 
        <?php
        $lists = get_field('hiring_list', $homePageId);
        $count = 0;
        if ($lists) :
            foreach ($lists as $key=>$list) :
        ?>
        <div class="list scroll-effect list-<?php echo $count; ?>" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
            <meta itemprop="position" content="<?php echo $count; ?>">
        <div class="icon wave">
                <?php if($list['icon']):?>
                    <img src="<?php echo $list['icon']['url'] ?>" alt="Processo de contratação - Baixada Web Studio" itemprop="image">
                <?php endif; ?>
            </div>
            <div class="content">
                <?php echo $list['text'] ?>
            </div>
        </div>
        <?php
        $count++;
            endforeach;
        endif;
        ?>
    </div>
</section>