<?php
$postTitle = get_field('title');
$post = get_field('post_type');
?>

<div class="projects">
      <div class="container">
        <h1><?php $postTitle ?></h1>

        <div class="projects__grid">
          <div class="grid__left">

            <?php 
                $query = new WP_Query(
                    array(
                        'post_type'          => $post,
                        'posts_per_page' => 3,
                        'offset'        => 2,
                    )
                )
            ?>
            <?php if($query->have_posts()) : while($query->have_posts()) : $query->the_post() ?>

            <div class="project__card">
              <?php echo get_the_post_thumbnail(); ?>
              <a href="<?php echo get_permalink();?>"><?php the_title() ?></a>
            </div>
            <?php 
                endwhile;
            else:
                echo `No more Projects`;
            endif;
                wp_reset_postdata();
            ?>
<!-- 
            <div class="project__card">
              <img src="./images/footer-img.jpg" alt="" />
              <a href="#">Lorem ipsum dolor sit</a>
            </div>

            <div class="project__card">
              <img src="./images/footer-img.jpg" alt="" />
              <a href="#">Lorem ipsum dolor sit</a>
            </div>

            <div class="project__card">
              <img src="./images/footer-img.jpg" alt="" />
              <a href="#">Lorem ipsum dolor sit</a>
            </div> -->
          </div>

          <div class="grid__right">

            <?php 
                $query = new WP_Query(
                    array(
                        'post_type'          => $post,
                        'posts_per_page' => 2,
                    )
                )
            ?>
            
            <?php if($query->have_posts()) : while($query->have_posts()) : $query->the_post() ?>

            <div class="project__card">
            <?php echo get_the_post_thumbnail() ?>
              <a href="<?php echo get_permalink() ?>"><?php the_title() ?></a>
            </div>

            <?php 
                endwhile;
            else:
                echo `No more Projects`;
            endif;
                wp_reset_postdata();
            ?>

            <!-- <div class="project__card">
              <img src="./images/footer-img.jpg" alt="" />
              <a href="#">Lorem ipsum dolor sit</a>
            </div> -->

            <!-- <div class="project__card">
              <img src="./images/footer-img.jpg" alt="" />
              <a href="#">Lorem ipsum dolor sit</a>
            </div> -->
          </div>
        </div>

        <div class="loadmore">
          <div class="loadmore__wrap">
            <span>Show More</span>
          </div>
        </div>
      </div>
    </div>