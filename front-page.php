<?php 
// Template Name: Home
?>

<?php get_header() ?>

<section class="banner">
    <div class="container">
        <?php echo get_the_content(); ?>
    </div>
</section>

    <!-- <section class="banner">
      <div class="container">
        <h2 class="banner__header">
          Architecture is in the details—and they matter
        </h2>
        <h3 class="banner__body">
          It takes many forms, as unique as the people that use and surround it
          and show the path that not been taken and new ways of doing things
        </h3>

        <picture>
          <source src="<?php echo get_template_directory_uri()?> ./images/banner.jpg" media="(min-width: 521px)" />
          <source src="<?php echo get_template_directory_uri()?> ./images/banner_sm.jpg" media="(max-width: 520px)" />
          <img src="<?php echo get_template_directory_uri()?> ./images/banner.jpg" alt="banner image" />
        </picture>
     
      </div>
    </section> -->

    <section class="about">
      <div class="container">
        <div class="block__header">
          <h2 class="block__title" data-number="01">About</h2>
        </div>

        <div class="about__wrapper grid">
          <div class="about__body">
            <p>
             <?php echo get_field('about_description') ?>
            </p>
            <ul class="about__info">
              <li>
                <p>Type</p>
                <p>
                  Building, Spaces, Infrastructure, Interior Design, Exterior
                  Design
                </p>
              </li>

              <li>
                <p>Recent Awards</p>
                <p>
                  Architecture of the Year - 2020 <br />
                  Buiding of the Year - 2020 <br />
                </p>
              </li>
            </ul>
          </div>

          <div class="about__stats">
            <div class="about__stats__block">
              <h3><?php echo get_field('projects') ?></h3>
              <p>Finished Project</p>
            </div>

            <div class="about__stats__block">
              <h3><?php echo get_field('experience') ?></h3>
              <p>Industry Experience</p>
            </div>

            <div class="about__stats__block">
              <h3>+45</h3>
              <p>Awards & Recognition</p>
            </div>

            <div class="about__stats__block">
              <h3>03</h3>
              <p>Locations</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="services">
      <div class="container">
        <div class="services__wrapper grid">
          <div class="services__outline">
            <span>02</span>
          </div>
          <div class="services__content">
            <div class="block__header">
              <h2 class="block__title" data-number="02">Services</h2>
            </div>

            <?php 
              $services = New WP_Query(array(
                'post_type' => 'services',
                'post_per_page' => 3,
              ));
            ?>

            <?php 
              if($services->have_posts()) : while($services->have_posts()) : $services->the_post()
            ?>

            <div class="service__block">
              <h3><?php the_title() ?></h3>
              <p>
              <?php echo wp_trim_words( get_the_excerpt(), 20 ) ?>
              </p>
            </div>

            <?php
            endwhile;
            else : 
              echo 'No more post to show';
            endif;
              wp_reset_postdata();
            ?>
  
            <!-- <div class="service__block">
              <h3>Exterior</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor
                dignissimos odit autem ullam? Saepe obcaecati qui perspiciatis
                molestiae veritatis.
              </p>
            </div>

            <div class="service__block">
              <h3>Spaces</h3>
              <p>
                Lorem ipsum dolor sit adipisicing elit. Dolor dignissimos odit
                autem ullam? Saepe obcaecati qui perspiciatis accusantium
                molestiae veritatis.
              </p>
            </div>

            <div class="service__block">
              <h3>Building</h3>
              <p>
                Lorem ipsum dolo elit. Dolor dignissimos odit autem ullam? Saepe
                obcaecati qui perspiciatis accusantium molestiae veritatis.
              </p>
            </div>

            <div class="service__block">
              <h3>Infrastracture</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor
                dignissimos odit autem ullam? Saepe obcaecati qui veritatis.
              </p>
            </div> -->
          </div>
        </div>
      </div>
    </section>

    <section class="projects">
      <div class="container">
        <div class="block__header">
          <h2 class="block__title" data-number="03">Projects</h2>
        </div>

        <?php 
              $project = New WP_Query(array(
                'post_type' => 'project',
                'post_per_page' => 3,
              ));
            ?>

            <?php 
              if($project->have_posts()) : while($project->have_posts()) : $project->the_post()
            ?>


        <div class="project__block">
          <h3 class="project__code"><?php the_title() ?></h3>
          <!-- <img
            src="./images/img_thumb.jpg"
            alt="thumb"
            class="project__thumbnail"
          /> -->
          <?php if(has_post_thumbnail()){
            the_post_thumbnail('thumbnail-project',
            array(
              'class' => 'project__thumbnail'
            )
          );
          } ?>
          <div class="project__content">
            <div>
              <h4 class="project__category">Interior</h4>
              <p class="project__desc">
              <?php echo wp_trim_words( get_the_excerpt(), 25 ) ?>
              </p>
            </div>
            <a href="#" class="project__link"
              ><img src="<?php echo get_template_directory_uri()?> ./images/arrow.svg" alt="Arrow Icon"
            /></a>
          </div>
        </div>

        <?php
            endwhile;
            else : 
              echo 'No more post to show';
            endif;
              wp_reset_postdata();
            ?>
          
        <!-- <div class="project__block">
          <h3 class="project__code">CL-210</h3>
          <img
            src="./images/img_thumb.jpg"
            alt="thumb"
            class="project__thumbnail"
          />
          <div class="project__content">
            <div>
              <h4 class="project__category">Interior</h4>
              <p class="project__desc">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat
                debitis ea consequatur animi pariatur corrupti ut ex deserunt
                repellat quaerat.
              </p>
            </div>
            <a href="#" class="project__link"
              ><img src="./images/arrow.svg" alt="Arrow Icon"
            /></a>
          </div>
        </div>

        <div class="project__block">
          <h3 class="project__code">CL-210</h3>
          <img
            src="<?php echo get_template_directory_uri()?>./images/img_thumb.jpg"
            alt="thumb"
            class="project__thumbnail"
          />
          <div class="project__content">
            <div>
              <h4 class="project__category">Interior</h4>
              <p class="project__desc">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat
                debitis ea consequatur animi pariatur corrupti ut ex deserunt
                repellat quaerat.
              </p>
            </div>
            <a href="#" class="project__link"
              ><img src="<?php echo get_template_directory_uri()?>./images/arrow.svg" alt="Arrow Icon"
            /></a>
          </div>
        </div>

        <div class="project__block">
          <h3 class="project__code">CL-210</h3>
          <img
            src="<?php echo get_template_directory_uri()?>./images/img_thumb.jpg"
            alt="thumb"
            class="project__thumbnail"
          />
          <div class="project__content">
            <div>
              <h4 class="project__category">Interior</h4>
              <p class="project__desc">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat
                debitis ea consequatur animi pariatur corrupti ut ex deserunt
                repellat quaerat.
              </p>
            </div>
            <a href="#" class="project__link"
              ><img src="<?php echo get_template_directory_uri()?>./images/arrow.svg" alt="Arrow Icon"
            /></a>
          </div>
        </div>

        <div class="project__block">
          <h3 class="project__code">CL-210</h3>
          <img
            src="./images/img_thumb.jpg"
            alt="thumb"
            class="project__thumbnail"
          />
          <div class="project__content">
            <div>
              <h4 class="project__category">Interior</h4>
              <p class="project__desc">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat
                debitis ea consequatur animi pariatur corrupti ut ex deserunt
                repellat quaerat.
              </p>
            </div>
            <a href="#" class="project__link"
              ><img src="./images/arrow.svg" alt="Arrow Icon"
            /></a>
          </div>
        </div>

        <div class="project__block">
          <h3 class="project__code">CL-210</h3>
          <img
            src="./images/img_thumb.jpg"
            alt="thumb"
            class="project__thumbnail"
          />
          <div class="project__content">
            <div>
              <h4 class="project__category">Interior</h4>
              <p class="project__desc">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat
                debitis ea consequatur animi pariatur corrupti ut ex deserunt
                repellat quaerat.
              </p>
            </div>
            <a href="#" class="project__link"
              ><img src="./images/arrow.svg" alt="Arrow Icon"
            /></a>
          </div>
        </div> -->
      </div>
    </section>

    <section class="video">
      <div class="video__wrapper">
        <video class="main__video" loop>
          <source
            src="<?php echo get_field('video_url')?>"
          />
        </video>

        <div class="overlay"></div>
        <button class="btn__play" id="playbtn">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="47"
            height="54"
            viewBox="0 0 47 54"
          >
            <path
              id="Polygon_1"
              data-name="Polygon 1"
              d="M22.664,7.547a5,5,0,0,1,8.671,0L49.7,39.509A5,5,0,0,1,45.361,47H8.639A5,5,0,0,1,4.3,39.509Z"
              transform="translate(47) rotate(90)"
              fill="#fff"
            />
          </svg>
        </button>

        <button class="btn__pause hide" id="pausebtn">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="42"
            height="48"
            viewBox="0 0 42 48"
          >
            <g
              id="Group_17"
              data-name="Group 17"
              transform="translate(-944 -2930)"
            >
              <rect
                id="Rectangle_7"
                data-name="Rectangle 7"
                width="15"
                height="48"
                rx="3"
                transform="translate(944 2930)"
                fill="#fff"
              />
              <rect
                id="Rectangle_8"
                data-name="Rectangle 8"
                width="15"
                height="48"
                rx="3"
                transform="translate(971 2930)"
                fill="#fff"
              />
            </g>
          </svg>
        </button>
      </div>
    </section>

    <section class="contact">
      <div class="container">
        <div class="block__header">
          <h2 class="block__title" data-number="04">Get in Touch</h2>
        </div>

        <div class="contact__wrapper grid">
          <div class="contact__info">
            <div class="contact__info__block">
              <h3>Manila</h3>
              <p>
                Courtyard Dr, Makati,<br />
                1223 Metro Manila<br />
                (024) 123 1321
              </p>
            </div>

            <div class="contact__info__block">
              <h3>Laguna</h3>
              <p>
                National Hwy, <br />
                San Pablo City, 4000 <br />
                (049) 123 1234
              </p>
            </div>
            <div class="contact__info__block">
              <h3>Batangas</h3>
              <p>
                Pastor Village,<br />
                Brgy Batangas, 4200<br />
                (043) 123 1234
              </p>
            </div>
          </div>

          <div class="contact__info__form">
            <p>
              Please fill in the form below to contact us. We try our best to
              respond to any questions in less than 24 hours
            </p>

            <form action="">
              <div class="form__group">
                <input type="text" required />
                <label for="">Fullname</label>
              </div>
              <div class="form__group">
                <input type="Email" required />
                <label for="">Email</label>
              </div>
              <div class="form__group">
                <input type="tel" required />
                <label for="">Phone</label>
              </div>
              <button>Submit</button>
            </form>
          </div>
        </div>
      </div>
    </section>

            <h1><?php the_field('company_person','option')?></h1>
            <h1><?php the_field('company_email','option')?></h1>
            <h1><?php the_field('company_phone','option')?></h1>

<?php get_footer() ?>