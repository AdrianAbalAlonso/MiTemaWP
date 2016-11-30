<!DOCTYPE html>
<html>
<body>   
<h1>Hola sxe</h1>
<?php get_header(); ?>
<?php get_footer(); ?>
 <h1>Menu</h1>
       <?php wp_nav_menu(
           array(
            'menu' => 'MiMenu'
        ) ); ?>
<?php  if(have_posts());{
while (have_posts()){
    the_post();
        the_content();
}
}
echo "LISTO";





?>
</body> 
</html>