<!DOCTYPE html>
<html lang="pt-br">

<head>

  <?php require_once('./wp-load.php'); ?>

  <!-- Metadados básicos -->
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Biolabs - maior hubde inovação em saúde do norte e nordeste!</title>

  <!-- Link CSS local -->
  <link rel="stylesheet" href="/SRC/assets/css/style.css" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="/SRC/assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="/SRC/assets/css/owl.theme.default.min.css">

  <!-- Link do Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css2?family=Sora:wght@100..800&family=Space+Grotesk:wght@300..700&display=swap"
    rel="stylesheet" />

  <!-- Owl Carousel -->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <!-- Cabeçalho com logo e menu -->
  <header>

    <section class="menu-area">
      <div class="container">
       <div class="row">
        <section class="logo col-3">Logo</section>
        <nav class="menu col-9 text-right"><?php wp_nav_menu( array( 'theme_location'
         => 'my_main_menu')); ?></nav>
       </div> 
      </div>
    </section>













    <!-- <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
      <div class="container">
        <a class="navbar-brand" href="header.php">
          <img src="SRC/assets/img/logo-branco.png" alt="Logo ICC Biolabs" class="img-fluid" />
        </a> -->
      </div>
    </nav>
  </header>