<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Architecture Landing Page</title>
    <?php wp_head() ?>
    <!-- <link rel="stylesheet" href="./css/main.css" /> -->
  </head>

  <body>
    <header class="header">
      <div class="container">
        <div class="header__wrapper grid">
          <!-- <h1>Arch</h1> -->
          <!-- check if there's a custom logo then print logo -->
          <?php if ( function_exists( 'the_custom_logo' ) ) {
                the_custom_logo();
            }?>
          <?php ?>
          <nav>
            <!-- <ul>
              <li><a href="services.html">Services</a></li>
              <li><a href="about.html">About</a></li>
              <li><a href="project.html">Project</a></li>
              <li><a href="contact.html">Contact</a></li>
              <li><a href="login.html">Login</a></li>
            </ul> -->
          </nav>

          <div class="toggle__menu">
            <p>Menu</p>
          </div>
        </div>
      </div>
    </header>