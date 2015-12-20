<?php
/**
 * Template part for displaying portfolio content in page-portfolio.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Shweiki_Design
 */


$email   = get_field('email');
$title   = get_field('title');
$job_title   = get_field('job_title');
$profile_photo   = get_field('profile_photo');

?>

<div class="col-sm-6 member">

  <?php if ( $profile_photo ) : ?>
    <img class="block-center" src="<?php echo $profile_photo[url]; ?>" alt="<?php echo $profile_photo[alt]; ?>">
  <?php endif; ?>

  <h3><?php echo the_title(); ?></h3>

  <?php if ( $title ) : ?>
    <h5><?php echo $title; ?></h5>
  <?php endif; ?>

  <?php if ( $job_title ) : ?>
    <h5><?php echo $job_title; ?></h5>
  <?php endif; ?>

  <?php if ( $email ) : ?>
    <h5><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></h5>
  <?php endif; ?>

</div>
