<?php
    $title = get_field('qoute_title');
    $body = get_field('qoute_body');
    $url = get_field('qoute_url');
?>

<section class="get-qoute">
    <div class="container">
        <div class="get-qoute__wrapper">
            <div class="get-qoute__content">
                <h3 class="get-qoute__header"><?php echo $title ?></h3>
                <h4><?php the_field('company_person','option')?></h4>
                <p class="get-qoute__body">
                <?php echo $body ?>
                </p>
            </div>

            <a href="<?php echo $url ?>" class="btn btn--transparent">Get Quote</a>
            <p class="outline__text">Quote</p>
        </div>
    </div>
</section>