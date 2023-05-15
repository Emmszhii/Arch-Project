<?php 
$class = get_field('about_class');
$title = get_field('about_title');
$text1 = get_field('about_text1');
$text2 = get_field('about_text2');
?>

<section class="page-about <?php echo $class ?>">
    <div class="container">
        <div class="page-about__block ">
            <h2 class="about__block__header"><?php echo $title ?></h2>
            <p><?php echo $text1 ?></p>
            <p><?php echo $text2 ?></p>
        </div>
        <p class="outline__text"><?php echo $class ?></p>
    </div>
</section>