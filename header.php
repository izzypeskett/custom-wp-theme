<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <?php wp_head()?>
</head>
<body <?php body_class()?>>

  <header>

  <?php the_field( 'page_title')?>
  
  </header>
  <?php wp_nav_menu (
    array(
      'theme_location' => 'top-menu',
      'menu_class' => 'navigation'
    )
  );?>


    

  
