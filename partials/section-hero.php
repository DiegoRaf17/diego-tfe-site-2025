<?php 
  $classes = "page-section page-section-image-text page-section-hero";
  $classes .= " " . get_sub_field('width');
  $custom_classes = get_sub_field('custom_classes') ?? null;
  if ( !empty($custom_classes) ) {
    $classes .= ' ' . $custom_classes;
  }
  $section_id = get_sub_field('section_id') ?? null;
  $sections = get_field('sections');
  foreach ($sections as $section) {
    if ($section['acf_fc_layout'] = 'hero_block') {
      $hero = $section;
      break;
    };
  };
?>

<!-- partials/section-hero.php -->

<section class="<?php echo $classes;?>" <?php if ( !empty($section_id) ) echo 'id="' . $section_id . '"' ?>>
  <div class="content">
    <?php $args = array(
      'is_hero' => true,
      'row'     => $hero,
    ); ?>
    <?php get_template_part( 'partials/single-image-text', '', $args ); ?>
  </div>
</section>