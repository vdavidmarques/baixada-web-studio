<?php $id = $environment; ?>

<section class="hiring container">
    <div class="title scroll-effect"><?php echo get_field('hiring-title-sub', $id) ?></div>
    <div class="lists">
        <?php
        $lists = get_field('hiring_list', $id);
        $count = 0;
        if ($lists) :
            foreach ($lists as $key=>$list) :
        ?>
        <div class="list scroll-effect list-<?php echo $count; ?>">
            <div class="icon">
                <?php if($list['icon']):?>
                    <img src="<?php echo $list['icon']['url'] ?>" alt="Processo de contratação - Baixada Web Studio">
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
    <div class="text scroll-effect"><?php echo get_field('hiring-domain-hosting', $id) ?></div>
</section>