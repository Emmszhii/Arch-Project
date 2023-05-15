<?php
    $post = get_field('post_type');
    $img = get_field('services_img')['url'];
    
?>

<section class="page-services">
    <div class="container">
        <div class="page-services__wrapper grid">
            <div class="page-services__img lg--only">
                <img src="<?php  echo $img?>" alt="">
            </div>
            <?php
                $query = new WP_Query(array(
                    'post_type' => $post,
                    'post_per_page' => -1
                ));
                $count = 0;
            ?>
            <?php if($query->have_posts()) : while($query->have_posts()) : $query->the_post(); $count++; ?>
            <div class="page-services__accordion">
                
                <div class="accordion__block <?php if($count !== 1) post_class('show') ?> show">
                    <div class="accordion__header">
                        <h2><?php the_title() ?></h2>
                        <img src="<?php echo get_template_directory_uri() ?>./images/accordion-arrow.png" alt="">
                    </div>
                    <div class="accordion__body">
                        <?php the_content(); ?>
                    </div>
                </div>
                
                <!-- <div class="accordion__block">
                    <div class="accordion__header">
                        <h2>Exterior</h2>
                        <img src="./images/accordion-arrow.png" alt="">
                    </div>
                    <div class="accordion__body">
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit saepe ducimus dolorem eius necessitatibus, nisi adipisci deserunt, accusantium neque vero, omnis maxime consequuntur. Hic consectetur adipisci, officiis vel rerum optio!</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis accusantium quae sunt deserunt molestias, accusamus soluta sapiente pariatur quia consequuntur!</p>
                    </div>
                </div
                <div class="accordion__block">
                    <div class="accordion__header">
                        <h2>Spaces</h2>
                        <img src="./images/accordion-arrow.png" alt="">
                    </div>
                    <div class="accordion__body">
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit saepe ducimus dolorem eius necessitatibus, nisi adipisci deserunt, accusantium neque vero, omnis maxime consequuntur. Hic consectetur adipisci, officiis vel rerum optio!</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis accusantium quae sunt deserunt molestias, accusamus soluta sapiente pariatur quia consequuntur!</p>
                    </div>
                </div>
                <div class="accordion__block">
                    <div class="accordion__header">
                        <h2>Building</h2>
                        <img src="./images/accordion-arrow.png" alt="">
                    </div>
                    <div class="accordion__body">
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit saepe ducimus dolorem eius necessitatibus, nisi adipisci deserunt, accusantium neque vero, omnis maxime consequuntur. Hic consectetur adipisci, officiis vel rerum optio!</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis accusantium quae sunt deserunt molestias, accusamus soluta sapiente pariatur quia consequuntur!</p>
                    </div>
                </div>
                <div class="accordion__block">
                    <div class="accordion__header">
                        <h2>Infrastracture</h2>
                        <img src="./images/accordion-arrow.png" alt="">
                    </div>
                    <div class="accordion__body">
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit saepe ducimus dolorem eius necessitatibus, nisi adipisci deserunt, accusantium neque vero, omnis maxime consequuntur. Hic consectetur adipisci, officiis vel rerum optio!</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis accusantium quae sunt deserunt molestias, accusamus soluta sapiente pariatur quia consequuntur!</p>
                    </div>
                </div> -->
            <?php
                endwhile;
            else:
                echo `No Post`;
            endif;
                wp_reset_postdata();
            ?>
            </div>
        </div>
    </div>
</section>